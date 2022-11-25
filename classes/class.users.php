<?php
include_once 'class.db.php';

class User extends Dbh{

    private $username;
    private $password;
    private $email;

   public function CreateUser($uname, $pass, $mail){
        $this->username = $uname;
        $this->password = $pass;
        $this->email = $mail;

        if($this->username == NULL || $this->email == NULL || $this->password == NULL)
        {
            header("Location: ../?ErrorEmptyInputs");
            $this->conn = NULL;
        }
        
        $sql = "INSERT INTO users (username, password, email) VALUES (?,?,?)";

        $this->conn->prepare($sql)->execute([$this->username, $this->password, $this->email]);

        $this->conn = NULL;
        header("Location: ../?passwordCreated");
    }
}

?>