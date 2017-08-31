<?php
   define('DB_SERVER', 'projetwebsrv.mysql.database.azure.com');
   define('DB_USERNAME', 'mysqluser@projetwebsrv');
   define('DB_PASSWORD', 'Fatma123');
   define('DB_DATABASE', 'document');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>
