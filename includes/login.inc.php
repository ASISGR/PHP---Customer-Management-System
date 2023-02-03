<?php
include_once '../classes/class.usersLoginContr.php';

if(isset($_POST['btn-Login'])){
        $uname = $_POST['username'];
        $passwd = $_POST['password'];
        $login = new LoginContrl($uname, $passwd);
        $login->login();
    }
?>