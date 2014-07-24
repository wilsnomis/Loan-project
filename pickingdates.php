<SCRIPT language=JavaScript type=text/javascript>
	DaysofWeek = new Array()
	DaysofWeek[0]="Sun"
	DaysofWeek[1]="Mon"
	DaysofWeek[2]="Tues"
	DaysofWeek[3]="Wed"
	DaysofWeek[4]="Thur"
	DaysofWeek[5]="Fri"
	DaysofWeek[6]="Sat"
	
	Months = new Array()
	Months[0]="Jan"
	Months[1]="Feb"
	Months[2]="Mar"
	Months[3]="Apr"
	Months[4]="May"
	Months[5]="Jun"
	Months[6]="Jul"
	Months[7]="Aug"
	Months[8]="Sept"
	Months[9]="Oct"
	Months[10]="Nov"
	Months[11]="Dec"
	
	RightNow = new Date()
	
	var day = DaysofWeek[RightNow.getDay()]
	var date = RightNow.getDate()
	var Month = Months[RightNow.getMonth()]
	var Year = RightNow.getFullYear()
	
	document.write("" +day+ ", " +Month+ "- " +date+"- " +Year+ "")
	
          </SCRIPT>

<?php
 
session_start();
 

					include('includes/connect.php');	
						//create query to check n c if staff exists
						
							
							$now = new date(.);
							
			
			$sq="SELECT*FROM loan ";
						
			$res=mysql_query($sq) or die('Unable to do something'.mysql_error());
			if(mysql_num_rows($res) >=1){ 
			 
			
			while($rows=mysql_fetch_array($res)){
			
			
		$loan_amount=$rows['loan_amount'];
		$ldate=$rows['loan_date'];
		//$now = new Date()
		
		echo"$ldate, $loan_amount";
	
		
		}}
		else{
		echo"Date not there";
		}

					
?>