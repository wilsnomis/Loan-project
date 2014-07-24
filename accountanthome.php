<?php
require_once('auth.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title >HUADAR GUANGDONG</title>
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
<script type="text/javascript">


</script>
</head>

<body>

</center>
<div align="center" class="style2">
  <table width="874" border="0" align="center" cellpadding="4" bordercolor="#0099FF" bgcolor="#FFFFFF">
    <tr>
      <th width="862" class="green" ><p>&nbsp;</p>
      <p class="style4"><span class="whitecenter">HUADAR GUANGDONG CHINESE COMPANY LIMITED </span></p>
      </th>
    </tr>
    <tr>
      <td height="79" align="center">
	  <fieldset>
	  
	  <table width="862">
        <tr>
          <th colspan="4" scope="col"  ><?php  include('logged.php'); ?></th>
          </tr>
        <tr>
          <th scope="col"  >&nbsp;</th>
          <th scope="col"  ><a href="client_account_inquiry.php">Client A/c inquiry</a> </u>&nbsp;</th>
          <th scope="col"  >&nbsp;</th>
          <th scope="col"  >&nbsp;</th>
        </tr>
        <tr>
          <th colspan="4" scope="col">		  </th>
          </tr>
        <tr>
          <th width="296" rowspan="10" scope="row"><fieldset>
            <form id="deposit" name="deposit" method="post" action="deposit_conn.php">
              <table width="294" border="0">
                <tr>
                  <th colspan="2" scope="col">Client Deposit form </th>
                  </tr>
                
                <tr>
                  <th width="135" scope="row">Email adress </th>
                    <td width="149"><input name="email2" type="text" class="marq" id="email2" /></td>
                  </tr>
                <tr>
                  <th scope="row">Telephone no. </th>
                    <td><input name="tel2" type="text" class="marq" id="tel2" /></td>
                  </tr>
                <tr>
                  <th class="bod" scope="row">Account no. </th>
                    <td><input name="account" type="text" class="marq" id="account" /></td>
                  </tr>
                <tr>
                  <th class="bod" scope="row">Amount</th>
                    <td><input name="amount" type="text" class="marq" id="amount" /></td>
                  </tr>
                <tr>
                  <th scope="row">&nbsp;</th>
                    <td>&nbsp;</td>
                  </tr>
                <tr>
                  <th scope="row">&nbsp;</th>
                    <td><input name="deposit" type="submit" id="deposit" value="Deposit" />
                    <input name="reset2" type="reset" id="reset2" value="Reset" /></td>
                  </tr>
                </table>
              </form>
            </fieldset></th>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td width="297" rowspan="10"><fieldset>
            <form id="form1" name="form1" method="post" action="accountant_giveloanconn.php">
              <table width="294" border="0">
                <tr>
                  <th colspan="2" scope="col">Loan verification form </th>
                  </tr>
                <tr>
                  <th colspan="2" scope="col"><span class="redcolor">Fill the form below before giving out loan</span> </th>
                  </tr>
                <tr>
                  <th scope="row">Client A/N </th>
                    <td><input name="account1" type="text" class="marq" id="account1" /></td>
                  </tr>
                <tr>
                  <th scope="row">Client Email </th>
                    <td><input name="email" type="text" class="marq" id="email" /></td>
                  </tr>
                <tr>
                  <th scope="row">Client Tel. no. </th>
                    <td><input name="tel" type="text" class="marq" id="tel" /></td>
                  </tr>
                <tr>
                  <th scope="row">&nbsp;</th>
                    <td>&nbsp;</td>
                  </tr>
                <tr>
                  <th scope="row">&nbsp;</th>
                    <td><input name="loan_verification" type="submit" id="loan_verification" value="Verify" /> 
                    <input name="reset" type="reset" id="reset" value="Reset" /></td>
                  </tr>
                </table>
              </form>
            </fieldset> </td>
        </tr>
        <tr>
          <td width="230">&nbsp;</td>
          <td width="19">&nbsp;</td>
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
          <td colspan="2"><span class="redcolor">
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
          </span></td>
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
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
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
       <td height="27" class="green whitecenter "><div >
        Huadar Guangdong Chinese Co. Ltd, Head Office: Kitgum house, Plot 53, Jinja road. P.O.Box 11751 Kampala.<br/>
         <center>Tel: +256-730-009300
          Copyright 2014</center>
      </div></td>
    </tr>
  </table>
  
</div>
</body>
</body>
</html> 


