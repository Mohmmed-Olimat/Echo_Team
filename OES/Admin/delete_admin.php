<?php 

include('includes/adminClass.php');
   	$x = new Admin();
	$id =$_GET['id'];

	$x->delete($id);

	header("location:manageadmin.php");