<?php

function find_all_subjects($db){
    $sql = "SELECT * FROM subjects";
    $sql .= "ORDER BY position ASC";
   return $db -> query("SELECT * FROM subjects");


}