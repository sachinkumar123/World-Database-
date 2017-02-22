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
echo "Here, It is displaying District in a country by Using ID";
echo "<br>";
echo "$Name";
echo "<br/>";
echo "Displaying,District in a city Using ID";
echo "<br/>";
$sql = "call Population('$Name');";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
         echo $row[District];
        echo "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

