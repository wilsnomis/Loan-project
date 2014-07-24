<?php 
session_start();

if(isset($_POST['Update'])){
 
 $errmsg_arr = array();
 
//Validation error flag
$errflag = false;
 
  $fKname = $_POST["fname"];
   $lname = $_POST["lname"];
    $gender = $_POST["gender"];
 $tel = $_POST["tel"];
  $post = $_POST["position"];
   $admin_id = $_POST["admin_id"];
 


 if($fKname == '') {
$errmsg_arr[] = 'Firset name missing';
$errflag = true;
}
if($lname == '') {
$errmsg_arr[] = 'Last name missing';
$errflag = true;
}
if($gender == '') {
$errmsg_arr[] = ' Fill gender field';
$errflag = true;
}
if($tel == '') {
$errmsg_arr[] = 'Phone number missing';
$errflag = true;
}
if($post == '') {
$errmsg_arr[] = 'Position missing';
$errflag = true;
}


if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;

session_write_close();
header("location:updating_admin.php");
exit();
}

 $errorMessage = '';
					include('includes/connect.php');	
						//create query to check n c if staff exists
						
							$user = $_SESSION['SESS_FIRST_NAME'];
						$lastname = $_SESSION['SESS_LAST_NAME'];
		
  
	include('includes/connect.php');
	//$update="delete from users where tel='$tel'";
	//$ask = "UPDATE admin SET fname='$fname' WHERE tel='id'";
	//$update="update admin set fname='$fname' where tel='id'";
	$kf="Dreams";
	
$sql=mysql_query("UPDATE users SET fname='$kf' WHERE tel='$tel'") or die ('Unable to execute query!!'.mysql_error());

		
						
						//$re = mysql_query($sql) or die ('Unable to execute query!!'.mysql_error());
if($sql){
	
		$errmsg_arr[] = 'Administrator information successfully deleted.$tel';
$errflag = true;
if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;

session_write_close();
header("location:updating_admin.php");
exit();
}
	
	}
	else{
		
		$errmsg_arr[] = 'Administrator not deleted.';
$errflag = true;
if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;

session_write_close();
header("location:updating_admin.php");
exit();
}
		}
	
	
	}
	
	
	
	/**
							
 
 $errorMessage = '';
					include('includes/connect.php');	
						//create query to check n c if staff exists
						
							$user = $_SESSION['SESS_FIRST_NAME'];
						$lastname = $_SESSION['SESS_LAST_NAME'];
							
							
							
						
				//	$update = "UPDATE admin SET fname='$fname', lname='$lname',gender='$gender', tel='$tel',userType='$post' //WHERE admin_id='$admin_id'";
					$update="update admin set fname='$fname' where admin_id='$admin_id'";
		
						
						$re = mysql_query($update) or die ('Unable to execute query!!'.mysql_error());
if($re)
{
$errmsg_arr[] = 'Administrator information successfully updated.';
$errflag = true;
if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;

session_write_close();
header("location:updating_admin.php");
exit();
}

}

else{
$errmsg_arr[] = 'Administrator information not updated.';
$errflag = true;
if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;

session_write_close();
header("location:updating_admin.php.php");
exit();
}

}}
else{
header("location:updating_admin.php");
exit();
}

**/

?>








 