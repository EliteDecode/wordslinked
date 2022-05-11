<?php

include('../includes/db.php');

$id = $_POST['id'];

 $result = delete('posts', $id);

 if ($result) {
    echo" <div class='alert alert-danger ' style=''>
    Post deleted successfully
    </div>";
 }