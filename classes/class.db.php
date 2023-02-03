<?php
// connecting one time with database.

class Dbh {

    function conn(){

        $host = 'localhost';
        $dbname = 'adatabases';
        $user = 'root';
        $pass = '';

        try {
            $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
            $DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $DBH;
        }
        catch(PDOException $e) {

            echo 'ERROR: ' . $e->getMessage();
        }

    } 

} 
?> 