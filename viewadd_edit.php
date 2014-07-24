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

 function renderForm($aid, $first1, $last1,$gender1,$phone1,$position1,$error)
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
                <th scope="row"><a href="adminhome.php">Home</a></th>
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
            
           
          </fieldset></th>
          <td width="123">&nbsp;</td>
          <td width="72">&nbsp;</td>
          <td width="437" rowspan="9"> 
          
          
          <form id="form1" name="update" method="post" action="">
            <table width="435" border="0">
              <tr>
                <th width="92" scope="col">First name </th>
                <th width="79" scope="col">Last name </th>
                <th width="50" scope="col">Gender</th>
                <th width="76" scope="col">Phone no </th>
                <th width="53" scope="col">Position</th>
                <th width="45" scope="col">&nbsp;</th>
              </tr>
			
            <tr><td colspan="6"><input   type="hidden" name="id" value="<?php echo $aid; ?>"/></td></tr>
            
           
			  <tr>
            <td scope="row"> <input type="text" name="fname" value="<?php echo $first1?>"  size="10"/>&nbsp;</td>
                <td> <input name="lname" type="text" id="lname" value="<?php echo $last1?>"  size="10"/>
&nbsp;</td>
                <td> <input name="gender" type="text" id="gender" value="<?php echo $gender1?>"  size="10"/>
&nbsp;</td>
                <td> <input name="tel" type="text" id="tel" value="<?php echo $phone1?>"  size="10"/>
&nbsp;</td>
                <td> <input name="position" type="text" id="position" value="<?php echo $position1?>"  size="10"/>
&nbsp;</td>

&nbsp;</td>
                <td><label>
                <input type="submit" name="submit" value="Save" />
            </label>&nbsp;</td>
              </tr>
            </table>
          </form>
          
          </td>
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
 
 // check if the form has been submitted. If it has, process the form and save it t
 if (isset($_POST['submit']))
 { 
 // confirm that the 'id' value is a valid integer before getting the form data
 if (is_numeric($_POST['id']))
 {
 // get form data, making sure it is valid
 $id = $_POST['id'];
  $firstname = mysql_real_escape_string(htmlspecialchars($_POST['fname']));
 $lastname = mysql_real_escape_string(htmlspecialchars($_POST['lname']));
 $gender = mysql_real_escape_string(htmlspecialchars($_POST['gender']));
 $tel=$_POST['tel'];
 $position = mysql_real_escape_string(htmlspecialchars($_POST['position']));
 
 // check that firstname/lastname fields are both filled in
 if ($firstname == '' || $lastname == '' ||$gender=='' || $tel=='' || $position =='')
 {
 // generate error message
 $error = 'ERROR: Please fill in all required fields!';
 
 //error, display form
 renderForm($id, $first1, $last1,$gender1,$phone1,$position1,$error);
 }
 else
 {
 // save the data to the database
 mysql_query("UPDATE users SET fname='$firstname', lname='$lastname', gender='$gender', tel='$tel', userType='$position' WHERE
admin_id='$id'")
 or die(mysql_error()); 
 
 // once saved, redirect back to the view page
 header("Location: vieadd_edit.php"); 
 }
 }
 else
 {
 // if the 'id' isn't valid, display an error
 echo 'Error!';
 }
 }
 else
 // if the form hasn't been submitted, get the data from the db and display the form
 {
 
 // get the 'id' value from the URL (if it exists), making sure that it is valid
//(checing that it is numeric/larger than 0)
 if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
 {
 // query db
 $id = $_GET['id'];
 $result = mysql_query("SELECT * FROM users WHERE admin_id='$id'")
 or die(mysql_error()); 
 $row = mysql_fetch_array($result);
 
 // check that the 'id' matches up with a row in the databse
 if($row)
 {
 
 // get data from db
 $firstname = $row['fname'];
 $lastname = $row['lname'];
 $gender = $row['gender'];
 $tel=$row['tel'];
 $position =$row['userType'];
 
 // show form
 renderForm($id, $firstname, $lastname,$gender ,$tel,$position, '');
 }
 else
 // if no match, display result
 {
 echo "No results!";
 }
 }
 else
 // if the 'id' in the URL isn't valid, or if there is no 'id' value, display an error
 {
 echo 'Error!';
 }
 }
?>