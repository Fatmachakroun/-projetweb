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
printf("Reading data from table: \n");
$res = mysqli_query($conn, 'SELECT FullNameDoctor, NumDoc, Specialty, Region,  Address, FeedBack  FROM Doctor;');

echo "<table border='9' bgcolor='#CCCCC' cellpadding='0' cellspacing='0' style='border-collapse: collapse' bordercolor='#111111' width='100%' id='AutoNumber1'>
<tr>
<th>Doctor's name</th>
<th>Doctor's number</th>
<th>Doctor's speciality</th>
<th>Doctor's region</th>
<th>Doctor's addres</th>
<th>Doctor's feedback</th>
</tr>";


while ($row = mysqli_fetch_assoc($res)) {
//var_dump($row);
echo "<tr>";
echo "<td>" . $row['FullNameDoctor'] . "</td>";
echo "<td>" . $row['NumDoc'] . "</td>";
echo "<td>" . $row['Specialty'] . "</td>";
echo "<td>" . $row['Region'] . "</td>";
echo "<td>" . $row['Address'] . "</td>";
echo "<td>" . $row['FeedBack'] . "</td>";
echo "</tr>";
}

echo "</table>";
//Close the connection
mysqli_close($conn);
?>
