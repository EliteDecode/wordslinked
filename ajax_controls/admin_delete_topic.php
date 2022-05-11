<?php

include('../includes/db.php');

$id = $_POST['id'];

 $result = delete('topic', $id);

 if ($result) {
    echo" <div class='alert alert-danger' style=''>
    Topic deleted successfully
    </div>";
 }