<?php
include_once 'class.customers.php';

class CustomerCntrl extends Customer{
    //here we are setting the data of the new customer.
    public function CreateCustomer($fName, $lName, $mail, $addr, $pNubmer, $comment){
        $this->firstName = $fName;
        $this->lastName = $lName;
        $this->email = $mail;
        $this->address = $addr;
        $this->phone = $pNubmer;
        $this->comment = $comment;
        $this->status = 1; // Active status is true by default.

        if($this->IsEmptyInput())
        {
            header("Location: /pages/addcustomer.php?ErrorEmptyInputs");
            exit();
        }

        if($this->emailTaken())
        {
            header("Location: /pages/addadmin.php?EmailExists");
            exit();
        }

        if($this->phoneTaken())
        {
            header("Location: /pages/addcustomer.php?PhoneExists");
            exit();
        }

        $this->save();
        header("Location: /pages/addcustomer.php?customerCreated");
    }

    //seding the list customers data to view
    public function CustomerHandelingList(){
        return $this->fetchAllCustomers();
    }
    //seding the signle customer data to view
    public function CustomerData(){
        return $this->fetchCustomerData();
    }

    //seting the variables to find the customer
    public function SearchCustomer(){
        $this->phone = $_GET['input'];
        $this->lastname = $_GET['input'];
        
       if(!$this->phoneTaken() && !$this->lastnameTaken())
        {
            header('location: /pages/searchcustomer.php?CustomerNotExist');
            exit();
        }

        return $this->FindCustSearch();
    }
    //here we set the variables to update the customer
    public function UpdateCustomer($cid, $fName, $lName, $email, $address, $phone, $comment, $status){
        $this->id = $cid;
        $this->firstName = $fName;
        $this->lastName = $lName;
        $this->email = $email;
        $this->address = $address;
        $this->phone = $phone;
        $this->comment = $comment;
        $this->status = $status;

        $this->SetUpdatedData();
    }
    //Here we set the id to delete the customer
    public function CustomerDelete(){
        $this->id = $_GET['id'];

        $this->RemoveCustomer();
    }
    //If any of variables is empty then returns true value
    private function IsEmptyInput(){
        if(empty($this->firstName) || empty($this->lastName) || empty($this->email) || empty($this->address) || empty($this->phone) ||  empty($this->comment)){
            return true;
        }

        return false;
    }
    // if FindEmail function returned true value means that Phone exists in Database

    private function emailTaken(){
        if($this->FindEmail()){
            return true;
        }

        return false;
    }
    // if FindPhone function returned true value means that Phone exists in Database
    private function phoneTaken(){
        if($this->FindPhone()){
            return true;
        }

        return false;
    }
    // if FindLastName function returned true value means that Lastname exists in Database
    private function lastnameTaken(){
        if($this->FindLastname()){
            return true;
        }
        return false;
     }
}
?>