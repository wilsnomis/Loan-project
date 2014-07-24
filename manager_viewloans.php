
<?php
require_once('auth.php');
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css.css" />

</head>

<body>
<table width="700" height="252" border="0">
  <tr bgcolor="#333333">
    <th class="green white"  colspan="4" ><p>&nbsp;</p>
      <p class="style4"><span"><h1 >HUADAR GUANGDONG CHINESE COMPANY LIMITED</h1></span></p>
      <p>&nbsp;</p></th>
  </tr>
  <tr bgcolor="#333333">
    <th colspan="4">&nbsp; <?php  include('logged2.php'); ?></th>
  </tr>
  <tr>
    <td width="258"><form id="approve" name="approve" method="post" action="approving_loan_admin.php">
            <table width="258" border="0">
              <tr>
                <th colspan="2" scope="col">Approve loan  from here. </th>
              </tr>
              <tr>
                <th colspan="2" scope="row"><span style="color:#F00;">
                  <?php
if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
echo '<ul class="err">';
foreach($_SESSION['ERRMSG_ARR'] as $msg) {
echo '<li>',$msg,'</li>';
}
echo '</ul>';
unset($_SESSION['ERRMSG_ARR']);
}
?>
                </span></th>
              </tr>
              
              <tr>
                <th width="95" scope="row">Loan ID </th>
                <td width="153"><input name="id" type="text" id="id" /></td>
              </tr>
              
              <tr>
                <th scope="row">&nbsp;</th>
                <td><input name="approve" type="submit" id="approve" value="Approve Loan" /> 
                <input name="reset" type="reset" id="reset" value="Reset" /></td>
              </tr>
            </table>
    </form>&nbsp;</td>
    <td width="162">&nbsp;</td>
    <td width="58"  valign="top" ><a href="managerhome.php">Go home    </a></td>
    <td width="1256" valign="bottom">&nbsp;Scroll right for client's details >>>>></td>
  </tr>
  <tr>
    <td colspan="4"><form method="post" name="update" action="includes/managerview_clients.php">
<table width="1171" border="0" class=" dark">
  <tr bgcolor="#99CCCC">
    <th width="46"  class="tableheadcolor"  scope="col">Loan Id </th>
    <th width="67" class="marq " scope="col">Request date </th>
    <th width="65" class="tableheadcolor" scope="col">Loan amount </th>
    <th width="55"class="marq " scope="col">Loan period </th>
    <th width="53" class="tableheadcolor " scope="col">Client First name </th>
    <th width="53"class="marq " scope="col">Client Last name </th>
    <th width="53"class="marq " scope="col">Client photo </th>
    <th width="65" class="tableheadcolor  " scope="col">Client A/C balance </th>
    <th width="60" class="tableheadcolor " scope="col">security</th>
    <th width="60" class="tableheadcolor " scope="col">security photo</th>
    <th width="112" class="tableheadcolor  " scope="col">v_reg_number</th>
    <th width="140" class="tableheadcolor  " scope="col">v_chassis_number</th>
    <th width="61" class="tableheadcolor " scope="col">v_make</th>
    <th width="6" class="tableheadcolor  " scope="col">v_engine_no</th>
    <th width="6" class="tableheadcolor  " scope="col">v_year_manufacture</th>
    <th width="6" class="tableheadcolor " scope="col">v_color</th>
    <th width="6" class="tableheadcolor  " scope="col">l_plot_number</th>
    <th width="6" class="tableheadcolor  " scope="col">l_block_number</th>
    <th width="6" class="tableheadcolor  " scope="col">l_district</th>
    <th width="6" class="tableheadcolor " scope="col">l_sub_county</th>
    <th width="6" class="tableheadcolor  " scope="col">l_village</th>
    <th width="6" class="tableheadcolor " scope="col">accreage</th>
    <th width="6" class="tableheadcolor  " scope="col">client_id</th><th>
    <td><?php
if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
echo '<ul class="err">';
foreach($_SESSION['ERRMSG_ARR'] as $msg) {
echo '<li>',$msg,'</li>';
}
echo '</ul>';
unset($_SESSION['ERRMSG_ARR']);
}
?></td>
    </th>
  </tr>
  
  
  <?php

 

					include('includes/connect.php');	
						//create query to check n c if staff exists
					
						$app = "yes";
						$no="no";
						$sql="SELECT*FROM loan,client,account_status WHERE loan.loanofficer_approval='$app' AND loan.client_id=client.client_id AND loan.managerapproval='$no' AND client.client_id=account_status.client_id";
						
						$result=mysql_query($sql);
			if(mysql_num_rows($result) >=1){  
			
			while($rows=mysql_fetch_array($result)){
			$id=$rows['loan_id'];
			$date=$rows['loan_date'];
			$amount=$rows['loan_amount'];
			$period=$rows['loan_period'];
			$fname=$rows['fname'];
			$lname=$rows['lname'];
			$clientphoto=$rows['clientphoto'];
			$balance=$rows['available_balance'];
			
			$security=$rows['security'];
			$securityphoto=$rows['securityphoto'];
			$v_reg_number=$rows['v_reg_number'];
			$v_chassis_number=$rows['v_chassis_number'];
			$v_make=$rows['v_make'];
			$v_engine_no=$rows['v_engine_no'];
			$v_year_manufacture =$rows['v_year_manufacture'];
			 	$v_color=$rows['v_color'];
				 	$l_plot_number=$rows['l_plot_number'];
					$l_block_number=$rows['l_block_number'];
					$l_district=$rows['l_district'];
					$l_sub_county=$rows['l_sub_county'];
					$l_village=$rows['l_village'];
					$accreage=$rows['accreage'];
					$managerapproval=$rows['managerapproval'];
					$loanofficer_approval=$rows['loanofficer_approval'];
					$cashier_clearance=$rows['cashier_clearance'];
					$client_id=$rows['client_id'];
			
		
		
		
						?>
  
  
  
  <tr  bgcolor="#CCCCCC" class="alert-info" >
    <td class="backcol1" scope="row">&nbsp;<?php echo $id ;?></td>
    <td class="marq">&nbsp; <?php echo $date;?></td>
    <td class="backcol1">&nbsp;<?php echo $amount; ?>&nbspshs.</td>
    <td class="marq">&nbsp;<?php echo $period ;?>&nbspmonths</td>
    <td class="backcol1">&nbsp;<?php echo $fname ;?></td>
    <td class="marq">&nbsp;<?php echo $lname ;?></td>
     <td class="backcol1"> <img  src="<?php echo $clientphoto;?>" width="100" height="70"/></td>
    <td class="backcol1">&nbsp;<?php echo $balance ;?>&nbspshs.</td>
	
	
	 <td class="backcol1">&nbsp;<?php echo $security ;?></td>
      <td class="backcol1"> <img  src="<?php echo $securityphoto;?>" width="100" height="70"/></td>
     
	 <td class="backcol1">&nbsp;<?php echo $v_reg_number ;?></td>
	 <td class="backcol1">&nbsp;<?php echo $v_chassis_number;?></td>
	 <td class="backcol1">&nbsp;<?php echo $v_make;?></td>

	 <td class="backcol1">&nbsp;<?php echo $v_engine_no;?></td>
	 <td class="backcol1">&nbsp;<?php echo $v_year_manufacture;?></td>
	 <td class="backcol1">&nbsp;<?php echo $v_color;?></td>
	 <td class="backcol1">&nbsp;<?php echo $l_plot_number;?></td>
	 <td class="backcol1">&nbsp;<?php echo $l_block_number;?></td>
	 <td class="backcol1">&nbsp;<?php echo $l_district;?></td>
	 <td class="backcol1">&nbsp;<?php echo $l_sub_county;?></td>
	 <td class="backcol1">&nbsp;<?php echo $l_village;?></td>
	 <td class="backcol1">&nbsp;<?php echo $accreage;?></td>
	 <td class="backcol1">&nbsp;<?php echo $client_id;?></td>
     <td><input type="hidden" name="cid" value="<?php echo $client_id?>"></td>
     <td><input type="submit" name="details" value="View Client details" onClick="../manager_viewclients.php"/></td>
     
    
	 <?php
  }}
  ?>
  </tr>
</table>
</form>
      Scroll to right to view client's details</td>
  </tr>
  <tr>
    <td colspan="4" bgcolor="#333333" class="footer">&nbsp;</td>
  </tr>
</table>
</body>
</html>