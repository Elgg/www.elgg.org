<?php

ob_start();
?>
<link rel="stylesheet" href="vendor/fortawesome/font-awesome/css/font-awesome.min.css">
<?php
$append_head = ob_get_clean();

?>
<?php include '_includes/head.php'; ?>

<div id="sidebar_menu">
	<ul>
		<li><a href="developers.php" class="side-menu selected">Developer Center</a></li>
		<li><a href="plugins" class="side-menu">Plugins</a></li>
	</ul>
</div>
<div id="page_contents" class="developers-content">
	<h1 data-title class="header_color">Developer Center</h1>
	<p>Welcome to the elgg.org developer center. If you are interested in developing on the Elgg engine, then this page will point you to all the resources you might need.</p>
	<p>As always, if you like what you see with Elgg then please consider getting involved in its development.</p>
	<div class="award"><p>
		<a href="http://learn.elgg.org"><i class="fa fa-book fa-4x"></i></a>
		<b>Documentation</b><br />Here you will find information about Elgg's architecture, approach and features.</p>
		<div style="clear:both;"></div>
	</div>
	<div class="award"><p>
		<a href="https://github.com/Elgg/Elgg/blob/master/CONTRIBUTING.md"><i class="fa fa-github fa-4x"></i></a>
		<b>Bug Tracker</b><br />This is Elgg's bug tracker, if you find bugs or have patches for existing bugs then head on over and get involved.</p>
		<div style="clear:both;"></div>
	</div>
	<div class="award"><p>
		<a href="groups/profile/211069/feedback-and-planning"><i class="fa fa-envelope-o fa-4x"></i></a>
		<b>Feedback and Planning</b><br />Discussions about the past, present, and future of Elgg.</p>
		<div style="clear:both;"></div>
	</div>
	<div class="award"><p>
		<a href="http://reference.elgg.org/2.x/annotated.html"><i class="fa fa-code fa-4x"></i></a>
		<b>API Reference</b><br />This is a handy resource to search and find out what functions exist within Elgg.</p>
		<div style="clear:both;"></div>
	</div>
	<div style="clear:both;"></div>
</div>

<?php include '_includes/foot.php'; ?>
