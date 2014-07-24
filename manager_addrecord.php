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
      </th>
    </tr>
    <tr>
      <td height="79" align="center">
	  <fieldset>
	  
	  <table width="847">
        <tr>
          <th colspan="4" scope="col"  >
		  <?php  include('logged.php'); ?>
		  &nbsp;</th>
          </tr>
        <tr>
          <th colspan="4" scope="col"  class="marq">&nbsp;</th>
          </tr>
        <tr>
          <th width="200" rowspan="6" scope="row"><table width="200" align="left" >
            
           
            <tr>
              <th scope="row"><a href="managerhome.php"> Manager Home</a><a href="delete_admin.php"></a></th>
              </tr>
           
            <tr>
              <th scope="row"><a href="delete_admin.php"></a></th>
              </tr>
            <tr>
              <th scope="row"><a href="delete_admin.php"></a></th>
              </tr>
            <tr>
              <th scope="row">Logged in users</th>
            </tr>
            <tr>
              <th scope="row"><?php include('includes/loginview.php');?></th>
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
          <td width="220">&nbsp;</td>
          <td width="55">&nbsp;</td>
          <td width="367" rowspan="6"><fieldset>
          <form id="register" name="register" method="post" action="admin_register_user.php" enctype="multipart/form-data">
            <table width="294" border="0">
              <tr>
                <th colspan="2" scope="col"><span class="style13">Register users from here. </span></th>
                </tr>
                 <tr>
                <th scope="row"><span class="bod">Admin photo</span> </th>
                <td><input name="adminphoto" type="file" id="securityphoto" /></td>
              </tr>
              <tr>
                <th scope="row"><span class="bod">First name</span> </th>
                <td><input name="fname" type="text" id="fname" /></td>
              </tr>
              <tr>
                <th scope="row"><span class="bod">Last name</span> </th>
                <td><input name="lname" type="text" id="lname" /></td>
              </tr>
              <tr>
                <th scope="row"><span class="bod">Username</span> </th>
                <td><input name="username" type="text" id="username" /></td>
              </tr>
              
              <tr>
                <th scope="row"><span class="bod">Gender</span></th>
                <td><label></label>
        <p>
          <label></label><label></label>
          <label>
          <input type="radio" name="gender" value="Female" />
Female</label>
          <br />
          <label>
          <input type="radio" name="gender" value="Male" />
Male</label>
          <br />
          <br />
          <label></label>
          <br />
        </p>
        <p>		</p></td>
              </tr>
              <tr>
                <th scope="row"><span class="bod">Position</span></th>
                <td><label>
                  <select name="po" id="po">
                  <option value=""></option>
                    <option value="accountant">Manager</option>
                    
                    <option value="cahier">Cashier</option>
                    
                    <option value="cahier">administrator</option>
                    <option value="admin">Data_clerk</option>
                    <option value="officer">Loan_officer</option>
                  </select>
                </label></td>
              </tr>
              <tr>
                <th scope="row"><span class="bod">Tel</span></th>
                <td><input name="tel" type="text" id="tel" /></td>
              </tr>
              
              <tr>
                <th scope="row">&nbsp;</th>
                <td><input name="register" type="submit" id="register" value="Register" /> <input name="reset" type="reset" id="reset" value="Reset" /></td>
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
          <td colspan="2" class="redcolor"><?php
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


