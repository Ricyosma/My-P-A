<?php 
    $id = $_SESSION['id'];
    
    $agendaQuery = $conn->prepare("SELECT Agenda_ID FROM Agenda WHERE user_ID =?");
    $agendaQuery->execute(array($id));
    $row = $agendaQuery->fetch(PDO::FETCH_BOTH);
    if($agendaQuery->rowCount() > 0) {
        $agendaId = $row['Agenda_ID'];
        echo $agendaId;
    } else {
        // $_SESSION['dashmessage'] = $agendaQuery.'error';
    }

    // $taskQuery = $conn->prepare("SELECT Task_ID FROM agenda_tasks WHERE Agenda_ID =?");
    // $taskQuery->execute(array($agendaId));
    // $row = $taskQuery->fetch(PDO::FETCH_BOTH);
    // if($taskQuery->rowCount() > 0) {
    //     while($row = $taskQuery->fetch(PDO::FETCH_ASSOC)){

    //     }
    // } else {
    //     $_SESSION['dashmessage'] = $taskQuery.'error';
    // }
    
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
