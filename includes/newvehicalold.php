<?php


	
	  



$sql="SELECT*FROM client,account_status WHERE client.email='$email' AND client.tel='$tel' AND client.email='$email' AND client.client_id=account_status.client_id";
			$result=mysql_query($sql);
			if(mysql_num_rows($result) >=1){  
			while($rows=mysql_fetch_array($result)){
			$id=$rows['client_id'];
			$abalance=$rows['available_balance'];
			
			if($abalance>=1 && $abalance<$amount){
			$actual=$amount-$abalance;
			$amount_forpay=$actual+$totalinterest;
			$path =image();
			
						
					$clt ="INSERT INTO loan(loan_amount, loan_period,client_id,amount_forpay,security,securityphoto,v_reg_number,v_chassis_number,v_make,v_engine_no,v_year_manufacture, v_color) VALUES ('$amount','$period','$id','$amount_forpay','$security','$path','$regnumber','$chassisnumber','$make','$enginenumber','$manufactureyear','$color')";
					
					$reslt = mysql_query($clt) or die("Unable to register loan!".mysql_error());
if($reslt)
{
	include('includes/oldclient_loanviewl.php');


}	
else
	{
$errmsg_arr[]= "Insert Failed!!";
$errflag = true;

if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;

session_write_close();
header("location:testview.php");
exit();
}

}
}


else if($abalance>=$amount){
$errmsg_arr[]="The client is not eligible for that loan because his/her account has enough money comparable to the requested loan amount";
$errflag = true;

if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;

session_write_close();
header("location:testview.php");
exit();
}


}


else{
	
	$amount_forpay=$amount+$totalinterest;
	$path =image();
					$client ="INSERT INTO loan(loan_amount, loan_period,client_id,amount_forpay,security,securityphoto,v_reg_number,v_chassis_number,v_make,v_engine_no,v_year_manufacture,v_color) VALUES ('$amount','$period','$id','$amount_forpay','$security','$path','$regnumber',' $chassisnumber','$make','$enginenumber','$manufactureyear',' $color' )";
					
					$result = mysql_query($client) or die("Unable to register loan!".mysql_error());
if($result)
{
	include('includes/oldclient_loanviewl.php');

}	
else
	{
$errmsg_arr[]=  "Insert Failed!!";
$errflag = true;
	
					if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;

session_write_close();
header("location:testview.php");
exit();
}
}

}




}}



else{
			
					$errmsg_arr[]= "The client with such email: $email  and telephone number $tel does not exist in our system.";
					$errflag = true;
					
					if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;

session_write_close();
header("location:testview.php");
exit();
}
					
			}
			?>