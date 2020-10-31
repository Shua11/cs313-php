<?php
session_start();
unset($_SESSION['username']);

header("Location: prove07.php");
die();
?>