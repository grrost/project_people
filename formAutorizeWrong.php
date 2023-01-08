<div class="container">
    <div class="row">
        <div class="col-md-3">
        </div>

        <div class="col-md-6">
            <form class="form-horizontal shadow" action = "<?php $_SERVER["SCRIPT_NAME"]; ?>" method="post">
                <span class="heading">АВТОРИЗАЦИЯ<br><h6>неверный логин или пароль</h6></span>
                <div class="form-group">
                    <input type="text" class="form-control" id="inputEmail" name = "login" placeholder="Имя пользователя">
                    <i class="fa fa-user"></i>
                </div>
                <div class="form-group help">
                    <input type="password" class="form-control" name = "pass" placeholder="Пароль">
                    <i class="fa fa-lock"></i>
                    <a href="#" class="fa fa-question-circle"></a>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default" name = "log" value = "Войти">ВОЙТИ</button>
                </div>
            </form>
        </div>

    </div>
</div>