<?php if(isset($_GET['page'])){
		$pages=array("foto","video","cart","home","uitloggen","aanmelden","register","account");
		if(in_array($_GET['page'], $pages)) {
			$_page=$_GET['page'];
		}else{
			$_page="home";
		}
	}else{
    $_page="home";
    

  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My P-A</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>

    <nav>
      <ul>
        <li><a href="#">Agenda</a></li>
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Account</a></li>
      </ul>
    </nav>