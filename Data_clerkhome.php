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
      <p class="style4"><span class="whitecenter">HUADAR GUANGDONG CHINESE COMPANY LIMITED </span></p>
      <p>&nbsp;</p></th>
    </tr>
    <tr>
      <td height="79" align="center">
	  <fieldset>
	  
	  <table width="862">
        <tr>
          <th colspan="4" scope="col"  ><?php  include('logged.php'); ?>&nbsp;		  </th>
        </tr>
        <tr>
          <th colspan="4" scope="col"  class="marq">&nbsp;</th>
          </tr>
        <tr>
          <th width="296" scope="row"><a href="testview.php">Old Client loan registration </a></th>
          <td width="156"><a href="newclient_register.php"></a></td>
          <td width="334"><a href="newclient_register.php"></a></td>
          <td width="56" rowspan="5">&nbsp;</td>
        </tr>
        <tr>
          <th width="296" scope="row"><a href="newclient_register.php">New client Loan application </a></th>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <th width="296" scope="row"><a href="includes/view_clients.php">View registered clients</a> </th>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <th width="296" scope="row">&nbsp;</th>
          <td colspan="2" class="red"><?php
if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
echo '<ul class="err">';
foreach($_SESSION['ERRMSG_ARR'] as $msg) {
echo '<li>',$msg,'</li>';
}
echo '</ul>';
unset($_SESSION['ERRMSG_ARR']);
}
?></td>
          </tr>
        
        <tr>
          <th width="296" scope="row">&nbsp;</th>
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


