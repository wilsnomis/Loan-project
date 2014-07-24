


<?php
 
 session_start();
 
if(isset($_POST['interest'])){
 
 $errmsg_arr = array();
 
//Validation error flag
$errflag = false;

 
 $min = $_POST["min"];
 $max = $_POST["max"];
 $interest = $_POST["interest"];


 
 
  if($min == '') {
$errmsg_arr[] = 'Minimum amount value is missing';
$errflag = true;

}
 if($max == '') {
$errmsg_arr[] = 'Maximum amount value is missing';
$errflag = true;

}
if($interest == '') {
$errmsg_arr[] = 'Interest amount value is missing';
$errflag = true;

}
if($min >= $max) {
$errmsg_arr[] = 'Check your minimum and maximum interest values(Hint: Minimum value should be less than maximum value.)';
$errflag = true;

}



if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;

session_write_close();
header("location:setloan_interest.php");
exit();
}


 
 
 
 $errorMessage = '';
					include('includes/connect.php');	
						//create query to check n c if staff exists
						$user =$_SESSION['SESS_MEMBER_ID'];
						
						
						
						$sql="SELECT * FROM interests WHERE min>='$min'";
			$result=mysql_query($sql);
			if(mysql_num_rows($result) >=1){ 
			
			
			///////////////////////////////////////////////////////////////////////////
			$errmsg_arr[] ="The The minimum amount entered already exists. Try updating with another range or you can edit from here .................................!!";
			$errflag = true;
			
			if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;

session_write_close();
header("location:setloan_interest.php");
exit();
}
			
					
}	
else{
	$sql="SELECT * FROM interests WHERE max>='$max'";
			$result=mysql_query($sql);
			if(mysql_num_rows($result) >=1){ 
			
			
			///////////////////////////////////////////////////////////////////////////
			$errmsg_arr[] ="The maximum amount entered should be greater than all the values in the registered range.";
			$errflag = true;
			
			if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;

session_write_close();
header("location:setloan_interest.php");
exit();
}
			
					
}	
//////////////////////////////////////////////



else{
	$sql="SELECT * FROM interests WHERE max>='$min'";
			$result=mysql_query($sql);
			if(mysql_num_rows($result) >=1){ 
			
			
			///////////////////////////////////////////////////////////////////////////
			$errmsg_arr[] ="The minimum amount entered should be greater than all the values in the registered range.";
			$errflag = true;
			
			if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;

session_write_close();
header("location:setloan_interest.php");
exit();
}
			
					
}	



/////////////////////////////////////////////////////////////////////////////////
else
	{
		$client ="INSERT INTO interests(min, max, interest) VALUES ('$min','$max','$interest')";
					
					$int = mysql_query($client) or die("Unable to register client!".mysql_error());
if($int)
{
			
	
	
$errmsg_arr[]= "Loan interest successfully registered.";
$errflag = true;

if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;

session_write_close();
header("location:setloan_interest.php");
exit();
}
}

}}
}



}else{
header("location:setloan_interest.php");
}

?>