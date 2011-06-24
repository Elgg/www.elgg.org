<?php
    /**
     * Simple variable to display the correct content
     **/
     
    $register = $_GET['action'];
     
?>
<html>
    <head>
        <link rel="stylesheet" href="/css/main.css" type="text/css" media="screen" />
	 <script type='text/javascript' src='vendors/jquery-1.2.6.pack.js'></script>
	<script type='text/javascript' src='vendors/jquery_flickr.js'></script>
	<script type="text/javascript"> 
		jQuery(function(){   
			jQuery("#gallery-flickr").flickr({     
				api_key: "7672826d8dbd2bffd6d7232a2ab0625d", 
				tags: 'elggcamp',
				type: 'search',
				per_page: 10
			}); 
		}); 
	</script>

<title>Elgg.org - events</title>


<style type="text/css">
#events #spotlight {
	padding:10px;
	width:920px;
	background:#00487D url(http://elgg.org/images/background.gif) no-repeat left top;
	border:1px solid #00487D;
}
#events #spotlight h1,
#events #spotlight h2 {
	color:white;
}
#events #spotlight h2 {
	padding:20px 40px 0 0;
	width:410px;
}	
#tagline {
	width:470px;
	height:230px;
	float:right;
}	
#tagline_image img {
	padding:0;
	margin:0 0 0 0;
	width:470px;
	height:230px;
}
#flickr {
	padding:0 10px 0 10px;
}
#flickr li {
	list-style:none;
	display:inline;
}
#flickr ul li a img {
	border:3px solid #599AC6;
	-webkit-border-radius: 4px; 
	-moz-border-radius: 4px;
	margin:0 11px 0 0;
}	    
#left_new {
    float:left;
    text-align:left;
    width:430px;
    padding: 5px 0 20px 20px;
}
#right_new {
    float:right;
	text-align:left;
    width:430px;
    padding: 10px;
   	background:#eeeeee;
	-webkit-border-radius: 8px; 
	-moz-border-radius: 8px;
    margin:10px 20px 20px 0px;
}
.event_box {
	background: #eeeeee;
	-webkit-border-radius: 8px; 
	-moz-border-radius: 8px;
	padding:5px 10px 5px 10px;
	margin:5px 0 20px 0;	
}
.event_box p {
	padding:0;
}
.event_box b {
	color:#666666;
}    
/* FORM STUFF */
label {
	font-size: 1.1em;
	margin:4px;
}
#right_new .text-input {
	width:100%;
	padding:4px;
	border:1px solid #cccccc;
	-webkit-border-radius: 4px; 
	-moz-border-radius: 4px;
	font: bold large Arial, Helvetica, sans-serif;
	margin:1px 0 5px 0;
	color:#666666;
}
#right_new textarea {
	width:100%;
	padding:4px;
	border:1px solid #cccccc;
	-webkit-border-radius: 4px; 
	-moz-border-radius: 4px;
	font: bold large Arial, Helvetica, sans-serif;
	margin:1px 0 5px 0;
	color:#666666;
}
#right_new input[type="radio"],
#right_new .ieradio  {
    border:none !important;
    width:auto !important;
    height:auto !important;
    padding:0 !important;
    margin:0 !important;
}
.submit-button {
	font: 14px/100% Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #ffffff;
	background:#4690d6;
	border: 1px solid #4690d6;
	-webkit-border-radius: 7px; 
	-moz-border-radius: 7px;
	padding: 1px 6px 2px 6px;
	margin:10px 0 0 0;
	width:auto;
	height:auto;
	cursor: pointer;
}
.submit-button:hover {
	background: #0054a7;
	border: 1px solid #0054a7;
}
#message {
	padding:10px;
	margin:10px 0 10px 0;
	background-color:#FDFFC3;
	-webkit-border-radius: 8px; 
	-moz-border-radius: 8px;
}
#message p {
	padding:0;
	margin:0;
	color:#555555;
}
</style>
</head>

<body id="events">
        <div id="header">
    <div id="header-inner">
        <h1>Elgg</h1><div id="logo"><a href="/index.php"><img src="/images/spacer.gif" border="0" width="121" height="72" /></a></div>
        
		<form action="http://elgg.org/search.php" id="cse-search-box">
		  <div>
		    <input type="hidden" name="cx" value="005259479028933031574:dzhf21k6ccu" />
		    <input type="hidden" name="cof" value="FORID:9" />
		    <input type="hidden" name="ie" value="UTF-8" />
		    <input type="text" name="q" size="31" />
		    <input type="submit" name="sa" value="Go"  class="gsearchsubmit" />
		  </div>
		</form>
		<script type="text/javascript" src="http://www.google.com/coop/cse/brand?form=cse-search-box&lang=en"></script>

		<div id="cse-search-results"></div>
		<script type="text/javascript">
		  var googleSearchIframeName = "cse-search-results";
		  var googleSearchFormName = "cse-search-box";
		  var googleSearchFrameWidth = 950;
		  var googleSearchDomain = "www.google.com";
		  var googleSearchPath = "/cse";
		</script>
		<script type="text/javascript" src="http://www.google.com/afsonline/show_afs_search.js"></script>
    </div>
</div>

<div id="menu">
    <div id="menu-inner">
		<a href="http://elgg.org/downloads.php" title="Downloads"><span>Download</span></a>
		<a href="http://elgg.org/hosting.php" title="Hosting"><span>Hosting</span></a>
		<a href="http://docs.elgg.org/wiki/Main_Page" title="Docs"><span>Docs</span></a>
		<a href="http://community.elgg.org"><span>Community</span></a>
		<a href="http://news.elgg.org" title="Elgg news"><span>News</span></a>
		<a href="http://elgg.org/about.php" title="About page"><span>About</span></a>
		<a href="http://elgg.org/index.php"><span>Home</span></a>    
    </div>
</div>

<div id="spotlight">
	
	<div id="tagline">
  		<div id="tagline_image">
  			<?php
  				$image = rand(1, 7);
  			?>	
  			<img src="images/elggcamp<?php echo $image; ?>.jpg" alt="ElggCamp image" />
  		</div> 
	</div>
	<h1>ElggCamp</h1>        
	<h2>ElggCamps are informal gatherings organised by members of the Elgg community to discuss and share ideas about Elgg.</h2>

<div class="clearfloat"></div>
</div><!-- /spotlight -->

<div class="roundedbox_pagewidth">  		
	<div id="flickr">
		<h2>ElggCamp on <a href="http://www.flickr.com/search/?q=elggcamp&w=all">Flickr</a></h2>
		<p id="gallery-flickr" class="gallery">&nbsp;</p>
	</div>
</div><!-- /roundedbox_pagewidth -->	


<div class="roundedbox_pagewidth">    
    <div id="left_new">
    
    <h2>Upcoming</h2>
    
    <div class="event_box">
	   <h3>None currently scheduled</h3>
    </div>
    
    <h2>Previous</h2>
    <div class="event_box">
	   <h3><a href="">ElggCamp Buenos Aires 2009</a></h3>
	    <p>Date: <b>Nov 19th, 2009</b></p> 
	    <p>Web: <a href="http://www.elggcampba.com/">http://www.elggcampba.com/</a></p>
    </div>

    <div class="event_box">
	    <h3><a href="http://elggcampboston09.com">ElggCamp Boston</a></h3>
	    <p>Date: <b>August 15th, 2009</b></p> 
	    <p>Venue: <b>Harvard Science Center</b></p>
	    <p>Location: Harvard, Boston</p>
    </div>
    
    <div class="event_box">
	    <h3><a href="">ElggCamp Paris</a></h3>
	    <p>Date: <b>June 13th, 2009</b></p>
	    <p>Location: <b>La Cantine, Paris</b></p>
	    <p>Web: <a href="http://elgg.elgg.fr/pg/groups/623/projet-elggcamp/">http://elgg.elgg.fr/pg/groups/623/projet-elggcamp/</a></p>
    </div>
    
    <div class="event_box">
	    <h3><a href="">ElggCamp Brighton</a></h3>
	    <p>Date: <b>December 1st, 2008</b></p>
	    <p>Location: <b>University of Brighton</b></p>
	</div>
    
    </div><!-- end of left div -->

    <div id="right_new">
        
     <h2>Arranging an ElggCamp?</h2>
     <p>If you are arranging an ElggCamp and would like us to promote it here, then send us some information about your event.</p>
            <?php
                if($register == 'success'){
            ?>
            <div id="message">
            <p>Thank you for submitting your information about your ElggCamp, we will review and add it to the list.</p>
            </div>
            <?php 
                }elseif($register == 'problem'){
            ?>
            <div id="message">
            <p>There has been a problem submitting your information. Please try again.</p>
            </div>
            <?php
                }elseif($register == 'fields'){
            ?>
            <div id="message">
            <p>You need to make sure you fill in all the required fields.</p>
            </div>
            <?php
                }
            ?>
            <form action="http://elgg.org/events/action.php" method="post" />
            <p><span style="float:right"><small>(* required fields)</small></span><label>* Name:</label><br /><input type="text" name="name09" value="" class="text-input" /> </p>
            <p><label>Organisation (if applicable):</label><br /><input type="text" name="organisation09" value="" class="text-input" /></p>
            <p><label>* Email:</label><br /><input type="text" name="email09" value="" class="text-input" /></p>
            <p><label>* Location/venue:</label><br /><input type="text" name="location09" value="" class="text-input" /></p>
	     <p><label>Website:</label><br /><input type="text" name="website09" value="" class="text-input" /></p>
	     <p><label>* Details:</label><br /><textarea name="details09" value="" /></textarea></p>
	     <input type="hidden" name="vancouver" value="" />
            <input type="submit" name="submit" value="submit" class="submit-button"/>
            </form>
	</div><!-- end of right div -->
<div class="clearfloat"></div>
</div><!-- end of event container -->
      
         <div id="footer">
		<p>Elgg.org is a <a href="http://www.curveriderhq.com" target="_blank">Curverider</a> project</p>
        </div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-3487311-5");
pageTracker._trackPageview();
} catch(err) {}</script>
    </body>
</html>
