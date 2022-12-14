<?php
include_once 'classes/class.db.php';
include_once 'classes/class.users.php';
require_once 'includes/navbar.inc.php';
if(isset($_SESSION["loggin"]) && $_SESSION["loggin"] === true){
  //echo 'you are logged';
  header("Location: /pages/adminprofile.php");
}
?>

<div class="container">
<div class="card mb-3">
    <div class="row g-0 d-flex align-items-center">
      <div class="col-lg-4 d-none d-lg-flex">
        <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" alt="Trendy Pants and Shoes"
          class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
      </div>
      <div class="col-lg-8">
        <div class="card-body py-5 px-md-5">
        <?php include_once 'includes/errorhandler.inc.php'; ?>

          <form action="includes/login.inc.php" method="POST">
            <!-- Username input -->
            <div class="form-outline mb-4">
              <label class="form-label" for="form2Example1">Username</label>
              <input type="username" name='username' id="form2Example1" class="form-control" />
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <label class="form-label" for="form2Example2">Password</label>
              <input type="password" name = 'password' id="form2Example2" class="form-control" />
            </div>

            <!-- Submit button -->
            <button type="submit" name='btn-Login'class="btn btn-primary btn-block mb-4">Sign in</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
     require_once 'includes/footer.inc.php'
?>
