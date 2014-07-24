<?php	 
					$client ="INSERT INTO client(fname, lname, date_birth, gender, occupation, tel, email, admin,clientphoto,profession,id_type,id_photo,district,couty,sub_county,village,organisation,org_city,org_street,plot_number,org_position,bk_name,bk_contact,bk_occupation,bank_name,bank_branch,bank_account,gross_salary,others) VALUES 
								('$fname','$lname','$date','$gender','$occupation','$tel','$email','$user','$clientphoto','$profession','$id','$idimage', '$district1','$county','$subcounty','$vill','$orgname','$city','$street',  '$pnumber','$position','$gname','$gcontact','$goccupation','$bbankname','$bbranch','$number','$gross','$other')";
					
					$result = mysql_query($client) or die("Unable to register client!".mysql_error());
if($result)
{
	//Query to select email adress and phone number

$sql2="SELECT*FROM client WHERE email='$email' AND tel='$tel'";
			$result2=mysql_query($sql2);
			if(mysql_num_rows($result2) >=1){  
			while($rows=mysql_fetch_array($result2)){
			$cid=$rows['client_id'];
			
			//Function to randomly vreate account number


			function create_account_number(){
			$number= "0123456789";
			srand((double)microtime()*1000000);
			$i=0;
			$account="";
			
			while($i<5){
			$num=rand()%3;
			$stm= substr($number,$num,1);
			$account=$account.$stm;
			$i++;
			
			}
			return $account;
			
			}
			$account_number = create_account_number();



						//Sql statement to insert data into account status table
			
			$acc="INSERT INTO account_status (client_id,account_number) VALUES ('$cid','$account_number')";
			
				$cc = mysql_query($acc) or die("Unable to register client!".mysql_error());
			if($cc){
			
			 
			$client ="INSERT INTO loan(loan_amount, loan_period,client_id,security,securityphoto,v_reg_number,v_chassis_number,v_make,v_engine_no,v_year_manufacture,v_color) VALUES ('$loanamount','$period','$cid','$security','$securityphoto','$regnumber','$chassisnumber', '$make','$enginenumber',                '$yearmanufacture',' $color')";
			
				$loan = mysql_query($client) or die("Unable to register client!".mysql_error());
			if($loan){
			echo("Client successfully registered and his details are as below.");
			?>
			<?php
			include('newview_registeredclients.php');
			
			?>
		<?php	
			}
			
			}
			
			else{
			
			$errmsg_arr[] =("A problem has occured and the account number was not created.");
			$errflag = true;
			
			if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;

session_write_close();
header("location:newclient_register.php");
exit();
}
			}
	}}

}




	
else
	{
	//Error messag to alert when data fails to be inserted
	
$errmsg_arr[] = "Insert Failed!!";
$errflag = true;

if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;

session_write_close();
header("location:newclient_register.php");
exit();
}

}
