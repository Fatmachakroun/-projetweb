<?php

	class config
	{
		public $cnx;
		function __construct ()
		{
				$servername="harbewisa-mysqldbserver.mysql.database.azure.com";
	$dbname="projet@harbewisa-mysqldbserver";
	$username="1110b49a-f35a-48d1-ab13-76cb5704f001";
	$password="";
	$conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
	$this->cnx=$conn;
		}
	}
	
?>

