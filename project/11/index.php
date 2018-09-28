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
    
    require 'select.php';

    echo '<a href="insert.php">Add Record</a>';
    // Include the page end

    require_once 'test.php';
    
?>
<?php
    // Include the page end
    include 'footer.php';
?>
        
    </body>
</html>