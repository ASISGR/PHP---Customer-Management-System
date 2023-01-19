<?php
     require_once '../includes/navbar.inc.php';
    //check if user is not loggin then redirect to login Page
     if(!isset($_SESSION["loggin"])){
        header("Location: /?noacces");
      }
?>
<div class="container">
        <form class="registerForm" action="../includes/registerAdmin.inc.php" method="POST">
            <h2 class="fs-4">Add new Administrator to the system</h2>
                <?php
                include_once '../includes/errorhandler.inc.php';
                ?>
            <div class="mb-3">
                <label for="usernameinput" class="form-label">Username</label>
                <input type="username" name="username" class="form-control" id="usernameinput">
                <div id="usernameinput" class="form-text">Username of new Administrator.</div>
            </div>
            <div class="mb-3">
                <label for="mailinput" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="mailinput" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="passnameinput" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="passnameinput">
                <div id="passnameinput" class="form-text">Password of new Administrator.</div>
            </div>
            <div class="mb-3">
                <label for="fistNameinput" class="form-label">Firstname</label>
                <input type="text" name="fistName" class="form-control" id="fistNameinput">
                <div id="fistNameinput" class="form-text">Firstname of new Administrator.</div>
            </div>
            <div class="mb-3">
                <label for="lastNameinput" class="form-label">Lastname</label>
                <input type="text" name="lastName" class="form-control" id="lastNameinput">
                <div id="lastNameinput" class="form-text">Lastname of new Administrator.</div>
            </div>
            <div class="mb-3">
                <label for="Phoneinput" class="form-label">Phone</label>
                <input type="text" name="Phone" class="form-control" id="Phoneinput">
                <div id="Phoneinput" class="form-text">Phone number of new Administrator.</div>
            </div>
            <div class="mb-3">
                <label for="Addressinput" class="form-label">Address</label>
                <input type="text" placeholder="e.g.(Street, Number, City, Postcode, Country)" name="adrressInput" class="form-control" id="Addressinput">
                <div id="Addressinput" class="form-text">Address of new Administrator.</div>
            </div>
            <button type="submit" name='btn_Aregister' class="btn btn-success">Create Admin</button>
        </form>
</div>
<?php
     require_once '../includes/footer.inc.php'
?>