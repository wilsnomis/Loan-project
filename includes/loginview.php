<table width="295" border="0">
  <tr class="whiteback">
  <th width="85" scope="col" style="color:#FFF">User photo </th>
    <th width="85" scope="col" style="color:#FFF">First name </th>
    <th width="82" scope="col" style="color:#FFF">Last name </th>
    <th width="106" scope="col" style="color:#FFF">Phone number </th>
  </tr >
  
  
  <?php

 

					include('includes/connect.php');	
						//create query to check n c if staff exists
						
						$in="in";
						$sql="SELECT*FROM users where state ='$in' ";
						
						$result=mysql_query($sql);
			if(mysql_num_rows($result) >=1){  
			
			while($rows=mysql_fetch_array($result)){
			$fname=$rows['fname'];
			$lname=$rows['lname'];
			$photo=$rows['photo'];
			
			$tel=$rows['tel'];
			//$balance=$rows['available_balance'];
			
		
		
		
						?>
  
  
  
  <tr style="background-color: #9CC;">
  <td scope="row"><img  src="<?php echo $photo;?>" width="70" height="50"/></td>
    <td scope="row">&nbsp;<?php echo $fname ;?></td>
    <td>&nbsp; <?php echo $lname;?></td>
    <td>&nbsp;<?php echo $tel; ?></td>
  </tr>
  <?php
  }}
  ?>
</table>
