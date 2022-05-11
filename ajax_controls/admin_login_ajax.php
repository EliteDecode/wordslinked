<?php

session_start();

include('../includes/db.php');


$email = $_POST["email"];
$password = $_POST["password"];

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<script>
                     $('#hide-fa').hide();;   
                    $('#email').removeClass('form-control').addClass('form-control is-invalid');
                    $('.email-error').show();
                    $('.email-error').html('Invalid Email Entered');
                 </script>";
        }else{

            echo" <script>
                    $('#email').removeClass('form-control is-invalid').addClass('form-control');
                    $('.email-error').hide();
                 </script>";
                
                 $query = "SELECT * FROM `admin` WHERE Email = '".$email."'";
                 $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) >= 1) {
                $row = mysqli_fetch_array($result);
                $pwd = $row['Pwd'];
                if (password_verify($password,$pwd)){
                    $_SESSION['admin'] = $email;
                    echo "<script>window.location.assign('dashboard.php');</script>";
                }else{
                echo" <script>
                        $('#hide-fa').hide();;
                        $('#password').removeClass('form-control').addClass('form-control is-invalid');
                        $('.password-error').show();
                        $('.password-error').html('Incorrect Password');
                     </script>";
                }
            }else{
            echo "<script>
                        $('#email').removeClass('form-control').addClass('form-control is-invalid');
                        $('.email-error').show();
                        $('.email-error').html('Unknown Email Entered');
                </script>";
            }
           

           


           

        }
        