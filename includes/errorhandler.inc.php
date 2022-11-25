<?php 
    if(isset($_GET['passwordCreated']))
    {
        echo '
            <div class="alert alert-success" role="alert">
                Your account has been created!
            </div>';
    }

    if(isset($_GET['ErrorEmptyInputs']))
    {
        echo '
            <div class="alert alert-danger" role="alert">
                Please fill all the fields!
            </div>';
    }
?>