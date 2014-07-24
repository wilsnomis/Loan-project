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

</head>

<body>

</center>
<div align="center" class="style2">
  <table width="739" border="0" align="center" cellpadding="4" bordercolor="#0099FF" bgcolor="#FFFFFF">
    <tr>
      <th width="748" class="green" ><p>&nbsp;</p>
      <p class="style4"><span class="whitecenter">HUADAR GUANGDONG CHINESE COMPANY LIMITED </span></p>
      <p>&nbsp;</p></th>
    </tr>
    <tr>
      <td height="79" align="center">
	  <fieldset>
	  
	  <table width="723">
        <tr>
          <th colspan="4" scope="col"  >Reset password 		  </th>
        </tr>
        <tr>
          <th colspan="4" scope="col"  class="marq">&nbsp;</th>
          </tr>
        <tr>
          <th width="198" rowspan="2" scope="row"><table width="197" align="left" >
            <tr>
              <th width="189" scope="col"></th>
              </tr>
            
            <tr>
              <th scope="row"><a href="adminhome.php">Home</a></th>
              </tr>
            <tr>
              <th scope="row"><a href="updating_admin.php">Update admin info</a> </th>
              </tr>
            <tr>
              <th scope="row"><a href="delete_admin.php">Delete/ View administrator</a></th>
              </tr>
            <tr>
              <th scope="row">&nbsp;</th>
              </tr>
          </table></th>
          <td width="173"><div align="right">Current loan requests. </div></td>
          <td width="68">&nbsp;</td>
          <td width="264" rowspan="2"><fieldset>
          <form id="approve" name="approve" method="post" action="approving_loan_admin.php">
            <table width="258" border="0">
              <tr>
                <th colspan="2" scope="col">Approve loan  from here. </th>
                </tr>
              <tr>
                <th colspan="2" scope="row"><span class="red">
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
                <th width="95" scope="row">Loan ID </th>
                <td width="153"><input name="id" type="text" id="id" /></td>
              </tr>
              
              <tr>
                <th scope="row">&nbsp;</th>
                <td><input name="approve" type="submit" id="approve" value="Approve Loan" /> 
                <input name="reset" type="reset" id="reset" value="Reset" /></td>
              </tr>
            </table>
              </form>
          </fieldset> </td>
        </tr>
        <tr>
          <td colspan="2" class="style1">
		  <?php
		  
		  include('viewloan.php');
		   ?>&nbsp;
		   
		   
		   
		   </td>
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


