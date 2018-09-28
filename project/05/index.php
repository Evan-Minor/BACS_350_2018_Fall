<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="styles.css">
        <meta charset="UTF-8">
        <title><?php echo $page_title; ?></title>
    </head>
<?php
    // Setup a page title variable
    $page_title = "Form View (to Post Data)";
    // Include the page start
    include 'header.php';
?>
    <h2>UI for form input using POST</h2>
    <form action="subscribe.php" method="post">
        <label>What is your name?</label>
        <input type="text" name="my_name"><br>
        <label>What is your email?</label>
        <input type="email" name="my_email">
        <input type="submit" value="Save"/>
    </form>
<?php
    // Include the page end
    include 'footer.php';
?>
        
    </body>
</html>