<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="theme-color" content="#000000">
<meta name="msapplication-TileColor" content="#da532c">
<link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/faviocn/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
<link rel="mask-icon" href="assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
<link rel="stylesheet" href="assets/css/index.css">
<link rel="icon" href="assets/img/mainlogo.png">
<link rel="manifest" href="./manifest.json">
<title>Chop Bar</title>
<script>
    if('serviceWorker' in navigator){
        navigator.serviceWorker.register('./service-worker.js');
    };
</script>

<?php include_once('includes/navbar.php');?>

<body style="overflow-x: hidden">    
    <div class="row maincarousel">
        <div class="col-2">
            <a href="user.php"><i class="fa fa-user footericon fa-2x"></i></a> 
            <br>
            <div class="bodyicons">
            <a href="https://twitter.com/Okafor__Somto" target="_blank"><i class="fab fa-twitter-square bodyicon fa-2x"></i></a>
            <a href="https://www.linkedin.com/in/somtochukwu-okafor-3b04561a6/" target="_blank"><i class="fab fa-linkedin bodyicon fa-2x"></i></a>
            <a href="https://www.instagram.com/somtookafor_/" target="_blank"><i class="fab fa-instagram bodyicon fa-2x"></i></a>
            <a href="https://github.com/Wavist" target="_blank"`><i class="fab fa-github bodyicon fa-2x"></i></a>
            </div>
        </div>
        
        <div class="col-10">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
            <div class="carousel-inner">
                <div class="carousel-item">
                        <div class="bodytext col-5">
                            <p style="color: ef7b45" class="outerp">DIET PLANS </p> 
                            <p class="innerp">JUST FOR YOU</p></div>
                            <p class="smallp">Get started on your fitness journey</p>
                            <a href="workout.php" class="btn btn-secondary carouselbtn">Lets Go!</a>
                        <div class="col-5 imgbody">
                            <img src="assets/img/M4E7X3z80PQ.png" alt="" height="380px" width="480px">
                        </div>
                </div>


            <div class="carousel-item active">
                    <div class="bodytext col-5">
                        <p style="color: ef7b45" class="outerp">WORKOUT</p> 
                        <p class="innerp">PLANS FOR YOU</p>
                    </div>
                        <p class="smallp">Get started on your fitness journey</p>
                        <a href="workout.php" class="btn btn-secondary carouselbtn">Lets Go!</a>
                    <div class="col-5 imgbody">
                        <img src="assets/img/M4E7X3z80PQ (2).png" alt="" height="380px" width="480px">
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="bodytext col-5">
                        <p style="color: ef7b45" class="outerp">MORE</p> 
                        <p class="innerp">JUST FOR YOU</p>
                    </div>
                        <p class="smallp">Get started on your fitness journey</p>
                        <a href="workout.php" class="btn btn-secondary carouselbtn">Lets Go!</a>
                    <div class="col-5 imgbody">
                        <img src="assets/img/M4E7X3z80PQ (3).png" alt="" height="380px" width="480px">
                    </div>
                </div>
        </div>
                
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
                <span class="sr-only">Next</span>
                </a>
    </div>
</body>

<?php include_once('includes/footer.php'); ?>
    

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
