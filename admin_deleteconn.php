

<?php 
session_start();

if(isset($_POST['delete'])){
 
 $errmsg_arr = array();
 
//Validation error flag
$errflag = false;
 
 $email = $_POST["tel"];


 if($email == '') {
$errmsg_arr[] = 'Phone number missing';
$errflag = true;
}


if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;

session_write_close();
header("location:delete_admin.php");
exit();
}
							
 
 $errorMessage = '';
					include('includes/connect.php');	
						//create query to check n c if staff exists
						
							$user = $_SESSION['SESS_FIRST_NAME'];
						$lastname = $_SESSION['SESS_LAST_NAME'];
							
							
							
						
						$sql="DELETE FROM users WHERE tel='$email'";
						
						$re = mysql_query($sql) or die ('Unable to execute query!!'.mysql_error());
if($re)
{
$errmsg_arr[] = 'Administrator successfully deleted.';
$errflag = true;
if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;

session_write_close();
header("location:delete_admin.php");
exit();
}

}

else{
$errmsg_arr[] = 'Administrator not deleted.';
$errflag = true;
if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;

session_write_close();
header("location:delete_admin.php");
exit();
}

}}
else{
header("location:delete_admin.php");
exit();
}



?>