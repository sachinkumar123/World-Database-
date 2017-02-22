

    <?php

    /* Attempt MySQL server connection. Assuming you are running MySQL

    server with default setting (user 'root' with no password) */

    $link = mysqli_connect("localhost", "root", "abcl", "world");

     

    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }

     

    // Escape user inputs for security

    $CountryCode = mysqli_real_escape_string($link, $_POST['CountryCode']);

    $Language = mysqli_real_escape_string($link, $_POST['Language']);

    $IsOfficial = mysqli_real_escape_string($link, $_POST['IsOfficial']);

    $Percentage = mysqli_real_escape_string($link, $_POST['Percentage']);

     

    // attempt insert query execution

    $sql = "INSERT INTO countrylanguage (CountryCode,Language,IsOfficial,Percentage) VALUES ('$CountryCode', '$Language', '$IsOfficial', '$Percentage')";

    if(mysqli_query($link, $sql)){

        echo "Records added successfully.";

    } else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }

     

    // close connection

    mysqli_close($link);

    ?>


