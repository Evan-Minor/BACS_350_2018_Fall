<?php include "header.php"; ?>
    <h1>Project 7</h1>
    <img src="Bear3.png">
<?php

//<a href="https://github.com/">GitHub</a>
    /*Set variables for your database*/

    // Form the DB Connection string
    $port = '3306';
    $dbname = 'evansawe_subscribers';
    $db_connect = "mysql:host=localhost:$port;dbname=$dbname";
    $username = 'evansawe_Evan';
    $password = 'BACS350password';

    echo "<h2>DB Connection</h2>" .
        "<p>Connect String:  $db_connect, $username, $password</p>";


    // Open the database or die
    try {
        $db = new PDO($db_connect, $username, $password);
        echo '<p><b>Successful Connection</b></p>';
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        echo "<p>Error: $error_message</p>";
        die();
    }


?>
<?php include "footer.php"; ?>