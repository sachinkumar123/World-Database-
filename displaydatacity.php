<?php
$servername = "localhost";
$username = "root";
$password = "abcl";
$dbname = "world";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$Name = mysqli_real_escape_string($conn, $_POST['ID']);
$sql = "SELECT * from city where ID=".$Name.";";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
echo "Name and Population Of city Using ID<br/>";
        echo "$row[Name]"." $row[Population]";

        echo "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

