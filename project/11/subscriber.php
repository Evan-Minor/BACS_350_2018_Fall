<?php
    $date = filter_input(INPUT_POST, 'my_date');
    $log = filter_input(INPUT_POST, 'my_log');
    // Setup a page title variable
    $page_title = "View to Accept Data";
    // Include the page start
    include 'header.php';
?>
    <h2>My Name is <?php echo $name; ?></h2><br>
    <h2>My Emails is <?php echo $email; ?></h2>
<?php
    // Include the page end
    include 'footer.php';
?>