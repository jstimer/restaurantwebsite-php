
<?php require "Restaurant.inc";

	StartHTML( "HTML" );

	HTMLHeader();

 	HTMLNav();
?>


<div class="body">

<h1> Welcome to HTML the best place for lunch in Lock Haven!</h1>
<div class="Home">
<img class="comic" src="Images/html.png" alt="HTML Comic">
<h3>We&#39ve got the best cup of JAVA at LHU!</h3>
<p>We are located at <a href="Location">404 N Fairview ST</a></p>
<p class="hours"><span class="special">OPEN FROM</span>
	<ul style="list-style-type:none">
		<li>Monday-Friday: 9:00AM-5:00PM</li>
		<li>Saturday: 9:00PM-3:00PM</li>
		<li>Sunday: 11:00AM-3:00PM</li>
		
	</ul>
<span class="special">Special Events Posted Weekly!</span></br>
<span class="event">This Week: Friday 12:00PM-2:00PM League of Lunches!!</br></span>
Save the Date: 5/6/2016 <span class="heroes">HEROES OF THE <span class="dorm">DORM</span></span> at 5:30 EST*. </br>
* Modified Shop Hours
</p>
</div><!--Home div-->

<?php
	HTMLFooter();

?>
