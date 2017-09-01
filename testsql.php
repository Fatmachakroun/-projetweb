<?php
$serverName = "projetwebsrv.mysql.database.azure.com";
$connectionOptions = array(
    "Database" => "document",
    "Uid" => "mysqluser@projetwebsrv",
    "PWD" => "Fatma123"
);
//Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);
$tsql= "SELECT ID, FullNameDoctor From Doctor;";
$getResults= sqlsrv_query($conn, $tsql);
echo ("Reading data from table" . PHP_EOL);
if ($getResults == FALSE)
    echo (sqlsrv_errors());
while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
 echo ($row['ID'] . " " . $row['FullNameDoctor'] . PHP_EOL);
}
sqlsrv_free_stmt($getResults);
?>
