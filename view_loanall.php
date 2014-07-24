<html>
<title>
<link rel="stylesheet" type="text/css" href="css.css" />
</title>
<style type="text/css">
<!--
.style1 {color:  #FFFFFF;}
-->
</style>
<body>


<table width="483" border="0" class=" bordercolor">
  <tr>
    <th width="38" class="tableheadcolor  style1" scope="col">Loan Id </th>
    <th width="61" class="marq style1" scope="col">Request date </th>
    <th width="53" class="tableheadcolor  style1" scope="col">Loan amount </th>
    <th width="46" class="marq  style1" scope="col">Loan period </th>
    <th width="71" class="tableheadcolor  style1" scope="col">Client First name </th>
    <th width="75" class="marq  style1" scope="col">Client Last name </th>
    <th width="93" class="tableheadcolor  style1" scope="col">Client A/C balance </th>
  </tr>
  <?php

 

					include('includes/connect.php');	
						//create query to check n c if staff exists
						
						$app = "no";
						$sql="SELECT*FROM loan,client,account_status WHERE loan.client_id=client.client_id AND client.client_id=account_status.client_id";
						
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
			
		
		
		
						?>
  <tr>
    <th class="backcol1" scope="row">&nbsp;<?php echo $id ;?></th>
    <td class="marq">&nbsp; <?php echo $date;?></td>
    <td class="backcol1">&nbsp;<?php echo $amount; ?></td>
    <td class="marq">&nbsp;<?php echo $period ;?></td>
    <td class="backcol1">&nbsp;<?php echo $fname ;?></td>
    <td class="marq">&nbsp;<?php echo $lname ;?></td>
    <td class="backcol1">&nbsp;<?php echo $balance ;?></td>
  </tr>
  <?php
  }}
  ?>
</table>

</body>

</html>
