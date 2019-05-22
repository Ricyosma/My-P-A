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
    $vnaam = $_SESSION['vnaam'];
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

  </head>
  <body>
    <nav>
        <div id="navbar-brand"><a class="navbar-brand" href="index.php?page=home">My P-A</a></div>
      <div id="menu">
        <ul>
          <li>
            <a href="index.php?page=agenda">Agenda</a>
          </li>
          <li>
            <a href="index.php?page=dashboard">Dashboard</a>
          </li>
          <!-- Dropdown -->
          <div class="dropdown">
            <button class="dropbtn">Account</button>
            <div class="dropdown-content">
              <a href="#">Link 1</a>
              <a href="#">Link 2</a>
              <a href="#">Link 3</a>
            </div>
          </div>
        </ul>
      </div>
    </nav>


