
<?php
$monthNames = Array("January", "February", "March", "April", "May", "June", "July",
"August", "September", "October", "November", "December");
?>
<?php
if (!isset($_REQUEST["month"])) $_REQUEST["month"] = date("n");
if (!isset($_REQUEST["year"])) $_REQUEST["year"] = date("Y");
?>

<?php
$cMonth = $_REQUEST["month"];
$cYear = $_REQUEST["year"];
 
$prev_year = $cYear;
$next_year = $cYear;
$prev_month = $cMonth-1;
$next_month = $cMonth+1;
 
if ($prev_month == 0 ) {
    $prev_month = 12;
    $prev_year = $cYear - 1;
}
if ($next_month == 13 ) {
    $next_month = 1;
    $next_year = $cYear + 1;
}
?>

<table width="128" height="15">
<tr align="center">
<td bgcolor="#999999" style="color:#FFFFFF">
<table width="116" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="25" height="38" align="left" >  <a href="<?php echo $_SERVER["PHP_SELF"] . "?month=". $prev_month . "&year=" . $prev_year; ?>" style="color:#000; text-align:left" >Previous</a>&nbsp;</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<td width="25" align="right"><a href="<?php echo $_SERVER["PHP_SELF"] . "?month=". $next_month . "&year=" . $next_year; ?>" style="color:#FFFFFF; text-align:right;">Next</a>  </td>
</tr>
</table>
</td>
</tr>
<tr>
<td align="center">
<table width="25"  height="25" border="1" cellpadding="2" cellspacing="2">
<tr align="center">
<td colspan="7" bgcolor="#999999" style="color:#000"><strong><?php echo $monthNames[$cMonth-1].' '.$cYear; ?></strong></td>
</tr>
<tr>
<td align="center" bgcolor="#999999" style="color:#FFFFFF"><strong>S</strong></td>
<td align="center" bgcolor="#999999" style="color:#FFFFFF"><strong>M</strong></td>
<td align="center" bgcolor="#999999" style="color:#FFFFFF"><strong>T</strong></td>
<td align="center" bgcolor="#999999" style="color:#FFFFFF"><strong>W</strong></td>
<td align="center" bgcolor="#999999" style="color:#FFFFFF"><strong>T</strong></td>
<td align="center" bgcolor="#999999" style="color:#FFFFFF"><strong>F</strong></td>
<td align="center" bgcolor="#999999" style="color:#FFFFFF"><strong>S</strong></td>
</tr>

<?php
$timestamp = mktime(0,0,0,$cMonth,1,$cYear);
$maxday = date("t",$timestamp);
$thismonth = getdate ($timestamp);
$startday = $thismonth['wday'];
for ($i=0; $i<($maxday+$startday); $i++) {
    if(($i % 7) == 0 ) echo "<tr>";
	
    if($i < $startday) echo "<td></td>";
    else echo "<td align='center' valign='middle' height='20px'>". ($i - $startday + 1) . "</td>";
	if($i==$timestamp)
	echo"<td  bgcolor='#00FFCC'></td>";
	
    if(($i % 7) == 6 ) echo "</tr>";
}
?>
</table>
</td>
</tr>
</table>
