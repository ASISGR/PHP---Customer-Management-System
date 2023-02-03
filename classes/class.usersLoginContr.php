<?php 
include_once 'class.users.php';

class LoginContrl extends User{
    
    public function __construct($username, $password){
        $this->username = $username;
        $this->password = $password;
    }

    public function login(){

        if($this->EmptyInputs())
        {
            header("Location: /?ErrorEmptyInputs");
            exit();
        }

        if($this->LoginDataHandling())
        {
            session_start();
            $_SESSION['username'] = $this->fetchAllData()[0]['username'];
            $_SESSION['firstname'] = $this->fetchAllData()[0]['firstname'];
            $_SESSION['lastname'] = $this->fetchAllData()[0]['lastname'];
            $_SESSION['email'] = $this->fetchAllData()[0]['email'];
            $_SESSION['phone'] = $this->fetchAllData()[0]['phone'];
            $_SESSION['address'] = $this->fetchAllData()[0]['address'];
            $_SESSION['loggin'] = TRUE;
            header("Location: /pages/adminprofile.php?logged");
        }else{
            header("Location: /?loginfailed");
            exit();
        }
    }

    private function EmptyInputs(){
        if(empty($this->username) || empty($this->password)){
            return true;
        }

        return false;
    }
}
?>