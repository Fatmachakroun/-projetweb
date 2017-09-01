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





 
      
      
$email="tomsor@tomsor.com";
$password="tomsor123";
$name ="tomsor";
$gender="Male";
$numuser="53853544";

if ($stmt = mysqli_prepare($conn, "INSERT INTO User (Email, Password, FullName, Gender, NumUser) VALUES (?, ?, ?, ?, ?)")) {
mysqli_stmt_bind_param($stmt, 'ssd', $email, $password, $name, $gender, $numuser);
mysqli_stmt_execute($stmt);
printf("Insert: Affected %d rows\n", mysqli_stmt_affected_rows($stmt));
mysqli_stmt_close($stmt);
}

// Close the connection
mysqli_close($conn);
     

   
?>

