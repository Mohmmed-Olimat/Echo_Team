<?php
session_start();
unset($_SESSION['student_id']);
unset($_SESSION['student_name']);
unset($_SESSION['student_img']);
header("location:slogin.php");
?>