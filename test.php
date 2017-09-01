<?php
$host = 'projetwebsrv.mysql.database.azure.com';
$username = 'mysqluser@projetwebsrv';
$password = 'Fatma123';
$db_name = 'document';


//Establishes the connection
$conn = mysqli_init();
mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);
if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}

//Create an Insert prepared statement and run it
$product_name = 'BrandNewProduct';
$product_color = 'Blue';
$product_price = 15.5;


$Email='tomsor@tomsor.com';
$Password='tomsor123';
$FullName ='tomsor';
$Gender='Male';
$NumUser='53853544';

if ($stmt = mysqli_prepare($conn, "INSERT INTO User (Email, Password, FullName, Gender, NumUser) VALUES (?, ?, ?, ?, ?)")) {
mysqli_stmt_bind_param($stmt, 'ssd', $Email, $Password, $FullName, $Gender, $NumUser);
mysqli_stmt_execute($stmt);
printf("Insert: Affected %d rows\n", mysqli_stmt_affected_rows($stmt));
mysqli_stmt_close($stmt);
}

// Close the connection
mysqli_close($conn);
?>