	<?php //Start session
session_start();
 
//Include database connection details
//require_once('connection.php');
include('includes/connect.php');	
 
//Array to store validation errors
$errmsg_arr = array();
 
//Validation error flag
$errflag = false;
 
//Function to sanitize values received from the form. Prevents SQL injection
function clean($str) {
$str = @trim($str);
if(get_magic_quotes_gpc()) {
$str = stripslashes($str);
}
return mysql_real_escape_string($str);
}
 
//Sanitize the POST values
$username = clean($_POST['username']);
$password = clean($_POST['password']);
 
//Input Validations
if($username == '') {
$errmsg_arr[] = 'Username missing';
$errflag = true;
}
if($password == '') {
$errmsg_arr[] = 'Password missing';
$errflag = true;
}
 
//If there are input validations, redirect back to the login form
if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
session_write_close();
header("location: index.php");
exit();
}
 
//Create query
$qry="SELECT * FROM users WHERE username='$username' AND password='$password'";
$result=mysql_query($qry);
 
//Check whether the query was successful or not
if($result) {
if(mysql_num_rows($result) > 0) {
//Login Successful
session_regenerate_id();
$member = mysql_fetch_assoc($result);
$_SESSION['SESS_MEMBER_ID'] = $member['admin_id'];
$_SESSION['SESS_FIRST_NAME'] = $member['fname'];
$_SESSION['SESS_LAST_NAME'] = $member['lname'];
$_SESSION['SESS_USER_TYPE'] = $member['userType'];


$type=$member['userType'];

session_write_close();
$accountant="Cashier";
$clk="Data_clerk";
$officer="Loan_officer";
$admin="administrator";
$manager="Manager";
if($type==$accountant){
	$in="in";
	$id=$_SESSION['SESS_MEMBER_ID'];
	$sql=mysql_query("UPDATE users SET state='$in' WHERE admin_id ='$id'") or die ('Unable to execute query!!'.mysql_error());
if($sql){


header("location: accountanthome.php");

}
}
else if($type==$clk){
	
	$in="in";
	$id=$_SESSION['SESS_MEMBER_ID'];
	$sql=mysql_query("UPDATE users SET state='$in' WHERE admin_id ='$id'") or die ('Unable to execute query!!'.mysql_error());
if($sql){
header("location: Data_clerkhome.php");
}
}
else if($type==$officer){
	$in="in";
	$id=$_SESSION['SESS_MEMBER_ID'];
	$sql=mysql_query("UPDATE users SET state='$in' WHERE admin_id ='$id'") or die ('Unable to execute query!!'.mysql_error());
if($sql){
	
header("location: loan-officerhome.php");
}
}
else if($type==$admin){
	$in="in";
	$id=$_SESSION['SESS_MEMBER_ID'];
	$sql=mysql_query("UPDATE users SET state='$in' WHERE admin_id ='$id'") or die ('Unable to execute query!!'.mysql_error());
if($sql){
header("location: adminhome.php");
}
}
else if($type==$manager){
	$in="in";
	$id=$_SESSION['SESS_MEMBER_ID'];
	$sql=mysql_query("UPDATE users SET state='$in' WHERE admin_id ='$id'") or die ('Unable to execute query!!'.mysql_error());
if($sql){
header("location: managerhome.php");
}
	
	
	}


}else {
//Login failed
$errmsg_arr[] = 'Enter correct username and password';
$errflag = true;
if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
session_write_close();
header("location: index.php");
exit();
}
}
}else {
die("Query failed");
}
?>