<?php
include_once '../classes/class.db.php';
include_once '../classes/class.users.php';
include_once '../includes/navbar.inc.php';
if(!isset($_SESSION["loggin"])){
    header("Location: /?noacces");
  }

?>
<div class="container" style="margin-top:1.5vh">
    <div class="card mb-3" style="border-radius: .5rem;">
        <div class="row g-0">
            <div class="col-md-4 gradient-custom text-center" style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                <img src="../images/userIMG.png" alt="Avatar" class="img-fluid my-5" style="width: 280px;" />
                <br>
                <h5><?php echo $_SESSION['firstname'] .' '. $_SESSION['lastname'] ?></h5>
                <p>Web Designer</p>
            </div>

            <div class="col-md-8">
                <div class="card-body p-4">

                    <h6>Information</h6>
                    <hr class="mt-0 mb-4">

                    <div class="row pt-1">
                        <div class="col-6 mb-3">
                            <h6>Email</h6>
                            <p class="text-muted"><?php echo $_SESSION['email']  ?></p>
                        </div>
                        <div class="col-6 mb-3">
                            <h6>Phone</h6>
                            <p class="text-muted"><?php echo $_SESSION['phone']?></p>
                        </div>
                        <div class="col-6 mb-3">
                            <h6>Address</h6>
                            <p class="text-muted"><?php echo $_SESSION['address']?></p>
                        </div>
                    </div>

                    <h6>Projects</h6>

                    <hr class="mt-0 mb-4">

                    <div class="row pt-1">
                        <div class="col-6 mb-3">
                            <h6>Customer Management System</h6>
                            <p class="text-muted">This project is created with the following languages: PHP, HTML, CSS, PDO, SQL.</p>
                        </div>
                    </div>

                    <div class="d-flex justify-content-start">
                        <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                        <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                        <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                    </div>
                    
                </div>
            </div>
    </div>
</div>
<?php
     require_once '../includes/footer.inc.php'
?>
