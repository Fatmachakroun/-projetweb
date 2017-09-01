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
   
   
      
      
       $useremail='siwar.abbes@supcom.tn';
       $fullnamedoctor='Ahmed Sobhi';
       $numdoc ='53214547';
       $specialty='Generaliste';
       $region='Ben arous';
       $address='Hammam lif';
       $feedback='Good';


      $sql="insert into Doctor values( $useremail, $fullnamedoctor, $bumdoc, $specialty, $region, $address, $feedback);";

      $result = mysqli_query($conn,$sql);
      header("location: test.php");
      
     
   
   
?>
