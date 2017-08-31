<?php
$con=mysqli_connect("mysql13.000webhost.com","a7394901_admin","090909","a7394901_medbox");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT FullNameDoctor,NumDoc  FROM Doctor");

echo "<table border='1'>
<tr>
<th>FullNameDoctor</th>
<th>NumDoc</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['FullNameDoctor'] . "</td>";
echo "<td>" . $row['NumDoc'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
