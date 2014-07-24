


    <?php
    //Start session
    session_start();	
    //Unset the variables stored in session
    unset($_SESSION['SESS_MEMBER_ID']);
    unset($_SESSION['SESS_FIRST_NAME']);
    unset($_SESSION['SESS_LAST_NAME']);
    ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title >HUADAR GUANGDONG</title>
<link rel="stylesheet" type="text/css" href="css.css" />
<style type="text/css">
<!--
body {
	background-image: url(../images/kovin.JPEG.jpg);
	background-repeat: repeat;
}
body,td,th {
	font-size: larger;
	color: #0066FF;
}

-->
</style>

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
	


<script src="../Scripts/AC_RunActiveContent.js" type="text/javascript"></script>

</head>

<body>

</center>
<div align="center" class="style2">
  <table width="874" border="0" cellpadding="4" bordercolor="#0099FF" bgcolor="#FFFFFF">
    <tr>
      <th colspan="4" class="green" ><p>&nbsp;</p>
      <p class="style4"><span class="whitecenter">HUADAR GUANGDONG CHINESE COMPANY LIMITED </span></p>
      <p>&nbsp;</p></th>
    </tr>
    <tr>
      <th width="105" >&nbsp;</th>
      <th width="160" >&nbsp;</th>
      <th width="86" >&nbsp;</th>
      <th width="481" >&nbsp;</th>
    </tr>
    <tr>
      <th colspan="4" class="whiteback"  >&nbsp;</th>
    </tr>
    <tr>
      <th colspan="3"  >
     <form name="loginform" action="login_exec.php" method="post">
      <table width="755" align="left" ">
            <tr>
              <td width="192" rowspan="4" align="Right">&nbsp;</td>
              <td width="124" rowspan="4"></td>
              <td colspan="3">
			  
		  	  <!--the code bellow is used to display the message of the input validation-->
		  	 </td>
            </tr>
            <tr>
              <td width="77" class="textgreen">username</td>
              <td width="157"><label>
                <input name="username" type="text" id="username" maxlength="20" />
              </label></td>
              <td width="181" rowspan="2" class="redcolor"><?php
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
              <td class="textgreen">password</td>
              <td><label>
                <input name="password" type="password" id="password" maxlength="10" />
              </label></td>
            </tr>
            <tr>
              <td>&nbsp;
			  
&nbsp;			  </td>
              <td><label>
                <input type="submit" name="Submit" value="Login"   />
                <input type="submit" name="Submit2" value="Reset" />
              </label></td>
              <td>&nbsp;</td>
            </tr>
          </table>&nbsp;</th>
      <th  ><?php include('calender2.php')?>&nbsp;</th>
    </tr>
    <tr>
      <td height="27" colspan="4" class="green whitecenter "><div >
        Huadar Guangdong Chinese Co. Ltd, Head Office: Kitgum house, Plot 53, Jinja road. P.O.Box 11751 Kampala.<br/>
         <center>Tel: +256-730-009300
          Copyright 2014</center>
      </div></td>
    </tr>
  </table>
  </form>
</div>
</body>
</body>
</html> 


