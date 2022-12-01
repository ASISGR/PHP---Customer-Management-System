<?php
     require_once '../includes/navbar.inc.php';
     if(!isset($_SESSION["loggin"])){
        header("Location: /?noacces");
      }
?>
<div class="container">
        <form class="registerForm" action="../includes/registercustomer.inc.php" method="POST">
            <h2 class="fs-4">Add new Customer to the system</h2>
                <?php
                include_once '../includes/errorhandler.inc.php';
                ?>
            <div class="mb-3">
                <label for="firstnameinput" class="form-label">First Name</label>
                <input type="text" name="fistName" class="form-control" id="firstnameinput">
                <div id="firstnameinput" class="form-text">First Name of new Customer.</div>
            </div>
            <div class="mb-3">
                <label for="firstnameinput" class="form-label">Last Name</label>
                <input type="text" name="lastName" class="form-control" id="firstnameinput">
                <div id="firstnameinput" class="form-text">Last Name of new Customer.</div>
            </div>   
            <div class="mb-3">
                <label for="mailinput" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="mailinput" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="Phoneinput" class="form-label">Phone</label>
                <input type="text" name="Phone" class="form-control" id="Phoneinput">
                <div id="Phoneinput" class="form-text">Phone number of new Customer.</div>
            </div>
            <div class="mb-3">
                <label for="Addressinput" class="form-label">Address</label>
                <input type="text" placeholder="e.g.(Street, Number, City, Postcode, Country)" name="adrressInput" class="form-control" id="Addressinput">
                <div id="Addressinput" class="form-text">Address of new Customer.</div>
            </div>
            <div class="mb-3">
                <label for="Commentinput" class="form-label">Comment</label>
                <input type="text" name="commentInput" class="form-control" id="Commentinput">
                <div id="Commentinput" class="form-text">Comment about your new Customer.</div>
            </div>

            <button type="submit" name='btn_Cregister' class="btn btn-primary">Create Customer</button>
        </form>
</div>
<?php
     require_once '../includes/footer.inc.php'
?>