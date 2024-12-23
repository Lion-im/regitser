<?php 
	$connect = mysqli_connect("MySQL-8.2", "root", "", "register");
	$query = mysqli_query($connect, "INSERT INTO registers (email, name, username, password) VALUES ('{$_POST["email"]}','{$_POST["name"]}','{$_POST["username"]}','{$_POST["password"]}')");

		header("Location: post.php?namename=" . "{$_POST['name']}" . "&usernamename=" . "{$_POST['username']}")
?>