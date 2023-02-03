<?php
include_once 'class.users.php';

class UserContrl extends User{
    function __construct($uname, $pass, $email, $fName, $lName, $pNubmer, $addr){
        $this->username = $uname;
        $this->password = $pass;
        $this->email = $email;
        $this->firstName = $fName;
        $this->lastName = $lName;
        $this->phoneNumber = $pNubmer;
        $this->address = $addr;
    }

    public function createAdmin(){

        if($this->usernameTaken()){
            header("Location: /pages/addadmin.php?UsernameExists");
            exit();
        }

        if($this->emailTaken()){
            header("Location: /pages/addadmin.php?EmailExists");
            exit();
        }

        if($this->phoneTaken()){
            header("Location: /pages/addadmin.php?PhoneExists");
            exit();
        }

        if($this->HasEmptyInputs()){
           header("Location: /pages/addadmin.php?ErrorEmptyInputs");
           exit();
        }

        $this->SaveAdmin();
    }

    private function usernameTaken(){
        if($this->checkUsername())
        {
            return true;
        }

        return false;
    }

    private function emailTaken(){
        if($this->checkEmail())
        {
            return true;
        }

        return false;
    }

    private function phoneTaken(){
        if($this->checkPhone())
        {
            return true;
        }

        return false;
    }

    private function HasEmptyInputs(){
        if(empty($this->username) || empty($this->email) || empty($this->password) || empty($this->password) || empty($this->firstName) || empty($this->lastName) || empty($this->phoneNumber) || empty($this->address))
        {
            return true;
        }

        return false;
    }

}

?>