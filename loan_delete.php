<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>


<?php
 

 

 
 $email = $_POST["email"];
 $tel= $_POST["tel"];
 $account = $_POST["account"];
 $amount = $_POST["amount"];
 
 $period = $_POST["period"];
 
 
 $f='Date.now()';
 
 $errorMessage = '';
					include('includes/connect.php');	
						//create query to check n c if staff exists
						$st="un_cleared";
							
			$delete = "DELETE FROM loan WHERE status='$st'";
			
			$result = mysql_query($delete) or die("Unable to Insert records!".mysql_error());
if($result)
{
echo("Deleted");
}
			
		
						?>
</body>
</html>
