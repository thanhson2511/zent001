<?php 
	$id = $_GET['id'];
	require 'connect.php';
	$query = "DELETE from categories where id=$id";
	$status = $conn->query($query);
	header("Location: categories.php");
 ?>