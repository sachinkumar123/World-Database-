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
$Name = mysqli_real_escape_string($conn, $_POST['CountryCode']);
echo "Here, It is displaying language in a country by Using Country Code";
echo "<br>";
echo "$Name";
echo "<br/>";
echo "Languages which is spoken in country";
echo "<br/>";
$sql = "call languages('$Name');";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
         echo $row[language];
        echo "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

