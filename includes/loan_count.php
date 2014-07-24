<?php
 
include('includes/connect.php');	
						//create query to check n c if staff exists
							$no="no";
								$selector="SELECT COUNT(loan_id) FROM loan WHERE loanofficer_approval='$no' ";
								$res=mysql_query($selector);
								$row=(mysql_num_rows($res));
								if ($row>=1){ 
								$i=0;
								for($i;$i<($row);$i++){
									$i =$i+$i;
									
									}
		
			
		echo"You have<h3 style='color:#033;'> $i </h3> loan requests to approve";
								}
			
			
			?>