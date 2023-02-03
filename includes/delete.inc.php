<?php
    include_once '../classes/class.customersCntrl.php';

    if(isset($_GET['Btn-Delete']))
    {
        $Customer = new CustomerCntrl();
        $Customer->CustomerDelete();
        header('location: /pages/customerslist.php');
    }

?>