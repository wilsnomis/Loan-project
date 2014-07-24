<?php
 session_start();
 
if(isset($_POST['proves'])){
 


 
 $errorMessage = '';
					include('includes/connect.php');	
//create query to check n c if staff exists

$errmsg_arr = array();
 
//Validation error flag
$errflag = false;


 $approve = ($_POST["id"]);
  if( $approve == '') {
$errmsg_arr[] = 'Loan id is missing value';
$errflag = true;
}
if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
session_write_close();
header("location:manager_viewloans.php");
exit();
}

 
 	
							
							$cleared="yes";
							
							$user = $_SESSION['SESS_FIRST_NAME'];
						$lastname = $_SESSION['SESS_LAST_NAME'];
							
						
						$ask = "update loan set managerapproval='$cleared' where loan_id='$approve'";
						
			$re = mysql_query($ask) or die ('Unable to execute query!!'.mysql_error());
if($re)
{
$errmsg_arr[] =("Loan successfully approved.");

$errflag = true;
if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
session_write_close();
header("location:manager_viewloans.php");
exit();
}
else{

$errmsg_arr[] =("A problem occured and the loan was not approved.");

$errflag = true;
if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
session_write_close();
header("location:manager_viewloans.php");

exit();
}

}
}
else{
header("location:manager_viewloans.php");

			} }
			?>