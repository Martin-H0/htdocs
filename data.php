<?php

require './DBC.php';

session_start();

if (empty($_SESSION["username"]))
{
	header("Location: index.php");
	exit();
}

echo '
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="./style.css">
		<title>Usero</title>
	</head>
	<body>
	<header>
		<a href="index.php">Home</a>
		Logged in as <b>' . $_SESSION["username"] . '</b>
		<a href="handle_logout.php">Log Out</a>
	</header>
	<p>';
$query = DBC::getConnection()->query("select username, password from Account;");
if ($query->num_rows > 0)
{
	while ($row = $query->fetch_assoc())
	{
		echo "Username:  <b>". $row["username"]. "</b>, Password: <b>" . $row["password"] . "</b><br>";
	}
}
echo '</p>
	<footer>
		Usero 2024
	</footer>
	</body>
</html>
';

?>