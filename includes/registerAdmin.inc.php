<?php 
include_once '../classes/class.db.php';
include_once '../classes/class.users.php';

if(isset($_POST['btn_Aregister']))
{
    $un = $_POST['username'];
    $pass = $_POST['password'];
    $mail = $_POST['email'];
    $fName = $_POST['fistName'];
    $lName = $_POST['lastName'];
    $phone = $_POST['Phone'];
    $adrress = $_POST['adrressInput'];
    $NewAcc = new User();
    $NewAcc->CreateUser($un, $pass, $mail, $fName, $lName, $phone, $adrress);
}
?>