<?php require_once('../../../private/initialize.php'); ?>

<?php
$id = isset( $_GET['id'] ) ? $_GET['id'] : 1 ;
// php 7 $id = $_GET(['id']) ?? 1
?>
<?php echo  $id . "<br/>"?>
<?php echo  gettype($id)?>
