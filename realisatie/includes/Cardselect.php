<?php

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
            header("Location: index.php?page=agenda");
            
?>