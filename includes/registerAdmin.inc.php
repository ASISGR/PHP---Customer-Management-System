<?php 
include_once '../classes/class.db.php';
include_once '../classes/class.usersContr.php';

if(isset($_POST['btn_Aregister']))
{
    $un = $_POST['username'];
    $pass = $_POST['password'];
    $mail = $_POST['email'];
    $fName = $_POST['fistName'];
    $lName = $_POST['lastName'];
    $phone = $_POST['Phone'];
    $adrress = $_POST['adrressInput'];
    $createAdmin = new UserContrl($un, $pass, $mail, $fName, $lName, $phone, $adrress);
    $createAdmin->createAdmin();
    header("Location: /pages/addadmin.php?passwordCreated");
}
?>