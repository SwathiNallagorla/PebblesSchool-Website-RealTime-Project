<!DOCTYPE html>
<html>

<head>
	<title>Admission Page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => Pebbles
		$conn = mysqli_connect("localhost", "root", "", "Pebbles");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$mobile = $_REQUEST['mobile'];
		$class = $_REQUEST['class'];
		$campus = $_REQUEST['campus'];
		
		// Performing insert query execution
		// here our table name is admission
		$sql = "INSERT INTO admission VALUES ('$name',
			'$email','$mobile','$class','$campus')";
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully.</h3>";

		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
		<a href="../html/admission.html">
<input type="button" class="btn"  value="GO BACK"></a>
	</center>
</body>

</html>
