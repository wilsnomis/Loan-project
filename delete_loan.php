

<?php 
session_start();

if(isset($_POST['delete_loan'])){
 
 $errmsg_arr = array();
 
//Validation error flag
$errflag = false;
 
 $id = $_POST["id"];


 if($id == '') {
$errmsg_arr[] = 'Loan id missing';
$errflag = true;
}


if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;

session_write_close();
header("location:delete_loanhome.php");
exit();
}
							
 
 $errorMessage = '';
					include('includes/connect.php');	
						//create query to check n c if staff exists
						
							$user = $_SESSION['SESS_FIRST_NAME'];
						$lastname = $_SESSION['SESS_LAST_NAME'];
							
							
							
						
						$sql="DELETE FROM loan WHERE loan_id='$id'";
						
						$re = mysql_query($sql) or die ('Unable to execute query!!'.mysql_error());
if($re)
{
$errmsg_arr[] = 'Loan successfully deleted.';
$errflag = true;
if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;

session_write_close();
header("location:delete_loanhome.php");
exit();
}

}

else{
$errmsg_arr[] = 'Loan not deleted.';
$errflag = true;
if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;

session_write_close();
header("location:delete_loanhome.php");
exit();
}

}}
else{
header("location:delete_loanhome.php");
exit();
}



?>