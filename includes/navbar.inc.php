<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="../css/fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
   <title>Website - CMS</title>
</head>

<body>

<div class="container">
<header class="d-flex flex-wrap justify-content-between py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
      <span class="fs-4">Web App</span>
    </a>
    <?php
          if(isset($_SESSION["loggin"]) && $_SESSION["loggin"] === true){
            echo '<span style=""class="fs-6">Administrator: <u>'. $_SESSION['username']. '</u></span>';
          }
    ?>
    </header>
</div>

<div class="container">
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)">CMS App</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <?php
          if(isset($_SESSION["loggin"]) && $_SESSION["loggin"] === true){
            echo '<li class="nav-item"><a href="/pages/adminprofile.php" class="nav-link" aria-current="page">My Profile</a></li> 
                  
                  <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="/pages/customerslist.php" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  View Customer\'s
                  </a>
                  <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="/pages/customerslist.php?active=1"">Active Customers</a></li>
                    <li><a class="dropdown-item" href="/pages/customerslist.php?active=0">Inactive Customers</a></li>
                  </ul>
                </li>';
          }
        ?>
          
      </ul>
      <form class="d-flex">
        <?php
          if(isset($_SESSION["loggin"]) && $_SESSION["loggin"] === true){
            echo '<div class="container">
                <a class="btn btn-primary" href="/pages/addadmin.php">Add Administrator</a>
                <a class="btn btn-danger" href="/includes/logout.inc.php">Logout</a>
                </div>';
          }else{
            echo '<div class="container">
                <a class="btn btn-primary" href="/">Login</a>
                </div>';
          }
        ?>
      </form>
    </div>
  </div>
</nav>
          
</div>
