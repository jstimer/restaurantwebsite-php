<?php
	require "Restaurant.inc";

    // check for POST variables
    if ( isset( $_POST["UserName"] ))
    {
    	// save the user name and password to the session
    	$_SESSION["UserName"] = $_POST["UserName"];
   	 $_SESSION["Password"] = $_POST["Password"];
    
    	// load page 1
    	header( "Location: index.php" );
    	exit();
    }	

	StartHTML( "HTML" );
	HTMLHeader();
 	HTMLNav();
?>

<div class="body">

<section>
    <form action="restaurant_logon.php" method="POST">
        <p>User Name: <input name="UserName" type="text" required="true" /></p>
        <p>Password: <input name="Password" type="password" required="true" /></p>
        <p><button type="submit">Log On</button></p>
    </form>
</section>

</div>

<?php
	HTMLFooter();

?>
