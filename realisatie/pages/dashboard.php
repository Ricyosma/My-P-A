<?php
require 'includes/connection.php';


$options = "Kies uw kleur";
$stmt = $conn->query("SELECT DISTINCT Color FROM color");
while ($row = $stmt->fetch()){
    $options = $options."<option>$row[0]</option>";
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
                <input type="text" name="taskName" id="taskName" placeholder="">
            </div>
            <div class="dashInfo">
                <h3 class="title">Time</h3>
                <input type="time" name="dash" id="taskTime">
            </div>
            <div class="dashInfo">
                <h3 class="title">Priority</h3>
                <input type="range" name="range" id="" min="0" max="5">
            </div>
            <div id="discription">
                <h3>Description</h3>
                <textarea name="discription" id="taskDisc" rows="8"></textarea>
            </div>
            <div class="dashInfo">
                <h3>Color</h3>
                <select name="Color" id="">
                    <option><?php echo $options;?></option>
                </select>
            </div>
            <button id="goButton" type="submit">Go</button>
            <button id="stopButton">Cancel</button>
        </div>
    </form>
</section>