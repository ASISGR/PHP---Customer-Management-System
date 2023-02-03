<?php
include_once 'class.db.php';
// Here we managing all the information and actions with the Users.
class User extends Dbh{
    protected $username;
    protected $password;
    protected $email;
    protected $firstName;
    protected $lastName;
    protected $phoneNumber;
    protected $address;

    public function fetchAllData(){

        $stmt = $this->conn()->prepare('SELECT * FROM administrator WHERE username = ?');
        $stmt->execute([$this->username]);

        return $stmt->fetchAll(); 
    }

    protected function checkUsername(){

        $stmt = $this->conn()->prepare('SELECT username FROM administrator WHERE username = ?');
        $stmt->execute([$this->username]);

        if($stmt->rowCount() > 0){
            return true;
        }

        return false;
    }

    protected function checkEmail(){

        $stmt = $this->conn()->prepare('SELECT email FROM administrator WHERE email = ?');
        $stmt->execute([$this->email]);
        
        if($stmt->rowCount() > 0){
            return true;
        }

        return false;
    }

    protected function checkPhone(){

        $stmt = $this->conn()->prepare('SELECT phone FROM administrator WHERE phone = ?');
        $stmt->execute([$this->phoneNumber]);
        
        if($stmt->rowCount() > 0){
            return true;
        }

        return false;
    }
    
    protected function SaveAdmin(){

        $stmt = $this->conn()->prepare('INSERT INTO administrator (username, password, email, firstname, lastname, phone, address) VALUES (?,?,?,?,?,?,?)');
        $stmt->execute([$this->username, md5($this->password), $this->email, $this->firstName, $this->lastName, $this->phoneNumber, $this->address]);
        $stmt = NULL;
    }

    public function LoginDataHandling(){
        $stmt = $this->conn()->prepare('SELECT * FROM administrator WHERE username = ? AND password = ?');
        $stmt->execute([$this->username, md5($this->password)]);

        if($stmt->rowCount()){
            return true;
        }

        return false;        
    }

}
?>