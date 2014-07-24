<html>
<body>

<?php
include('includes/connect.php');

if(isset($_GET['id']))
$id = mysql_real_escape_string($_GET['id']);



$query = mysql_query("SELECT * FROM image WHERE image_id='".$id."'");
$row = mysql_fetch_assoc($query);

while($row){
$imagedata = $row['image'];
}
$s=base64_decode($imagedata);
	 $g=imagecreatefromstring($imagedata);
header('Content-type: image/jpeg');
     
	 
	 
                                                       
?>

</body>
</html>