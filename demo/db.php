<?php

    // Form the DB Connection string and connect to database

    require 'blue_db.php';

    // Open the database or die
    try {
        $db = new PDO($db_connect, $username, $password);
//        echo '<p><b>Successful Connection</b></p>';
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        echo "<p>Error: $error_message</p>";
        die();
    }

?>
