<?php
 $con = mysqli_connect("mysql12.000webhost.com", "a5022159_user", "passw000rd", "a5022159_data");
 
$nama_dpn = $_POST["nama_dpn"];
$nama_blk = $_POST["nama_blk"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
 
//include "koneksi.php";
 
$statement = mysqli_prepare($con, "INSERT INTO user (nama_dpn, nama_blk, username, email, password) VALUES (?, ?, ?, ?, ?)");
mysqli_stmt_bind_param($statement, "siss", $nama_dpn, $nama_blk, $username, $email, $password);
mysqli_stmt_execute($statement);

	$response = array();
    $response["success"] = true;
	
           // echoing JSON response
        echo json_encode($response);
    
?>