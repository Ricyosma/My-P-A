<?php 
	require_once('includes/connection.php');
    if(isset($_POST['submit'])){

        $taskName = $time = $date = $priority = $description = '';

        $taskName = $_POST['taskName'];
        
        $time = $_POST['time'];

        $date = $_POST['date'];

        $priority = $_POST['range'];
        
        $description = $_POST['taskDisc'];

        $color = $_POST['Color'];
            
        try {
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO task (Task, Priority, Description, Date, Time) 
                    VALUES ('$taskName','$priority', '$description','$date','$time')";
            // use exec() because no results are returned
            $conn->exec($sql);
            echo "Add succes full";

        // header("Location: ../index.php");
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        $conn = null;
        header("Location: index.php?page=dashboard");
    } else {
        // $message = "wachtwoord is niet het zelfde";
        }
?>