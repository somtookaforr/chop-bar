
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/user-forms.css">

<?php
require_once "includes/signup_db.php";
?>

<body class="signup" style="overflow: hidden;">
    <div class="container">
        <div class="row">

            <div class="col logo">
            <div style="display:inline-block;vertical-align:top;margin-top: 1rem;">
            <img src="assets/img/mainlogoo.png" alt="logo" width="150rem" class="mainlogo"><br>
            </div>
            <div style="display:inline-block;margin-top: 1rem;">
            <p class="navlogo">CHOP</p> <p class="underlogo">BAR</p>
            </div> 
            </div>

            <div class="col">
            <div class="card signup_card">
            <div class="card-body">

            <form method="post" action="<?php $_PHP_SELF ?>">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
            <label for="exampleInputEmail1">Username</label>
            <input name="username" type="text" class="form-control" placeholder="Username"  value="<?php echo $username; ?>">
            <span class="help-block"><?php echo $username_err; ?></span>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
            <label for="exampleInputPassword1">Password</label>
            <input name="password" type="password" class="form-control" placeholder="Password" value="<?php echo $password; ?>">
            <span class="help-block"><?php echo $password_err; ?></span>  
            </div>

            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                        <label>Confirm Password</label>
                        <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                        <span class="help-block"><?php echo $confirm_password_err; ?></span>
                    </div>

            <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me to receive email notifications</label>
            </div>
            <div class="form-group" align="center">
                        <input type="submit" class="btn btn-warning" value="Submit">
                        <!-- <input type="reset" class="btn btn-default" value="Reset"> -->
                        <a href="index.php" class="btn btn-dark">Cancel</a>
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
            </form>
            </div>
            </div>
        </div>
   
    </div>
    </div>


</body>