<?php
 
// Include config file
require_once "database.php";
 
// Define variables and initialize with empty values
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate new password
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Please enter the new password.";     
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "Password must have atleast 6 characters.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm the password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
        
    // Check input errors before updating the database
    if(empty($new_password_err) && empty($confirm_password_err)){
        // Prepare an update statement
        $sql = "UPDATE users SET password = ? WHERE id = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);
            
            // Set parameters
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Password updated successfully. Destroy the session, and redirect to login page
                session_destroy();
                header("location: signin.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($conn);
}
?>
 
<!DOCTYPE html>
<head>
    <title>PHP Login System</title>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/style.css" rel="stylesheet" media="screen">
</head>
<body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<div class="logo">
    <img src="../img/site-logo.png" alt="Trips">
    <h2>Hotel Sleekhive</h2>

</div>
<form class="form-horizontal" id="forgot_pwd" method="post">
    <h2>Forgot Password</h2>

    <div class="line"></div>
    <div class="control-group">
        <input type="text" id="username" name="username" placeholder="Username">
    </div>
    <div class="control-group">
        <input type="text" id="email" name="email" placeholder="Email">
    </div>
    <a href="signup.php" class="btn btn-lg btn-register">Register</a>

    <button
            type="submit" class="btn btn-lg btn-primary btn-sign-in" data-loading-text="Loading...">Password Reset
    </button>
    <div class="messagebox">
        <div id="alert-message"></div>
    </div>
</form>
<script type="text/javascript">
    $(document).ready(function () {

        $('#forgot_pwd').validate({
            debug: true,
            rules: {
                username: {
                    required: true

                },
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                username: {
                    required: "Enter your Username"
                },
                email: {
                    required: "Enter your Email",
                    email: "Enter valid email address"
                },
            },

            errorPlacement: function (error, element) {
                error.hide();
                $('.messagebox').hide();
                error.appendTo($('#alert-message'));
                $('.messagebox').slideDown('slow');


            },
            highlight: function (element, errorClass, validClass) {
                $(element).parents('.control-group').addClass('error');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).parents('.control-group').removeClass('error');
                $(element).parents('.control-group').addClass('success');
            }
        });


        $("#forgot_pwd").submit(function () {

            if ($("#forgot_pwd").valid()) {
                var data1 = $('#forgot_pwd').serialize();
                $.ajax({
                    type: "POST",
                    url: "forgot_pwd.php",
                    data: data1,
                    success: function (msg) {
                        console.log(msg);
                        $('.messagebox').hide();
                        $('#alert-message').html(msg);
                        $('.messagebox').slideDown('slow');
                    },
					 error: function (msg) {
                        $('.messagebox').hide();
                        $('.messagebox').addClass("error-message");
                        $('#alert-message').html(msg.result);
                        $('.messagebox').slideDown('slow');
                    }
                });
            }


            return false;


        });
    });
</script>
</body>
</html>