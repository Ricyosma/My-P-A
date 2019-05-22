<section id="agenda">
   <div class="grid-container">
        <?php 
            $id = $_SESSION['id'];
            $day = date('w');
            $day = $day - 1;
            $week_start = date("Y/m/d", strtotime('-'.$day.' days'));
            $startdate = strtotime($week_start);
            $enddate = strtotime("+7 days", $startdate);
            while ($startdate < $enddate) {
?>
                <div class="day">
                    <h4>
                        <?php  
                            echo date("l", $startdate);
                            ?>
                            <br>
                            <?php
                            echo date("Y/m/d", $startdate);
                        ?>
                    </h4> 
                    <div class="<?php echo date("l", $startdate);?> lane">
<?php 
                            $dayQuery = $conn->prepare("SELECT * FROM task WHERE Date=? and User_ID = ?");
                            $dayQuery->execute(array(date("Y/m/d", $startdate),$id));
                            $result2 = $dayQuery->setFetchMode(PDO::FETCH_ASSOC); 
                            if($dayQuery->rowCount() > 0) {
                                while($row = $dayQuery->fetch(PDO::FETCH_ASSOC)){
                                    echo $row['Task'];
                                    echo $row['Date'];
                                    echo $row['Description'];
                                }
                            } 
                        $startdate = strtotime("+1 day", $startdate);
?>
                            </div>
                        </div>
                        <?php
                }
                // }
            // } 
            // else {
            //     echo 'fail' ;
            // }
?>
    </div>
</section>
