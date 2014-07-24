
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="934" height="295" border="1">
  <tr>
    <th colspan="3" class="green" ><p>&nbsp;</p>
        <p class="style4"><span class="whitecenter">HUADAR GUANGDONG CHINESE COMPANY LIMITED </span></p>
    </th>
  </tr>
  <tr>
    <td width="294" height="27">&nbsp;</td>
    <td width="131">&nbsp;</td>
    <td width="468">&nbsp;</td>
    <td width="13">&nbsp;</td>
  </tr>
  <tr>
    <td><form id="inquire" name="inquire" method="post" action="client_account_inquiry.php">
      <table width="294" border="0">
        <tr>
          <th colspan="2" scope="col">Client account inquiry</th>
        </tr>
        <tr>
          <th width="135" scope="row">&nbsp;</th>
          <td width="149">&nbsp;</td>
        </tr>
        <tr>
          <th scope="row">Telephone no. </th>
          <td><input name="tel2" type="text" class="marq" id="tel2" /></td>
        </tr>
        <tr>
          <th class="bod" scope="row">Account no. </th>
          <td><input name="account" type="text" class="marq" id="account" /></td>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <td><input name="inquire2" type="submit" id="inquire" value="Inquire" />
            <input name="reset2" type="reset" id="reset2" value="Reset" /></td>
        </tr>
      </table>
    </form></td>
    <td> <?php
if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
echo '<ul class="err">';
foreach($_SESSION['ERRMSG_ARR'] as $msg) {
echo '<li>',$msg,'</li>';
}
echo '</ul>';
unset($_SESSION['ERRMSG_ARR']);
}
?>&nbsp;</td>
    <td rowspan="4"><?php
		  if(isset($_POST['inquire'])){
		 
		  $errmsg_arr = array();
 
//Validation error flag
$errflag = false;
include('includes/connect.php');	
						//create query to check n c if staff exists
						$tel=$_POST['tel2'];
						$account=$_POST['account'];
						$date1=date("d-m-Y",time());
					
						
						//$sql="SELECT*FROM client WHERE tel='$tel'";
						
						
						$sql="SELECT*FROM client,account_status WHERE  client.client_id=account_status.client_id AND account_status.account_number='$account' AND client.tel='$tel'";
						
						$result=mysql_query($sql);
			if(mysql_num_rows($result) >=1){  
			
			while($rows=mysql_fetch_array($result)){
			$fname=$rows['fname'];
			$lname=$rows['lname'];
			$gender=$rows['gender'];
			$account_number=$rows['account_number'];
			$deposit_amount=$rows['deposit_amount'];
			$available_balance=$rows['available_balance'];
			

echo("Account status inquiry result form .");

echo"
			<form>
			<fieldset  >
			<br/>
			<table width='200' height='50' >
			<tr ><td colspan='2' color='#90DBFF' class='red'>Information for received loan</td>
			</tr>
  <tr>
    <td scope='col'>First name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	";
	
  ?>          </td>
    </tr>
        <tr>
          <td>&nbsp;</td>
          <td scope='col'  class="dark"> <?php echo $rows['fname']; ?></td>
  </tr>
  <tr>
    <td scope='row'>Last name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td  class="dark"><?php echo $rows['lname']; ?></td>
  </tr>
  <tr>
    <td scope='row'>Gender:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td  class="dark"><?php echo $rows['gender']; ?></td>
  </tr>
  <tr>
    <td scope='row'>A/c no.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td  class="dark"><?php echo $account_number; ?></td>
  </tr>
  <tr>
    <td scope='row'>previous deposit amount&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td  class="dark"><?php echo $deposit_amount; ?></td>
  </tr>
  
  <tr>
    <td scope='row'>Available balance:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td  class="dark"><?php echo $available_balance; ?></td>
  </tr>
  
 
  <tr>
    <td scope='row'>Deposit date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td  class="dark"><?php echo $date1;?></td>
  </tr>
  <tr>
    <td scope='row'>&nbsp;</td>
    <td  class="dark">&nbsp;</td>
  </tr>
  <tr>
    <td scope='row'>&nbsp;</td>
    <td  class="dark">&nbsp;</td>
  </tr>
  <tr>
    <td scope='row'>&nbsp;</td>
    <td  class="dark">&nbsp;</td>
  </tr>
  <tr>
    <td scope='row'>&nbsp;</td>
    <td  class="dark">&nbsp;</td>
  </tr>
  
 <?php }}
 
 
 else{
	 $errmsg_arr[] =("The client information is un available");

$errflag = true;
if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
session_write_close();
header("location:client_account_inquiry.php");
exit();
}
	 
	 
  ?>
  
  
</table>
  </fieldset >
		<INPUT TYPE="button" onClick="window.print()" value="Print">
</form>
		
		<?php }
		  }?>	&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>