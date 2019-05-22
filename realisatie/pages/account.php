
<?php
//$id = $_SESSION['id'];

// $sql = mysql_query("SELECT First_name, Last_name, E_mail, user_ID FROM user 	");
// if (!$result) {
//     echo 'Could not run query: ' . mysql_error();
//     exit;
// }
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

$sql = "SELECT First_name, Last_name, E_mail, user_ID FROM user";

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
								<td><?php echo $First_name; ?></td>
							</tr>
							<tr>
								<td>Last name:</td>
								<td><?php echo $Last_name; ?></td>
							</tr>
							<tr>
								<td>Email:</td>
								<td><?php echo $E_mail; ?></td>
							</tr>
							<tr>
								<td>User ID:</td>
								<td><?php echo $user_ID; ?></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
  </div>
</div> 

