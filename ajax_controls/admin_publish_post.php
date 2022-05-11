<?php

include('../includes/db.php');

$id = $_POST['id'];
$data = 'no';

 $result = update('posts', $id, ['Publish' => 'yes' ]);

 if ($result) {
    echo" <div class='alert alert-success ' style=''>
    Post Published successfully
    </div>";
 }