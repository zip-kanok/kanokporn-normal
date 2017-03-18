<?php
// Note - cannot have any output before this session_start(); if ( ! isset($_SESSION['value']) )
if(!isset($_SESSION['value']))
{
    session_start();
    $_SESSION['value'] = 4;
    $_SESSION['name'] = "admin";
    echo ("<p>Session started!<p>\n");
   
}
?>


<p><a href="sessfunc.php">Click Me!</a></p>

<p>Our Session ID is:
    <?php echo(session_id()); ?>
</p>

<pre><?php print_r($_SESSION); ?></pre>