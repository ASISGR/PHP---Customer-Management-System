<?php
include_once 'class.db.php';
// Here we managing all the information and actions with the Users.
class User extends Dbh{

    private $username;
    private $password;
    private $email;
    private $firstName;
    private $lastName;
    private $phoneNumber;
    private $address;

    public function GetUsers(){
        $sql = "SELECT * FROM administrator";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $users = $stmt->fetchAll();

        return $users; 
    } 

    public function CreateUser($uname, $pass, $mail, $fName, $lName, $pNubmer, $addr){
        $this->username = $uname;
        $this->password = $pass;
        $this->email = $mail;
        $this->firstName = $fName;
        $this->lastName = $lName;
        $this->phoneNumber = $pNubmer;
        $this->address = $addr;



        if($this->username == NULL || $this->email == NULL || $this->password == NULL || $this->password == NULL || $this->firstName == NULL ||  $this->lastName == NULL || $this->phoneNumber == NULL || $this->address == NULL)
        {
            header("Location: /pages/addadmin.php?ErrorEmptyInputs");
            $this->conn = NULL;
        }

        foreach($this->GetUsers() as $GetUser) //checking foreach for multiple registration rows.
        {
            
            if(strtolower($GetUser['username']) == strtolower($uname)) // Username check
            {
                header("Location: /pages/addadmin.php?UsernameExists");
                $this->conn = NULL;
            }

            if(strtolower($GetUser['email']) == strtolower($mail)) // email check
            {
                header("Location: /pages/addadmin.php?EmailExists");
                $this->conn = NULL;
            }
            if(strtolower($GetUser['phone']) == strtolower($pNubmer)) // phone check
            {
                header("Location: /pages/addadmin.php?PhoneExists");
                $this->conn = NULL;
            }
        }
        $sql = "INSERT INTO administrator (username, password, email, firstname, lastname, phone, address) VALUES (?,?,?,?,?,?,?)";

        $this->conn->prepare($sql)->execute([$this->username, md5($this->password), $this->email, $this->firstName, $this->lastName, $this->phoneNumber, $this->address]);
        $this->conn = NULL;
        header("Location: /pages/addadmin.php?passwordCreated");
    }

    public function login($uname, $passwd){
        $passwd =  md5($passwd);
        if($uname == NULL || $passwd == NULL)
        {
            header("Location: /?ErrorEmptyInputs");
            $this->conn = NULL;
        }

        $sql = "SELECT username,password FROM  administrator WHERE  username = ? AND password = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$uname, $passwd]);
        $count = $stmt->rowCount();
      //  echo $count;
        if($count > 0){
            session_start();
            $_SESSION['username'] = $uname; 
            $_SESSION['password'] = $passwd;
            $_SESSION['loggin'] = TRUE;
            header("Location: /pages/adminprofile.php?logged");
        }else{
            header("Location: /?loginfailed");
            $this->conn = NULL;
        }
    }
    public function GetFName(){
        $uname =  $_SESSION['username'];
        $passwd =  $_SESSION['password'];
        
        $sql = "SELECT firstname FROM  administrator WHERE  username = ? AND password = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$uname, $passwd]);
        $result = $stmt->fetch();
        return $result['firstname'];

    }
    public function GetLName(){
        $uname =  $_SESSION['username'];
        $passwd =  $_SESSION['password'];
        
        $sql = "SELECT lastname FROM  administrator WHERE  username = ? AND password = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$uname, $passwd]);
        $result = $stmt->fetch();
        return $result['lastname'];

    }
    public function GetMail(){
        $uname =  $_SESSION['username'];
        $passwd =  $_SESSION['password'];
        
        $sql = "SELECT email FROM  administrator WHERE  username = ? AND password = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$uname, $passwd]);
        $result = $stmt->fetch();
        return $result['email'];

    }
    public function GetPhone(){
        $uname =  $_SESSION['username'];
        $passwd =  $_SESSION['password'];
        
        $sql = "SELECT phone FROM  administrator WHERE  username = ? AND password = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$uname, $passwd]);
        $result = $stmt->fetch();
        return $result['phone'];

    }
    public function GetAddress(){
        $uname =  $_SESSION['username'];
        $passwd =  $_SESSION['password'];
        
        $sql = "SELECT address FROM  administrator WHERE  username = ? AND password = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$uname, $passwd]);
        $result = $stmt->fetch();
        return $result['address'];

    }
}

?>