<?php
require_once('auth.php');
?>
<?php
/* 
 NEW.PHP
 Allows user to create a new entry in the database
*/
 
 // creates the new record form
 // since this form is used multiple times in this file, I have made it a function

 function renderForm($first, $last,$gender,$phone,$position,$error)
 {
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
          <th colspan="4" scope="col">&nbsp;</th>
          </tr>
        <tr>
          <th width="210" rowspan="9" scope="row"><fieldset>
            <table width="200" border="0">
              <tr>
                <th scope="col">Links</th>
              </tr>
              <tr>
                <th scope="row"><a href="adminhome.php">Home</a></th>
              </tr>
             
              <tr>
                <th scope="row"><a href="delete_admin.php">Delete/ View administrator</a></th>
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
              <tr>
                <th scope="row">&nbsp;</th>
              </tr>
            </table>
            
            <?php 
 // if there are any errors, display them
 if ($error != '')
 {
 echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
 }
 ?> 
          </fieldset></th>
          <td width="123">&nbsp;</td>
          <td width="72">&nbsp;</td>
          <td width="437" rowspan="9"><fieldset>
          <form id="form1" name="update" method="post" action="">
            <table width="435" border="0">
              <tr>
                <th width="92" scope="col">First name </th><td><input type="text" name="fname" value="<?php echo $first?>"  size="10"/></td></tr>
               <tr> <th width="79" scope="col">Last name </th><td> <input name="lname" type="text" id="lname" value="<?php echo $last?>"  size="10"/></tr>
               <tr> <th width="50" scope="col">Gender</th><td> <input name="gender" type="text" id="gender" value="<?php echo $gender?>"  size="10"/></tr>
               <tr> <th width="76" scope="col">Phone no </th><td><input name="tel" type="text" id="tel" value="<?php echo $phone?>"  size="10"/></td></tr>
               <tr> <th width="53" scope="col">Position</th> <td> <input name="position" type="text" id="position" value="<?php echo $position?>"  size="10"/></tr>
                <th width="45" scope="col">&nbsp;</th>
              </tr>
			
            
            
           

<td><input type="hidden" name="admin_id" value="$admin_id" />
&nbsp;</td>
                <td><label>
                <input type="submit" name="submit" value="Register" />
            </label>&nbsp;</td>
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
 <?php 
 }
 
 
 

 // connect to the database
 include('includes/connect.php');
 
 // check if the form has been submitted. If it has, start to process the form and

 if (isset($_POST['submit']))
 { 
 // get form data, making sure it is valid
 $firstname = mysql_real_escape_string(htmlspecialchars($_POST['fname']));
 $lastname = mysql_real_escape_string(htmlspecialchars($_POST['lname']));
 $gender = mysql_real_escape_string(htmlspecialchars($_POST['gender']));
 $tel=$_POST['tel'];
 $position = mysql_real_escape_string(htmlspecialchars($_POST['position']));
 // check to make sure both fields are entered
 if ($firstname == '' || $lastname == '' ||$gender=='' || $tel=='' || $position =='')
 {
 // generate error message
 $error = 'ERROR: Please fill in all required fields!';
 
 // if either field is blank, display the form again
 renderForm($first, $last,$gender,$phone,$position,$error);
 }
 else
 {
 // save the data to the database
 mysql_query("INSERT users SET fname='$firstname', lname='$lastname', gender='$gender', tel='$tel', userType='$position '")
 or die(mysql_error()); 
 
 // once saved, redirect back to the view page
 header("Location: vieadd_edit.php"); 
 }
 }
 else
 // if the form hasn't been submitted, display the form
 {
 renderForm('','','','','','');
 }
?>
