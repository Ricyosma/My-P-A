<?php

	require_once('../includes/connection.php');
if(isset($_POST['submit'])){
	$message = $voornaam = $achternaam = $adres = $woonplaats = $postcode = $telefoon =  $mail = $password = $pwd = '';

    $voornaam = $_POST['Voornaam'];
    
	$achternaam = $_POST['Achternaam'];

    $mail = $_POST['E-mail'];
    
	$pwd = $_POST['password'];
	$pwdR = $_POST['passwordR'];

    $password = MD5($pwd);
    
    if ($pwd == $pwdR) {
        try {
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO user (First_name, Last_name, E_mail, passw) 
                VALUES ('$voornaam','$achternaam', '$mail','$password')";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "New login succesfully created";
       // header("Location: ../index.php");
        }
        catch(PDOException $e)
        {
        echo $sql . "<br>" . $e->getMessage();
        }

        $conn = null;
    } else {
        $message = "wachtwoord is niet het zelfde";
    }
}
?>
<form action="" id="reg-form" method="post">
        <div class="form-group">
            <label for="exampleInputEmail2">Voornaam</label>
            <input type="firstname" class="form-control" id="exampleInputEmail2" placeholder="Vul uw voornaam in" required name="Voornaam">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail2">Achternaam</label>
            <input type="lastname" class="form-control" id="exampleInputEmail2" placeholder="Vul uw achternaam in" required name="Achternaam">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail2">Emailadres</label>
            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Vul uw email in" required name="E-mail">
            <small id="emailHelp1" class="form-text">Uw email zal nooit worden gedeeld met andere partijen.</small> 
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Wachtwoord</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Wachtwoord" required name="password">
            <br>
            <label for="exampleInputPassword2">Herhaal wachtwoord</label>
            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Herhaal uw wachtwoord" required name="passwordR">
            <h4> <?php if(isset($_POST['submit'])){
            echo $message;}?> </h4>
        </div>
    <button type="submit" name='submit' class="btn-sub btn btn-primary">Registreren</button>
  </form>