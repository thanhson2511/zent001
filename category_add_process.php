<?php 
	require 'connect.php';

	$data = $_POST;
	 $query = "INSERT INTO categories (name, thumbnail ,description, slug) VALUES ('".$data['name']."','".$data['thumbnail']."','".$data['description']."','".$data['slug']."')";
	 $status = $conn->query($query);
	 header("Location: categories.php");
?>
