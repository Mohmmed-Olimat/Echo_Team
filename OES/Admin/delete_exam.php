<?php 

include('includes/examClass.php');
   	$x = new Exam();
	$id =$_GET['id'];

	$x->delete($id);

	header("location:manage_exam.php");