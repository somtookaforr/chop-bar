<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/log.css">
<link rel="icon" href="assets/img/mainlogo.png">
<title>Chop Bar</title>

    <?php
        include_once('includes/navbar.php');
        require_once('db/log_db.php');


    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: login.php");
        exit;
    }
    ?> 

<body>
   <div class="container">
       <form method="post" action="all_log.php">
            <h1 style="color: #EF7B45;">Welcome to Log</h1>
            <h4 class="my-4">Progress needs to measured to ascertain growth.</h4>
            <div class="tab">
                <p>Select your exercise or workout</p>

                <select name="exercise" required class="tab form-control">
                    <optgroup value="" label="Shoulders">
                        <option value="Pull-downs">Pull-downs</option>
                    </optgroup>
                    <optgroup value="" label="Chest">
                        <option value="Chest Pres">Chest Press</option>
                        <option value="Push-ups">Push-ups</option>
                        <option value="Dumbell flys">Dumbell flys</option>
                    </optgroup>
                    <optgroup value="" label="Biceps">
                        <option value="Biceps curl">Biceps curl</option>
                    </optgroup>
                    <optgroup value="" label="Triceps">
                        <option value="Tricep dips">Tricep dips</option>
                        <option value="Lateral pulldowns">Lateral pulldowns</option>
                    </optgroup>
                    <optgroup value="" label="Abdominals">
                        <option value="Sit-ups">Sit-ups</option>
                        <option value="Russian twist">Russian twist</option>
                        <option value="Leg raises">Leg raises</option>
                        <option value="Crunches">Crunches</option>
                    </optgroup>
                    <optgroup value="" label="Back">
                        <option value="Superman fly">Superman fly</option>
                        <option value="Pull-ups">Pull-ups</option>
                        <option value="Bent-over rows">Bent-over rows</option>
                    </optgroup>
                    <optgroup value="" label="Legs">
                        <option value="Squats">Squats</option>
                        <option value="Deadlifts">Deadlifts</option>
                        <option value="Calf raises">Calf raises</option>
                    </optgroup>
                </select>

                <p class="mt-4">How much added weight? (kg)</p>
                <input type="text" name="weight" required class="form-control">
                <p class="mt-4">How many sets?</p>
                <input type="number" name="sets" required class="form-control">
                <p class="mt-4">How many reps?</p>
                <input type="number" name="reps" required class="form-control">
            </div>

            <input type="submit" name="submit" class="logbtn btn mt-3 py-2" value="Log">
            <a href="all_log.php" class="viewlogBtn mt-3 py-2 mx-1 btn btn-dark border">View Logs</a>
       </form>
   </div>
</body>

<?php include_once('includes/footer.php'); ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>