<?php include "header.php"; ?>
    <h1>Project 6</h1>
    <img src="Bear3.png">
<?php

//<a href="https://github.com/">GitHub</a>
    /*Set variables for your database*/

    $port = '3306';
    $dbname = 'evansawe_subscribers';
    $db_connect = "mysql:host=localhost:$port;dbname=$dbname";
    $username = 'evansawe_Evan';
    $password = 'BACS350password';
    
    /*Echo the values*/
        
    echo "<h1>DB Connection</h1>" .
        "<p>Connect String:  $db_connect, $username, $password</p>";

    /*Set Try Statements*/

    try {
        $db = new PDO($db_connect, $username, $password);
        echo '<p><b>Successful Connection</b></p>';
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        echo "<p>Error: $error_message</p>";
    }


/* Query for all subscribers  */

    $query = "SELECT * FROM subscribers";

    $statement = $db->prepare($query);

    $statement->execute();

/*Loop over all of the subscribers to make a bullet list*/

    $subscribers = $statement->fetchAll();
    echo '<ul>';
    foreach ($subscribers as $s) {
        echo '<li>' . $s['name'] . ', ' . $s['email'] . '</li>';
    }
    echo '</ul>';

/*Add one record to the subscriber table*/
    $query = "INSERT INTO subscribers
         (name, email)
    VALUES
        (:name, :email)";

/*Each value must be tied from a variable to the SQL statement*/

    $statement = $db->prepare($query);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':email', $email);

/*Run the SQL statement against the database
    $statement->execute();
    $statement->closeCursor(); */

?>
<?php include "footer.php"; ?>