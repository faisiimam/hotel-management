<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'database.php';
    $username = $_POST["username"];
    $password = $_POST["password"]; 
    
     
    $sql = "Select * from users where username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location: welcome.php ");

    } 
    else{
        $showError = "Invalid Credentials";
    }
}
    
?>

<!DOCTYPE html>
<head>
    <title>PHP Login System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/style.css" rel="stylesheet" media="screen">
</head>

<body>
<?php
    if($login){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<div class="logo">
    <img src="../img/site-logo.png" alt="Trips">
    <h2>Hotel Sleekhive</h2>
</div>
<form action="" class="form-horizontal" id="login_form">
    <h2>Sign IN</h2>

    <div class="line"></div>
    <div class="form-group">
        <input type="text" id="inputEmail" name="username" placeholder="Username">
    </div>
    <div class="form-group">
        <input type="password" id="inputPassword" name="password" placeholder="Password">
    </div>
    <a class="forgotten-password-link" href="forgot_pwd.php">Forgot password?</a>
    <a href="signup.php"
       class="btn btn-lg btn-register">Register</a>

    <button id="signin" type="submit" class="btn btn-lg btn-primary btn-sign-in" 
            data-loading-text="Loading...">Sign in
    </button>
    <div class="messagebox">
        <div id="alert-message"></div>
    </div>
    <div class="social">
        <a href="twitter_connect.php"><img src="img/twitter.png"/></a>
        <a href="https://www.facebook.com/v2.10/dialog/oauth?client_id=331043723706186&amp;state=055677928fca3e0b54f9ff332553b549&amp;response_type=code&amp;sdk=php-sdk-5.7.0&amp;redirect_uri=https%3A%2F%2Fprojects.devlup.com%2FLoginSystemv45%2Ffacebook_connect.php&amp;scope=email"><img src="img/fb.png"/></a>
        <a href="https://accounts.google.com/o/oauth2/auth?response_type=code&amp;redirect_uri=https%3A%2F%2Fprojects.devlup.com%2FLoginSystemv45%2Fgoogle_connect.php&amp;client_id=799370708448.apps.googleusercontent.com&amp;scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fplus.me&amp;access_type=offline&amp;approval_prompt=auto"><img src="img/gplus.png"/></a>

    </div>
</form>

</script>
<script type = "text/javascript" >
    (function () {
        var po = document.createElement('script');
        po.type = 'text/javascript';
        po.async = true;
        po.src = '../../apis.google.com/js/client_plusone.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(po, s);
    })();
</script>
<script>
    $(document).ready(function () {
        jQuery.validator.addMethod("noSpace", function (value, element) {
            return value.indexOf(" ") < 0 && value != "";
        }, "Spaces are not allowed");
 jQuery.validator.addMethod("noSplchars", function (value, element) {
			  var pattern = /^[a-zA-Z0-9]+$/;
            return pattern.test(value)  && value != "";
        }, "Special characters are not allowed");

        //add validator
        $("#login_form").validate({
            onfocusout: false,
            onkeyup: false,
            onclick: false,
            rules: {
                username: {
                    required: true,
                    noSpace: true,
					noSplchars: true
                },
                password: {
                    required: true,
                    minlength: 6
                }
            },

            messages: {
                username: {
                    required: "Enter your username"
                },
                password: {
                    required: "Enter your password",
                    minlength: "Password must be minimum 6 characters"
                },
            },


            errorPlacement: function (error, element) {
                error.hide();
                $('.messagebox').hide();
                error.appendTo($('#alert-message'));
                $('.messagebox').slideDown('slow');


            },
            highlight: function (element, errorClass, validClass) {
                $(element).parents('.form-group').addClass('has-error');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).parents('.form-group').removeClass('has-error');
                $(element).parents('.form-group').addClass('has-success');
            }
        });

        $("#login_form").submit(function () {
            $('.social').hide('slow');
            if ($("#login_form").valid()) {
                $('.messagebox').slideUp('slow');
                var data1 = $('#login_form').serialize();
                $("button").button('loading');
                $.ajax({
                    type: "POST",
                    url: "welcome.php",
                    data: data1,
                    dataType: 'json',
                    success: function (msg) {
                        if (msg.result == 1) {
                            $('.messagebox').addClass("success-message");
                            $('.message').slideDown('slow');
                            $('#alert-message').text("Logged in.. Redirecting");

                            $('#login_form').fadeOut(5000);
                            //$("button").button('reset');
                            window.location = "forgot_pwd.php"
                        } else {
                            $("button").button('reset');
                            console.log(msg.result);
                            $('.messagebox').hide();
                            $('.messagebox').addClass("error-message");
                            $('#alert-message').html(msg.result);
                            $('.messagebox').slideDown('slow');
                        }
                    },
                    error: function (msg) {
                        $("button").button('reset');
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