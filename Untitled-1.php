

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title >LOAN OF VALUE</title>
<link rel="stylesheet" type="text/css" href="css.css" />
<style type="text/css">
<!--

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
  <table width="874" border="0" align="center" cellpadding="4" bordercolor="#0099FF" bgcolor="#FFFFFF">
    <tr>
      <th width="862" class="green" ><p>&nbsp;</p>
      <p class="style4"><span class="whitecenter">HUADAR GUANGDONG CHINESE COMPANY LIMITED </span></p>
      <p>&nbsp;</p></th>
    </tr>
    <tr>
      <td height="79" align="center">
	  <fieldset>
	    <table width="1022">
	    <tr>
	      <th height="22" colspan="4" scope="row"><fieldset>
	        <form id="form1" name="form1" method="post" action="client_register_conn.php">
	          <table width="1012" border="0" class="left black">
	            <tr>
	              <th colspan="2" class="red" scope="col"><table width="1022">
	                <tr>
	                  <th width="124" scope="col"><a href="Data_clerkhome.php">
	                    Go Back
	                    </a></th>
	                  <th width="683" scope="col"  ><a href="testview.php">Old client </a></th>
	                  <th width="26" scope="col"  >&nbsp;</th>
	                  <th width="64" scope="col"  >&nbsp;</th>
	                  </tr>
	                <tr>
	                  <th colspan="4" scope="col"  >&nbsp;&nbsp; </th>
	                  </tr>
	                <tr><td><span class="center redcolor">
                  
                  </span></td></tr>
	                  <th height="22" colspan="4" scope="row"><fieldset>
	                    <table width="1012" border="0" class="left black">
	                      <tr>
	                        <th colspan="2" class="red" scope="col">Personal Information </th>
	                        <th class="red" scope="col">&nbsp;</th>
	                        <th class="red" scope="col">&nbsp;</th>
	                        <th class="red" scope="col">&nbsp;</th>
	                        <th class="red" scope="col">&nbsp;</th>
	                        <th width="149" rowspan="26" class="red" scope="col"> <?php
if( isset($_SESSION['msg']) && is_array($_SESSION['msg']) && count($_SESSION['msg']) >0 ) {
echo '<ul class="err">';
foreach($_SESSION['msg'] as $msg) {
echo '<li>',$msg,'</li>';
}
echo '</ul>';
unset($_SESSION['msg']);
}
?>&nbsp;</th>
	                        </tr>
	                      <tr>
	                        <th height="26" colspan="2" style="color:#F00" scope="col">Note: <span class="redcolor">*</span> shows mandatory fields.</th>
	                        <th scope="col" style="color:#F00">&nbsp;</th>
	                        <th class="red" scope="col">&nbsp;</th>
	                        <th class="red" scope="col">&nbsp;</th>
	                        <th class="red" scope="col">&nbsp;</th>
	                        </tr>
	                      <tr>
	                        <th colspan="2" scope="row">Attach client's passport photo: </th>
	                        <th colspan="2" scope="row"><p class="redcolor">
	                          <input name="MAX_FILE_SIZE" value="102400" type="hidden" />
	                          <input name="clientimage" accept="image/jpeg" type="file" />
	                          </p>	                          <span class="redcolor">*</span></th>
	                        <td>&nbsp;</td>
	                        <td>&nbsp;</td>
	                        </tr>
	                      <tr>
	                        <th width="112" scope="row">Surname:</th>
	                        <td width="149"><label>
	                          <input name="fname" type="text" id="fname" />
	                          <span class="redcolor">*</span></label></td>
	                        <td>Last name            : </td>
	                        <td><input name="lname" type="text" id="lname" />
	                          <span class="redcolor">*</span></td>
	                        <td width="113">Other names</td>
	                        <td width="218"><input name="others" type="text" id="other" /></td>
	                        </tr>
	                      <tr>
	                        <th scope="row">Gender:</th>
	                        <td><input name="gender" type="text" id="gender" />
	                          <span class="redcolor">*</span></td>
	                        <td>Date of birth: </td>
	                        <td><input name="date" type="text" id="date" />
	                          <span class="redcolor">*</span></td>
	                        <td>&nbsp;</td>
	                        <td>&nbsp;</td>
	                        </tr>
	                      
                          
	                      <tr>
	                        <th scope="row">Mobile no: </th>
	                        <td><input name="tel" type="text" id="tel" />
	                          <span class="redcolor">*</span></td>
	                        <td>Email address: </td>
	                        <td><input name="email" type="text" id="email" />
	                          <span class="redcolor">*</span></td>
	                        <td>&nbsp;</td>
	                        <td>&nbsp;</td>
	                        </tr>
	                      <tr>
	                        <th scope="row">Profession</th>
	                        <td><input name="profession" type="text" id="profession" /></td>
	                        <td>Occupation: </td>
	                        <td><input name="occupation" type="text" id="occupation" />
	                          <span class="redcolor">*</span></td>
	                        <td>&nbsp;</td>
	                        <td>&nbsp;</td>
	                        </tr>
	                      <tr>
	                        <th scope="row">ID type : </th>
	                        <td><label>
	                          <select name="id" id="id">
	                            <option> </option>
	                            <option>Pass port</option>
	                            <option>Drivers permit</option>
	                            <option>Student id</option>
	                            <option>National</option>
	                            </select>
	                          <span class="redcolor">*</span></label></td>
	                        <td><label> Id photo: </label>
	                          <input name="MAX_FILE_SIZE2" value="102400" type="hidden" />
	                          &nbsp;</td>
	                        <td colspan="2"><input name="idimage" accept="image/jpeg" type="file" />	                          <span class="redcolor">*</span></td>
	                        <td>&nbsp;</td>
	                        </tr>
	                      <tr>
	                        <th colspan="2" class="red" scope="row">Place of residence </th>
	                        <th class="red" scope="row">&nbsp;</th>
	                        <th class="red" scope="row">&nbsp;</th>
	                        <td>&nbsp;</td>
	                        <td>&nbsp;</td>
	                        </tr>
	                      <tr>
	                        <th scope="row">District:</th>
	                        <td><select name="district1" id="district1">
	                          <option> </option>
	                          <option>Kampal</option>
	                          <option>Jinja</option>
	                          <option>Mbarara</option>
	                          <option>Mukono</option>
	                          <option>Kamuli</option>
	                          <option>Wakiso</option>
	                          <option>Fort</option>
	                          <option>Kasese</option>
	                          <option>Iganga</option>
	                          <option>Mbale</option>
	                          </select>
	                          <span class="redcolor">*</span></td>
	                        <td>Village</td>
	                        <td><select name="county" id="county">
	                          <option> </option>
	                          <option>Nabwigulu</option>
	                          </select>
	                          <span class="redcolor">*</span></td>
	                        <td>Sub county:</td>
	                        <td><input name="subcounty" type="text" id="subcounty" />
	                          <span class="redcolor">*</span></td>
	                        </tr>
	                      <tr>
	                        <th scope="row">County:</th>
	                        <td><input name="vill" type="text" id="vill" />
	                          <span class="redcolor">*</span></td>
	                        <td>&nbsp;</td>
	                        <td>&nbsp;</td>
	                        <td>&nbsp;</td>
	                        <td>&nbsp;</td>
	                        </tr>
	                      <tr>
	                        <th colspan="2" class="red" scope="row">Employer information </th>
	                        <th class="red" scope="row">&nbsp;</th>
	                        <th class="red" scope="row">&nbsp;</th>
	                        <td>&nbsp;</td>
	                        <td>&nbsp;</td>
	                        </tr>
	                      <tr>
	                        <th scope="row">organisation name : </th>
	                        <td><input name="orgname" type="text" id="orgname" />
	                          <span class="redcolor">*</span></td>
	                        <td>Country: </td>
	                        <td><select name="country" id="country">
	                          <option> </option>
	                          <option>Uganda</option>
	                          <option>Kenya</option>
	                          <option>Tanzania</option>
	                          <option>Rwanda</option>
	                          <option>Congo</option>
	                          </select>
	                          <span class="redcolor">*</span></td>
	                        <td>City:</td>
	                        <td><select name="city" id="city">
	                          <option> </option>
	                          <option>Kampala</option>
	                          <option>Jinja</option>
	                          <option>Mbarara</option>
	                          <option>Nairobi</option>
	                          <option>Mombasa</option>
	                          <option>Dar es salam</option>
	                          <option>zanzibar</option>
	                          <option>Juba</option>
	                          </select>
	                          <span class="redcolor">*</span></td>
	                        </tr>
	                      <tr>
	                        <th scope="row">Street name:</th>
	                        <td><input name="street" type="text" id="street" />
	                          <span class="redcolor">*</span></td>
	                        <td>Plot number: </td>
	                        <td><input name="pnumber" type="text" id="pnumber" /></td>
	                        <td>Position: </td>
	                        <td><input name="position" type="text" id="position" />
	                          <span class="redcolor">*</span></td>
	                        </tr>
	                      <tr>
	                        <th class="red" scope="row">Guarantor</th>
	                        <th class="red" scope="row">&nbsp;</th>
	                        <th class="red" scope="row">&nbsp;</th>
	                        <th class="red" scope="row">&nbsp;</th>
	                        <td>&nbsp;</td>
	                        <td>&nbsp;</td>
	                        </tr>
	                      <tr>
	                        <th scope="row">Name:</th>
	                        <td><input name="gname" type="text" id="gname" />
	                          <span class="redcolor">*</span></td>
	                        <td>Contact: </td>
	                        <td><input name="gcontact" type="text" id="gcontact" />
	                          <span class="redcolor">*</span></td>
	                        <td>Occupation: </td>
	                        <td><input name="goccupation" type="text" id="goccupation" />
	                          <span class="redcolor">*</span></td>
	                        </tr>
	                      <tr>
	                        <th class="red" scope="row">Bankers</th>
	                        <th class="red" scope="row">&nbsp;</th>
	                        <th class="red" scope="row">&nbsp;</th>
	                        <th class="red" scope="row">&nbsp;</th>
	                        <td>&nbsp;</td>
	                        <td>&nbsp;</td>
	                        </tr>
	                      <tr>
	                        <th scope="row">Bank name: </th>
	                        <td><input name="bbankname" type="text" id="bbankname" /></td>
	                        <td>Branch</td>
	                        <td><input name="bbranch" type="text" id="bbranch" /></td>
	                        <td>A/c no: </td>
	                        <td><input name="number" type="text" id="number" /></td>
	                        </tr>
	                      <tr>
	                        <th colspan="2" class="red" scope="row">Salary information </th>
	                        <th class="red" scope="row">&nbsp;</th>
	                        <th class="red" scope="row">&nbsp;</th>
	                        <td>&nbsp;</td>
	                        <td>&nbsp;</td>
	                        </tr>
	                      <tr>
	                        <th scope="row">Gross monthly salary:</th>
	                        <th scope="row"> <input name="gross" type="text" id="gross" />
	                          <span class="redcolor">*</span></th>
	                        <th scope="row">&nbsp;</th>
	                        <th scope="row">&nbsp;</th>
	                        <td>&nbsp;</td>
	                        <td>&nbsp;</td>
	                        </tr>
	                      <tr>
	                        <th colspan="2" class="red" scope="row">Loan information </th>
	                        <th class="red" scope="row">&nbsp;</th>
	                        <th class="red" scope="row">&nbsp;</th>
	                        <td>&nbsp;</td>
	                        <td>&nbsp;</td>
	                        </tr>
	                      <tr>
	                        <th scope="row">Amount applied for: </th>
	                        <td><input name="loanamount" type="text" id="loanamount" />
	                          <span class="redcolor">*</span></td>
	                        <td>Security: </td>
	                        <td><select name="security" id="security">
	                          <option> </option>
	                          <option>Land</option>
	                          <option>Vehical</option>
	                          </select>
	                          <span class="redcolor">*</span></td>
	                        <td>Security photo:
	                          <input name="MAX_FILE_SIZE3" value="102400" type="hidden" /></td>
	                        <td><input name="securityphoto" type="file" id="securityphoto" accept="image/jpeg" />
	                          <span class="redcolor">*</span></td>
	                        </tr>
	                      <tr>
	                        <th scope="row">Repayment period:</th>
	                        <td><select name="period" id="period">
	                          <option> </option>
	                          <option>1 month</option>
	                          <option>2 month</option>
	                          <option>3 month</option>
	                          <option>4 month</option>
	                          <option>5 month</option>
	                          <option>6 month</option>
	                          <option>7 month</option>
	                          </select>
	                          <span class="redcolor">*</span></td>
	                        <td>&nbsp;</td>
	                        <td>&nbsp;</td>
	                        <td>&nbsp;</td>
	                        <td>&nbsp;</td>
	                        </tr>
	                      <tr>
	                        <th colspan="4" scope="row" class="red">Fill this part only if client security is:Motor  vehical </th>
	                        <td>&nbsp;</td>
	                        <td>&nbsp;</td>
	                        </tr>
	                      <tr>
	                        <th class="center" scope="row">Registration number </th>
	                        <th class="center" scope="row"><input name="regnumber" type="text" id="regnumber" /></th>
	                        <th class="center" scope="row">Make	                          </th>
	                        <th class="center" scope="row"><input name="make" type="text" id="make" /></th>
	                        <td><span class="center">Chassis number </span></td>
	                        <td><span class="center">
	                          <input name="chassisnumber" type="text" id="chassisnumber" />
	                          </span></td>
	                        </tr>
	                      <tr>
	                        <th class="center" scope="row">Color</th>
	                        <th class="center" scope="row"><select name="color" id="color">
	                          <option> </option>
	                          <option>Black</option>
	                          <option>Green</option>
	                          <option>Yellow</option>
	                          <option>Blue</option>
	                          <option>Gray</option>
	                          <option>Orange</option>
	                          <option>Pink</option>
	                          <option>Creem</option>
	                          </select></th>
	                        <th width="93" class="center" scope="row">Engine number</th>
	                        <th width="148" class="center" scope="row"><input name="enginenumber" type="text" id="enginenumber" /></th>
	                        <td><span class="center">Year ofmanufacture </span></td>
	                        <td><span class="center">
	                          <input name="yearmanufacture" type="text" id="yearmanufacture" />
	                          </span></td>
	                        </tr>
	                      <tr class="red">
	                        <th colspan="4"  scope="row" class="red">Fill this part only if client security is: land </th>
	                        <td>&nbsp;</td>
	                        <td>&nbsp;</td>
	                        <td>&nbsp;</td>
	                        </tr>
	                      <tr class="red">
	                        <th  scope="row">Plot number </th>
	                        <th  scope="row"><input name="plotnumber" type="text" id="plotnumber" /></th>
	                        <th class="center" scope="row">Block number </th>
	                        <th class="center" scope="row"><input name="blocknumber" type="text" id="blocknumber" /></th>
	                        <td><span class="center">District </span></td>
	                        <td><span class="center">
	                          <input name="district" type="text" id="district" />
	                          </span></td>
	                        <td>&nbsp;</td>
	                        </tr class="red">
	                      <tr>
	                        <th  scope="row" style="text-align:left;"> Sub county</th>
	                        <th  scope="row"> <input name="sub" type="text" id="sub" />
	                          </th>
	                        <th class="center" scope="row">Village</th>
	                        <th class="center" scope="row"> <input name="landvillage" type="text" id="landvillage" />
	                          </th>
	                        <td><span class="center">Accreage</span></td>
	                        <td><input name="accre" type="text" id="accre" /></td>
	                        <td>&nbsp;</td>
	                        </tr>
	                      <tr>
	                        <th class="center" scope="row">&nbsp;</th>
	                        <th class="center" scope="row">&nbsp;</th>
	                        <th class="center" scope="row">&nbsp;</th>
	                        <th class="center" scope="row">&nbsp;</th>
	                        <td>&nbsp;</td>
	                        <td>&nbsp;</td>
	                        <td>&nbsp;</td>
	                        </tr>
	                      <tr>
	                        <th scope="row">&nbsp;</th>
	                        <td><input name="register" type="submit" id="register" value="Register" /></td>
	                        <td><label>
	                          <input type="reset" name="Reset" value="Reset" />
	                          </label></td>
	                        <td>&nbsp;</td>
	                        <td>&nbsp;</td>
	                        <td>&nbsp;</td>
	                        <td>&nbsp;</td>
	                        </tr>
	                      <tr>
	                        <th scope="row">&nbsp;</th>
	                        <td>&nbsp;</td>
	                        <td>&nbsp;</td>
	                        <td>&nbsp;</td>
	                        <td>&nbsp;</td>
	                        <td>&nbsp;</td>
	                        <td>&nbsp;</td>
	                        </tr>
	                      </table>
	                    </fieldset>
	                     </th>
	                  </tr>
	                </table></th>
	              </tr>
	            </table>
	          </form>
	        </fieldset></th>
	      </tr>
	    </table>
	  </fieldset>
      </a></td>
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


