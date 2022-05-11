<?php
session_start();

include('../includes/db.php');

$topic = $_POST['topic_id'];
$description = $_POST['description'];
$title = $_POST['title'];
$authur = $_POST['authur'];
$image = $_FILES['image']['name'];
$image_tmp = $_FILES['image']['tmp_name'];
$folder = 'post_images/'  ;
$published = $_POST['publish'];

$folder = '../images/post_images/'  ;

$valid_extensions = array('jpeg', 'jpg', 'png'); // valid extensions

// get uploaded file's extension
$ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
// can upload same image using rand function
$final_image = rand(1000,1000000).$image;
// check's valid format
if(!in_array($ext, $valid_extensions)){ 
    echo" <div class='alert alert-danger ' style=''>
   Invalid Image Format
    </div>";
}else{

    
$result = selectAll('posts', ['Title' => $title]);
$num = count($result);

if ($num >=1) {
    echo "<script>
          $('#hide-fa').hide();;
          $('#msg').hide();
            $('#title').removeClass('form-control').addClass('form-control is-invalid');
            $('.error-title').show();
            $('.error-title').html('A Post with this Title Already Exists');
         </script>";
}else{
    echo "<script>window.location.assign('posts.php');</script>";
    $_SESSION['success'] = ' Post Added successfully';
    $path = strtolower($final_image); 
    $folder = $folder . $path;
   
$data = [
    'Authur' => $authur,
    'Title' => $title,
    'Picture' => $path,
    'Descrip' => $description,
    'Publish' => $published,
    'Topic_id' => $topic
    
   ];
    
    insert('posts', $data);
    move_uploaded_file($image_tmp, $folder); 
    
}

}