


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title >LOAN OF VALUE</title>
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
  <table width="874" border="0" cellpadding="4" bordercolor="#0099FF" bgcolor="#FFFFFF">
    <tr>
      <th width="862" class="green" ><p>&nbsp;</p>
      <p class="style4"><span class="whitecenter">HUADAR GUANGDONG CHINESE COMPANY LIMITED </span></p>
      </th>
    </tr>
    <tr>
      <td height="79" align="center">
        
        <fieldset>
        <table width="860" height="50" >
          <tr>
            <td width="283" height="22"><a href="testview.php">Go back</a></td>
            <td width="565"><a href="adminin.php"><span class="marq"><a href="newclient_register.php">New client Loan application</a>&nbsp;</span></a></td>
          </tr>
          <tr>
            <td height="22" colspan="2" class="marq">&nbsp;</td>
          </tr>
        </table>
        <form id="form1" name="login" method="post" action="">
          <table width="568" align="center" ">
            <tr>
              <td width="10" rowspan="3" align="Right">&nbsp;</td>
              <td width="10" rowspan="3">&nbsp;</td>
              <td width="527">&nbsp;</td>
              <td width="10"><label></label></td>
            </tr>
            <tr>
              <td><?php
 
session_start();
 
if(isset($_POST['loan'])){

 $errmsg_arr = array();
 
//Validation error flag
$errflag = false;
 
 $email = $_POST["email"];
 $tel= $_POST["tel"];
 $account = $_POST["account"];
 $amount= $_POST["amount"];
 
 $period = $_POST["period"];
 
 $security = $_POST["security"];
 //$securityphoto = $_POST["securityphoto"];
 
 $regnumber = $_POST["regnumber"];
 $chassisnumber=$_POST["chassisnumber"];
 $make = $_POST["make"];
 $enginenumber = $_POST["enginenumber"];
 $manufactureyear = $_POST["manufactureyear"];
 $color = $_POST["color"];
 
 $plotnumber = $_POST["plotnumber"];
 $district = $_POST["district"];
 $village = $_POST["village"];
 $blocknumber = $_POST["blocknumber"];
 $subcounty = $_POST["subcounty"];
 $acre = $_POST["acre"];
 
 
 if (empty($_FILES["securityphoto"]["name"])){
 $errmsg_arr[] = 'Security photo is missing';
$errflag = true;
 }
 
   
   if($security == '') {
$errmsg_arr[] = 'Security is missing';
$errflag = true;
}
 
  if($email == '') {
$errmsg_arr[] = 'Email adress missing';
$errflag = true;
}
 if($tel == '') {
$errmsg_arr[] = 'Telephone number missing';
$errflag = true;
}
if($account == '') {
$errmsg_arr[] = 'Account number missing';
$errflag = true;
}

if($amount == '') {
$errmsg_arr[] = 'Loan amount missing';
$errflag = true;
}

if($period == '') {
$errmsg_arr[] = 'Loan period missing';
$errflag = true;
}





if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;

session_write_close();
header("location:testview.php");
exit();
}


 
 $errorMessage = '';
 
 
  ////////////////////////////////////////
function image(){ 
	    function GetImageExtension($imagetype)
	     {
	       if(empty($imagetype)) return false;
	       switch($imagetype)
	       {
	           case 'image/bmp': return '.bmp';
	           case 'image/gif': return '.gif';
	           case 'image/jpeg': return '.jpg';
	           case 'image/png': return '.png';
	           default: return false;
	       }
	     }
	      
	      
	      
	if (!empty($_FILES["securityphoto"]["name"])) {
	 
	    $file_name=$_FILES["securityphoto"]["name"];
	    $temp_name=$_FILES["securityphoto"]["tmp_name"];
	    $imgtype=$_FILES["securityphoto"]["type"];
	    $ext= GetImageExtension($imgtype);
	    $imagename=date("d-m-Y")."-".time().$ext;
	    $target_path = "images/".$imagename;
	     
	 
	if(move_uploaded_file($temp_name, $target_path)) {
		$date=date("d-m-Y");
	 
	  
	  return $target_path;
	}else{
	 
	   exit("Error While uploading security photo on the server. Try checking its format");
	}
	 
	}
	}
	
	
	
	/////////////////////////////
					include('includes/connect.php');	
						//create query to check n c if staff exists
							
								$selector="SELECT*FROM client,loan WHERE client.email='$email' AND client.tel='$tel' AND client.client_id=loan.client_id";
								$res=mysql_query($selector);
			if(mysql_num_rows($res) >=1){ 
$errmsg_arr[] = 'The client should first clear the previous loan, Or visit the manager for previous request cancellation.';
$errflag = true;
if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;

session_write_close();
header("location:testview.php");exit();
}	
					}	
					
				
	else{	
	
	/////////////////////////////////////
	
	$int="SELECT*FROM interests WHERE min < '$amount' AND max >'$amount'";
	$interesst=mysql_query($int);
			if(mysql_num_rows($interesst) >=1){  
			
			while($rows=mysql_fetch_array($interesst)){
			$min=$rows['min'];
			$max=$rows['max'];
			
			
			$interest1=$rows['interest'];
			$totalinterest=((($interest1*$amount)/100)*$period);
			
			
	
	
	////////////////////////////////////			
						
					$vcl="Vehical";
					$ld="Land";
if($security==$vcl){
?>
	<?php

  if($regnumber == '') {
$errmsg_arr[] = 'Vehicle registration number is missing';
$errflag = true;
}
 if($chassisnumber == '') {
$errmsg_arr[] = 'Vehicle cassis number missing';
$errflag = true;
}
 if( $enginenumber  == '') {
$errmsg_arr[] = 'Vehical engine number missing';
$errflag = true;
}
 if( $make == '') {
$errmsg_arr[] = 'Vehicle make type is missing';
$errflag = true;
}
 if($manufactureyear  == '') {
$errmsg_arr[] = 'Year of manufacture of vehical is missing';
$errflag = true;
}
 if( $color== '') {
$errmsg_arr[] = 'Vehicals color is missing';
$errflag = true;
}
if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;

session_write_close();
header("location:testview.php");
exit();
}
                    include('includes/newvehicalold.php');
}
elseif($security==$ld){		
 
 if( $plotnumber== '') {
$errmsg_arr[] = 'Land plot number is missing';
$errflag = true;
}
if( $district== '') {
$errmsg_arr[] = 'District location of the land is missing';
$errflag = true;
}
if($district== '') {
$errmsg_arr[] = 'Village location of the land is missing';
$errflag = true;
}
if(  $blocknumber== '') {
$errmsg_arr[] = 'Land block number is missing';
$errflag = true;
}
if( $subcounty== '') {
$errmsg_arr[] = 'Sub county location of the land is missing';
$errflag = true;
}
if( $acre== '') {
$errmsg_arr[] = 'Land acreage measurement is missing';
$errflag = true;
}	
if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;

session_write_close();
header("location:testview.php");
exit();
}
					include('includes/newland.php');	
						}
						
			}}
			
			else{
				$errmsg_arr[] = 'Sorry we are unable to offer such a loan period amount. Try an amount less than that.';
                 $errflag = true;
				 if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;

session_write_close();
header("location:testview.php");
exit();
}
				
				}
}


}else{
header("location:testview.php");
}

?></td>
              <td><label></label></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><label></label></td>
            </tr>
          </table>
        </form>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
      </fieldset></a></td>
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


