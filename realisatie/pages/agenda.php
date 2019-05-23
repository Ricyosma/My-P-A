<section id="agenda">
   <div class="grid-container">
   <div class="day">
       <h4 style="margin-bottom:0px; margin-top: 0;">Time:</h4>
          <div class="lane" style="text-align: center;">
          <?php
                                      $x = 0;
                while( $x++ < 24){
                    $timetoprint = date('G:i:s',mktime($x,0,0,1,1,2019));
                    echo  $timetoprint . '<br>';
                 }
                ?>
              
          </div>  
        </div>
        <?php 

            $id = $_SESSION['id'];
            $day = date('w');
            $day = $day - 1;
            $week_start = date("Y/m/d", strtotime('-'.$day.' days'));
            $startdate = strtotime($week_start);
            $currentdate = strtotime($week_start);
            $currentDate =  date("Y/m/d", $currentdate);
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
                    <div class="<?php echo date("l", $startdate);
                    if ( date("l") === date("l", $startdate)){
                        echo ' currentDay ';
                    }
                    
                    ?> lane">
<?php 
                        $dayQuery = $conn->prepare("SELECT * FROM task WHERE Date=? and User_ID = ? ORDER BY DATE(Time) DESC, Time ASC");
                        $dayQuery->execute(array(date("Y/m/d", $startdate),$id));
                        $result2 = $dayQuery->setFetchMode(PDO::FETCH_ASSOC); 
                        if($dayQuery->rowCount() > 0) {
                            while($row = $dayQuery->fetch(PDO::FETCH_ASSOC)){
?>
                                    <?php
                                        $color_id = $row['Color_ID'];
                                        $query = $conn->prepare("SELECT Color FROM Color WHERE Color_ID=?");
                                        $query->execute(array($color_id));
                                        $row2 = $query->fetch(PDO::FETCH_BOTH);
                                        if($query->rowCount() > 0) {
                                            $color_name = $row2['Color'];
                                        } 
                                    ?>
                                    <div class="task <?php echo $color_name; ?> >">
                                        <div class="taskWrapper">
                                            <div class="agendaTime">
                                                <h6><?php echo $row['Time'] ?></h6>
                                            </div>
                                            <div class="nameHolder">
                                                <h5><?php echo $row['Task'];?></h5>
                                            </div>
                                            <div class="agendaTime">
                                                <h6><?php echo $row['End_time'] ?></h6>
                                            </div>  
                                        </div>                                              
                                    </div>
<?php
                            }
                        } 
                    $startdate = strtotime("+1 day", $startdate);
?>
                        </div>
                    </div>
<?php
            }
?>
    </div>
</section>
