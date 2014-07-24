
<?php
require_once('auth.php');
?>

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
<div align="center" class="style2">
  <table width="874" border="0" align="center" cellpadding="4" bordercolor="#0099FF" bgcolor="#FFFFFF">
    <tr>
      <th width="862" class="green" ><p>&nbsp;</p>
      <p class="style4"><span class="whitecenter">LOAN OF VALUE UGANDA LIMITED</span></p>
      <p>&nbsp;</p></th>
    </tr>
    <tr>
      <td height="79" align="center">
	  <fieldset>
	  
	  <table width="862">
        <tr >
          <th colspan="6" height="20"  scope="col"  ><?php  include('logged.php'); ?>&nbsp;		  </th>
        </tr>
        <tr>
          <th width="102"   scope="col"><a href="Data_clerkhome.php">
            Go back           </a><a href="newclient_register.php"></a></th>
          <th width="343"   scope="col"><a href="newclient_register.php">New client Loan application</a></th>
          <th colspan="4"  scope="col"><a href="includes/view_clients.php">View registered clients</a></th>
        </tr>
        <tr>
          <th colspan="3" rowspan="5" scope="row"><fieldset>
          <form id="form1" name="form1" method="post" action="Data_clerk_loan_register.php" enctype="multipart/form-data">
            <table width="713" border="0" class="left">
              <tr>
                <th colspan="4"  class="red" scope="col">Old client loan application form. </th>
              </tr>
              <tr>
                <th colspan="4" scope="col"><span class="redcolor">
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
                <th width="212" scope="row">Email adress </th>
                <td width="218"><input name="email" type="text" id="email" /><span class="redcolor">*</span></td>
                <td width="100">Telephone no. </td>
                <td width="165"><input name="tel" type="text" id="tel" /><span class="redcolor">*</span></td>
              </tr>
              <tr>
                <th scope="row"><span class="bod">Account no. </span></th>
                <td><input name="account" type="text" id="account" /><span class="redcolor">*</span></td>
                <td><span class="bod">Loan amount</span></td>
                <td><input name="amount" type="text" id="amount" /><span class="redcolor">*</span></td>
              </tr>
              <tr>
                <th class="bod" scope="row">Loan period<span class="redcolor">*</span></th>
                <td><span class="red">
                  <select name="period" id="period">
                    <option> </option>
                    <option>1 month</option>
                    <option>2 month</option>
                    <option>3 month</option>
                    <option>4 month</option>
                    <option>5 month</option>
                    <option>6 month</option>
                    <option>7 month</option>
                  </select>
                </span><span class="redcolor">*</span></td>
                <td>Security</td>
                <td><select name="security" id="security">
                  <option> </option>
                  <option>Land</option>
                  <option>Vehical</option>
                </select><span class="redcolor">*</span></td>
              </tr>
              <tr>
                <th class="bod" scope="row">Security photo </th>
                <td><input name="securityphoto" type="file" id="securityphoto" /><span class="redcolor">*</span></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <th colspan="4" class="red" scope="row">Fill this part only if client security is:vehical </th>
                </tr>
              <tr>
                <th scope="row">Registration number </th>
                <td><span class="red">
                  <input name="regnumber" type="text" id="regnumber" />
                </span></td>
                <td>Make</td>
                <td><span class="red">
                  <input name="make" type="text" id="make" />
                </span></td>
              </tr>
              <tr>
                <th scope="row">Chassis number </th>
                <td><span class="red">
                  <input name="chassisnumber" type="text" id="chassisnumber" />
                </span></td>
                <td>engine number</td>
                <td><span class="red">
                  <input name="enginenumber" type="text" id="enginenumber" />
                </span></td>
              </tr>
              <tr>
                <th scope="row">Year of manufacture </th>
                <td><select name="manufactureyear" id="manufactureyear">
                  <option> </option>
                  <option>1990</option>
                  <option>1991</option>
                  <option>1992</option>
                  <option>1993</option>
                  <option>1994</option>
                  <option>1995</option>
                  <option>1996</option>
                  <option>1997</option>
                  <option>1998</option>
                  <option>2000</option>
                  <option>2001</option>
                  <option>2002</option>
                  <option>2003</option>
                  <option>2004</option>
                  <option>2005</option>
                  <option>2006</option>
                  <option>2007</option>
                  <option>2008</option>
                  <option>2009</option>
                  <option>2010</option>
                  <option>2011</option>
                  <option>2012</option>
                  <option>2013</option>
                  <option>2014</option>
                </select></td>
                <td>Color</td>
                <td><select name="color" id="color">
                  <option> </option>
                  <option>Black</option>
                  <option>Green</option>
                  <option>Yellow</option>
                  <option>Blue</option>
                  <option>Gray</option>
                  <option>Orange</option>
                  <option>Pink</option>
                  <option>Creem</option>
                </select></td>
              </tr>
              <tr>
                <th colspan="4" class="red" scope="row">Fill this part only if client security is: land </th>
                </tr>
              <tr>
                <th scope="row">Plot number </th>
                <td><span class="red">
                  <input name="plotnumber" type="text" id="plotnumber" />
                </span></td>
                <td>Block number </td>
                <td><span class="red">
                  <input name="blocknumber" type="text" id="blocknumber" />
                </span></td>
              </tr>
              <tr>
                <th scope="row">District</th>
                <td><span class="red">
                  <input name="district" type="text" id="district" />
                </span></td>
                <td>Sub county </td>
                <td><span class="red">
                  <input name="subcounty" type="text" id="subcounty" />
                </span></td>
              </tr>
              <tr>
                <th scope="row">Village</th>
                <td><span class="red">
                  <input name="village" type="text" id="village" />
                </span></td>
                <td>Accreage</td>
                <td><span class="red">
                  <input name="acre" type="text" id="acre" />
                </span></td>
              </tr>
              <tr>
                <th scope="row">&nbsp;</th>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <th scope="row">&nbsp;</th>
                <td><input name="loan" type="submit" id="loan" value="Register" />
                    <input name="reset2" type="reset" id="reset2" value="Reset" /></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>
          </form>
          </fieldset></th>
          <td width="7"><a href="newclient_register.php"></a></td>
          <td width="29"><a href="newclient_register.php"></a></td>
          <td width="94" rowspan="5">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2" class="red">&nbsp;</td>
        </tr>
        
        <tr>
          <td height="22">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
	  
	  </fieldset>
      </a></td>
    </tr>
    
    <tr>
      <td height="27" bgcolor="#006666"><div align="center"></div></td>
    </tr>
  </table>
  
</div>
</body>
</body>
</html> 


