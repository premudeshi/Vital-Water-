<?php




$servername = "192.168.0.109";
$username = "admin";
$password = "admin";
$dbname = "merchant";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $ammount = test_input($_POST["ammount"]);
  $cardnumber = test_input($_POST["cardnumber"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


$dbhandle = mysql_connect($servername, $username, $password) 
  or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";

$selected = mysql_select_db( $dbname , $dbhandle) 
  or die("Could not select examples");

$result = mysql_query("SELECT balance FROM card WHERE cardnumber = '$cardnumber'");
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
$row = mysql_fetch_row($result);

$balance = $row[0]; // 42

$update = $balance + $ammount;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE card SET balance = '$update' WHERE cardnumber = '$cardnumber'";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>