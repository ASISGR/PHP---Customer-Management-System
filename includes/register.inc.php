<?php 
include_once '../classes/class.db.php';
include_once '../classes/class.users.php';

if(isset($_POST['btn_register']))
{
    $un = $_POST['username'];
    $pass = $_POST['password'];
    $mail = $_POST['email'];
    $NewAcc = new User();
    $NewAcc->CreateUser($un, $pass, $mail);
}
?>