
<?php
require_once('auth.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title >HUADAR GUANGDONG</title>
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
        <table width="862"  >
          <tr>
          <th colspan="4" scope="col"  ><?php  include('logged.php'); ?>&nbsp;		  </th>
          </tr>
          <tr>
            <td height="22" class="marq">&nbsp;</td>
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
 
//session_start();
 
if(isset($_POST['loan_verification'])){
 
 $errmsg_arr = array();
 
//Validation error flag
$errflag = false;
 
 $email = $_POST["email"];
 $tel= $_POST["tel"];
 $account = $_POST["account1"];

 
 if($account == '') {
$errmsg_arr[] = 'Account number missing';
$errflag = true;
}
 if($email == '') {
$errmsg_arr[] = 'Email adress missing';
$errflag = true;
}
if($tel == '') {
$errmsg_arr[] = 'Telephone number missing';
$errflag = true;
}




if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;

session_write_close();
header("location:accountanthome.php");
exit();
}
							
 
 
 $f='Date.now()';
 
 $errorMessage = '';
					include('includes/connect.php');	
						//create query to check n c if staff exists
						
							$user = $_SESSION['SESS_FIRST_NAME'];
						$lastname = $_SESSION['SESS_LAST_NAME'];
							
							$cashier_clear="not";
							$cash="cleared";
							$accept="yes";
							$loan_state="un_cleared";
							$loan_state_clear="cleared";
						
						$sql="SELECT*FROM client,account_status WHERE client.email='$email' AND client.tel='$tel' AND account_status.account_number=$account AND client.client_id=account_status.client_id";
						
						
			$result=mysql_query($sql);
			if(mysql_num_rows($result) >=1){  
			
			while($rows=mysql_fetch_array($result)){
			$available_balance=$rows['available_balance'];
			$account_number=$rows['account_number'];
			
			$sq="SELECT*FROM loan,client WHERE client.email='$email' AND client.tel='$tel' AND client.client_id=loan.client_id";
						
			$res=mysql_query($sq);
			if(mysql_num_rows($res) >=1){ 
			 
			
			while($rows=mysql_fetch_array($res)){
			
			               
			
						
							
			
			$manager=$rows['managerapproval'];
			$officer=$rows['loanofficer_approval'];
			
			
			if($manager==$accept && $officer==$accept){
			
			$cashier=$rows['cashier_clearance'];
			$loanclear=$rows['status'];
			
			if($cashier_clear==$cashier){
			
		$loan_amount=$rows['loan_amount'];
		$cleared="cleared";
		$ldate=$rows['loan_date'];
		//$now = new Date()
	
		
		
		$actualnow_balance=$available_balance-$loan_amount;
		
		
		
		$update = "UPDATE account_status,loan,client SET account_status.available_balance ='$actualnow_balance', loan.cashier_clearance ='$cleared' WHERE account_status.client_id=loan.client_id AND account_status.client_id=client.client_id AND client.email='$email' AND client.tel='$tel'";
		
		
$re = mysql_query($update) or die ('Unable to execute query!!'.mysql_error());
if($re)
{
/**
$errmsg_arr[] =("Now it's ok to give a loan to the client.");
$errflag = true;


if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
session_write_close();
header("location:accountanthome.php");
exit();
}
**/




include('includes/giveloan_view.php');	
exit;
}else{
$errmsg_arr[] =("Processing failed, please try again.");

$errflag = true;
if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
session_write_close();
header("location:accountanthome.php");
exit();
}

}



}



else if($cash==$cashier && $loanclear==$loan_state_clear){

$errmsg_arr[] =("The client should first register for another loan. Let him/her visit the Data clerk for loan registration");

$errflag = true;
if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
session_write_close();
header("location:accountanthome.php");
exit();
}

} 




else{

$errmsg_arr[] =("The client seem to have already taken the loan or having balance to clear with the previous loan.");}
$errflag = true;

if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
session_write_close();
header("location:accountanthome.php");
exit();
}

}


else{
$errmsg_arr[] =("The client loan is not yet approved by both the Manager and loan officer.");}
$errflag = true;

if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
session_write_close();
header("location:accountanthome.php");
exit();
}


}
}


else{
$errmsg_arr[] =("You need to first register for a loan.");
$errflag = true;

if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
session_write_close();
header("location:accountanthome.php");
exit();
}

}
		
		}
		}
		else{
			
					$errmsg_arr[] ="The client with such email: $email  and telephone number $tel  and account number: $account does not exist in our system.";
					$errflag = true;
					
					if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
session_write_close();
header("location:accountanthome.php");
exit();
}
			}


}else{
header('Location:index.php');
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
    
    <tr  class="green whitecenter ">
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


