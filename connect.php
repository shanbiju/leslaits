
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bakery";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
          $name1 = $_REQUEST['name1'];
          $email = $_REQUEST['email'];
          $address = $_REQUEST['address'];
          $phone = $_REQUEST['phone'];
          $date = $_REQUEST['date'];
          $time = $_REQUEST['time'];
          $flavour = $_REQUEST['flavour'];
          $size = $_REQUEST['size'];


$sql = "INSERT INTO bakery VALUES ('$name1','$email','$address','$phone','$date','$time','$flavour','$size')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>