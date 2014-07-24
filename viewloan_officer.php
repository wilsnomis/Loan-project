
<html>
<title>
<link rel="stylesheet" type="text/css" href="css.css" />
</title>
<style type="text/css">
<!--
.style1 {color:  #FFFFFF;}
-->
</style>
<form>
<table width="1171" border="0" class="bordercolor">
  <tr>
    <th width="46"  class="tableheadcolor style1"  scope="col">Loan Id </th>
    <th width="67" class="marq style1" scope="col">Request date </th>
    <th width="65" class="tableheadcolor  style1" scope="col">Loan amount </th>
    <th width="55"class="marq style1" scope="col">Loan period </th>
    <th width="53" class="tableheadcolor  style1" scope="col">Client First name </th>
    <th width="53"class="marq style1" scope="col">Client Last name </th>
    <th width="65" class="tableheadcolor  style1" scope="col">Client A/C balance </th>
    <th width="60" class="tableheadcolor  style1" scope="col">security</th>
     <th width="60" class="tableheadcolor  style1" scope="col">security photo</th>
    <th width="112" class="tableheadcolor  style1" scope="col">v_reg_number</th>
    <th width="140" class="tableheadcolor  style1" scope="col">v_chassis_number</th>
    <th width="61" class="tableheadcolor  style1" scope="col">v_make</th>
    <th width="6" class="tableheadcolor  style1" scope="col">v_engine_no</th>
    <th width="6" class="tableheadcolor  style1" scope="col">v_year_manufacture</th>
    <th width="6" class="tableheadcolor  style1" scope="col">v_color</th>
    <th width="6" class="tableheadcolor  style1" scope="col">l_plot_number</th>
    <th width="6" class="tableheadcolor  style1" scope="col">l_block_number</th>
    <th width="6" class="tableheadcolor  style1" scope="col">l_district</th>
    <th width="6" class="tableheadcolor  style1" scope="col">l_sub_county</th>
    <th width="6" class="tableheadcolor  style1" scope="col">l_village</th>
    <th width="6" class="tableheadcolor  style1" scope="col">accreage</th>
    <th width="6" class="tableheadcolor  style1" scope="col">client_id</th>
  </tr>
  
  
  <?php

 

					include('includes/connect.php');	
						//create query to check n c if staff exists
					
						$app = "no";
						$sql="SELECT*FROM loan,client,account_status WHERE loan.loanofficer_approval='$app' AND loan.client_id=client.client_id AND client.client_id=account_status.client_id";
						
						$result=mysql_query($sql);
			if(mysql_num_rows($result) >=1){  
			
			while($rows=mysql_fetch_array($result)){
			$id=$rows['loan_id'];
			$date=$rows['loan_date'];
			$amount=$rows['loan_amount'];
			$period=$rows['loan_period'];
			$fname=$rows['fname'];
			$lname=$rows['lname'];
			$balance=$rows['available_balance'];
			
			$security=$rows['security'];
			$sphoto=$rows['securityphoto'];
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
  
  
  
  <tr>
    <td class="backcol1" scope="row">&nbsp;<?php echo $id ;?></td>
    <td class="marq">&nbsp; <?php echo $date;?></td>
    <td class="backcol1">&nbsp;<?php echo $amount; ?>&nbspshs.</td>
    <td class="marq">&nbsp;<?php echo $period ;?>&nbspmonths</td>
    <td class="backcol1">&nbsp;<?php echo $fname ;?></td>
    <td class="marq">&nbsp;<?php echo $lname ;?></td>
    <td class="backcol1">&nbsp;<?php echo $balance ;?>&nbspshs.</td>
	
	
	 <td class="backcol1">&nbsp;<?php echo $security ;?></td>
       <td class="backcol1" scope="row"><img  src="<?php echo $sphoto;?>" width="100" height="70"/></td>
     
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
	 <?php
  }}
  ?>
  </tr>
</table>
</form>
</body>

</html>

