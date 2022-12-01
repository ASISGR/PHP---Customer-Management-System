<?php
include_once 'class.db.php';

class Customer extends Dbh{
   /* private $firstName;
    private $lastName;
    private $email;
    private $address;
    private $phone;
    private $comment;
    private $registered_at;
    private $status;*/
    private $perPage = 10;

    public function UpdateCustomer($cid, $fname, $lname, $email, $address, $phone, $comment, $status){

        $sql = "UPDATE customers SET firstname = '$fname', lastname = '$lname', email = '$email', address = '$address', phone = '$phone', comments = '$comment', active = $status WHERE id = $cid";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$cid, $fname, $lname, $email, $address,$phone,$comment,$status]);
        header('location: /pages/customerprofile.php?id='. $cid .'');
        $this->conn = NULL;

    }

    public function GetRows(){
        $sql = "SELECT * FROM customers";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $rows = $stmt->rowCount();
        return $rows;
    }

    public function GetFName(){
        $id = $_GET['id'];
        $sql = "SELECT firstname FROM customers WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $parameters = [($id)];
        $stmt->execute($parameters);
        $result = $stmt->fetch();
        
        return $result['firstname'];
    }

    public function GetLName(){
        $id = $_GET['id'];
        $sql = "SELECT lastname FROM customers WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $parameters = [($id)];
        $stmt->execute($parameters);
        $result = $stmt->fetch();

        return $result['lastname'];
    }

    public function GetMail(){
        $id = $_GET['id'];
        $sql = "SELECT email FROM customers WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $parameters = [($id)];
        $stmt->execute($parameters);
        $result = $stmt->fetch();

        return $result['email'];
    }

    public function GetAddress(){
        $id = $_GET['id'];
        $sql = "SELECT address FROM customers WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $parameters = [($id)];
        $stmt->execute($parameters);
        $result = $stmt->fetch();

        return $result['address'];
    }

    public function GetPhone(){
        $id = $_GET['id'];
        $sql = "SELECT phone FROM customers WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $parameters = [($id)];
        $stmt->execute($parameters);
        $result = $stmt->fetch();

        return $result['phone'];
    }

    public function GetComment(){
        $id = $_GET['id'];
        $sql = "SELECT comments FROM customers WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $parameters = [($id)];
        $stmt->execute($parameters);
        $result = $stmt->fetch();

        return $result['comments'];
    }

    public function GetStatus(){
        $id = $_GET['id'];
        $sql = "SELECT active FROM customers WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $parameters = [($id)];
        $stmt->execute($parameters);
        $result = $stmt->fetch();
        
        if($result['active'] == 1)
        {
            $result['active'] = 'Active';
        }else{
            $result['active'] = 'Deactive';
        }

        return $result['active'];
    }

    public function GetSpecificCustomer($input){


        $sql = "SELECT * FROM customers WHERE phone LIKE ? OR lastname LIKE ? LIMIT 1";
     
        $stmt = $this->conn->prepare($sql);
        $parameters = ([$input, "%$input%"]);
        $stmt->execute($parameters);
        $resultFetchAll = $stmt->fetchAll();

        if($resultFetchAll == NULL)
        {
            header('location: /pages/customerslist.php?CustomerNotExist');
            exit();
        }

        foreach($resultFetchAll as $result)
        {
            if($result['active'] == 1)
            {
                $result['active'] = 'Active';
            }else{
                $result['active'] = 'Deactive';
            }

        }
        header('location: /pages/customerprofile.php?id='.$result['id'].' ');
        $this->conn = NULL;
    }


    public function GetCustomers(){

        $pageNow = isset($_GET['page']) ? $_GET['page'] : 1;
        $x = ($pageNow - 1) * $this->perPage;
        $y = $this->perPage;
        $number = NULL;
        
        if($pageNow > 1)
        {
            $number = ($pageNow*$this->perPage);
        }

        $sql = "SELECT * FROM customers LIMIT $x, $y";
     
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $resultFetchAll = $stmt->fetchAll();

        foreach($resultFetchAll as $index => $result)
        {

            $number++;
            if($result['active'] == 1)
            {
                $result['active'] = 'Active';
            }else{
                $result['active'] = 'Deactive';
            }
            echo '
                <tr><th scope="row">'.$number.'</th>
                <td>'.$result['firstname'].'</td>
                <td>'.$result['lastname'].'</td>
                <td>'.$result['address'].'</td>
                <td>'.$result['phone'].'</td>
                <td>'.$result['email'].'</td>
                <td>'.$result['comments'].'</td>
                <td>'.$result['registered_at'].'</td>
                <td>'.$result['active'].'</td>
                <td><a href="/pages/customerprofile.php?id='.$result['id'].'" class="btn btn-primary">Preview</a></td></tr>              
            ';
        }      

        $this->conn = NULL;
    }

    public function Pagination(){
        $count = $this->GetRows();
        $totalPages = ceil($count / $this->perPage);
        echo '<nav aria-label="Page navigation example"><ul class="pagination">';
        for($i = 1; $i<= $totalPages; $i++){
            echo '<li class="page-item"><a class="page-link" href="?page='.$i.'">'.$i.'</a></li>';
        }
        echo '</ul></nav>';

    }

    public function GetCustomerProfile(){
        $id = $_GET['id'];
        $sql = "SELECT * FROM customers WHERE id = ?";

        $stmt = $this->conn->prepare($sql);
        $params = ([$id]);
        $stmt->execute($params);
        $resultFetchAll = $stmt->fetchAll();
        foreach($resultFetchAll as $result)
        {
            if($result['active'] == 1)
            {
                $result['active'] = 'Active';
            }else{
                $result['active'] = 'Deactive';
            }

            echo '<tr>
                <td>'.$result['firstname'].'</td>
                <td>'.$result['lastname'].'</td>
                <td>'.$result['address'].'</td>
                <td>'.$result['phone'].'</td>
                <td>'.$result['email'].'</td>
                <td>'.$result['comments'].'</td>
                <td>'.$result['registered_at'].'</td>
                <td>'.$result['active'].'</td></tr>
            ';
        }
        $this->conn = NULL;

    }

    public function DeleteCustomer(){
        $GetID = $_GET['id'];
        $sql = "DELETE FROM customers WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $parameters = ([$GetID]);
        $stmt->execute($parameters);
        header('location: /pages/customerslist.php');
        $this->conn = NULL;
    }
}
?>