<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = 'abcl';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT * from city';
   mysql_select_db('world');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_NUM)) {
      echo "ID :{$row[0]}  <br> ".
         " Name : {$row[1]} <br> ".
         "CountryCode : {$row[2]} <br> ".
 "District : {$row[3]} <br> ".
 "Population : {$row[4]} <br> ".

         "--------------------------------<br>";
   }
   
   echo "Fetched data successfully\n";
   
   mysql_close($conn);
?>
