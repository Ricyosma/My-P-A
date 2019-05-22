<section id="agenda">
   <div class="grid-container">
        <?php 
            $id = $_SESSION['id'];

            $taskQuery = $conn->prepare("SELECT Task FROM task where User_ID=?");
            $taskQuery->execute(array($id));
            $result = $taskQuery->setFetchMode(PDO::FETCH_ASSOC); 
            if($taskQuery->rowCount() > 0) {
                if($row = $taskQuery->fetch(PDO::FETCH_ASSOC)){
                    // $date = $row['Date'];
                    $currentDate = date("Y/m/d");
                    $startdate = strtotime($currentDate);
                    $startdate = strtotime("-1 day");
                    $enddate = strtotime("+7 days", $startdate);
                    /*PROBLEEM!!!, de code is technisch gezien goed. MAAR, de loop zorgt er voor dat die een 1 regel laat zien en genereert de HELE tabel. als die 
                    row 2 wilt doen. herhaalt die het en zet die het er dus onder met de waarde van row 2 met het maken van de hele week. als er een if ofzo is, blijft die soort van 
                    lopen denk ik door row 1. - Riccardo */
                     while($startdate < $enddate) {
                        $startdate = strtotime("+1 day", $startdate);
?>
                        <div class="day">
                            <h4><?php  echo date("l", $startdate);?></h4> 
                            <div class="<?php echo date("l", $startdate);?> lane">
<?php 
                            $dayQuery = $conn->prepare("SELECT * FROM task WHERE Date=?");
                            $dayQuery->execute(array(date("Y/m/d", $startdate)));
                            $result2 = $dayQuery->setFetchMode(PDO::FETCH_ASSOC); 
                            if($dayQuery->rowCount() > 0) {
                                while($row2 = $dayQuery->fetch(PDO::FETCH_ASSOC)){
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
