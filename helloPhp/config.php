
<?php
 $dbUser="root";
 $dbPass="sql123";
 $dbDatabase="table";
 $dbHost="localhost";
 
 $dbConn= mysql_connect($dbHost, $dbUser, $dbPass);
 
 if($dbConn){
     mysql_select_db($dbDatabase);
     print("<strong>Successfully Connected!!!</strong>");
 }else{
     die("<strong>Error</strong>could not connect!!!");
    mysql_select_db($dbDatabase);
 }
