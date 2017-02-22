<?php

/* Attempt MySQL server connection. Assuming you are running MySQL

server with default setting (user 'root' with no password) */

$link = mysqli_connect("localhost", "root", "abcl", "world");



// Check connection

if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}



// Escape user inputs for security

$ID = mysqli_real_escape_string($link, $_POST['ID']);

$Name = mysqli_real_escape_string($link, $_POST['Name']);

$CountryCode = mysqli_real_escape_string($link, $_POST['CountryCode']);


$District = mysqli_real_escape_string($link, $_POST['District']);

$Population = mysqli_real_escape_string($link, $_POST['Population']);



// attempt insert query execution

$sql = "INSERT INTO city(ID,Name,CountryCode,District,Population) VALUES('$ID', '$Name', '$CountryCode','$District','$Population')";

if(mysqli_query($link, $sql)){

    echo "Records added successfully.";

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}



// close connection

mysqli_close($link);

?>


