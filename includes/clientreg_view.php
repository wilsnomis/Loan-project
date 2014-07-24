


<?php
			echo"
			<form>
			<fieldset>
			<br/>
			";
		
	
  ?>
  	<table width='600' >
  <tr>
    <td scope='col'>First name:</td>
	
    <td scope='col'  class="dark"> <?php echo $rows['fname']; ?></td>
  </tr>
  <tr>
    <td scope='row'>Last name:</td>
    <td  class="dark"><?php echo $rows['lname']; ?></td>
  </tr>
  <tr>
    <td scope='row'>Date of birth:</td>
    <td  class="dark"><?php echo $rows['date_birth']; ?></td>
  </tr>
 
  <tr>
    <td scope='row'>Gender:</td>
    <td  class="dark"><?php echo $rows['gender']; ?></td>
  </tr>
  <tr>
    <td scope='row'>Occupation:</td>
    <td  class="dark"><?php echo $rows['occupation']; ?></td>
  </tr>
  <tr>
    <td scope='row'>Phone no:</td>
    <td  class="dark"><?php echo $rows['tel']; ?></td>
  </tr>
  <tr>
    <td scope='row'>email:</td>
    <td  class="dark"><?php echo $rows['email']; ?></td>
  </tr>
  <tr>
    <td scope='row'>A/c no:</td >
    <td class="dark"><?php echo "$account_number" ?></td>
  </tr>
  
    <tr>
    <td scope='row'>Registered by</td >
    <td class="dark"><?php echo "$user" ?>   <?php echo "$lastname" ?></td>
  </tr>
</table>
</fieldset>
<INPUT TYPE="button" onClick="window.print()" value="Print">
</form>
		