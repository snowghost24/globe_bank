<!--cannot use defined path name for initialize because that's where they are defined-->
<?php require_once('../../private/initialize.php') ?>
<?php
//variables become available inside included files
$page_title = "Staff Menu"; ?>
<?php include( SHARED_PATH . '/staff_header.php') ?>
    <div id="content">
        <h1> Main Menu</h1>
        <ul>
            <li>
                <!-- this is a relative path-->
                <a href="subjects/index.php"> Subjects</a>
            </li>
        </ul>
    </div>
<?php include( SHARED_PATH . '/staff_footer.php') ?>
