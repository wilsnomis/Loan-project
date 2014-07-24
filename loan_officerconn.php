
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
          <th colspan="4" scope="col"  >&nbsp;		  </th>
        </tr>
        <tr>
          <th colspan="4" scope="col"  class="marq">&nbsp;</th>
          </tr>
        <tr>
          <th width="210" rowspan="6" scope="row"><fieldset>
          <table width="200" height="232" border="1">
            <tr>
              <th width="150" scope="col">Set loan interests </th>
              <th width="34" scope="col">&nbsp;</th>
            </tr>
            <tr>
              <th scope="row">Delete loan </th>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <th scope="row">&nbsp;</th>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <th scope="row">&nbsp;</th>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <th scope="row">&nbsp;</th>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <th scope="row">&nbsp;</th>
              <td>&nbsp;</td>
            </tr>
          </table>
          </fieldset></th>
          <td width="210">&nbsp;</td>
          <td width="126">&nbsp;</td>
          <td width="296" rowspan="6"><fieldset>
          <table width="200" border="1">
            <tr>
              <th scope="col">&nbsp;</th>
              <th scope="col">
			  
			  
			  <?php

 

 
					include('includes/connect.php');	
//create query to check n c if staff exists

		$app = "no";
						
							
						
						$sql="SELECT*FROM loan WHERE loanofficer_approval='$app'";
						
						
			$result=mysql_query($sql);
			if(mysql_num_rows($result) >=1){  
			
			while($rows=mysql_fetch_array($result)){
			//$lid=$rows['loan_id'];
			//$amount=$rows['loan_amount'];
			
			//$period=$rows['loan_period'];
			//$balance=$rows['available_balance'];
			
		echo"	<form id='approve' name='approve' method='post' action='approveloan_conn.php'>";
		
		echo"<table >
	
   
    <td scope='col'  class='dark'>    
	     <label><select name='approve'> <option>";
		 echo $rows['loan_id'];
		 
	echo"	 </option> </select></label></td> <td scope='col'  class='dark'>
	
	 <label>
                <input type='submit' name='approve' value='Approve' />
            </label></td>
	 </td>";
		 
		 
			}}
		
?>
			  
			  
			  &nbsp;</th>
            </tr>
          </table>
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


