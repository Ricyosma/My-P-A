<?php 
    $id = $_SESSION['id'];

    $taskQuery = $conn->prepare("SELECT * FROM task where User_ID=?");
    $taskQuery->execute(array($id));
    $row = $taskQuery->fetch(PDO::FETCH_BOTH);
    if($taskQuery->rowCount() > 0) {
        while($row = $taskQuery->fetch(PDO::FETCH_BOTH)){
            $date = $row['Date'];
            $startTime = $row['Time'];
            $endTime = $row['End_time'];
            $color = $row['Color_ID'];
            $discription = $row['Description'];

        }
    } else {
        
    }
?>

<section id="agenda">
   <div class="grid-container">
        <div class="day">
            <h4>Monday</h4> 
            <div class="Monday lane">
                
            </div>
        </div>
        <div class="day">
            <h4>Tuesday</h4>
            <div class="Tuesday lane">

            </div>
        </div>
        <div class="day">
            <h4>Wednesday</h4>
            <div class="Wednesday lane">
            </div>
        </div>
        <div class="day">
            <h4>Thursday</h4>
            <div class="Thursday lane">

            </div>
        </div>
        <div class="day">
            <h4>Friday</h4>
            <div class="Friday lane">
            </div>
        </div>
        <div class="day">
            <h4>Saturday</h4>
            <div class="Saturday lane">

            </div>
        </div>
        <div class="day">
            <h4>Sunday</h4>
            <div class="Sunday">

            </div>
        </div>
    </div>
</section>
