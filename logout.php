<?php
session_start();
unset($_SESSION['id']);
session_destroy();
$conn = null;
header('Location:index.php');

?>
