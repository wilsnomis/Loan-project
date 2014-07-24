<?php 
session_start();

if(isset($_POST['approve'])){
 
 $errmsg_arr = array();
 
//Validation error flag
$errflag = false;
 
 $id = $_POST["id"];


 if($id == '') {
$errmsg_arr[] = 'Loan Id field empty';
$errflag = true;
}


if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;

session_write_close();
header("location:manager_viewloans.php");
exit();
}
							
 
 $errorMessage = '';
					include('includes/connect.php');	
						//create query to check n c if staff exists
						
				
						
							$user = $_SESSION['SESS_FIRST_NAME'];
						$lastname = $_SESSION['SESS_LAST_NAME'];
						$usetytpe=$_SESSION['SESS_USER_TYPE'];
							
							$cleared="yes";
							
							
						
						$ask = "UPDATE loan SET managerapproval='$cleared' WHERE loan_id='$id'";
						
						$re = mysql_query($ask) or die ('Unable to execute query!!'.mysql_error());
if($re)
{
$errmsg_arr[] = 'Loan successfully approved.';
$errflag = true;
if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;

session_write_close();
header("location:manager_viewloans.php");
exit();
}

}

else{
$errmsg_arr[] = 'Approval failed, please try again.';
$errflag = true;
if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;

session_write_close();
header("location:manager_viewloans.php");
exit();
}

}}
else{
header("location:manager_viewloans.php");
exit();
}



?>