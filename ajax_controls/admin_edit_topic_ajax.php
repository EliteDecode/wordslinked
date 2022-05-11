<?php
session_start();

include('../includes/db.php');

$topic = $_POST['topic'];
$description = $_POST['description'];
$id = $_POST['id'];


$result = selectOdd('topic', ['Topic' => $topic, 'id' => $id]);
$num = count($result);


if ($num >= 1) {
    echo "<script>
          $('#hide-fa').hide();;
          $('#msg').hide();
            $('#topic').removeClass('form-control').addClass('form-control is-invalid');
           
            $('.error-topic').show();
            $('.error-topic').html('This Topic Already Exists');
         </script>";
}else{
    echo "<script>
    $('#hide-fa').hide();;
    $('#topic').removeClass('form-control is-invalid').addClass('form-control is-valid');
    $('#description').removeClass('form-control is-invalid').addClass('form-control is-valid');
    $('.error-topic').hide();
    window.location.assign('topics.php');
  ;
 </script>";
 $_SESSION['success'] = ' Topic Updated successfully';
    $data = [
        'Topic' => $topic,
        'Description' => $description
    ];

    update('topic', $id, $data);
    
}