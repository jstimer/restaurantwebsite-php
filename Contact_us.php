
<?php require "Restaurant.inc";	

	StartHTML( "HTML" );

	HTMLHeader();

	HTMLNav();
?>

	

	
<div class="body">


<p></br>Have any questions or concerns? Contact us <a href="http://www.fda.gov/">Here</a> .</p></br>
<p>Or send us an email.</p>
<ul>
	<li>Lucas Reid: <a href="mailto:lnr7605@lhup.edu">lnr7605@lhup.edu</a></li>
	<li>Jerry Stimer: <a href="mailto:jas1835@lhup.edu">jas1835@lhup.edu</a></li>
</ul>
Comments:<br>
<textarea name="comments" id="comments" minlength="5" maxlength="120" form="myForm">
Tell us how we did!
</textarea><br>
<form action="/html/tags/html_form_tag_action.cfm" target="processForm1" method="post" id="myForm">
<input type="submit" value="Submit">
</form>
<iframe name="processForm1" width="100%" height="50%"></iframe>
	
<?php
	HTMLFooter();

?>
