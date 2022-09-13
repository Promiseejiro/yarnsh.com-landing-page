<?php

require_once 'd.php';

if (isset($conn)) {
 $con = $conn;
} else {
 echo 'g';
}


function getPostedVacancy($id)
 {
  $sql = "SELECT * FROM vacancy WHERE agent_id = ?";
  $stmt = $con->prepare($sql);
  $stmt->execute([$id]);
  $count_row = $stmt->rowCount();

  if ($count_row == 1) {
   return $stmt;
  }
 }

 echo getPostedVacancy(2);