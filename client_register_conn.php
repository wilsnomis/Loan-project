


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

</head>

<body>

</center>
<div align="center" class="style2">
  <table width="874" border="0" cellpadding="4" bordercolor="#0099FF" bgcolor="#FFFFFF">
    <tr>
      <th width="862" class="green" ><p>&nbsp;</p>
      <p class="style4"><span class="whitecenter">HUADAR GUANGDONG CHINESE COMPANY LIMITED </span></p>
      <p>&nbsp;</p></th>
    </tr>
    <tr>
      <td height="79" align="center">
        
        <fieldset>
        <table width="860" height="50" >
          <tr>
            <td width="283" height="22"><a href="Data_clerkhome.php">
            <input name="image" type="image"  src="images/back_btn.png"/>
          </a>    </tr>
          <tr>
            <td height="22" colspan="2" class="marq">&nbsp;</td>
          </tr>
        </table>
        <form id="form1" name="login" method="post" action="">
          <table width="568" align="center" ">
            <tr>
              <td width="167" rowspan="3" align="Right">&nbsp;</td>
              <td width="38" rowspan="3">&nbsp;</td>
              <td width="337" rowspan="3"><?php
 session_start();
 
if(isset($_POST['register'])){
 
 $errmsg_arr = array();
 
 
//Validation error flag
$errflag = false;
 
 $other = $_POST["others"];
 $fname = $_POST["fname"];
 $lname = $_POST["lname"];
  $gender = $_POST["gender"];
   $date=$_POST["date"];
    $tel = $_POST["tel"];
	 $email = $_POST["email"];
	 $clientphoto = $_POST["clientimage"];
 //$date = $_POST["date"];
 $profession = $_POST["profession"];
 
 $occupation = $_POST["occupation"];
  $id = $_POST["id"];
   $idimage = $_POST["idimage"];
    $district1 = $_POST["district1"];
	 $county = $_POST["county"];
	  $subcounty = $_POST["subcounty"];
	   $vill = $_POST["vill"];
	    $orgname= $_POST["orgname"];
		 $country = $_POST["country"];
		  $city = $_POST["city"];
		   $street = $_POST["street"];
		    $pnumber = $_POST["pnumber"];
			 $position = $_POST["position"];
			  $gname = $_POST["gname"];
			   $gcontact = $_POST["gcontact"];
			    $goccupation = $_POST["goccupation"];
				 $bbankname = $_POST["bbankname"];
				  $bbranch = $_POST["bbranch"];
				   $number = $_POST["number"];
				    $gross = $_POST["gross"];
					$loanamount=$_POST["loanamount"];
				     $period=$_POST["period"];
					 $security=$_POST["security"];
					 $securityphoto=$_POST["securityphoto"];
					 
					 
					 $regnumber=$_POST["regnumber"];
					 $make=$_POST["make"];
					 $chassisnumber=$_POST["chassisnumber"];
					  $color=$_POST["color"]; 
					  $enginenumber=$_POST["enginenumber"];
					   $yearmanufacture=$_POST["yearmanufacture"];
					   
					   
					    $plotnumber=$_POST["plotnumber"];
						 $blocknumber=$_POST["blocknumber"];
						  $district=$_POST["district"];
						   $sub=$_POST["sub"];
						    $landvillage=$_POST["landvillage"];
							 $accre=$_POST["accre"];
							 
							
							 
							
					 


 //CHECKING WHETHER THE SUBMITED DATA IS EMPTY
 /**
 if($gender=='' && $email=='' && $tel=='' && $occupation=='' && $date=='' && $lname=='' && $fname=='' && $clientphoto=='' && $idimage=='' && $district1=='' && $county=='' && $subcounty=='' && $vill=='' && $orgname=='' && $country=='' && $city=='' && $street=='' && $pnumber=='' && $position=='' && $gname=='' && $gcontact=='' && $goccupation=='' && $bbankname=='' && $gross==''){
	 $errmsg_arr[]= 'Enter  the mandatory fields.';
	$errflag = true;
	
	}

 **/
 

  if( $gross == '') {
$errmsg_arr[] = 'Gross salary amount missing value';
$errflag = true;
}
 
 
 if($bbankname == '') {
$errmsg_arr[] = 'Guarantor bank name missing value';
$errflag = true;
}
  if($goccupation == '') {
$errmsg_arr[] = 'Guarantor occupation missing value';
$errflag = true;
}
  if($gcontact == '') {
$errmsg_arr[] = 'Guarantor contact missing value';
$errflag = true;
}
  if($gname == '') {
$errmsg_arr[] = 'Gurantor name missing value';
$errflag = true;
}
 if($position == '') {
$errmsg_arr[] = 'Position missing value';
$errflag = true;
}
 else if($pnumber == '') {
$errmsg_arr[] = 'Employer plot number missing value';
$errflag = true;
}
else  if($street == '') {
$errmsg_arr[] = 'Street missing value';
$errflag = true;
}
 if($city == '') {
$errmsg_arr[] = 'City missing value';
$errflag = true;
}
 if($country == '') {
$errmsg_arr[] = 'Country missing value';
$errflag = true;
}
 if($orgname == '') {
$errmsg_arr[] = 'Organisation name missing value';
$errflag = true;
}
  if($vill == '') {
$errmsg_arr[] = 'Residential village missing value';
$errflag = true;
}
  if($subcounty == '') {
$errmsg_arr[] = 'Residential sub county missing value';
$errflag = true;
}
 if($county == '') {
$errmsg_arr[] = 'County missing value';
$errflag = true;
}
 if($district1 == '') {
$errmsg_arr[] = 'Residential district missing value';
$errflag = true;
}
 if($idimage == '') {
$errmsg_arr[] = 'Identification photo missing value';
$errflag = true;
}
 
 
  if($clientphoto == '') {
$errmsg_arr[] = 'Client photo missing value';
$errflag = true;
}
   if($fname == '') {
$errmsg_arr[] = 'First name missing value';
$errflag = true;
}
 if($lname == '') {
$errmsg_arr[] = 'Last name missing value';
$errflag = true;
}
 if($date == '') {
$errmsg_arr[] = 'Date missing value';
$errflag = true;
}



 if($occupation == '') {
$errmsg_arr[] = 'Occupation field missing value';
$errflag = true;
}

else if($tel == '') {
$errmsg_arr[] = 'Telephone number missing value';
$errflag = true;
}

if($email == '') {
$errmsg_arr[] = 'Email adress field missing value';
$errflag = true;
}

 if($gender == '') {
$errmsg_arr[] = 'Gender field missing value';
$errflag = true;
}


//VALLIDATING EMAIL ADRESS

 $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email)) {
    $errmsg_arr[]= 'The Email Address you entered does not appear to be valid.';
	$errflag = true;
  }
  
  //VALIDATING  FIRST NAME ACCEPT ONLY CHARACTERS
  
   $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$fname)) {
   $errmsg_arr[]= 'The First name you entered does not appear to be valid. Note: only characters are needed for names';
   	$errflag = true;
  }
  
   //VALIDATING  lAST NAME ACCEPT ONLY CHARACTERS
  
   $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$lname)) {
   $errmsg_arr[]= 'The Last name you entered does not appear to be valid. Note: only characters are needed for names';
   	$errflag = true;
  }
  //sHOWING THE ERROR MESSAGE

if($errflag) {
$_SESSION['msg'] = $errmsg_arr;

session_write_close();
header("location:newclient_register.php");
exit();
}


 
 
 
 $errorMessage = '';
					include('includes/connect.php');	
						
						$user = $_SESSION['SESS_FIRST_NAME'];
						$lastname = $_SESSION['SESS_LAST_NAME'];
						
						//Query to check if email adress exists
						
						$sql="SELECT * FROM client WHERE email='$email'";
			$result=mysql_query($sql);
			if(mysql_num_rows($result) >=1){ 
			
			$errmsg_arr[] ="The client with such an email adress $email already exists!!";
			$errflag = true;
			
			if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;

session_write_close();
header("location:newclient_register.php");
exit();
}
			 }
			else{
			//Query to check if Telephone number  exists
			
						$sql="SELECT * FROM client WHERE tel='$tel'";
			$result=mysql_query($sql);
			if(mysql_num_rows($result) >=1){ 
			
			
			$errmsg_arr[] ="The client with telephone number: $tel already exists!!";
			$errflag = true;
			
			if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;

session_write_close();
header("location:newclient_register.php");
exit();
}
			
			 }
			
			
			
			
			
			else{
			
			           //Sql statement to insert data into the database
			?>

<?php
$land="Land";
$vehical="Vehical";
if($security==$land){

 $plotnumber=$_POST["plotnumber"];
						
		if($plotnumber== '') {
$errmsg_arr[] = 'Land plot number is missing';
$errflag = true;
}
if( $district== '') {
$errmsg_arr[] = 'District location of the land is missing';
$errflag = true;
}
if($landvillage== '') {
$errmsg_arr[] = 'Village location of the land is missing';
$errflag = true;
}
if(  $blocknumber== '') {
$errmsg_arr[] = 'Land block number is missing';
$errflag = true;
}
if( $sub== '') {
$errmsg_arr[] = 'Sub county location of the land is missing';
$errflag = true;
}
if( $accre== '') {
$errmsg_arr[] = 'Land acreage measurement is missing';
$errflag = true;
}	
if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;

session_write_close();
header("location:newclient_register.php");
exit();
}
					 

			include('includes/insert_ofland.php');
			}
			
			elseif($security==$vehical){
					   
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
 if($yearmanufacture  == '') {
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
header("location:newclient_register.php");
exit();
}
			
			include('includes/insert_ofvehical.php');
			}
			?>

<?php

}}
}else{
header('Location: newclient_register.php');
}

?></td>
              <td width="10"><label></label></td>
            </tr>
            <tr>
              <td><label></label></td>
            </tr>
            <tr>
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


