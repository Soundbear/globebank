<?php

  // To avoid global variable $db, pass in $db
  function find_all_subjects($db)
  {
    $sql = 'SELECT * FROM subjects';
    $sql .= ' ORDER BY position ASC';
    echo $sql;
    $results = mysqli_query($db, $sql);
    confirm_result_set($results);
    return $results;
  }



 ?>
