<?php

    // Connect to the database
    require_once 'db.php';

function insert(){
    // Pick out the inputs
    $date = '11/15';
    $log = 'log';


//    echo "Title: $title, Author: $author";
    // Show if insert is successful or not
    try {
        global $db;
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
}

function select()
{
    // Query for all subscribers
    $query = "SELECT * FROM log";
    global $db;
    $statement = $db->prepare($query);
    $statement->execute();

    echo '<h2>Logs in List</h2>';

    // Loop over all of the subscribers to make a bullet list
    $subscribers = $statement->fetchAll();
    echo '<ul>';
    foreach ($subscribers as $s) {
        echo '<li>' . $s['date'] . ', ' . $s['log'] . '</li>';
    }
    echo '</ul>';
}

insert();
select();


?>