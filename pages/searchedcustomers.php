<?php
     require_once '../includes/navbar.inc.php';
     require_once '../classes/class.customersCntrl.php';
     if(!isset($_SESSION["loggin"])){
      header("Location: /");
    }

    if(!isset($_GET['active'])){
      $_GET['active'] = 1;
    }
?>
<div class="container">
<div class="table-responsive">

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">Address</th>
      <th scope="col">Phone</th>
      <th scope="col">email</th>
      <th scope="col">Comments</th>
      <th scope="col">Registered at</th>
      <th scope="col">Status</th>
      <th scope="col">Preview</th>
    </tr>
  </thead>
  <tbody>
     <?php
          $CustomersFounded = new CustomerCntrl();
          $number = 0;
          foreach($CustomersFounded->SearchCustomer() as $index => $row)
          {

              $number++;
              if($row['active'] == 1)
              {
                  $row['active'] = 'Active';
              }else{
                  $row['active'] = 'Inactive';
              }
              echo '
                  <tr><th scope="row">'.$number.'</th>
                  <td>'.$row['firstname'].'</td>
                  <td>'.$row['lastname'].'</td>
                  <td>'.$row['address'].'</td>
                  <td>'.$row['phone'].'</td>
                  <td>'.$row['email'].'</td>
                  <td>'.$row['comments'].'</td>
                  <td>'.$row['registered_at'].'</td>
                  <td>'.$row['active'].'</td>
                  <td><a href="/pages/customerprofile.php?id='.$row['id'].'" class="btn btn-primary">Preview</a></td></tr>              
              ';
          } 
     ?>
  </tbody>
</table>
</div>
</div>
<?php
     require_once '../includes/footer.inc.php'
?>