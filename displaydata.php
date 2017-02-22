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
$Name = mysqli_real_escape_string($conn, $_POST['Name']);
echo "Query:- select city.name,country.name as country from city,country where country.name = '$Name' and city.countrycode = country.code  having max(city.population);";
echo "<br>";
echo "$Name";
echo "<br/>";
$sql = "select city.name,country.name as country from city,country where country.name = '$Name' and city.countrycode = country.code  having max(city.population);";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "$row[name]";
	echo "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
