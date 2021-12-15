
<?php require "Restaurant.inc";
	require "menu_database.php";	

	StartHTML( "HTML" );
	HTMLHeader();
 	HTMLNav();
?>


<div class="Menu">


		<p class="menu_choice"> Take a moment to look over our awesome menu choices!</p>

<?php
	DatabaseConnect("Drinks");
	DatabaseConnect("Appetizers");
	DatabaseConnect("Entrees");
	DatabaseConnect("Soup/Salad");
	DatabaseConnect("Dessert");

	HTMLFooter();

?>
