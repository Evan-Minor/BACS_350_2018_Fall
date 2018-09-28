<?php
    // Connect to the database
    require_once 'db.php';

    // Pick out the inputs
    $date = '11/15';
    $log = 'log';


//    echo "Title: $title, Author: $author";
    // Show if insert is successful or not
    try {
        
        // Add database row
        $query = "INSERT INTO log (date, log) VALUES (:date, :log);";
        $statement = $db->prepare($query);
        $statement->bindValue(':date', $date);        
        $statement->bindValue(':log', $log);
        $statement->execute();
        $statement->closeCursor();
        
        header('Location: index.php');
//        echo '<p><b>Add Book successful</b></p>';
        
        
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        echo "<p>Error: $error_message</p>";
        die();
    }

    require 'select.php';
?>