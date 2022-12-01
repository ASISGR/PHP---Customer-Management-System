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

    if(isset($_GET['loginfailed']))
    {
        echo '
            <div class="alert alert-danger" role="alert">
                Worng Username or Password!
            </div>';
    }
    if(isset($_GET['logged']))
    {
        echo '
            <div class="alert alert-success" role="alert">
                Login successful!
            </div>';
    }
    if(isset($_GET['logoutsuccess']))
    {
        echo '
            <div class="alert alert-success" role="alert">
                Logout successful!
            </div>';
    }
    
    if(isset($_GET['noacces']))
    {
        echo '
            <div class="alert alert-danger" role="alert">
                You are not able to see the contect before you login!
            </div>';
    }

    if(isset($_GET['CustomerNotExist']))
    {
        echo '
            <div class="alert alert-danger" role="alert">
                Lastname or Phonenumber doesn\'t match with your customer\'s!
            </div>';
    }
?>