<div id="left">
    <section id="dashMessage">
    <div id="messageHolder">
        <div id="messageOutput">
            <?php 
                // echo $dashMessage 
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
                <h2 class="title">Task name</h2>
                <input type="text" name="taskName" id="taskName" placeholder="">
            </div>
            <div class="dashInfo">
                <h2 class="title">Time</h2>
                <input type="time" name="dash" id="">
            </div>
            <div class="dashInfo">
                <h2 class="title">Priority</h2>
                <div class="star-rating">
                    <span class="far fa-circle" data-rating="1"></span>
                    <span class="far fa-circle" data-rating="2"></span>
                    <span class="far fa-circle" data-rating="3"></span>
                    <span class="far fa-circle" data-rating="4"></span>
                    <span class="far fa-circle" data-rating="5"></span>
                    <input type="hidden" name="whatever1" class="rating-value" value="2.56">
                </div>
            </div>
            <div id="discription">
                <h2>Description</h2>
                <textarea name="discription" id="taskDisc" rows="8"></textarea>
            </div>
            <div class="dashInfo">
                
            </div>
            <button id="goButton" type="submit">Go</button>
            <button id="stopButton">Cancel</button>
        </div>
    </form>
</section>