<?php
include_once '../classes/class.users.php';

if(isset($_POST['btn-Login'])){
        $uname = $_POST['username'];
        $passwd = $_POST['password'];
        $login = new User();
        $login->login($uname, $passwd);
    }
?>