<?php
session_start();
if(session_destroy())
{
	$out="out";
	 $id=$_SESSION['SESS_MEMBER_ID'];
	include('includes/connect.php');	
	$sql=mysql_query("UPDATE users SET state='$out' WHERE admin_id ='$id'") or die ('Unable to execute query!!'.mysql_error());
if($sql){

header("Location: index.php");
}
}
?>