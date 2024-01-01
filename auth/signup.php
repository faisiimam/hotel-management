<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'database.php';    
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["retype_password"];
    $exists=false;
    if(($password == $cpassword) && $exists==false){
        $sql = "INSERT INTO `users` ( `username`, `email`, `password`, `dt`) VALUES ('$username', '$email', '$password', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
        }
    } else{
        $showError = "Passwords do not match";
    }
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
<?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
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
<form class="form-horizontal" id="signup" method="post">
    <h2>Register</h2>

    <div class="line"></div>
    <div class="form-group">
        <input type="text" id="inputEmail" name="email" placeholder="Email">
    </div>
    <div class="form-group">
        <input type="text" id="inputuserid" name="username" placeholder="Username">
    </div>
    <div class="form-group">
        <input type="password" id="inputPassword" name="password" placeholder="Password">
    </div>
    <div class="form-group">
        <input type="password" id="inputPassword_2" name="retype_password" placeholder="Retype Password">
    </div>

    <button type="submit"
            class="btn btn-lg btn-primary btn-sign-in" data-loading-text="Loading...">Register
    </button>
    <a href="signin.php"
       class="btn btn-lg btn-register">Sign in</a>
    <div class="messagebox">
        <div id="alert-message"></div>
    </div>
</form>
<script>
    $(document).ready(function () {

        jQuery.validator.addMethod("noSpace", function (value, element) {
            return value.indexOf(" ") < 0 && value != "";
        }, "Spaces are not allowed");
		 jQuery.validator.addMethod("noSplchars", function (value, element) {
			  var pattern = /^[a-zA-Z0-9]+$/;
            return pattern.test(value)  && value != "";
        }, "Special characters are not allowed");
        /*jQuery.validator.addMethod("maxlength", function (value, element, param) {
         console.log('element= ' + $(element).attr('name') + ' param= ' + param )
         if ($(element).val().length > param) {
         return false;
         } else {
         console.log($(element).val().length);
         return true;
         }
         }, "You have reached the maximum number of characters allowed for this field.");
         */

        $("#register_form").submit(function () {

            $("#register_form").validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    username: {
                        required: true,
                        noSpace: true,
					noSplchars: true
                    },
                    password: {
                        required: true,
                        minlength: 6
                        //maxlength: 8
                    },
                    retype_password: {
                        required: true,
                        equalTo: "#inputPassword"
                    },
                },
                messages: {
                    email: {
                        required: "Enter your email address",
                        email: "Enter valid email address"
                    },
                    username: {
                        required: "Enter Username",

                    },
                    password: {
                        required: "Enter your password",
                        minlength: "Password must be minimum 6 characters"
                        //maxlength: "Password must be maximum 8 characters"

                    },
                    retype_password: {
                        required: "Enter confirm password",
                        equalTo: "Passwords must match"
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

            if ($("#register_form").valid()) {
                var data1 = $('#register_form').serialize();
                $.ajax({
                    type: "POST",
                    url: "signup.php",
                    data: data1,
                    success: function (msg) {
                        console.log(msg);
                        $('.messagebox').hide();
                        $('#alert-message').html(msg);
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