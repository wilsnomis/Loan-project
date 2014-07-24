

<?php
echo"
<form>
			<fieldset>
<table width='802' border='0' style='text-align:left;'>
  <tr>
    <th colspan='4' scope='col'  style='color:red;'>Personal information </th>
  </tr>
  <tr>
    <th width='240' scope='row'>&nbsp;</th>
    <td colspan='2'>Photo</td>
    <td width='187'>&nbsp;</td>
	</tr>
  <tr>
	";
	?>
	
  
    <th scope="row">Surname:</th>
    <td width="166" class="dark">&nbsp;<?php echo $fname ?></td>
    <td width="191">Last name : </td>
    <td class="dark">&nbsp;<?php echo $lname ?></td>
  </tr>
  <tr>
    <th scope="row">Gender:</th>
    <td class="dark">&nbsp;<?php echo $gender ?></td>
    <td>Date of birth: </td>
    <td class="dark">&nbsp;<?php echo $date ?></td>
  </tr>
  <tr>
    <th scope="row">Mobile no: </th>
    <td class="dark">&nbsp;<?php echo $tel ?></td>
    <td>Email adress: </td>
    <td class="dark">&nbsp;<?php echo $email ?></td>
  </tr>
  <tr>
    <th scope="row">Profess:ion</th>
    <td class="dark">&nbsp;<?php echo $profession ?></td>
	
    <td>Occupation:</td>
    <td class="dark">&nbsp;<?php echo $occupation ?></td>
  </tr>
  <tr>
    <th scope="row">ID Type: </th>
    <td class="dark">&nbsp;<?php echo $id ?></td>
    <td>ID photo: </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th colspan="4" scope="row">Place of residence </th>
  </tr>
  <tr>
    <th scope="row">District</th>
    <td class="dark">&nbsp;<?php echo $district ?></td>
    <td>Country</td>
    <td class="dark">&nbsp;<?php echo $country?></td>
  </tr>
  <tr>
    <th scope="row">Sub county </th>
    <td class="dark">&nbsp;<?php echo $subcounty ?></td>
    <td>Village</td>
    <td class="dark">&nbsp;<?php echo $vill ?></td>
  </tr>
  <tr>
    <th colspan="4" scope="row" style="color:red;">Employer information </th>
  </tr>
  <tr>

    <th scope="row">Oganisation name </th>
    <td class="dark">&nbsp;<?php echo $orgname ?></td>
    <td>Country</td>
    <td class="dark">&nbsp;<?php echo $country ?></td>
  </tr>
  <tr>
    <th scope="row">City</th>
    <td class="dark">&nbsp;<?php echo $city ?></td>
    <td>Street</td>
    <td class="dark">&nbsp;<?php echo $street ?></td>
  </tr>
  <tr>
    <th scope="row">Plot number </th>
    <td class="dark">&nbsp;<?php echo $plotnumber ?></td>
    <td>Position:</td>
    <td class="dark">&nbsp;<?php echo $position ?></td>
  </tr>
  <tr>
    <th colspan="4" scope="row" style="color:red;">Guaranter information </th>
  </tr>
  <tr>
  
    
    <th scope="row">Name</th>
    <td class="dark">&nbsp;<?php echo $gname ?></td>
    <td>Contact</td>
    <td class="dark">&nbsp;<?php echo $gcontact ?></td>
  </tr>
  <tr>
    <th scope="row">Occupation</th>
    <td class="dark">&nbsp;<?php echo $occupation ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th colspan="4" scope="row" style="color:red;">Bankers information </th>
  </tr>
  <tr>
    <th scope="row">Bank name </th>
    <td class="dark">&nbsp;<?php echo $bbankname ?></td>
    <td>Branch</td>
    <td class="dark">&nbsp;<?php echo $bbranch ?></td>
  </tr>
  <tr>
    <th scope="row">Account no: </th>
    <td class="dark">&nbsp;<?php echo $number ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th colspan="4" scope="row" style="color:red;">Salary information </th>
  </tr>
  <tr>
    <th colspan="2" scope="row">Gross monthly salary: </th>
    <td class="dark">&nbsp;<?php echo $gross ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
  
    <th colspan="4" scope="row" style="color:red;">Loan information </th>
  </tr>
  <tr>
    <th scope="row">Amount applied for:</th>
    <td class="dark">&nbsp;<?php echo $loanamount ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">Security:</th>
    <td class="dark">&nbsp;<?php echo  $security ?></td>
    <td>Repayment period:</td>
    <td class="dark">&nbsp;<?php echo $period ?></td>
  </tr>
  
  
  <tr>
    <th scope="row">&nbsp;Client A/c no:</th>
    <td>&nbsp;<?php echo $account_number ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>

    <th scope="row"> Security photo:</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</fieldset>
		<INPUT TYPE="button" onClick="window.print()" value="Print">
</form>



















