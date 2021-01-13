<!--cannot use defined path name for initialize because that's where they are defined-->
<?php require_once('../../private/initialize.php') ?>
<?php
//variables become available inside included files
$page_title = "Staff Menu"; ?>
<?php include( SHARED_PATH . '/staff_header.php') ?>
    <div id="content">
        <div id="main-menu">
            <h1> Main Menu</h1>
            <ul>
                <li>
                    <!-- this is a relative path-->
                    <a href="<?php echo url_for("/staff/subjects/index.php")?>">Subjects</a>
                </li>
                <li>
                    <!-- this is a relative path-->
                    <a href="<?php echo url_for("/staff/pages/index.php")?>">Pages</a>
                </li>
            </ul>
        </div>

    </div>
<?php include( SHARED_PATH . '/staff_footer.php') ?>
