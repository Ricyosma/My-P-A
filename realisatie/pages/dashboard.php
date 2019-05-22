<?php
    require 'includes/connection.php';


    $options = "Kies uw kleur";
    $stmt = $conn->query("SELECT DISTINCT Color FROM color");
    while ($row = $stmt->fetch()){
        $options = $options."<option>$row[0]</option>";
    }

    if (isset($_POST['submit'])) {
        $taskName = $time = $date = $priority = $description = '';

        $taskName = $_POST['taskName'];
        
        $time = $_POST['time'];

        $date = $_POST['date'];

        $priority = $_POST['range'];
        
        $description = $_POST['description'];

        $color_name = $_POST['Color'];

        $query = $conn->prepare("SELECT Color_ID FROM Color WHERE Color=?");
        $query->execute(array($color_name));
        $row = $query->fetch(PDO::FETCH_BOTH);
        if($query->rowCount() > 0) {
            $color_id = $row['Color_ID'];
        } else {
            $_SESSION['dashmessage'] = 'error';
        }
        
        try {
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO task (Task, Priority, Description, Color_ID, Date, Time) 
                    VALUES ('$taskName','$priority', '$description', '$color_id', '$date', '$time')";
            // use exec() because no results are returned
            $conn->exec($sql);

            header("Location: index.php?page=dashboard");
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        $conn = null;
    }
?>
<div class="left">
    <section id="dashMessage">
        <div id="messageHolder">
            <h3>Task change output:</h3>
            <div id="messageOutput">
                <?php 
                    if ($dashMessage = 'There are no changes made.') {
                    
                    } else {
                        $dashMessage = 'There are no changes made.';
                    }
                    echo $dashMessage;
                ?>
            </div>
        </div>
    </section>
    <?php 

        include 'pages/agenda.php';
    
    ?>
</div>
<section id="dashboard">
    <form action="" method="post">
        <div id="dashControls">
            <div class="dashInfo">
                <h3 class="title">Task name</h3>
                <input type="text" name="taskName" id="taskName" placeholder="" require>
            </div>
            <div class="dashInfo">
                <h3 class="title">Time</h3>
                <input type="time" name="time" id="taskTime" require>
            </div>
            <div class="dashInfo">
                <h3 class="title">Date</h3>
                <input type="date" name="date" id="" require>
            </div>
            <div class="dashInfo">
                <h3 class="title">Priority</h3>
                <input type="range" name="range" id="" min="0" max="5" require>
            </div>
            <div id="discription">
                <h3>Description</h3>
                <textarea name="description" id="taskDisc" rows="8" require></textarea>
            </div>
            <div class="dashInfo">
                <h3>Color</h3>
                <select name="Color" id="" return>
                    <option><?php echo $options;?></option>
                </select>
            </div>
            <button id="goButton" type="submit" name="submit">Go</button>
            <button id="stopButton">Cancel</button>
        </div>
    </form>
</section>