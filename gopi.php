<!DOCTYPE html>
<html>
<body>
<?php
$servername="121.200.55.60:3307";
$username="2019UIT1069";
$password="2019UIT1069";
$dbname="2019UIT1069";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT s_no,enrollment_no,student_name FROM students ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "s_no " . $row["s_no"]. "<br/>enrollment_no" . $row["enrollment_no"]. "<br/>student_name" . $row["student_name"]. "<br/>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>


