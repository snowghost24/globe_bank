<?php
require_once('db_credentials.php');

function db_connect(){
    $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
// Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
    echo "Connected successfully";
    return $conn;
}

function db_disconnect($connection){
    if(isset($connection)){
        return mysqli_close($connection);
    }
}

?>