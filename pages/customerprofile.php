<?php
     require_once '../includes/navbar.inc.php';
     require_once '../classes/class.customersCntrl.php';
     if(!isset($_SESSION["loggin"])){
        header("Location: /?noacces");
      }
?>

<div class="container">
    <div class="table-responsive">

    <table class="table">
    <thead>
        <tr>
        <th scope="col">Firstname</th>
        <th scope="col">Lastname</th>
        <th scope="col">Address</th>
        <th scope="col">Phone</th>
        <th scope="col">email</th>
        <th scope="col">Comments</th>
        <th scope="col">Registered at</th>
        <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $cData = new CustomerCntrl();
            foreach($cData->CustomerData() as $row)
            {
                if($row['active'] == 1)
                {
                    $row['active'] = 'Active';
                }else{
                    $row['active'] = 'Inactive';
                }
    
                echo '<tr>
                    <td>'.$row['firstname'].'</td>
                    <td>'.$row['lastname'].'</td>
                    <td>'.$row['address'].'</td>
                    <td>'.$row['phone'].'</td>
                    <td>'.$row['email'].'</td>
                    <td>'.$row['comments'].'</td>
                    <td>'.$row['registered_at'].'</td>
                    <td>'.$row['active'].'</td>
                    </tr>
                ';
            }
        ?>
    </tbody>
    </table>

    </div>
        <a href='/pages/customeredit.php?id=<?php  echo $_GET['id'];?>' type="submit" class="btn btn-primary">Edit</a>
        <a href='/includes/delete.inc.php?Btn-Delete&id=<?php  echo $_GET['id'];?>' type="submit" class="btn btn-danger">Delete</a>
</div>
<?php
     require_once '../includes/footer.inc.php'
?>