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
$Name = mysqli_real_escape_string($conn, $_POST['Language']);
echo "Query :-select country.name from countrylanguage,country where countrylanguage.Language = '$Name' and country.code = countrylanguage.countrycode ;";
echo "<br/>";
echo "$Name";
echo "<br/>";
echo "Dipslaying country name using Language:- ";
echo "<br/>";
$sql = "select country.name from countrylanguage,country where countrylanguage.Language = '$Name' and country.code = countrylanguage.countrycode ;";
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

~                                                                                                                                     
~                                                                                                                                     
~   
