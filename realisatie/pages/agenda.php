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
                    $currentDate = date("Y/m/d");
                    $startdate = strtotime($currentDate);
                    $enddate = strtotime("+7 days", $startdate);

                    while ($startdate < $enddate) {
                        $startdate = strtotime("+1 day", $startdate);
                                                
?>
                        <div class="day">
                            <h4>
                                <?php 
                                    echo date("l", $startdate);
                                ?>
                            </h4> 
                            <div class="
                                
                                <?php 
                                    echo date("l", $startdate);
                                ?> 
                            lane">
                    
                            <h4><?php  echo date("l", $startdate);?></h4> 
                            <div class="<?php echo date("l", $startdate);?> lane">
<?php 
                            $dayQuery = $conn->prepare("SELECT * FROM task WHERE Date=?");
                            $dayQuery->execute(array($currentDate));
                            $result = $dayQuery->setFetchMode(PDO::FETCH_ASSOC); 
                            if($dayQuery->rowCount() > 0) {
                                while($row = $dayQuery->fetch(PDO::FETCH_ASSOC)){
                                    echo $row['Task'];
                                }
                            }


?>
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
