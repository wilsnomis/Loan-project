<table width="884" border="0" align="center">
<tr bgcolor="#6699FF">
    <td colspan="3"><font color="#663300">Logged In as:</font></div>&nbsp;
   <font color="#330000" face=" Arial, sans-serif" size="2">
        |<?php 
include('includes/connect.php');
$user = $_SESSION['userType'];
// select record from mysql 
$sql="SELECT firstName FROM login where username='$username2'";
$result=mysql_query($sql);
	// Do while loop for out put records. 
	while($rows=mysql_fetch_array($result)){
	$fn=$rows['firstName'];
	//$title=$rows['userType'];
echo $rows['firstName'];
 //$user = $rows['userType']; 
			// close while loop 
												}
	
?>|&nbsp;&gt;&gt;
<?php  
if($_SESSION['userType'] =='1')
{
echo 'Administrator';
}
else if($_SESSION['userType'] =='2')
{
echo 'Staff';
}  
?>
</font>
&nbsp;&nbsp;&nbsp;
  <a href="index.php" class="logout">[Logout]</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php  include('includes/date.php'); ?></div> <?php  
 include('includes/date_time.php'); ?></td>  
</tr>
  </table>