
<?php
$id = $_SESSION['vnaam'];
$id = $_SESSION['anaam'];
$mail = $_SESSION['E_mail'];
$id = $_SESSION['id'];

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

$sql = "SELECT First_name, Last_name, E_mail, user_ID FROM user";
$vnaam = $_SESSION ['vnaam'];
$anaam = $_SESSION ['anaam'];
$id = $_SESSION['E_mail'];
$id = $_SESSION['id'];
?>

<div id="account">
	<div class="col-lg-6 col-sm-6">
			<div class="card hovercard">
					<div class="card-background">

					</div>
					<div class="useravatar">

					</div>
					<!-- <div class="card-info"> <span class="card-title"><?php echo $naam; ?></span>



					</div> -->
			</div>

			<div class="well">
				<div class="tab-content">
					<div class="tab-pane fade in active" id="tab1">
						<table>
							<tr>
									<div id="tekst"><br><br>
								<td><h1>First name:</h1></td>
								<td><h1><?php echo $vnaam; ?></h1></td>
							</tr>
							<tr>
									
								<td><h1>Last name:</h1></td>
								<td><h1><?php echo $anaam; ?></h1></td>
									
							</tr>
							<tr>
								<td><h1>Email:</h1></td>
								<td><h1><?php echo $mail; ?></h1></td>
							</tr>
							<tr>
								<td><h1>User ID:</h1></td>
								<td><h1><?php echo $id; ?></h1></td>
								</div>
							</tr>
						</table>
					</div>
				</div>
			</div>
  </div>
</div> 

