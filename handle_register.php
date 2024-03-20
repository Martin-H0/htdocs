<?php
	require './DBC.php';

	session_start();

	if (empty($_POST["username"]) || empty($_POST["password"]))
	{
		header("Location: index.php");
		exit();
	}

	$username = $_POST["username"];
	$password = $_POST["password"];


	echo password_hash($password, PASSWORD_DEFAULT);



	$query = DBC::getConnection()->query("insert into acount (username, password) values ('" . $_POST["username"] . "', '" . $_POST["password"] . "');");

	$_SESSION["username"] = $username;
	$_SESSION["password"] = $password;

	header("Location: Page01.php");
?>