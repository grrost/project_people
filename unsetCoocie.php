<?php
setcookie("hash", "", time()-7200);
session_destroy();
?>