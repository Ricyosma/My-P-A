<form action="includes/register_code.php" id="reg-form" method="post">
	    <div class="form-group">
	      <label for="exampleInputEmail2">Voornaam</label>
	      <input type="firstname" class="form-control" id="exampleInputEmail2" placeholder="Vul uw voornaam in" required name="voornaam">
			</div>
			<div class="form-group">
	      <label for="exampleInputEmail2">Achternaam</label>
	      <input type="lastname" class="form-control" id="exampleInputEmail2" placeholder="Vul uw achternaam in" required name="achternaam">
			</div>
			<div class="form-group">
				<label for="adres">Adres</label>
				<input type="text" class="form-control" placeholder="Vul uw adres + huisnummer" required name="adres" id="">
			</div>
			<div class="form-group">
				<label for="woonplaats">Woonplaats</label>
				<input type="text" class="form-control" placeholder="Vul uw woonplaats in" required name="woonplaats" id="">			
			</div>
			<div class="form-group">
				<label for="postcode">Postcode</label>
				<input type="text" class="form-control" placeholder="Vul uw postcode in" required name="postcode" id="">
			</div>
			<div class="form-group">
	      <label for="exampleInputEmail2">Emailadres</label>
	      <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Vul uw email in" required name="mail">
	      <small id="emailHelp1" class="form-text">Uw email zal nooit worden gedeeld met andere partijen.</small> 
			</div>
	    <div class="form-group">
	      <label for="exampleInputPassword1">Wachtwoord</label>
	      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Wachtwoord" required name="wachtwoord">
				<br>
				<label for="exampleInputPassword2">Herhaal wachtwoord</label>
	      <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Herhaal uw wachtwoord" required name="wachtwoordR">
      </div>
			<div class="form-group">
				<label for="telefoonnummer">Telefoonnummer</label>
				<input type="tel" class="form-control" placeholder="Voorbeeld: 0612345678" pattern="[0-9]{2}[0-9]{8}" required name="telefoonnummer">
			</div>
	    <button type="submit" class="btn-sub btn btn-primary">Registreren</button>
  </form>