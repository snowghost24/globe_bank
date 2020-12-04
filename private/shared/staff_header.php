<?php if(!isset($page_title)){
    $page_title = "Staff Area";
} ?>

<!doctype html>
<html>
<head>
    <title>
        GBI
    </title>
    <meta charset=""utf8">
    <!--  browser path-->
    <link rel="stylesheet" href="<?php echo url_for("/stylesheets/staff.css")?>"
</head>
<body>
<header>
    <h1>GBI - <?php echo $page_title ?></h1>
</header>
<navigation>
    <ul>
        <li>
            <!-- http://localhost/globe_bank/public/staff/index.php-->
            <!-- The WWW_ROOT is just, http://localhost/globe_bank/public-->
            <a href="<?php echo url_for("/staff/index.php")?>" >Menu </a>
        </li>
    </ul>
</navigation>