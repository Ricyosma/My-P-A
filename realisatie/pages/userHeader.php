<?php 
    if (isset($_GET['page'])){
      $pages=array("agenda", "dashboard", "account", "logout");
		  if (in_array($_GET['page'], $pages)) {
			  $_page=$_GET['page'];
		  } else {
        $_page="agenda";
      }
    } else{
        $_page="agenda";
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>My P-A</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/header-footer.css">
    <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="css/agenda.css">
    <link rel="stylesheet" href="css/dashboard.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="index.php?page=home">My P-A</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php?page=agenda">Agenda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?page=dashboard">Dashboard</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Account
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="index.php?page=register">Account</a>
              <a class="dropdown-item" href="index.php?page=logout">Logout</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href=""><?php echo $vnaam ?></a>
            </div>
          </li>
        </ul>
      </div>
      </nav>

    
