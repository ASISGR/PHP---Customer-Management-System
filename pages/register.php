<?php
     require_once '../includes/navbar.inc.php';
?>
<div class="container">
        <form class="registerForm" action="includes/register.inc.php" method="POST">
            <h2 class="fs-4">Create your Account</h2>
                <?php
                include_once '../includes/errorhandler.inc.php';
                ?>
            <div class="mb-3">
                <label for="usernameinput" class="form-label">Username</label>
                <input type="username" name="username" class="form-control" id="usernameinput">
                <div id="usernameinput" class="form-text">Your username.</div>
            </div>
            <div class="mb-3">
                <label for="mailinput" class="form-label">Email addres</label>
                <input type="email" name="email" class="form-control" id="mailinput" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="passnameinput" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="passnameinput">
                <div id="passnameinput" class="form-text">Your Password.</div>
            </div>

            <button type="submit" name='btn_register' class="btn btn-primary">Create account</button>
        </form>
</div>
<?php
     require_once '../includes/footer.inc.php'
?>