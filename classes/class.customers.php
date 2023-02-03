<?php
include_once 'class.db.php';

class Customer extends Dbh{
    protected $id;
    protected $firstName;
    protected $lastName;
    protected $email;
    protected $address;
    protected $phone;
    protected $comment;
    protected $status;


    // Saving new customer
    public function save(){
        $stmt = $this->conn()->prepare('INSERT INTO customers (firstname, lastname, email, address, phone, comments, active) VALUES (?,?,?,?,?,?,?)');
        $stmt->execute([$this->firstName, $this->lastName, $this->email, $this->address, $this->phone, $this->comment,  $this->status]);
        $stmt = NULL;
    }

    //Checing if email exists
    protected function FindEmail(){
        $stmt = $this->conn()->prepare('SELECT email FROM customers WHERE email = ?');
        $stmt->execute([$this->email]);

        if($stmt->rowCount() > 0){
            return true;
        }

        return false;
    }
    //Checing if phone exists
    protected function FindPhone(){
        $stmt = $this->conn()->prepare('SELECT phone FROM customers WHERE phone = ?');
        $stmt->execute([$this->phone]);

        if($stmt->rowCount() > 0){
            return true;
        }

        return false;
    }
    //Checing if lastname exists
    protected function FindLastname(){
        $stmt = $this->conn()->prepare('SELECT lastname FROM customers WHERE lastname = ?');
        $stmt->execute([$this->lastname]);

        if($stmt->rowCount() > 0){
            return true;
        }

        return false;
    }

    //Updating the data of the customer
    protected function SetUpdatedData(){

        $stmt = $this->conn()->prepare('UPDATE customers SET firstname = ? , lastname = ?, address = ?, email = ?, phone = ?, comments = ?, active = ? WHERE id = ?');
        $stmt->execute([$this->firstName, $this->lastName, $this->address, $this->email, $this->phone ,$this->comment, $this->status, $this->id]);
        $stmt = NULL;
    }

    //Searching the customer by phone or lastname and returning all his data
    protected function FindCustSearch(){
     
        $stmt = $this->conn()->prepare('SELECT * FROM customers WHERE phone LIKE ? OR lastname LIKE ?');
        $stmt->execute([$this->phone, "%$this->lastname%"]);

        return $stmt->fetchAll();
    }

    //fetching all the customers and returning their data
    protected function fetchAllCustomers(){
        $stmt = $this->conn()->prepare('SELECT * FROM customers WHERE active = ?');
        $stmt->execute([$_GET['active']]);

        return $stmt->fetchAll();

    }
    //Fetching customer data by id
    protected function fetchCustomerData(){

        $stmt = $this->conn()->prepare('SELECT * FROM customers WHERE id = ?');
        $stmt->execute([$_GET['id']]);
        
        return $stmt->fetchAll();
    }
    //Removing the customer from database by id
    protected function RemoveCustomer(){
        $stmt = $this->conn()->prepare('DELETE FROM customers WHERE id = ?');
        $stmt->execute([$this->id]);
    }
}
?>