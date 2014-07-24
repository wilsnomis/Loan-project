<?php

echo("Client money successfully deposited. Below isn the client details");

echo"
			<form>
			<fieldset>
			<br/>
			<table width='600' >
			<tr ><td colspan='2' color='#90DBFF' class='red'> Client deposit information.</td>
			</tr>
			
 
	";
	
  ?>
  <tr>
    <td scope='col'>First name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td scope='col'  class="dark"><img src="<?php echo $rows['clientphoto']; ?>" </td>
  </tr>
  
   <tr>
    <td scope='col'>First name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
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
    <td  class="dark"><?php echo $rows['account_number']; ?></td>
  </tr>
  <tr>
    <td scope='row'>Deposit amount:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td  class="dark"><?php echo $amount; ?></td>
  </tr>
  
  <tr>
    <td scope='row'>Previous A/c balance:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td  class="dark"><?php echo $available_balance; ?></td>
  </tr>
  
  <tr>
    <td scope='row'>Current A/c balance:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td  class="dark"><?php echo $available_now; ?></td>
  </tr>
 
  <tr>
    <td scope='row'>Deposit date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td  class="dark"><?php echo $rows['deposit_date']; ?></td>
  </tr>
   <tr>
    <td scope='row'>Accountant name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td  class="dark"><?php echo $user; ?>  <?php echo $lastname; ?></td>
  </tr>
</table>
</fieldset>
<INPUT TYPE="button" onClick="window.print()" value="Print">
</form>
		
		
						
			
	