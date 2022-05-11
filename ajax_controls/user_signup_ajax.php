<?php

session_start();

include('../includes/db.php');

$username = strtoupper($_POST["username"]);
$email = $_POST["email"];
$password = $_POST["password"];
$repassword = $_POST["repassword"];

$result = selectAll('users', ["Email" => $email]);

$num = count($result);



if ($num > 0) {
    echo "<script>
                $('#hide-fa').hide();;
                $('#email').removeClass('form-control').addClass('form-control is-invalid');
                $('.email-error').show();
                $('.email-error').html('This email already exists.');
        </script>";
}else{
 echo  "<script>
                $('#email').removeClass('form-control is-invalid').addClass('form-control');;
                $('.email-error').hide();
        </script>";


        if ($password != $repassword) {
       echo" <script>
                $('#hide-fa').hide();;
                $('#password').removeClass('form-control').addClass('form-control is-invalid');
                $('.password-error').show();
                $('.password-error').html('Both password must match');
        </script>";
        }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<script>
                
                    $('#email').removeClass('form-control').addClass('form-control is-invalid');
                    $('.email-error').show();
                    $('.email-error').html('Invalid Email Entered');
                 </script>";
        }else{

            echo" <script>
                    $('#hide-fa').hide();;
                    $('#password').removeClass('form-control is-invalid').addClass('form-control');
                    $('.password-error').hide();
                   
                    $('#email').removeClass('form-control is-invalid').addClass('form-control');
                    $('.email-error').hide();
                   
                 </script>";
        
            $pwd_hash = password_hash($password, PASSWORD_DEFAULT);
            $image = 'profile.jpg';

            $data = [
                 'Username' => $username,
                 'Email' => $email,
                 'Pwd'=> $pwd_hash,
                 'Picture'=> $image
            ];
            $result = insert('users', $data);

            $_SESSION['users'] = $email;


            echo "<div class='alert alert-success'>Signup Successfully.</div>";
            echo "<script>window.location.assign('dashboard.php');</script>";

        }
        
}