
<?php
$id = $_SESSION['id'];

	
?>
<div id="account">
	<div class="col-lg-6 col-sm-6">
			<div class="card hovercard">
					<div class="card-background">

					</div>
					<div class="useravatar">

					</div>
					<div class="card-info"> <span class="card-title"><?php echo $naam; ?></span>



					</div>
			</div>
			<div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
					<div class="btn-group" role="group">
						<button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab">
							<div class="hidden-xs">Profile</div>
						</button>
					</div>
			</div>
			<div class="well">
				<div class="tab-content">
					<div class="tab-pane fade in active" id="tab1">
						<table class="table">
							<tr>
								<td>Volledige naam</td>
								<td><?php echo $naam; ?></td>
							</tr>
							<tr>
								<td>Adres</td>
								<td><?php echo $adres; ?></td>
							</tr>
							<tr>
								<td>Woonplaats</td>
								<td><?php echo $woonplaats; ?></td>
							</tr>
							<tr>
								<td>Email</td>
								<td><?php echo $email; ?></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
  </div>
</div>    

