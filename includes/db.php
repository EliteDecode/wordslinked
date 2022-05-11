<?php

include('connect.php');
//1. A function to display
function display($value){
    echo '<pre>' , print_r($value, true) , '</pre>';
    die();
}


//1. Execute Query
function executeQuery($sql, $data){

    global $conn;

   $stmt = $conn -> prepare($sql);
    $values = array_values($data);// this filters the array and brings out the keys
    $types = str_repeat('s', count($values));//This counts the types 'ss'
    $stmt -> bind_param( $types, ...$values );// '...' use to list content of an array
    $stmt ->execute();
    
    return $stmt;

}


// 2. A function to select all from a table where conditions is needed or not
function selectAll($table, $conditions=[]){

    global $conn; 
    $sql = "SELECT * FROM `$table` ";   
    
    if (empty($conditions)) {
          // //preparing a prepared statement
            $stmt = mysqli_stmt_init($conn);
            mysqli_stmt_prepare($stmt, $sql);
            mysqli_stmt_execute($stmt);
            $result = $stmt ->get_result();
            $records = $result->fetch_all(MYSQLI_ASSOC);
            return $records;
            mysqli_stmt_close($stmt);
    }else{

        $i = 0;
      foreach ($conditions as $key => $value) {
        if ($i===0) {
           $sql = $sql . " WHERE $key =?";
        }else{
            $sql = $sql . " AND $key = ?";
        }
        $i++;
      }

      $stmt = executeQuery($sql, $conditions);
      $result = $stmt ->get_result()->fetch_all(MYSQLI_ASSOC);
      return $result;
     
    } 


}

//all details no condition
function selectPage($table, $start, $limit){

  global $conn; 
  $sql = "SELECT * FROM `$table` LIMIT $start, $limit ";   
  

        // //preparing a prepared statement
          $stmt = mysqli_stmt_init($conn);
          mysqli_stmt_prepare($stmt, $sql);
          mysqli_stmt_execute($stmt);
          $result = $stmt ->get_result();
          $records = $result->fetch_all(MYSQLI_ASSOC);
          return $records;
          mysqli_stmt_close($stmt);
  
}

//all details condition
function selectPageCondition($table, $start, $limit){

  global $conn; 
  $sql = "SELECT * FROM `$table` WHERE Publish = 'yes' ORDER BY DateReg DESC LIMIT $start, $limit ";   
  

        // //preparing a prepared statement
          $stmt = mysqli_stmt_init($conn);
          mysqli_stmt_prepare($stmt, $sql);
          mysqli_stmt_execute($stmt);
          $result = $stmt ->get_result();
          $records = $result->fetch_all(MYSQLI_ASSOC);
          return $records;
          mysqli_stmt_close($stmt);
  
}



// 3. A function to select one from a table where conditions is compulsory
function selectOne($table, $conditions){

    global $conn;
    $sql = "SELECT * FROM `$table` ";   

        $i = 0;
      foreach ($conditions as $key => $value) {
        if ($i===0) {
           $sql = $sql . " WHERE $key =?";
        }else{
            $sql = $sql . " AND $key = ?";
        }
        $i++;
      }

      $sql = $sql . " LIMIT 1";
      $stmt = executeQuery($sql,$conditions);
      $result = $stmt ->get_result()->fetch_assoc();
      return $result;
     
}

function selectOdd($table, $conditions){

  global $conn;
  $sql = "SELECT * FROM `$table` ";   

      $i = 0;
    foreach ($conditions as $key => $value) {
      if ($i===0) {
         $sql = $sql . " WHERE $key =?";
      }else{
          $sql = $sql . " AND $key != ?";
      }
      $i++;
    }

    $sql = $sql . " LIMIT 1";
    $stmt = executeQuery($sql,$conditions);
    $result = $stmt ->get_result()->fetch_assoc();
    return $result;
   
}

// 4. A function to Create or Insert
function insert($table, $data){

    global $conn;
    $sql = "INSERT INTO `$table` SET ";
    $i = 0;
    foreach ($data as $key => $value) {
      if ($i===0) {
         $sql = $sql . " $key =?";
      }else{
          $sql = $sql . ", $key = ?";
      }
      $i++;
    }

    $stmt = executeQuery($sql,$data);
    $id = $stmt->insert_id;

    return $id;

}


// 4. A function to Update
function update($table,$id, $data){

    global $conn;
    $sql = "UPDATE `$table` SET ";
    $i = 0;
    foreach ($data as $key => $value) {
      if ($i===0) {
         $sql = $sql . " $key =?";
      }else{
          $sql = $sql . ", $key = ?";
      }
      $i++;
    }


  
    $sql = $sql . " WHERE id=? ";
    $data['id'] = $id;
    $stmt = executeQuery($sql,$data);

    return $stmt -> affected_rows;

}

// 4. A function to delete
function delete($table,$id){

    global $conn;
    $sql = "DELETE FROM `$table` WHERE id = ? ";
    $stmt = executeQuery($sql,['id' => $id]);

    return $stmt -> affected_rows;

}


//5. Search Function

function searchTrack($term, $start,$limit){
  $match = "%" . $term . "%";

  global $conn;

   $sql = "SELECT * FROM posts WHERE Authur LIKE ? OR Title LIKE ? LIMIT $start, $limit";

   $conditions = [
     'Title' => $match,
     'Description' => $match
   ];

  $stmt = executeQuery($sql,$conditions);
  $result = $stmt ->get_result()->fetch_all(MYSQLI_ASSOC);
  return $result;
}