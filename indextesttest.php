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
//Run the Select query
printf("Some statics: \n");
$result1 = mysqli_query($con,"SELECT count(*) FROM User");
$result2 = mysqli_query($con,"SELECT count(*) FROM Doctor");
echo "<table border='3' bgcolor='#CCCCC' cellpadding='0' cellspacing='0' style='border-collapse: collapse' bordercolor='#111111' width='100%' id='AutoNumber1'>
<tr>
<th><h3><B>Number of MedBox users</B></h3></th>
<th><h3><B>Number of Doctors added by MedBox costumers</B></h3></th>
</tr>";
$row1 = mysqli_fetch_assoc($result1);
$row2 = mysqli_fetch_assoc($result2);
echo "<tr>";
echo "<td style='text-align:center;'><h4><B>".   $row1['count(*)'] .    "</B></h4></td>";
echo "<td style='text-align:center;'><h4><B>".   $row2['count(*)'] .    "</B></h4></td>";
echo "</tr>";
echo "</table>";
mysqli_close($con);
?>
