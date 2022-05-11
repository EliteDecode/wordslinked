<?php

session_start();

include('../includes/db.php');

$username = $_POST["username"];
$email = $_POST["email"];
$id = $_POST["id"];

$result = selectOdd('admin', ["Email" => $email, 'id' => $id]);

if ($result) {
    echo" <script>
    $('#hide-fa-p').hide();;
    $('#username').removeClass('form-control').addClass('form-control is-invalid');
    $('.email-error').show();
    $('.email-error').html('Email Already exists');
 </script>";
}elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<script>
        
            $('#email').removeClass('form-control').addClass('form-control is-invalid');
            $('.email-error').show();
            $('.email-error').html('Invalid Email Entered');
         </script>";
}else{
    echo" <script>
  
    $('#msg_p').show();
    $('#msg_p').html('Profile Updated Successfully');
    </script>";
   
   $data =[
 'Username' => $username,
 'Email' => $email
   ];

   update('admin' ,$id , $data);


}
?>