
<?php 

    include 'pages/agenda.php';
    
?>
<section id="dashboard">
    <form action="" method="post">
        <div id="dashControls">
            <div class="dashInfo">
                <h2 class="title">Task name</h2>
                <input type="text" name="taskName" id="taskName" placeholder="">
            </div>
            <div class="dashInfo">
                <h2 class="title">Time</h2>
                <input type="time" name="" id="">
            </div>
            <div class="dashInfo">
                <h2 class="title">Priority</h2>
            </div>
            <div id="discription">
                <h2>Description</h2>
                <textarea name="discription" id="" cols="30" rows="10"></textarea>
            </div>
        </div>
        <button type="submit">Go</button>
    </form>
</section>