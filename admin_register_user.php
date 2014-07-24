


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title >HUADAR GUANGDONG</title>
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
            <td width="283" height="22">&nbsp;</td>
            <td width="565"><a href="adminin.php"></a></td>
          </tr>
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

 
 $fname = $_POST["fname"];
 $lname = $_POST["lname"];
 $username = $_POST["username"];
 $gender = $_POST["gender"];
 
 $po = $_POST["po"];
 $tel = $_POST["tel"];
// $adminphoto=$_POST["adminphoto"];


 
 
  if($fname == '') {
$errmsg_arr[] = 'First name missing value';
$errflag = true;
}
 if($lname == '') {
$errmsg_arr[] = 'Last name missing value';
$errflag = true;
}
if($username == '') {
$errmsg_arr[] = 'Username missing value';
$errflag = true;
}

if($gender == '') {
$errmsg_arr[] = 'gender missing value';
$errflag = true;
}

if($po == '') {
$errmsg_arr[] = 'Position field missing value';
$errflag = true;
}

if($tel == '') {
$errmsg_arr[] = 'Telephone number missing value';
$errflag = true;
}
if (!empty($_FILES["adminphoto"]["name"])) {
	
	$errmsg_arr[] = 'Please upload user photo.';
$errflag = true;
	}



if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;

session_write_close();
header("location:adminhome.php");
exit();
}


 
 
 
 $errorMessage = '';
 
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
	      
	      
	      
	if (!empty($_FILES["adminphoto"]["name"])) {
	 
	    $file_name=$_FILES["adminphoto"]["name"];
	    $temp_name=$_FILES["adminphoto"]["tmp_name"];
	    $imgtype=$_FILES["adminphoto"]["type"];
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
	
 $adminpic=image();
 
					include('includes/connect.php');	
						//create query to check n c if staff exists
						$user =$_SESSION['SESS_MEMBER_ID'];
						
						
						
						$sql="SELECT * FROM users WHERE tel='$tel'";
			$result=mysql_query($sql);
			if(mysql_num_rows($result) >=1){ 
			
			$errmsg_arr[] ="The user with such a telephone number already exist!!";
			$errflag = true;
			
			if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;

session_write_close();
header("location:adminhome.php");
exit();
}
			 }
			
			
			
	else{
	
	function create_account_number(){
	
	
			$number= "0AB1CD2EFG3HIJ4KL5MN6OPQ7RSTU8VWXYZ9abcdefghijklmnopqrstu";
			srand((double)microtime()*1000000);
			$i=0;
			$password="";
			
			while($i<5){
			$num=rand()%3;
			$stm= substr($number,$num,1);
			$password=$password.$stm;
			$i++;
			
			}
			return $password;
			
			}
			$pass = create_account_number();
						
	
			
			
					$client ="INSERT INTO users(photo,fname, lname, username, password, gender,tel, userType,id_admin) VALUES ('$adminpic','$fname','$lname','$username','$pass','$gender','$tel','$po','$user')";
					
					$result = mysql_query($client) or die("Unable to register client!".mysql_error());
if($result)
{

			
			
			
		
			?>
			<?php
		echo"<h4 class='redcolor'>$fname &nbsp;&nbsp; $lname</h4> has been registered successfully. <br/>";
		echo"  <br/><a href='adminhome.php'>Go back/ Add new record?</a> <br/> <br/><a href='vieadd_edit.php'>Make changes?</a> ";
			
			?>
		<?php	
			
			
	}	
		
} 
}else{
header('Location: test.php');
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


