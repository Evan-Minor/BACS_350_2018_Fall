<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="styles.css">
        <meta charset="UTF-8">
        <title><?php echo $page_title; ?></title>
    </head>
<?php
    // Setup a page title variable
    $page_title = "Project 16";
    // Include the page start
    include 'header.php';
    
    require 'subscriber_views.php';

    echo '<a href="subscriber_views.php">Add Record</a>';
    // Include the page end
    
?>
<?php
    // Include the page end
    include 'footer.php';
?>