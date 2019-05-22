
<section id="agenda">
   <div class="grid-container">
        <?php 
            $id = $_SESSION['id'];

            $taskQuery = $conn->prepare("SELECT * FROM task where User_ID=?");
            $taskQuery->execute(array($id));
            $result = $taskQuery->setFetchMode(PDO::FETCH_ASSOC); 
            if($taskQuery->rowCount() > 0) {
                while($row = $taskQuery->fetch(PDO::FETCH_ASSOC)){
                    $date = $row['Date'];
                    $startTime = $row['Time'];
                    $endTime = $row['End_time'];
                    $color = $row['Color_ID'];
                    $discription = $row['Description'];
                    $priority = $row['Priority'];
                    $taskName = $row['Task'];

                    $currentDate = date("Y/m/d");
                    $startdate = strtotime($currentDate);
                    $startdate = strtotime("-1 day");
                    $enddate = strtotime("+7 days", $startdate);

                    while ($startdate < $enddate) {
                        $startdate = strtotime("+1 day", $startdate);
                                                
?>
                        <div class="day">
                            <h4><?php  echo date("l", $startdate);?></h4> 
                            <div class="<?php echo date("l", $startdate);?> lane">
                                
                            </div>
                        </div>
                        <?php
                    }
                }
            } else {
                echo 'fail' ;
            }
?>
    </div>
</section>
