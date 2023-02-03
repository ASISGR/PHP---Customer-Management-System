<?php
     require_once '../includes/navbar.inc.php';
     require_once '../classes/class.customersCntrl.php';
     if(!isset($_SESSION["loggin"])){
        header("Location: /?noacces");
      }
     $customer = new CustomerCntrl();
?>

<div class="container">
        <form class="registerForm" action="../includes/customeredit.inc.php" method="POST">
            <h2 class="fs-4">Edit your customer</h2>
                <?php
                    include_once '../includes/errorhandler.inc.php';
                ?>
            <div class="mb-3">
                <label for="textinput" class="form-label">Fistname:</label>
                <input type="text" value="<?php echo $customer->CustomerData()[0]['firstname'] ?>" name="newFistName" class="form-control" id="textinput">
                <div id="textinput" class="form-text">New customer name.</div>
            </div>
            <div class="mb-3">
                <label for="textinput" class="form-label">Lastname:</label>
                <input type="text" value="<?php echo $customer->CustomerData()[0]['lastname'] ?>" name="newLastName" class="form-control" id="textinput">
                <div id="textinput" class="form-text">New customer lastname.</div>
            </div>
            <div class="mb-3">
                <label for="textinput" class="form-label">Address:</label>
                <input type="text" value="<?php echo $customer->CustomerData()[0]['address'] ?>" name="newAddress" class="form-control" id="textinput">
                <div id="textinput" class="form-text">New Addres name.</div>
            </div>
            <div class="mb-3">
                <label for="textinput" class="form-label">Phone:</label>
                <input type="text" value="<?php echo $customer->CustomerData()[0]['phone'] ?>" name="newPhoneNumber" class="form-control" id="textinput">
                <div id="textinput" class="form-text">New Phone.</div>
            </div>
            <div class="mb-3">
                <label for="textinput" class="form-label">Comment:</label>
                <input type="text" value="<?php echo $customer->CustomerData()[0]['comments'] ?>" name="newComment" class="form-control" id="textinput">
                <div id="textinput" class="form-text">New Comment.</div>
            </div>
            <div class="mb-3">
                <label for="mailinput" class="form-label">Email addres</label>
                <input type="email" value="<?php echo $customer->CustomerData()[0]['email'] ?>"name="email" class="form-control" id="mailinput" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">New customer Mail.</div>
            </div>

            <div class="mb-3">
            <label for="status-selector" class="form-label">Account Status: <?php echo $customer->CustomerData()[0]['active'] ? 'Active' : 'Inactive' ?></label>
            <select name="Status" id="status-selector" class="form-select" aria-label="Default select example">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
            </div>
            <input type="hidden" name="id" value="<?php echo $customer->CustomerData()[0]['id'] ?>" />

            <button type="submit" name='btn-save' class="btn btn-success">Save changes</button>
        </form>
</div>

<?php
     require_once '../includes/footer.inc.php'
?>