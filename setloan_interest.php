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
<script type="text/javascript">

functio validateForm(){
 var x=document.forms["login"]["username"].value;
 if(x=null \\ x=""){
 alert("Fill in the username");
 return false;
 }
 var y=document.forms["login"]["password"].value;
  if(y=null \\ y=""){
 alert("Fill in the password");
 return false;
 }
 
}

</script>
</head>

<body>

</center>
<div align="center" class="style2">
  <table width="874" border="0" align="center" cellpadding="4" bordercolor="#0099FF" bgcolor="#FFFFFF">
    <tr>
      <th width="862" class="green" ><p>&nbsp;</p>
      <p class="style4"><span class="whitecenter">HUADAR GUANGDONG CHINESE COMPANY LIMITED </span></p>
      <p>&nbsp;</p></th>
    </tr>
    <tr>
      <td height="79" align="center">
	  <fieldset>
	  
	  <table width="862">
        <tr>
          <th colspan="4" scope="col"  ><?php  include('logged.php'); ?>    &nbsp;		  </th>
        </tr>
        <tr>
          <th colspan="4" scope="col">
		  </th>
          </tr>
        <tr>
          <th width="210" rowspan="9" scope="row"><table width="200" border="1">
            <tr>
              <th scope="col"><a href="loan-officerhome.php">Home</a></th>
            </tr>
            <tr>
              <th scope="row"><a href="delete_loanhome.php">Cancel loan request </a></th>
            </tr>
            <tr>
              <th scope="row">&nbsp;</th>
            </tr>
            <tr>
              <th scope="row">&nbsp;</th>
            </tr>
            <tr>
              <th scope="row">&nbsp;</th>
            </tr>
            <tr>
              <th scope="row">&nbsp;</th>
            </tr>
            <tr>
              <th scope="row">&nbsp;</th>
            </tr>
          </table></th>
          <td width="210">&nbsp;</td>
          <td width="59">&nbsp;</td>
          <td width="363" rowspan="9"><fieldset>
          <form id="form1" name="form1" method="post" action="interestconn.php">
            <table width="294" border="0">
              <tr>
                <th colspan="2" scope="col"><span class="red">Set Loan interest from here</span></th>
                </tr>
              <tr>
                <th colspan="2" scope="col">&nbsp;</th>
              </tr>
              <tr>
                <th scope="row">Min amount </th>
                <td><input name="min" type="text" class="marq" id="min" /></td>
              </tr>
              <tr>
                <th scope="row">Max amount </th>
                <td><input name="max" type="text" class="marq" id="max" /></td>
              </tr>
              <tr>
                <th scope="row">Interest </th>
                <td><input name="interest" type="text" class="marq" id="interest" /></td>
              </tr>
              <tr>
                <th scope="row">&nbsp;</th>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <th scope="row">&nbsp;</th>
                <td><input name="interest" type="submit" id="interest" value="Set Interest" /> 
                <input name="reset" type="reset" id="reset" value="Reset" /></td>
              </tr>
            </table>
              </form>
          </fieldset> </td>
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
          <td colspan="2"><span class="red">
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


