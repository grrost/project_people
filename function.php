<?php
class connect{
    const HOST = "127.0.0.1";
	const DB_USER = "root";
	const DB_PASSWORD = "";
    const DB = "artembd";
    public $link;
    
    public function __construct(){
        //..Конструктор создает подключение к базе..//
        $this->link = new mysqli( $this::HOST, $this::DB_USER, $this::DB_PASSWORD, $this::DB );
    }

    public function disconect(){
        if (isset($this->link)) $this->link->close();
    }
    
    public function select($param){
        
        if ($param == ''){
            echo 'Function: Параметры не получены';
            return 'false';
        }  

        $query = $this->link->query($param);

        if ( !$query ){
            echo 'Function: Запрос не выполнился: ';
            echo mysqli_error($this->link);
            return 'false';
        } 

        $fiels = mysqli_fetch_fields($query);

        foreach ($fiels as $value){
            $arr[] = $value->name;
        }

        while ($row = mysqli_fetch_array($query)){
            $arr2 = array();
            for ($i=0; $i<count($arr); $i++){
                $arr2[$arr[$i]] = $row[$i];
            }
            $arrReturn[] = $arr2;
        }

        //echo 'Function: Запрос успешно выполнен';
        if(isset($arrReturn)) return $arrReturn;

    }

    public function insert($param){
        $query = $this->link->query($param);
        if ($query){
            return 'true';
        }else{
            return 'false';
        }
    }

    public function delete($param){
        $query = $this->link->query($param);
        if ($query){
            return 'true';
        }else{
            return 'false';
        }
    }

    public function update($param){
        $query = $this->link->query($param);
        if ($query){
            return 'true';
        }else{
            return 'false';
        }
    }

}
class PEOPLE extends connect{

    private $arr = array();

    public function sem_status($param){
        $this->link->query($param);
    }

    public function checkPeopleInGruppa($god, $peopleId, $pedagogId, $gruppaId){
        $rezult = $this->select("SELECT `objed_id` FROM `".$god."_gruppa` WHERE `".$god."_gruppa`.gruppa_id = ".$gruppaId." ");
        $objed_id = $rezult[0]['objed_id'];
        return $this->link->query("SELECT * FROM `".$god."_uchenik` INNER JOIN `".$god."_gruppa` ON (`".$god."_uchenik`.gruppa_id = `".$god."_gruppa`.gruppa_id) WHERE `people_id` = ".$peopleId." AND `objed_id` = ".$objed_id." ");
        //print_r ($rrrr);
    }

}

class GRUPPA extends PEOPLE{
    public function __construct($gruppaId){
        $this->link2->query("SELECT");
    } 
}

class PAGE extends CONNECT {
    public $userName;
    public $userAcess;
    public $userId;

    public function show($body){

        if (isset($_POST['log'])) {
            $login = md5($_POST['login']);
            $pass = md5($_POST['pass']);
            if($this->autorize($login, $pass)){
                setcookie("hash", $this->getHash($login, $pass), time()+7200);
                header("Refresh: 0");
                return;
            }else{
                $this->showFormWrong();
                return;
            }
        }

        if (isset($_COOKIE['hash']) && ($_COOKIE['hash'] != '') ){
            $hash = $_COOKIE['hash'];
            if ($user = $this->autorizeHash($hash)){
                $this->userName = $user['userName'];
                $this->userAcess = $user['userAcess'];
                $this->userId = $user['userId'];

                if ( $this->userAcess == 1 ){
                    $this->header();
                    $this->body($body);
                    $this->footer();
                    $this->disconect();
                }else{
                    $arre = explode('.', $body);
                    $this->header();
                    $this->body($arre[0].'_user.php');
                    $this->footer();
                    $this->disconect();
                }


            }else{
				setcookie("hash", "", time()-7200);
				$this->showForm();
			}
        }else{
            $this->showForm();
        }      

    }

    public function header(){
        include_once 'header.php';
    }

    public function body($body){
        include_once 'body1.php';
        include_once $body;
        include_once 'body2.php';
    }

    public function footer(){
        include_once 'footer.php';
    }

    function autorize($login, $password){
        $rez = $this->link->query("SELECT * FROM `pedagog_login` ");
        $check = 0;
        foreach ($rez as $val){
            if ( (md5($login) == $val['pedagog_login']) && (md5($password) == $val['pedagog_password']) ){
                $check++;
                $hash = $this->generateCode(15);
                session_start();
                $_SESSION['login'] = $login;
                $date_in = date("y-m-d H:i:s"); 
                $this->link->query("UPDATE `pedagog_login` SET `hash` = '".$hash."', `session` = '".$login."', `date_in` = '".$date_in."'  WHERE `pedagog_id` = '".$val['pedagog_id']."' ");
            }else{
    
            }
        }
        if ($check != 0){
            return true;
        }else{
            return false;
        }
    }

    function autorizeHash($hash){
        $rez = $this->link->query("SELECT * FROM `pedagog_login` INNER JOIN `pedagog` ON (`pedagog`.pedagog_id = `pedagog_login`.pedagog_id) ");
        $check = 0;
        session_start();
        if (isset($_SESSION['login'])){
            foreach ($rez as $val){
                if ( $hash == $val['hash'] && $_SESSION['login'] == $val['session'] ){
                    $check++;
                    $arr = ["userId" => $val['pedagog_id'], "userName" => $val['pedagog_surname'].' '.$val['pedagog_name'].' '.$val['pedagog_otchestvo'], "userAcess" => $val['pedagog_acess']];
                }else{
        
                }
            }
        }else{
            foreach ($rez as $val){
                if ( $hash == $val['hash'] ){
                    $check++;
                    $_SESSION['login'] = $val['session'];
                    $arr = ["userId" => $val['pedagog_id'], "userName" => $val['pedagog_surname'].' '.$val['pedagog_name'].' '.$val['pedagog_otchestvo'], "userAcess" => $val['pedagog_acess']];
                }else{
        
                }
            }
        }

        if ($check != 0){
            return $arr;
        }else{
            return false;
        }
    }

    function generateCode($length) {

        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPRQSTUVWXYZ0123456789";
    
        $code = "";
    
        $clen = strlen($chars) - 1;  
        while (strlen($code) < $length) {
    
                $code .= $chars[mt_rand(0,$clen)];  
        }
    
        return $code;
    
    }

    function getHash($login, $pass){
        $rez = $this->link->query("SELECT * FROM `pedagog_login` ");
        foreach ($rez as $val){
            if ( (md5($login) == $val['pedagog_login']) && (md5($pass) == $val['pedagog_password']) ){
                $hash = $val['hash'];
            }else{
    
            }
        }

        return $hash;

    }

    function showUserName(){
        echo $this->userName;
    }

    function showForm() {
        if($_SERVER['REQUEST_URI'] != '/test/') {
            header("Location:http:/test/");
        }
        echo "<link rel='stylesheet' href='/test/css/bootstrap/bootstrap.min.css'/>";
        echo "<link rel='stylesheet' href='/test/css/formAutorize.css'/>";
        echo "<title>Авторизация</title>";
        echo '<link rel="shortcut icon" href="/test/25359.png" type="image/png">';
        include $_SERVER['DOCUMENT_ROOT'].'/test/formAutorize.php';
    }

    function showFormWrong() {
        echo "<link rel='stylesheet' href='/test/css/bootstrap/bootstrap.min.css'/>";
        echo "<link rel='stylesheet' href='/test/css/formAutorize.css'/>";
        echo "<title>Авторизация</title>";
        echo '<link rel="shortcut icon" href="/test/25359.png" type="image/png">';
        include $_SERVER['DOCUMENT_ROOT'].'/test/formAutorizeWrong.php';
    }
}

class CONTEINER extends CONNECT {

    public function page(){
        echo '<div id="page-content-wrapper">';
    }

    public function container($item){
        if (isset ($item)){
            echo '<div class="container-'.$item.'">';
        }else{
            echo '<div class="container">';
        }
    }

    public function row($item){
        if (isset ($item)){
            echo '<div class="row '.$item.'">';
        }else{
            echo '<div class="row">';
        }
    }

    public function col($item){
        if (isset ($item)){
            echo '<div class="col-lg-'.$item.'">';
        }else{
            echo '<div class="col">';
        }
    }

    public function show(){
        include_once 'header.php';
        $this->page();
        $this->container("fluid");
        $this->row("");
        $this->col("10");
        $this->col("2");
        include_once 'body2.php';
        include_once 'footer.php';
        $this->disconect();
    }

}
?>