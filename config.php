<?php

	class config
	{
		public $cnx;
		function __construct ()
		{
				$servername="projetwebsrv.mysql.database.azure.com";
	$dbname="mysql";
	$username="mysqluser@projetwebsrv";
	$password="Fatma123";
	$conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
	$this->cnx=$conn;
		}
	}
	
?>

