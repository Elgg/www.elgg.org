<?php
    /**
     * Simple variable to display the correct content
     **/
     
    $register = $_GET['action'];
     
?>
<html>
    <head>
        <link rel="stylesheet" href="/css/main.css" type="text/css" media="screen" />
        <title>Elgg.org - events</title>
    <style type="text/css">
   
    
    #event_container {
        width:990px;
        margin:auto;
    }

    #event_container li {
		list-style:none;
		font-size: 1.3em;
    }
    
    #event_container ul {
		margin:0 0 7px 0;
    }
    
	#event_container p {
		font-size: 1.3em;
		margin:0 0 7px 0;
		padding:0 0 0 0;
    }

	#event_container h1 {
		margin:0 0 10px 0;
		padding:0;
	}
	#event_container h2 {
		margin:30px 0 0 0;
		padding:0;	
	}
	    
    #left {
        float:left;
        text-align:left;
        width:430px;
        padding: 5px 0 20px 20px;
        /* border:1px solid #ccc; */
    }
    
    #right {
        float:right;
		text-align:left;
        width:430px;
        padding: 10px;
        /* border:1px solid #ccc; */
        
        
		background:#eeeeee;
		-webkit-border-radius: 8px; 
		-moz-border-radius: 8px;
	    margin:10px 20px 20px 0px;
    }
    
    #location {
	    margin-top:20px;
    }
    
    /* FORM STUFF */
    #right form {
		margin:5px 0 0 0;
		padding:5px 0 0 0;
		border-top:1px solid #cccccc;
    }
    label {
		font-size: 1.1em;
		margin:4px;
    }
    
    #right .text-input {
    	width:100%;
    	padding:4px;
    	border:1px solid #cccccc;
		-webkit-border-radius: 4px; 
		-moz-border-radius: 4px;
    	font: bold large Arial, Helvetica, sans-serif;
    	margin:1px 0 5px 0;
    	color:#666666;
    }
    
    #right input[type="radio"],
    #right .ieradio  {
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
    <body>
        <div id="header">
    <div id="header-inner">
        <h1>Elgg</h1><div id="logo"><a href="index.php"><img src="/images/spacer.gif" border="0" width="121" height="72" /></a></div>
        
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
		<a href="downloads.php" title="Downloads"><span>Download</span></a>
		<a href="hosting.php" title="Hosting"><span>Hosting</span></a>
		<a href="http://docs.elgg.org/wiki/Main_Page" title="Docs"><span>Docs</span></a>
		<a href="http://community.elgg.org"><span>Community</span></a>
		<a href="http://news.elgg.org" title="Elgg news"><span>News</span></a>
		<a href="about.php" title="About page"><span>About</span></a>
		<a href="index.php"><span>Home</span></a>    
    </div>
</div>

        <div class="roundedbox_pagewidth">
       <div style="margin:20px;">
            <h1>ElggCamp Boston, August 15th</h1>
               <p><b>This event page has now moved <a href="http://www.elggcampboston09.com/">over here</a>.</b></p>            
	</div>	
<div class="clearfloat"></div>
        </div><!-- end of event container -->
      
         <div id="footer">
		<p>Elgg.org is a <a href="http://www.curveriderhq.com" target="_blank">Curverider</a> project</p>
        </div>
    </body>
</html>