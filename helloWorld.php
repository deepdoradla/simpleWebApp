<?php
	//print_r($_GET['helloForm']);
	$var = $_POST['hello_world'];
	//echo "Before escaping".$var;
	$var1 = mysqli_real_escape_string($var);
	
	//echo $var;
	//Database connection

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$databaseName = "cloudwick";

	$conn = new mysqli($servername, $username, $password, $databaseName);

	
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	//echo "Connected successfully";

	$sql_insert = "INSERT INTO users (name) VALUES('$var')";

	$query = mysqli_query($conn, $sql_insert);
	
	if($query)
		echo "Query inserted";
	else
		echo "Query insert failed";


	mysqli_close($conn);

?>

<a href="index.html">Go back</a>