<?php

/* Attempt MySQL server connection. Assuming you are running MySQL

server with default setting (user 'root' with no password) */

$link = mysqli_connect("localhost", "root", "abcl", "world");



// Check connection

if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}



// Escape user inputs for security

$Code= mysqli_real_escape_string($link, $_POST['Code']);

$Name = mysqli_real_escape_string($link, $_POST['Name']);

$Continent = mysqli_real_escape_string($link, $_POST['Continent']);


$Region = mysqli_real_escape_string($link, $_POST['Region']);

$SurfaceArea= mysqli_real_escape_string($link, $_POST['SurfaceArea']);
$IndepYear= mysqli_real_escape_string($link, $_POST['IndepYear']);

$Population = mysqli_real_escape_string($link, $_POST['Population']);

$LifeExpectancy = mysqli_real_escape_string($link, $_POST['LifeExpectancy']);


$GNP = mysqli_real_escape_string($link, $_POST['GNP']);

$GNPOld= mysqli_real_escape_string($link, $_POST['GNPOld']);
$LocalName= mysqli_real_escape_string($link, $_POST['LocalName']);

$GovernmentForm = mysqli_real_escape_string($link, $_POST['GovernmentForm']);

$HeadOfState = mysqli_real_escape_string($link, $_POST['HeadOfState']);


$Capital = mysqli_real_escape_string($link, $_POST['Capital']);

$Code2 = mysqli_real_escape_string($link, $_POST['Code2']);


// attempt insert query execution

$sql = "INSERT INTO country(Code,Name,Continent,Region,SurfaceArea,IndepYear,Population,LifeExpectancy,GNP,GNPOld,LocalName,GovernmentForm,HeadOfState,Capital,Code2) VALUES ('$Code', '$Name', '$Continent','$Region','$SurfaceArea','$IndepYear','$Population','$LifeExpectancy','$GNP','$GNPOld','$LocalName','$GovernmentForm','$HeadOfState','$Capital','$Code2')";

if(mysqli_query($link, $sql)){

    echo "Records added successfully.";

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}



// close connection

mysqli_close($link);

?>


