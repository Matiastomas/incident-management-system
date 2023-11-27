<?php
session_start();
unset($_SESSION['author_name']);
header("Location:../index.php");
?>