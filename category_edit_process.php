<?php 
// print_r($_POST);
	$id = $_POST['id'];
	$data = $_POST;
	require 'connect.php';
	$query = "UPDATE categories SET name='". $data['name'] . "',description='". $data['description'] ."',slug='". $data['slug'] . "' WHERE id=" . $id ;
	$status = $conn->query($query);
	header("Location: categories.php");
 ?>