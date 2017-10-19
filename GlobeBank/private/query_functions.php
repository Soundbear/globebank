<?php

  // To avoid global variable $db, pass in $db
  function find_all_subjects($db)
  {
    $sql = 'SELECT * FROM subjects';
    $sql .= ' ORDER BY position ASC';
    $results = mysqli_query($db, $sql);
    return $results;
  }



 ?>
