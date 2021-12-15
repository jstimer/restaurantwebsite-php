<?php

// start the session
session_start();

     function StartHTML( $Title )
     {
	echo "<!DOCTYPE html>\n";
	echo "<html>\n";
	echo "<head>\n";
	echo "<link rel=\"shortcut icon\" href=\"Images/sandwich.jpg\">\n";
	echo "<link href=\"Restaurant.css\" type=\"text/css\" rel=\"stylesheet\"/>\n";
	echo "<title>".$Title."</title>\n";
	echo "</head>\n";
	echo "<body>\n";
     }

     function HTMLHeader()
     {
	echo '<div class="title">';
	echo "<h1>HTML</h1>\n";
	echo "<h3> Hey! That&#39s My lunch!</h3>\n";
	echo "</div>\n";
	}

     function HTMLNav()
{
	echo "<ul class=\"menu\">";
	echo "<li><a href=\"index.php\">Home</a></li>\n";
	echo "<li><a href=\"About_Us.php\">About Us</a></li>\n";
	echo "<li><a href=\"Menu.php\">Menu</a></li>\n";
	echo "<li><a href=\"Location.php\">Location</a></li>\n";
	echo "<li><a href=\"Contact_us.php\">Contact Us</a></li>\n";
	echo "</ul>\n";
    }

    function HTMLFooter()
{
	echo "</div> <!--body div-->";
	echo "<div class=\"footer\">";

	// check for a user
	if ( isset( $_SESSION["UserName"] ))
	{
    	// echo the current user
   	 echo "   <p>Current User: ".$_SESSION["UserName"]."</p>\n";
   	 echo "   <p><a href=\"restaurant_logout.php\">Log Out</a> when finished</p>\n";
	}
	else
	{
    	// echo no login yet
    	echo "   <p>No user logged in</p>\n";
   	echo "   <p>Please <a href=\"restaurant_logon.php\">Log in</a></p>\n";
	}

	echo "<p>Lock Haven University </br> Spring 2016</p>";
	echo "</div>\n";
	echo "</body>\n";
	echo "</html>\n";
}
?>
