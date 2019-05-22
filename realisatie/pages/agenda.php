<?php 
    $id = $_SESSION['id'];
    
    $agendaQuery = $conn->prepare("SELECT Task_ID FROM agenda WHERE user_ID =?");
    $agendaQuery->execute(array($id));
    $row = $agendaQuery->fetch(PDO::FETCH_BOTH);
    if($agendaQuery->rowCount() > 0) {
        $taskId = $row['Task_ID'];
        echo $agendaId;
    } else {
        // $_SESSION['dashmessage'] = $agendaQuery.'error';
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
