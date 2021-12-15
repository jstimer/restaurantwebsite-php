<?php
    // require the lab 19 include
    require "Restaurant.inc";
    
    // log out
    session_destroy();

    // go back to logon page
    header( "Location: restaurant_logon.php" );
?>
