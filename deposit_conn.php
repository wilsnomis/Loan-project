


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title >LOAN OF VALUE</title>
<link rel="stylesheet" type="text/css" href="css.css" />
<style type="text/css">
<!--
body {
	background-image: url(../images/kovin.JPEG.jpg);
	background-repeat: repeat;
}
body,td,th {
	font-size: larger;
	color: #0066FF;
}

-->
</style>
<script src="../Scripts/AC_RunActiveContent.js" type="text/javascript"></script>

<script type="text/javascript">
	// <![CDATA[
	var myMenu;
	window.onload = function() {
		myMenu = new SDMenu("my_menu");
		myMenu.init();
		xajax_auth();
	};
	// ]]>
	</script>
<script type="text/javascript">

functio validateForm(){
 var x=document.forms["login"]["username"].value;
 if(x=null \\ x=""){
 alert("Fill in the username");
 return false;
 }
 var y=document.forms["login"]["password"].value;
  if(y=null \\ y=""){
 alert("Fill in the password");
 return false;
 }
 
}

</script>
</head>

<body>

</center>
<div align="center" class="style2">
  <table width="874" border="0" cellpadding="4" bordercolor="#0099FF" bgcolor="#FFFFFF">
    <tr>
      <th width="862" class="green" ><p>&nbsp;</p>
      <p class="style4"><span class="whitecenter">HUADAR GUANGDONG CHINESE COMPANY LIMITED </span></p>
      <p>&nbsp;</p></th>
    </tr>
    <tr>
      <td height="79" align="center">
        
        <fieldset>
        <table width="860" height="50" >
          <tr>
            <td width="283" height="22"><a href="accountanthome.php">Go back</a></td>
            <td width="565"><a href="adminin.php"></a></td>
          </tr>
          <tr>
            <td height="22" colspan="2" class="marq">&nbsp;</td>
          </tr>
        </table>
        <form id="form1" name="login" method="post" action="">
          <table width="568" align="center" ">
            <tr>
              <td width="10" rowspan="3" align="Right">&nbsp;</td>
              <td width="10" rowspan="3">&nbsp;</td>
              <td width="527">&nbsp;</td>
              <td width="10"><label></label></td>
            </tr>
            <tr>
              <td><?php
 session_start();
 
if(isset($_POST['deposit'])){
 


 
 $errorMessage = '';
					include('includes/connect.php');	
//create query to check n c if staff exists

$errmsg_arr = array();
 
//Validation error flag
$errflag = false;

function clean($str) {
$str = @trim($str);
if(get_magic_quotes_gpc()) {
$str = stripslashes($str);
}
return mysql_real_escape_string($str);
}


 $email =  clean($_POST["email2"]);
 $tel=  clean($_POST["tel2"]);
 $account = clean( $_POST["account"]);
 $amount =  clean($_POST["amount"]);
 
 
 
						
if($email == '') {
$errmsg_arr[] = 'Email adress missing';
$errflag = true;
}
if($tel == '') {
$errmsg_arr[] = 'Telephone number missing';
$errflag = true;
}

if($account == '') {
$errmsg_arr[] = 'Account number missing';
$errflag = true;
}

if($amount == '') {
$errmsg_arr[] = 'Deposit amount missing';
$errflag = true;
}
if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
session_write_close();
header("location:accountanthome.php");
exit();
}
							
							$uncleared="un_cleared";
							$cleared="cleared";
							
							$user = $_SESSION['SESS_FIRST_NAME'];
						$lastname = $_SESSION['SESS_LAST_NAME'];
							
						
						$sql="SELECT*FROM client,account_status WHERE client.email='$email' AND client.tel='$tel' AND account_status.account_number='$account' AND client.client_id=account_status.client_id";
						
						
			$result=mysql_query($sql);
			if(mysql_num_rows($result) >=1){  
			
			while($rows=mysql_fetch_array($result)){
			$available_balance=$rows['available_balance'];
			$id=$rows['client_id'];
			$phot=$rows['clientphoto'];
			$available_now=$amount+$available_balance;
			
			if($available_now>=1){
			
			
			
		$sel="SELECT*FROM loan WHERE client_id='$id'";
		$qy = mysql_query($sel) or die ('Unable to execute query!!'.mysql_error());
if($qy){
			
			
			
			
			$ask = "UPDATE account_status,loan,client SET account_status.available_balance ='$available_now',account_status.deposit_amount='$amount', loan.status ='$cleared' WHERE account_status.client_id=loan.client_id AND account_status.client_id=client.client_id AND client.email='$email' AND client.tel='$tel'";
			
			
			
				$query = mysql_query($ask) or die ('Unable to execute query!!'.mysql_error());
if($query){

include('includes/deposit_view.php');	
?>
<?php

$sq="SELECT*FROM client,loan WHERE client.email='$email' AND client.tel='$tel' AND client.client_id=loan.client_id";
$rt=mysql_query($sq);
			if(mysql_num_rows($rt) >=1){  
			
			while($rows=mysql_fetch_array($rt)){
			$lid=$rows['loan_id'];
			$st=$rows['status'];
			$cid=$rows['client_id'];
			$la=$rows['loan_amount'];
			$pay=$rows['amount_forpay'];
			$ld=$rows['loan_date'];
			$pd=$rows['loan_period'];
			
			
			if($st==$cleared){//start if stmt 1
			
			
			$lc ="INSERT INTO cleared_loan(status, client_id, loan_id, lamount, pay_amount,period, ldate) VALUES ('$st','$cid','$lid','$la','$pay','$pd','$ld')";
			$lt = mysql_query($lc) or die("Unable to register client!".mysql_error());
if($lt)//start if stmt 2
{
$del="DELETE FROM loan WHERE loan_id='$lid' AND status ='$cleared'";
	$rs = mysql_query($del) or die ('Unable to execute query!!'.mysql_error());
if($rs)//start if stmt 3
{
echo"Deleted";						
}//end if statement	3


	}//end if statement	2
	} //end if statement1	
	else{}	
			
			
			
			}}
			

 ?>
	
			
<?php
}else{
//echo("Processing failed and client money has not been deposited, please try again.");

$errmsg_arr[]="Processing failed and client money has not been deposited, please try again.";
$errflag = true;
	if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
session_write_close();
header("location: accountanthome.php");
exit();
}
}
			

//End of update			
			//Printing task remaining
			}
			else{
				$p = "UPDATE account_status,client SET account_status.available_balance ='$available_now',account_status.deposit_amount='$amount' WHERE account_status.client_id=client.client_id AND client.email='$email' AND client.tel='$tel'";
				
			$qry = mysql_query($p) or die ('Unable to execute query!!'.mysql_error());
if($qry)
{}
			
			}
			
			
			
			}
			
			
			else{
			$up = "UPDATE account_status,loan,client SET account_status.available_balance ='$available_now',account_status.deposit_amount='$amount', loan.status ='$uncleared' WHERE account_status.client_id=loan.client_id AND account_status.client_id=client.client_id AND client.email='$email' AND client.tel='$tel'";
			
			
			$query = mysql_query($up) or die ('Unable to execute query!!'.mysql_error());
if($query)
{

include('includes/deposit_view.php');
?>
			
<?php

}else{
//echo("Processing failed and client money has not been deposited, please try again.");
 


$errmsg_arr[]="Processing failed and client money has not been deposited, please try again.";
$errflag = true;
	if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
session_write_close();
header("location: accountanthome.php");
exit();
}
}
			
			
			// Printing task remaining
			}
			
			
			
			
		
		}
		}
		else{
			
					$errmsg_arr[]="Client with email: $email  and Phone number $tel  and A/c: $account does not exist in our system";
					$errflag = true;
					if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
session_write_close();
header("location: accountanthome.php");
exit();
}
			}


}else{
header('Location:accountanthome.php');
}
		
			
					
?></td>
              <td><label></label></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><label></label></td>
            </tr>
          </table>
        </form>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
      </fieldset></a></td>
    </tr>
    
    <tr>
      <td height="27" class="green whitecenter "><div >
        Huadar Guangdong Chinese Co. Ltd, Head Office: Kitgum house, Plot 53, Jinja road. P.O.Box 11751 Kampala.<br/>
         <center>Tel: +256-730-009300
          Copyright 2014</center>
      </div></td>
    </tr>
  </table>
  
</div>
</body>
</body>
</html> 


