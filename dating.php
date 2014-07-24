
<?php 
/**

   
**/

$date1=time();
$date2=mktime(0,0,0,07,03,2014);
$diff=($date1-$date2);
$fulldays=floor($diff/(60*60*24));
$fullhours=floor($diff-($fulldays*3600*60*24)/3600);

echo "$fulldays days, $fullhours hours";


?>

