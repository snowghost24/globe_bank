<!--takes care of initializing functions-->
<?php
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

    require_once('functions.php')
?>