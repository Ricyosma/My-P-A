<?php

	require_once('connection.php');

	$user_id = $message = $voornaam = $achternaam = $adres = $woonplaats = $postcode = $telefoon =  $mail = $password = $pwd = '';

    $user_id = mt_rand(10,1000000000); 

    $voornaam = $_POST['voornaam'];
    
	$achternaam = $_POST['achternaam'];

	$adres = $_POST['adres'];

	$woonplaats = $_POST['woonplaats'];

    $postcode = $_POST['postcode'];
    
    $telefoon = $_POST['telefoonnummer'];

    $mail = $_POST['mail'];
    
	$pwd = $_POST['wachtwoord'];
	$pwdR = $_POST['wachtwoordR'];

    $password = MD5($pwd);
    
    if ($pwd == $pwdR) {
        try {
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO user (users_id, voornaam, achternaam, adres, woonplaats, postcode, telefoon, mail, wachtwoord) 
                VALUES ('$user_id','$voornaam','$achternaam','$adres','$woonplaats','$postcode','$telefoon','$mail','$password')";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "New record created successfully";
        header("Location: index.php");
        }
        catch(PDOException $e)
        {
        echo $sql . "<br>" . $e->getMessage();
        }

        $conn = null;
    } else if (!$pwd == $pwdR) {
        $message = "wachtwoord is niet het zelfde";
    }
?>
<form action="" id="reg-form" method="post">
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