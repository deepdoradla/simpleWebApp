<?php

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$databaseName = "cloudwick";
	
	$conn = new mysqli($servername, $username, $password, $databaseName);
	

	$sql_select = "select * from users";

	$query = mysqli_query($conn, $sql_select);



	
	if(mysqli_num_rows($query) > 0)
	{
?>
	<table>
		
	

		<?php
		
		while($row = mysqli_fetch_assoc($query)) 
		{
			
			?>
				<tr>
				<td><?php echo $row['name']; ?></td>
        		</tr>
        	
        	<?php
    	}
    	//echo "</tr></table>"
    	?>

		
	</table>
    	<?php
	}
	

	mysqli_close($conn);

?>





