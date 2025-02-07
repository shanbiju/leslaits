<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "bakery");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$name1 = $_REQUEST['name1'];
		$email = $_REQUEST['email'];
		$address = $_REQUEST['address'];
		$phone = $_REQUEST['phone'];
		$date = $_REQUEST['date'];
		$time = $_REQUEST['time'];
		$flavour = $_REQUEST['flavour'];
		$size = $_REQUEST['size'];

		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO bakery VALUES ('$name1',
			'$email','$address','$phone','$date','$time','$flavour','$size')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$name1\n $email\n "
				. "$address\n $phone\n $email");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
