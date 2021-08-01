<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/diet.css">
<link rel="icon" href="assets/img/mainlogo.png">

    <?php
    include_once('includes/navbar.php');
    ?>
    
    <?php
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
    }
    ?>  

 <body>   
<br>
    <div class="text-center">
        <h5>DIET TIPS</h5>  
    </div>   


    <div class="container">
        <div class="row">
            <div class="col">
            <div class="card">
        <div class="card-body dietone">
        <h5 class="card-title" style="color: #EF7B45;">Intermittent Fasting</h5>
        <p class="card-text">
            Intermittent fasting is a dietary strategy that cycles between periods of fasting and eating.
            Various forms exist, including the 16/8 method, which involves limiting your calorie intake to 8 hours per day, and the 5:2 method, which restricts your daily calorie intake to 500–600 calories twice per week. <br>
            <b style="color: #EF7B45">How it works:</b> Intermittent fasting restricts the time you’re allowed to eat, which is a simple way to reduce your calorie intake. This can lead to weight loss.
        </p>
        </div>
        </div>
            </div>
            <div class="col">
            <div class="card">
        <div class="card-body diettwo">
        <h5 class="card-title" style="color: #EF7B45;">Low-fat diet</h5>
        <p class="card-text">
            Like low-carb diets, low-fat diets have been popular for decades.
            In general, a low-fat diet involves restricting your fat intake to 30% of your daily calories.
            Some very- and ultra-low-fat diets aim to limit fat consumption to under 10% of calories.<br>
            <b style="color: #EF7B45">How it works:</b> Low-fat diets restrict fat intake because fat provides about twice the number of calories per gram, compared with the other two macronutrients — protein and carbs.
        </p>
        </div>
        </div>
            </div>
            <div class="col">
            <div class="card">
        <div class="card-body dietthree">
        <h5 class="card-title" style="color: #EF7B45;">Plant-based diets</h5>
        <p class="card-text text-secondary">
            Plant-based diets may help you lose weight. Vegetarianism and veganism are the most popular versions, which restrict animal products for health, ethical, and environmental reasons.
            However, more flexible plant-based diets also exist, such as the flexitarian diet, which is a plant-based diet that allows eating animal products in moderation. <br>
            <b style="color: #EF7B45">How it works:</b> There are many types of vegetarianism, but most involve eliminating all meat, poultry, and fish. Some vegetarians may likewise avoid eggs and dairy.
        </p>
        </div>
        </div>
            </div>
    </div>
    </div>
<br>
</body>

    <?php
    include_once('includes/footer.php');
    ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
