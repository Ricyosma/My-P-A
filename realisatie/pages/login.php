<?php
	require 'includes/connection.php';
	if(isset($_POST['submit'])){
	$mail = $ww = $pass = '';
	$mail = $_POST['email'];
	$ww =  $_POST['password'];
	$pass = md5($ww);
	if(empty($mail) || empty($pass)) {
		$message = 'All fields are required';
	} else {
		$query = $conn->prepare("SELECT * FROM user WHERE E_mail=? AND passw=?");
		$query->execute(array($mail,$pass));
		$row = $query->fetch(PDO::FETCH_BOTH);
		if($query->rowCount() > 0) {
			$_SESSION['E_mail'] = $mail;
			$id = $row["user_ID"];
			$vnaam = $row["First_name"];
			$anaam = $row['Last_name'];
			session_start();
			$_SESSION['id'] = $id;
			$_SESSION['anaam'] = $anaam;
			$_SESSION['vnaam'] = $vnaam;
			header("Location: index.php?page=agenda");
		} else {
			$message = "Username/Password is wrong";
		}
	}
	}
?>

<form action="" id="aan-form" method="post">
			<div class="form-group">
<?php if(isset($_POST['submit'])){ echo $message;} ?>
			</div>
	<table>
		<tr>
	    <div class="form-group">
	      <td><label for="exampleInputEmail2">Emailadres</label> </td>
	      <td> <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Vul uw email in" require name="email"> </td>
		  </div>
		</tr>
			<tr>
					<div class="form-group">
					<td> <label for="exampleInputPassword1">Wachtwoord</label> </td>
					<td> <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Uw wachtwoord" require name="password"> </td>
				</div>
			</tr>
		<tr>
		<td> <button type="submit" name="submit" class="submit">Aanmelden</button> </td>
		</tr>
		<tfoot><tr><td> <small id="emailHelp1" class="form-text">Uw email zal nooit worden gedeeld met andere partijen.</small> </td></tr></tfoot>
	</table>
  </form>
