<?php
     require_once '../includes/navbar.inc.php';
     require_once '../classes/class.customers.php';
     if(!isset($_SESSION["loggin"])){
      header("Location: /");
    }
?>

<div class="container">
<form class="d-flex bg-dark " style="justify-content:space-between; margin-top:0.5vh; padding:1vh" action="../includes/searchCustomer.inc.php" method="GET" ">
        <div class = "container">
            <input  type="text" style="" class='form-label'name="input" placeholder="Search Customer by Mail or Phonenumber" required>
            <button class="btn btn-primary fas fa-search" name="Btn-FindSpecificCust" type="submit"></button>
            <a style='float:right'class="btn btn-primary" href="addcustomer.php ">Add customer</a>
        </div>
</form>
<?php include_once '../includes/errorhandler.inc.php';?>
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
          $obj = new Customer();
          $obj->GetCustomers();
     ?>
  </tbody>
</table>
</div>
  <?php
        $obj2 = new Customer();
        $obj2->Pagination(); 
  ?>
</div>
<?php
     require_once '../includes/footer.inc.php'
?>