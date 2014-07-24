

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title >LOAN OF VALUE</title>
<link rel="stylesheet" type="text/css" href="css.css" />
<style type="text/css">
<!--

-->
</style>
<script src="../Scripts/AC_RunActiveContent.js" type="text/javascript"></script>

<script type="text/javascript">
	// <![CDATA[
	var myMenu;
	window.onload = function() {
		myMenu = new SDMenu("my_menu");
		myMenu.init();
		xajax_auth();
	};
	// ]]>
	</script>

</head>

<body>

</center>
          <form id="form1" name="form1" method="post" action="Data_clerk_loan_register.php" enctype="multipart/form-data">
          <fieldset>
            <table width="630" border="0" class="left">
              <tr>
                <th colspan="4"  class="red" scope="col">The client made a loan with the following details</th>
              </tr>
              <tr>
                <th colspan="4" scope="col"><span class="redcolor">
              
                </span></th>
              </tr>
              
              <tr>
                <th width="191" scope="row">Email adress </th>
                <td width="144" class="red"><?php echo $email ;?></td>
                <td width="152">Telephone no. </td>
                <td width="146" class="red"><?php echo $email ;?></td>
              </tr>
              <tr>
                <th scope="row"><span class="bod">Account no. </span></th>
                <td class="red"><?php echo $account ;?></td>
                <td><span class="bod">Loan amount</span></td>
                <td class="red"><?php echo $amount ;?></td>
              </tr>
              <tr>
                <th class="bod" scope="row">Loan period<span class="redcolor">*</span></th>
                <td class="red"><?php echo $period ;?></td>
                <td>security</td>
                <td class="red"><?php echo $email ;?></td>
              </tr>
              <tr>
                <th class="bod" scope="row">Security photo </th>
                <td><img  src="<?php echo $path;?>" width="100" height="70"/></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <th colspan="4" class="red" scope="row">Security supporting information </th>
                </tr>
              <tr>
                <th scope="row">Plot number </th>
                <td><span class="red">
                <?php echo $plotnumber ;?></span></td>
                <td><span >Block number</span></td>
                <td class="red"><span class="red">
                  <?php echo $blocknumber ;?>
                </span></td>
              </tr>
              <tr>
                <th scope="row">District</th>
                <td><span class="red">
                <?php echo $district ;?></span></td>
                <td><span >Sub county </span></td>
                <td><span class="red">
                 <?php echo $subcounty ;?>
                </span></td>
              </tr>
              <tr>
                <th scope="row">Village</th>
                <td class="red"><?php echo $village ;?></td>
              </tr>
              <tr>
                <th scope="row">Accreage</th>
                <td class="red"><?php echo $acre;?></td>
                <td>Return amount</td>
                <td class="red"><?php echo $amount_forpay;?></td>
              </tr>
            </table>
            </fieldset>
            <INPUT TYPE="button" onClick="window.print()" value="Print">
          </form>
         
</body>
</body>
</html> 


