<?php 

include('includes/questionClass.php');
   	$x = new Question();
	$id =$_GET['id'];

	$x->delete($id);

	header("location:manage_question.php");