<?php

include('../includes/db.php');

$id = $_POST['id'];
$data = 'no';

 $result = update('posts', $id, ['Publish' => 'no' ]);

 if ($result) {
    echo" <div class='alert alert-danger ' style=''>
    Post Unpublished successfully
    </div>";
 }