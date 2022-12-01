<?php
    include_once '../classes/class.customers.php';

    if(isset($_GET['Btn-Delete']))
    {
        $obj = new Customer();
        $obj->DeleteCustomer();
    }

?>