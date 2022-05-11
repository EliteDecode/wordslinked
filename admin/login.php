<?php




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!--bootsrap-->
    <link rel="stylesheet" href="../styling/css/bootstrap.min.css">

    <!--aos for animations-->
    <link rel="stylesheet" href="../styling/css/aos.css">
    <link rel="stylesheet" href="./styling/css/animate.css">

    <!--owl carousel-->
    <link rel="stylesheet" href="../styling/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../styling/css/owl.theme.default.min.css">

    <!--font-awesome-->
    <link rel="stylesheet" href="../styling/fonts/css/all.min.css">

    <!--fresco-->
    <link rel="stylesheet" href="../styling/css/fresco.css">

    <!--tachycons-->
    <link rel="stylesheet" href="../styling/css/tachyons.css">
    <link rel="stylesheet" href="../styling/css/tachyons.css">



    <title>Document</title>
</head>

<style>
.form-control,
.form-control:focus,
.input-group-addon {
    border-color: #e1e1e1;
    border-radius: 0;
}


.signup-form {
    width: 40%;
    margin: 5% 30%;
}

@media (min-width: 0px) and (max-width: 969px) {

    .signup-form {
        width: 94%;
        margin: 15% 3%;
    }



}

.signup-form h2 {
    color: #636363;
    margin: 0 0 15px;
    text-align: center;

}

.signup-form .lead {
    font-size: 14px;
    margin-bottom: 30px;
    text-align: center;
}

.signup-form form {
    border-radius: 1px;
    margin-bottom: 15px;
    background: #fff;
    border: 1px solid var(--yellow);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}

.signup-form .form-group {
    margin-bottom: 20px;
}

.signup-form label {
    font-weight: normal;
    font-size: 13px;
}

.signup-form .form-control {
    min-height: 38px;
    box-shadow: none !important;
    border-width: 0 0 1px 0;
}

.signup-form .input-group-addon {
    max-width: 42px;
    text-align: center;
    background: none;
    border-width: 0 0 1px 0;
    padding-left: 5px;
}

.signup-form .btn {
    font-size: 16px;
    font-weight: bold;
    background: var(--yellow);
    border-radius: 3px;
    border: none;
    min-width: 140px;
    outline: none !important;


}

.signup-form .btn:hover,
.signup-form .btn:focus {
    background: var(--white);
    color: var(--yellow);
}

.signup-form a {
    color: var(--yellow);
    text-decoration: none;
}

.signup-form a:hover {
    text-decoration: underline;
}

.signup-form .fa {
    font-size: 17px;
    margin-top: 10px;
}

.signup-form .fa-paper-plane {
    font-size: 13px;
}

.signup-form .fa-check {
    color: #fff;
    left: 9px;
    top: 18px;
    font-size: 7px;
    position: absolute;
}
</style>

<?php include ('nav.php') ?>

<body>

    <div class="wrap">

        <div class="signup-form">
            <form action="/examples/actions/confirmation.php" method="post">
                <h2>LOGIN</h2>
                <p class="lead">It's free and hardly takes more than 30 seconds.</p>
                <div id="msg"></div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="email" class="form-control" name="email" placeholder="Enter Email" id='email'>
                    </div>
                    <div class="invalid-feedback email-error error-email" style='padding-left:5%'>
                        Please put your email.
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control" name="password" placeholder="Password"
                            id='password'>
                    </div>
                    <div class="invalid-feedback password-error error-password" style='padding-left:5%'>
                        Please choose a password.
                    </div>
                </div>



            </form>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" id='login'><i id="hide-fa"
                        class="fa  fa-spinner fa-spin"></i> &nbsp
                    Login &nbsp</button>
            </div>
            <p class="small text-center">By clicking the Sign Up button, you agree to our <br>Terms
                &amp; Conditions, and Privacy Policy.</p>
            <div class="text-center">Don't have an account? <a href="signup.php">Signup here</a>.</div>
        </div>


    </div>
    <?php  include('footer.php')?>



    <script>
    $(document).ready(function() {
        $("#hide-fa").hide();
        $("#login").click(function() {
            var email = $("#email").val();
            var password = $("#password").val();

            if (email == "") {
                $("#email").removeClass('form-control').addClass('form-control is-invalid');
                $('.error-email').show();
            } else {
                $("#email").removeClass('form-control is-invalid').addClass('form-control');
                $('.error-email').hide();
            }

            if (password == "") {
                $("#password").removeClass('form-control').addClass('form-control is-invalid');
                $('.error-password').show();
            } else {
                $("#password").removeClass('form-control is-invalid').addClass('form-control');
                $('.error-password').hide();
            }




            if (email != "" && password != "") {
                $("#hide-fa").show();

                $.ajax({
                    url: "../ajax_controls/admin_login_ajax.php",
                    method: "post",
                    data: {
                        email: email,
                        password: password
                    },
                    dataType: "text",
                    success: function(data) {
                        $("#msg").html(data);
                    }
                });

            } else {

            }

        });
    });
    </script>
</body>

</html>