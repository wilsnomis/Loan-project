<table width="1500" border="0" align="left">
<tr bgcolor="#6699FF">
    <td colspan="3"><font color="#FFFFFF">Logged In as:</font></div>&nbsp;
   <font color="#FFFFFF" face=" Arial, sans-serif" size="2">
        |<?php 
include('includes/connect.php');

  $id=$_SESSION['SESS_MEMBER_ID'];
// select record from mysql 
$sql="SELECT fname,lname,userType FROM users where admin_id 	='$id'";
$result=mysql_query($sql);
	// Do while loop for out put records. 
	while($rows=mysql_fetch_array($result)){
	$fn=$rows['fname'];
	$ln=$rows['lname'];
	//$title=$rows['userType'];
echo $rows['fname'];
?>
&nbsp;
<?php
echo $rows['lname'];
 //$user = $rows['userType']; 
			// close while loop 
												}
	
?>|&nbsp;&gt;&gt;

</font>

  <a href="logout.php" class="logout">[Logout]</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h class="white"> <?php   include('includes/date.php'); ?></div> <?php  
 include('includes/date_time.php'); ?></h></td>  
</tr>
  </table>