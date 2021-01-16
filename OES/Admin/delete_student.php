<?php 

include('includes/studentClass.php');
   	$x = new Student();
	$id =$_GET['id'];

	$x->delete($id);

	header("location:manage_student.php");