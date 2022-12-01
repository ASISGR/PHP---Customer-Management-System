<?php
    include_once '../classes/class.customers.php';

if(isset($_GET['Btn-FindSpecificCust'])){
    $input = $_GET['input'];
    $customer = new Customer();
    $customer->GetSpecificCustomer($input);
}

?>