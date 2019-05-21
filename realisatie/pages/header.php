<?php 
    if (isset($_GET['page'])){
      $pages=array("home", "agenda", "dashboard", "account", "uitloggen","aanmelden","register","account");
		  if (in_array($_GET['page'], $pages)) {
			  $_page=$_GET['page'];
		  } else {
        $_page="home";
      }
    } else{
        $_page="home";
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
    <link rel="stylesheet" href="css/header-footer.css">
    <link rel="stylesheet" href="css/dashboard.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

  </head>
  <body>

    <nav id="navbar">
      <div class="nav-content">
        <div class="text">My-P-A</div>
        <div class="menu">
          <ul>
            <li><a href="index.php?page=agenda">Agenda</a></li>
            <li><a href="index.php?page=dashboard">Dashboard</a></li>
            <li><a href="index.php?page=account">Account</a></li>
            <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Dropdown</a>
              <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>
