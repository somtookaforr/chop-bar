<?php
require_once "db/config.php";

if(!mysqli_select_db($link,'fitness')){
    echo '';
}

$exercise = isset($_POST['exercise']) ? $_POST['exercise'] : '';
$weight = isset($_POST['weight']) ? $_POST['weight'] : '';
$sets = isset($_POST['sets']) ? $_POST['sets'] : '';
$reps = isset($_POST['reps']) ? $_POST['reps'] : '';


if($_SERVER["REQUEST_METHOD"] == "POST")
{     
    // executing insert query
    $sql = mysqli_query($link,"INSERT INTO logs (exercise,weight,sets,reps) VALUES ('$exercise','$weight','$sets','$reps')");
		
    if($sql)
    {
        header("location: all_log.php");
        echo '<script type="text/javascript"> alert("Data Inserted Successfully!"); </script>';  // alert message      
    }
    else
    {
    	echo '<script type="text/javascript"> alert("Error Uploading Data!"); </script>';  // when error occur
    }
    mysqli_close($link);
}
?>
<!-- <?php
    require_once "db/config.php";
    
    $exercise = $sets = $reps = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $sql = "SELECT id FROM logs WHERE exercise = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_exercise);
            
            // Set parameters
            $param_exercise = trim($_POST["exercise"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
        
                $exercise = trim($_POST["exercise"]);
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
                // Close statement
                mysqli_stmt_close($stmt);
                }
            

            $sql = "INSERT INTO logs (exercise) VALUES (?)";
            if($stmt = mysqli_prepare($link, $sql)){
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "s", $param_exercise);
                
                // Set parameters
                $param_exercise = $exercise;
                
                // Attempt to execute the prepared statement
                if(!mysqli_stmt_execute($stmt)){
                    echo '<script>alert("Something went wrong. Please try again later.")</script>';
                }else{
                    echo '<script>alert("You will be Notified once we launch")</script>';
                }
                
                // Close statement
                mysqli_stmt_close($stmt);
            }
        }
?> -->