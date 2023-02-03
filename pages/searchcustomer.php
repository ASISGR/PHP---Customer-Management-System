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
<form class="d-flex bg-dark " style="justify-content:space-between; margin-top:0.5vh; padding:1vh" action="../includes/searchCustomer.inc.php" method="GET">
        <div class = "container">
            <input  type="text" style="" class='form-label'name="input" placeholder="Phone OR Lastname" required>
            <button class="btn btn-primary fas fa-search" name="submit" type="submit"></button>
        </div>
</form>
<div class="container p-4">
<?php include_once '../includes/errorhandler.inc.php';?>
</div>
</div>
<?php
     require_once '../includes/footer.inc.php'
?>