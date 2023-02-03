<?php 
include_once '../classes/class.db.php';
include_once '../classes/class.customersCntrl.php';

if(isset($_POST['btn_Cregister']))
{
    $fName = $_POST['fistName'];
    $lName = $_POST['lastName'];
    $mail = $_POST['email'];
    $phone = $_POST['Phone'];
    $adrress = $_POST['adrressInput'];
    $comment = $_POST['commentInput'];
    $customerCreate = new CustomerCntrl();
    $customerCreate->CreateCustomer($fName, $lName, $mail, $adrress, $phone, $comment);
}
?>