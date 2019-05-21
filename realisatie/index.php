<?php
	session_start();

	// require("includes/connection.php");

	// $id = $_SESSION['id'];

	if (isset($id)) {
		$_head = 'pages/userHeader';
	} else {
		$_head = 'pages/header'; 
	}
	
	if ($_page == 'dashboard') {
		include 'dashboard.php';
	}
    
	require($_head.".php");

	if(isset($_GET['page'])){

		$pages=array("home","agenda","dashboard","aanmelden","account","register");

		if(in_array($_GET['page'], $pages)) {

			$_page=$_GET['page'];

		}else{

			$_page="home";

		}
	}
?>
<div class="wrapper">
    <?php 
        require("pages/".$_page.".php");
    ?>
    
</div>

<?php include 'pages/footer.php';?>