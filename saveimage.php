<?php



// selected and uploaded  file
if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) {

// Temporary file name stored on the server
$tmpName = $_FILES['image']['tmp_name'];

// Read the file
$fp = fopen($tmpName, 'r');
$data = fread($fp, filesize($tmpName));
$data = addslashes($data);
fclose($fp);

include('includes/connect.php');	
// Create the query and insert
// into our database.
$query = "INSERT INTO image ";
$query .= "(image) VALUES ('$data')";
$results = mysql_query($query);

// Print results
print "Thank you, your file has been uploaded.";

}
else {
print "No image selected/uploaded";
}

// Close our MySQL Link

?>