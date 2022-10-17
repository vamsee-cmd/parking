<?php
$slot=$_GET['slot'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * from SLOTS where slot='".$slot."'";
$result = $conn->query($sql);
while($row=$result->fetch_assoc()){
    if($row['status']=='BUSY'){
        header("Location: ./scheduling1.php");
        exit;
    }
    else{
        echo "dha ";
    }
}
?>