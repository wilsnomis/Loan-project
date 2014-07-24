<?php
$host="localhost"; // Host name 
			$username="root"; // Mysql username 
			$password=""; // Mysql password 
			$db_name="loaning"; // Database name 
			
			// Connect to server and select database.
			mysql_connect("$host", "$username", "$password")or die("cannot connect"); //connecting to localhost
			mysql_select_db("$db_name")or die("cannot select DB"); //selecting database


?>