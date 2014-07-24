<?php
	//get results from database
	
	
	include('includes/connect.php');	
	
	$result = mysql_query("SELECT * FROM client");
	?>
	<select name="whatever">
	<?php
	while($row = mysql_fetch_assoc($results))
	{
	    ?>
	    <!-- Separated HTML and PHP -->
	    <option value="choose">
	       <?php
	        if($row['fname'] == 'kafuko')
	            echo ("selected=\"selected\"");?>
	
	       <?php echo $row['fname']?>
    </option>
	    <?php
	}
	?>
	</select>