<?php 
    if (isset($_GET['page'])){
      $pages=array("home", "agenda", "dashboard", "account", "uitloggen","login","register","account");
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

  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="index.php?page=home">My P-A</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="dropdown-item" href="index.php?page=register">Registreren</a>
          </li>
          <li class="nav-item">
            <a class="dropdown-item" href="index.php?page=login">Aanmelden</a>
          </li>
        </ul>
      </div>
      </nav>
