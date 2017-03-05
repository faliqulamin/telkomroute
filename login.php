<?php
include "conn.php";
session_start();
$nama = $_POST["userName"];
$password = $_POST["password"];
$query = "select * from users where userID='$nama' and password='$password'";
$sql = $mysqli->query($query);
$ada = mysqli_fetch_row($sql);
$data = mysqli_fetch_array($mysqli->query($query));
if($ada>1)
	{
	$level=$data['level'];
	$name=$data['name'];
	$userID=$data['userID'];
	$_SESSION["level"] = $data['level'];
	echo "{success: true, info: {userID: '$userID', name: '$name', level: '$level' }}";
	}
else
	{
	echo "{success: false, errors: { reason: 'Login failed. Try again.' }}";
	}
?>
