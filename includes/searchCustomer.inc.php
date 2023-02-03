<?php
    include_once '../classes/class.customersCntrl.php';

if(isset($_GET['submit'])){

    $customer = new CustomerCntrl();
    $customer->SearchCustomer();
    header('location: /pages/searchedcustomers.php?input='.$_GET['input'].'');
}

?>