<?php
$ebits = ini_get('error_reporting');
error_reporting($ebits ^ E_NOTICE);
?>
<table width="889" border="0" align="center">
  <tr>
    <th height="135" colspan="2" scope="col"><img src="images/logo.png" width="884" height="148" /></th>
  </tr>
     <tr>
   <td colspan="4"><?php include('index.php'); ?>
   </td>
   </tr>  
</table>
