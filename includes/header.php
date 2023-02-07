<?php
    include("includes/dbcon.php");
    include("includes/sql.php");
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User regisztráció</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/mystyle.css">
    <script src="js/bootstrap.bundle.js"></script>
</head>
<body>
    <div class="container-fliud bg-dark">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark container">    
          <a class="navbar-brand" href="./">Your title</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="add.php">Add</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="edit.php">Edit</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="delete.php">Delete</a>
              </li>  
            </ul>
          </div>
        </nav>
    </div>