<!--takes care of initializing functions-->
<?php
    ob_start();
    // assign file paths to PHP constants
    // __FILE__ return the current path to this file
    // dirname() returns the path to the parent directory

    // asks what is the directory that this current file is in
    define("PRIVATE_PATH",dirname(__FILE__));

    // asks what is the directory that this directory is in
    define("PROJECT_PATH",dirname(PRIVATE_PATH));

    define ("PUBLIC_PATH", PROJECT_PATH . "/public" );
    define ("SHARED_PATH", PRIVATE_PATH . "/shared" );

    $public_end = strpos($_SERVER["SCRIPT_NAME"], '/public') + 7;
    $doc_root = substr($_SERVER["SCRIPT_NAME"], 0, $public_end );
    define("WWW_ROOT", $doc_root );

    require_once('functions.php');
    require_once('database.php');
    require_once('query_functions.php');
$db =  db_connect();
//$result = $mysqli -> query("SELECT * FROM subjects");
//$results = mysqli_query($db,"SELECT * FROM subjects")
//var_dump($result);
//    if () {
//    echo "Returned rows are: " . $result -> num_rows;
//    // Free result set
//    $result -> free_result();
//}

//$mysqli -> close();
//    var_dump($db);
//    $results = mysqli_query($db,"SELECT * FROM subjects");
//    var_dump($results);
//var_dump(  db_connect() );
//    $db = db_connect();
//    var_dump(  $db );

?>