<?php
require '../includes/connection.php';
if(isset($_POST['submit'])){
$user = $ww = $pass = '';
$user = $_POST['email'];
$ww =  $_POST['password'];
$pass = md5($ww);
if(empty($user) || empty($pass)) {
	$message = 'All field are required';
} else {
	$query = $conn->prepare("SELECT * FROM user WHERE E_mail=? AND passw=?");
	$query->execute(array($user,$pass));
	$row = $query->fetch(PDO::FETCH_BOTH);
	if($query->rowCount() > 0) {
		$_SESSION['E_mail'] = $user;
		$id = $row["user_ID"];
		$vnaam = $row["First_name"];
		$anaam = $row['Last_name'];
		session_start();
		$_SESSION['id'] = $id;
		$_SESSION['anaam'] = $anaam;
		$_SESSION['vnaam'] = $vnaam;
		header("Location: ../index.php?page=home");
	} else {
		$message = "Username/Password is wrong";
	}
}
}
?>
<form action="" id="aan-form" method="post">
			<div class="form-group">
<?php if(isset($_POST['submit'])){ echo $message;{ ?>
			</div>
	    <div class="form-group">
	      <label for="exampleInputEmail2">Emailadres</label>
	      <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Vul uw email in" require name="email">
	      <small id="emailHelp1" class="form-text">Uw email zal nooit worden gedeeld met andere partijen.</small> </div>
	    <div class="form-group">
	      <label for="exampleInputPassword1">Wachtwoord</label>
	      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Uw wachtwoord" require name="password">
      </div>
	    <button type="submit" name="submit" class="btn-sub btn btn-primary">Aanmelden</button>
  </form>