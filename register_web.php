<?php

$host = "projetwebsrv.mysql.database.azure.com";
$user = "mysqluser@projetwebsrv";
$password = "Fatma123";
$db = "document";


$con = mysqli_connect($host,$user,$password,$db);

if(!$con)
{
//echo "Connection Error...".mysqli_connect_error();
}

else
{
//echo"<h3>Database connection Succes...</h3>";
}


$email=$_POST["Email"];
$password=$_POST["Password"];
$name =$_POST["FullName"];
$gender=$_POST["gender"];
$numuser=$_POST["NumUser"];


$sql_query = "insert into User values('$email','$password','$name','$gender','$numuser');";

if (mysqli_query($con, $sql_query))
{
echo "<h3> Data insertion succes...</h3>";
}

else
{
echo "Data insertion error...".mysqli_error($con);
}



?>

