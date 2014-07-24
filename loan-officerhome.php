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
.style17 {font-size: 12%; }
.notes{color:#F00; marquee-style: alternate; }

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

<body style="background-color:#FFF;">

</center>
<div align="center" class="style2">
  <table width="1500" border="0" align="center" cellpadding="4"  ">
<tr>
      <th width="645" class="green" ><p>&nbsp;</p>
      <p class="style4"><span class="whitecenter">HUADAR GUANGDONG CHINESE COMPANY LIMITED</span></p>
      <p>&nbsp;</p></th>
    </tr>
    
    
	  
	  <table width="1500">
        <tr class="left">
          <th colspan="4" class="incluecolor" scope="col" > <?php  include('logged2.php'); ?></th>
        </tr>
        <tr>
          <th width="100"  class="marq" scope="col"><a href="delete_loanhome.php">Cancel loan request </a><a href="updating_admin.php"></a> </th>
          <th width="147"  class="marq" scope="col"><a href="setloan_interest.php">Set loan interests</a></th>
          <th width="150"  class="marq" scope="col"></th>
          <th width="182"  class="marq" scope="col"><a href="delete_admin.php"></a></th>
</tr>
        <tr>
          <th colspan="2"   scope="col">
		  
		  
          <form id="prove" name="prove" method="post" action="approveloan_conn.php">
            <table width="224" border="0" class="marq">
              <tr>
                <th colspan="2" scope="col">Assess loan  from here. </th>
              </tr>
              <tr>
                <th colspan="2" scope="row"><span class="redcolor">
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
                <th width="61" scope="row">Loan ID </th>
                <td width="187"><input name="option" type="text" id="option" /></td>
              </tr>
              <tr>
                <th scope="row">&nbsp;</th>
                <td><input name="prove" type="submit" id="prove" value="Approve Loan" />
                    <input name="reset" type="reset" id="reset" value="Reset" /></td>
              </tr>
            </table>
          </form>
        
		  
		  </th>
          <th scope="col"  class="notes"><marquee behavior="alternate">&nbsp;</marquee></th>
          <th scope="col"  >&nbsp;</th>
        </tr>
        <tr>
          <th colspan="2"   scope="col" >Current loan requests that require assessment. </th>
          <th scope="col"  >&nbsp;</th>
          <th scope="col"  >&nbsp;</th>
        </tr>
        <tr>
          <th colspan="4" scope="row"><?php
		  
		  include('viewloan_officer.php');
		   ?>		  &nbsp; </th>
          </tr>
      </table>
	  
	  </fieldset>
      </tr>
      </td>
    </tr>
    
    <tr>
      <td height="27" ><div align="center"></div></td>
    </tr>
  </table>
  
</div>
</body>
</body>
</html> 


