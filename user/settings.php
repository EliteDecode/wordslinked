<?php
session_start();
$ad = $_SESSION['users'];

include ('../includes/db.php');
if (!isset($_SESSION['users'])) {
    header('location: login.php');
  }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!--bootsrap-->
    <link rel="stylesheet" href="../styling/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styling/css/jquery-ui.min.css">

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



    <title>Settings</title>
</head>


<style>
:root {
    --yellow: #333d51;
    --yellow: #d3ac2b;
    --white: #f4f3ea;
}

.ui-tabs-nav li {
    background-color: var(--yellow) !important;
    border: 1px solid var(--yellow) !important;
    margin: 1% 1% !important;
    padding: .2% !important;
    border-radius: 5px;
}

.ui-tabs-nav li a {
    color: #fff !important;
    font-weight: bold;
}

li.ui-tabs-active {
    background-color: var(--white) !important;
    border: 1px solid var(--yellow) !important;

}

li.ui-tabs-active a {
    color: var(--yellow) !important;
}

.btn-linked-alt {
    background-color: var(--white);
    border: 1px solid var(--yellow);
    color: var(--yellow) !important;
    font-weight: 600;

}

.btn-linked-alt:hover,
.btn-linked-alt:focus,
.btn-styled:hover,
.btn-styled:focus {
    background-color: var(--yellow);
    border: 1px solid var(--yellow);
    color: var(--white);
}

.form-group {
    margin: 3% 0%;
}


.wrap {
    overflow: hidden;
    width: 100%;

}

.btn-styled {
    position: relative;
    margin-top: 3%;
    background-color: var(--white);
    color: var(--yellow);
    border: 2px solid var(--yellow);
}

@media (min-width: 0px) and (max-width: 969px) {
    .ui-tabs-nav li {
        background-color: var(--yellow) !important;
        border: 1px solid var(--yellow) !important;
        margin: 2% 1% !important;
        padding: 1% !important;
        border-radius: 5px;
    }

    .ui-tabs-nav li a {
        color: #fff !important;
        font-weight: bold;
    }

    .wrap {
        height: 600px;
    }

    .btn-styled {
        position: relative;
        margin-top: 3%;
        margin-left: 14%;
        background-color: var(--white);
        color: var(--yellow);
        border: 2px solid var(--yellow);

    }

    .wrap_form {
        width: 100% !important;
        padding: 7%;
        margin: 7% 0% 0% 0% !important;
        box-shadow: 2px 4px 13px grey;
        border-radius: 10px;
    }

    .form-group {
        margin: 7% 0% !important;
    }
}


/* Preloader */

.preloader {
    background: #ffffff;
    bottom: 0;
    left: 0;
    position: fixed;
    right: 0;
    top: 0;
    z-index: 99999;
}

.rounder {
    width: 60px;
    height: 60px;
    position: absolute;
    top: 50%;
    left: 50%;
    margin: -26px 0 0 -26px;
    font-size: 10px;
    border-right: 5px solid var(--yellow);
    border-left: 5px solid var(--dark);
    border-radius: 50%;
    -webkit-animation: spinner 700ms infinite linear;
    animation: spinner 700ms infinite linear;
    z-index: 10000;
}

@-webkit-keyframes spinner {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }

    100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}

@keyframes spinner {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }

    100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}
</style>

<?php include ('nav.php') ?>

<body>
    <!-- Preloader Start -->
    <div class="preloader">
        <div class="rounder"></div>
    </div>
    <!-- Preloader End -->
    <div class="wrap">
        <div class="row">
            <div class="col-md-2 col-lg-2 col-xl-2">
                <?php include('sidenav.php') ?>
            </div>
            <div class="col-md-10 col-lg-10 col-xl-10">


                <div class="container mt-5 ml-0 mr-0 ">

                    <?php
                        
                        $result = selectOne('users', ['Email' => $ad]);

                        $id = $result['id'];
                       
                    ?>
                    <div id="tabs">
                        <ul>
                            <li><a href="#tabs-1"> Profile</a></li>
                            <li><a href="#tabs-2"> Password</a></li>
                            <li><a href="#tabs-3"> Photo</a></li>

                        </ul>

                        <!--Change Password-->
                        <div id="tabs-2">
                            <div class='wrap_form update' style=' margin-top:8%; width:70%' id='password-form'>
                                <div id="msg" class="alert alert-success valid-feedback" style=''></div>
                                <form action="" method="post" enctype="multipart/form-data" class='form'>
                                    <input type="hidden" name='id' value='<?php echo $id ?>' id='id'>
                                    <div class="form-group">
                                        <label for="payment" style="font-size:14px; font-weight:bold;">Old
                                            Password</label>
                                        <input type="password" name="method" class="form-control"
                                            placeholder="Your Old password..." id='old_password' />
                                        <div class="invalid-feedback  error-old "
                                            style='padding-left:0%; position:absolute'>
                                            Please your old password is needed.
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="payment" style="font-size:14px; font-weight:bold;">New
                                            Password</label>
                                        <input type="password" name="method" class="form-control"
                                            placeholder="Your New password..." id='new_password' />
                                        <div class="invalid-feedback password-error error-new"
                                            style='padding-left:0%; position:absolute'>
                                            Please choose a new password.
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="payment" style="font-size:14px; font-weight:bold;">Retype New
                                            Password</label>
                                        <input type="password" name="method" class="form-control"
                                            placeholder="Retype your New password..." id='new_password2' />
                                        <div class="invalid-feedback password-error error-new2"
                                            style='padding-left:0%; position:absolute'>
                                            Please re-enter your new password.
                                        </div>
                                    </div>

                                </form>
                                <button type='submit' id='submit' class='btn btn-linked-alt'
                                    onclick='update_password() '><i id="hide-fa" class="fa  fa-spinner fa-spin"></i>
                                    &nbsp Update &nbsp</button>
                            </div>
                        </div>




                        <!--update profile-->

                        <?php
                     $result = selectOne('users', ["Email" => $ad]);

                     $username = $result['Username'];
                     $email = $result['Email'];
                     $id = $result['id'];
                     
                     ?>
                        <div id="tabs-1">

                            <div class='wrap_form' style=' margin-top:8%; width:70%' id='profile-form tabs-2'>
                                <div id="msg_p" class="alert alert-success valid-feedback"></div>
                                <form id='profile_form' method="post" enctype="multipart/form-data" class='form'
                                    onsubmit="return false">

                                    <div class="form-group">
                                        <label for="username" style="font-size:14px; font-weight:bold;">Username</label>
                                        <input type="text" class="form-control" placeholder="Enter Your Username..."
                                            id='username' value='<?php echo $username ?>' />
                                        <div class="invalid-feedback  error-name "
                                            style='padding-left:0%; position:absolute'>
                                            Please choose a Username
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" style="font-size:14px; font-weight:bold;">Email</label>
                                        <input type="email" name="method" class="form-control"
                                            placeholder="Enter Your Email..." id='email' value='<?php echo $email ?>' />
                                        <div class="invalid-feedback error-emailp "
                                            style='padding-left:0%; position:absolute'>
                                            Please choose an Email.
                                        </div>
                                    </div>


                                    <button type='submit' id='submit' class='btn btn-linked-alt mt-3'
                                        onclick='update_profile() '><i id="hide-fa-p"
                                            class="fa  fa-spinner fa-spin"></i>
                                        &nbsp
                                        Update &nbsp</button>

                                </form>
                            </div>
                        </div>


                        <div id="tabs-3">

                            <?php 
                         if (isset($_POST['upload'])) {
                              $image = $_FILES['image']['name'];
                              $image_tmp = $_FILES['image']['tmp_name'];
                              $folder = 'images/'  ;


                              $valid_extensions = array('jpeg', 'jpg', 'png'); // valid extensions
                              $error = array();

                              if (empty($image)) {
                                 $error['image'] = 'Please choose an image';
                              }

                              if (count($error) === 0) {

                              $valid_extensions = array('jpeg', 'jpg', 'png'); // valid extensions
                              
                                // get uploaded file's extension
                                $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
                                // can upload same image using rand function
                                $final_image = rand(1000,1000000).$image;
                                // check's valid format
                                if(!in_array($ext, $valid_extensions)){ 
                                    echo "<script>alert('invalid Image Format')</script>";
                                }else{
                                    $path = strtolower($final_image); 
                                    $folder = $folder . $path;
                                    update('users', $id, ["Picture" => $path]);
                                   move_uploaded_file($image_tmp, $folder); 
                                   echo "<script>alert('Image updated successfully')</script>";

                                }

                         }
                        }

                        if (isset($error['image'])) {
                            $er = $error['image'];
                           echo "<script>alert('$er')</script>";
                        }
                        
                        ?>
                            <form enctype="multipart/form-data" onsubmit="" method='post'>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Profile Picture</label>
                                    <input type="file" class="form-control" placeholder="Enter email " name='image'>
                                </div>

                                <button type="submit" class="btn btn-linked-alt" name='upload'>Upload</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>






    <?php  include('footer.php')?>
    <script>
    $("#hide-fa").hide();
    $("#hide-fa-p").hide();


    function update_password() {


        var oldpassword = $("#old_password").val();
        var new_password = $("#new_password").val();
        var new_password2 = $("#new_password2").val();
        var id = $("#id").val();

        if (oldpassword == "") {
            $("#old_password").removeClass('form-control').addClass('form-control is-invalid');
            $('.error-old').show();

        } else {
            $("#old_password").removeClass('form-control is-invalid').addClass('form-control');
            $('.error-old').hide();

        }


        if (new_password == "") {
            $("#new_password").removeClass('form-control').addClass('form-control is-invalid');
            $('.error-new').show();

        } else {
            $("#new_password").removeClass('form-control is-invalid').addClass('form-control');
            $('.error-new').hide();

        }

        if (new_password2 == "") {
            $("#new_password2").removeClass('form-control').addClass('form-control is-invalid');
            $('.error-new2').show();

        } else {
            $("#new_password2").removeClass('form-control is-invalid').addClass('form-control');
            $('.error-new2').hide();

        }


        if (oldpassword != "" && new_password != "" && new_password2 != "") {

            $("#hide-fa").show();

            $.ajax({
                url: "../ajax_controls/user_update_password.php",
                method: "post",
                data: {
                    old_password: oldpassword,
                    new_password: new_password,
                    new_password2: new_password2,
                    id: id
                },
                dataType: "text",
                success: function(data) {
                    $("#msg").html(data);
                }
            });

        }


    }






    function update_profile() {


        var username = $("#username").val();
        var email = $("#email").val();
        var profile = $("#profile").val();
        var id = $('#id').val();


        if (username == "") {
            $("#username").removeClass('form-control').addClass('form-control is-invalid');
            $('.error-name').show();

        } else {
            $("#username").removeClass('form-control is-invalid').addClass('form-control');
            $('.error-name').hide();

        }

        if (email == "") {
            $("#email").removeClass('form-control').addClass('form-control is-invalid');
            $('.error-emailp').show();
        } else {
            $("#email").removeClass('form-control is-invalid').addClass('form-control');
            $('.error-emailp').hide();
        }



        if (username != "" && email != "") {

            $("#hide-fa-p").show();

            $.ajax({
                url: "../ajax_controls/user_profile_update_ajax.php",
                method: "post",
                data: {
                    username: username,
                    email: email,
                    id: id
                },
                dataType: "text",
                success: function(data) {
                    $("#msg_p").html(data);
                }
            });

        }



    }
    </script>

</body>

</html>