
<?php
$id = $_SESSION['vnaam'];
$id = $_SESSION['anaam'];
$id = $_SESSION['E_mail'];
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
						<table class="table">
							<tr>
								<td>First name:</td>
								<td><?php echo $vnaam; ?></td>
							</tr>
							<tr>
								<td>Last name:</td>
								<td><?php echo $anaam; ?></td>
							</tr>
							<tr>
								<td>Email:</td>
								<td><?php echo $mail; ?></td>
							</tr>
							<tr>
								<td>User ID:</td>
								<td><?php echo $id; ?></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
  </div>
</div> 

