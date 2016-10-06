<?php
$con = mysqli_connect("mysql12.000webhost.com", "a5022159_user", "passw000rd", "a5022159_data");

$username = $_POST["username"];
$password = $_POST["password"];

$statement = mysqli_prepare($con, "SELECT * FROM user WHERE username = ? AND password = ?");
mysqli_stmt_bind_param($statement, "ss", $username, $password);
mysqli_stmt_execute($statement);

mysqli_stmt_store_result($statement);
mysqli_stmt_bind_result($statement, $user_id, $nama_dpn, $nama_blk, $username, $email, $password);

$response = array();
$response["success"] = false;

while(mysqli_stmt_fetch($statement)) {
	$response["success"] = true;
	$response["nama_dpn"] = $nama_dpn
	$response["nama_blk"] = $nama_blk
	$response["username"] = $username
	$response["email"] = $email
	$response["password"] = $password
	}

	echo json_encode($response);
	
?>