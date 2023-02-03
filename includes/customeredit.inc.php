<?php
    include_once '../classes/class.customersCntrl.php';

if(isset($_POST['btn-save'])){
    $fName = $_POST['newFistName'];
    $lName = $_POST['newLastName'];
    $email = $_POST['email'];
    $address = $_POST['newAddress'];
    $phone = $_POST['newPhoneNumber'];
    $comment = $_POST['newComment'];
    $status = $_POST['Status'];
    $cid = $_POST['id'];
    $customer = new CustomerCntrl();
    $customer->UpdateCustomer($cid, $fName, $lName, $email, $address, $phone, $comment, $status);
    header('location: /pages/customerprofile.php?id='. $cid .'');
}

?>