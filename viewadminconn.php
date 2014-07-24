<table width="295" border="1">
  <tr>
    <th width="85" scope="col">First name </th>
    <th width="82" scope="col">Last name </th>
    <th width="106" scope="col">Phone number </th>
  </tr>
  
  
  <?php

 

					include('includes/connect.php');	
						//create query to check n c if staff exists
						
						
						$sql="SELECT*FROM users";
						
						$result=mysql_query($sql);
			if(mysql_num_rows($result) >=1){  
			
			while($rows=mysql_fetch_array($result)){
			$fname=$rows['fname'];
			$lname=$rows['lname'];
			
			$tel=$rows['tel'];
			//$balance=$rows['available_balance'];
			
		
		
		
						?>
  
  
  
  <tr>
    <th scope="row">&nbsp;<?php echo $fname ;?></th>
    <td>&nbsp; <?php echo $lname;?></td>
    <td>&nbsp;<?php echo $tel; ?></td>
  </tr>
  <?php
  }}
  ?>
</table>
