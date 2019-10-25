<?php
    $dbHost = 'localhost';          //host
    $dbName = 'pdplabanmafia';      //db name
    $dbUsername = 'root';           //username
    $dbPassword = '';               //password

// http://php.net/manual/en/pdo.connections.php
// More on setAttribute: http://php.net/manual/en/pdo.setattribute.php
    try 
    {
        
        $dbConn = new PDO("mysql:host = {$dbHost};dbname = {$dbName}", $dbUsername, $dbPassword);
        $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Setting Error Mode as Exception
            //echo "Connection successful" . "<br/>"; 
    } 
    catch(PDOException $e) 
    {
        echo $e->getMessage();
    }

?>