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
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      
       $useremail=$_POST["Email"];
       $fullnamedoctor=$_POST["FullNameDoctor"];
       $numdoc =$_POST["NumDoc"];
       $specialty=$_POST["Specialty"];
       $region=$_POST["Region"];
       $address=$_POST["Address"];
       $feedback=$_POST["FeedBack"];


      $sql="INSERT INTO Doctor  VALUES ( $useremail, $fullnamedoctor, $bumdoc, $specialty, $region, $address, $feedback);";
      $result = mysqli_query($conn,$sql);
      header("location: test.php");
      
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   
?>
