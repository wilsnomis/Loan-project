
<html>
<title>
<link rel="stylesheet" type="text/css" href="css.css" />
</title>
<style type="text/css">
<!--
.style1 {color:  #FFFFFF;}
.style2{background-color: #99CCCC;}
.style3{background-color:#0099FF;}
-->
</style>
<table width="1171" border="0" class="bordercolor">
<tr><td colspan="29"><a href="../Data_clerkhome.php" style="font-size:30px; text-align:center;">Go back</a></td></tr>
  <tr class="style3">
    <th width="46" class="tableheadcolor "  scope="col">Client Id: </th>
    <th width="46" class="tableheadcolor "  scope="col">Client photo</th>
    <th width="67" class="marq" scope="col">First name </th>
    <th width="65" class="tableheadcolor" scope="col">Second name:</th>
     <th width="65" class="tableheadcolor" scope="col">Other names:</th>
    <th width="55"class="marq" scope="col">Date of birth:</th>
    
    <th width="53"class="marq" scope="col">Gender </th>
    <th width="65" class="tableheadcolor " scope="col">Occupation: </th>
    <th width="60" class="tableheadcolor  " scope="col">Telephone</th>
    <th width="112" class="tableheadcolor  " scope="col">Email</th>
    <th width="140" class="tableheadcolor  " scope="col">Profession</th>
    <th width="61" class="tableheadcolor " scope="col">Identity type</th>
    <th width="6" class="tableheadcolor  " scope="col">District</th>
    <th width="6" class="tableheadcolor  " scope="col">County</th>
    <th width="6" class="tableheadcolor " scope="col">Sub county</th>
    <th width="6" class="tableheadcolor  " scope="col">Village</th>
    <th width="6" class="tableheadcolor " scope="col">Organisation</th>
    <th width="6" class="tableheadcolor  " scope="col">Organisation city</th>
    <th width="6" class="tableheadcolor " scope="col">Organisation street</th>
    <th width="6" class="tableheadcolor  " scope="col">Organisation plot no.</th>
    <th width="6" class="tableheadcolor  " scope="col">Position in org</th>
    <th width="6" class="tableheadcolor  " scope="col">Banker name</th>
	<th width="6" class="tableheadcolor " scope="col">Banker contact</th>
	<th width="6" class="tableheadcolor  " scope="col">Bank name</th>
	<th width="6" class="tableheadcolor " scope="col">Banker branch</th>
	<th width="6" class="tableheadcolor  " scope="col">Bank acconut no.</th>
	<th width="6" class="tableheadcolor  " scope="col">Gross monthly income</th>
	<th width="6" class="tableheadcolor " scope="col">Registered by</th>
	<th width="6" class="tableheadcolor" scope="col">Registration date</th>
	
  </tr>
  
  
  <?php

 

					include('connect.php');	
						//create query to check n c if staff exists
					
						$app = "no";
						$sql="SELECT*FROM client";
						
						$result=mysql_query($sql);
			if(mysql_num_rows($result) >=1){  
			
			while($rows=mysql_fetch_array($result)){
			$client_id=$rows['client_id'];
			$cphoto=$rows['clientphoto'];
			$fname=$rows['fname'];
			$lname=$rows['lname'];
			$date_birth=$rows['date_birth'];
			
			$gender=$rows['gender'];
			$occupation=$rows['occupation'];
			
			$tel=$rows['tel'];
			$email=$rows['email'];
			$profession=$rows['profession'];
			$id_type=$rows['id_type'];
			$district=$rows['district'];
			$couty=$rows['couty'];
			 	$sub_county=$rows['sub_county'];
				 	$village=$rows['village'];
					$organisation=$rows['organisation'];
					$org_city=$rows['org_city'];
					$other=$rows['others'];
					$org_street=$rows['org_street'];
					$plot_number=$rows['plot_number'];
					$org_position=$rows['org_position'];
					$bk_name=$rows['bk_name'];
					$bk_contact=$rows['bk_contact'];
					$bank_name=$rows['bank_name'];
					$bank_branch=$rows['bank_branch'];
					$bank_account=$rows['bank_account'];
					$gross_salary=$rows['gross_salary'];
					$admin=$rows['admin'];
					$Reg_date=$rows['Reg_date'];
						?>
  <tr class="style2">
    <td class="backcol1" scope="row">&nbsp;<?php echo $client_id ;?></td>
    <td class="backcol1" scope="row"><img  src="<?php echo $cphoto;?>" width="100" height="70"/></td>
    <td class="marq">&nbsp; <?php echo $fname;?></td>
    <td class="backcol1">&nbsp;<?php echo $lname; ?></td>
    <td class="marq">&nbsp;<?php echo $other;?></td>
    <td class="backcol1">&nbsp;<?php echo $date_birth  ;?></td>
    <td class="marq">&nbsp;<?php echo $gender;?></td>
    <td class="backcol1">&nbsp;<?php echo $occupation;?></td>
	
	
	 <td class="backcol1">&nbsp;<?php echo $tel ;?></td>
	 <td class="backcol1">&nbsp;<?php echo $email ;?></td>
	 <td class="backcol1">&nbsp;<?php echo $profession?></td>
	 <td class="backcol1">&nbsp;<?php echo $id_type;?></td>
	 <td class="backcol1">&nbsp;<?php echo $district;?></td>
	 <td class="backcol1">&nbsp;<?php echo $couty;?></td>
	 <td class="backcol1">&nbsp;<?php echo $sub_county;?></td>
	
	 <td class="backcol1">&nbsp;<?php echo $village;?></td>
	 <td class="backcol1">&nbsp;<?php echo $organisation;?></td>
	 <td class="backcol1">&nbsp;<?php echo $org_city;?></td>
	 
	 <td class="backcol1">&nbsp;<?php echo  $org_street;?></td>
	 <td class="backcol1">&nbsp;<?php echo $plot_number;?></td>
	 <td class="backcol1">&nbsp;<?php echo $org_position;?></td>
	 <td class="backcol1">&nbsp;<?php echo $bk_name;?></td>
	 <td class="backcol1">&nbsp;<?php echo $bk_contact;?></td>
	 <td class="backcol1">&nbsp;<?php echo $bank_name;?></td>
	 <td class="backcol1">&nbsp;<?php echo $bank_branch;?></td>
	 <td class="backcol1">&nbsp;<?php echo $bank_account;?></td>
	 <td class="backcol1"><?php echo $gross_salary;?>&nbsp;</td>
	 <td class="backcol1">&nbsp;<?php echo $admin;?></td>
	 
	 <td class="backcol1">&nbsp;<?php echo $Reg_date;?></td>
	 <?php
  }}
  ?>
  </tr>
</table>
</body>

</html>

