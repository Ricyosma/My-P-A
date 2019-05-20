<?php 
    if (isset($_GET['page'])){
      $pages=array("home","uitloggen","aanmelden","register","account");
		  if (in_array($_GET['page'], $pages)) {
			  $_page=$_GET['page'];
		  } else {
        $_page="home";
      }
    } 
    else{
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
    <link rel="stylesheet" href="./css/agenda.css">
    <title>My P-A</title>
  </head>
  <body>
