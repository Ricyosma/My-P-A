<?php

	require_once('connection.php');

	$user_id = $voornaam = $achternaam = $adres = $woonplaats = $postcode = $telefoon =  $mail = $password = $pwd = '';

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
    } else {
        echo "wachtwoord is niet het zelfde";
    }
?>