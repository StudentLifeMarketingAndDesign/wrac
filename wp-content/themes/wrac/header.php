<?php

    // Creating the doctype
    thematic_create_doctype();
    echo " ";
    language_attributes();
    echo ">\n";
    
    // Creating the head profile
    thematic_head_profile();

    // Creating the doc title
    thematic_doctitle();
    
    // Creating the content type
    thematic_create_contenttype();
    
    // Creating the description
    thematic_show_description();
    
    // Creating the robots tags
    thematic_show_robots();
    
    // Creating the canonical URL
    thematic_canonical_url();
    
    // Loading the stylesheet
    thematic_create_stylesheet();

	if (THEMATIC_COMPATIBLE_FEEDLINKS) {    
    	// Creating the internal RSS links
    	thematic_show_rss();
    
    	// Creating the comments RSS links
    	thematic_show_commentsrss();
   	}
    
    // Creating the pingback adress
    thematic_show_pingback();
    
    // Enables comment threading
    thematic_show_commentreply();

    // Calling WordPress' header action hook
    wp_head();
    
?>

<!-- Camera -->
    
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/camera/scripts/jquery.min.js'></script>
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/camera/scripts/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/camera/scripts/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/camera/scripts/camera.js'></script> 
    <link rel='stylesheet' id='camera-css'  href='<?php echo get_template_directory_uri(); ?>/camera/css/camera.css' type='text/css' media='all'> 

    <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_1').camera({
			});
		});
		
		function showFancy() {
			jQuery('#fancybox').fadeIn('slow');
		}
		
		function hideFancy() {
			jQuery('#fancybox').fadeOut('fast');
		}
	</script>
	

<link href='http://fonts.googleapis.com/css?family=Arvo:700,400italic,700italic,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>


</head>

<style type="text/css">


.studentlife-container {
 margin: auto;
 width: 960px; 
 font-family: "Helvetica Neue", Arial, Helvetica, sans-serif;
 font-size: 12px;
 
   }
.studentlife-container * {

 font-family: "Helvetica Neue", Arial, Helvetica, sans-serif !important;


}
#studentlife-header {
  background-color: #000;
  border-top: 5px solid #ffce39; }
  #studentlife-header .main-links {
  	display: inline;
    float: left;
    margin: 10px 0;
    padding: 0;
    line-height: 1.2em;
    font-size: 1.0em;
    font-weight: bold;
    color: #ffce39; }
    #studentlife-header .main-links a {
      color: #ffce39;
      text-decoration: none; }
    #studentlife-header .main-links span {
      color: #fff;
      margin-left: 10px; }
      #studentlife-header .main-links span a {
        color: #fff; }
  #studentlife-header ul {
    margin: 10px 0;
    padding: 0;
    float: right; }
    #studentlife-header ul li {
      margin: 0;
      padding: 0;
      list-style: none;
      display: inline;
      border-right: 1px solid #666;
      padding-left: 5px;
      padding-right: 5px; }
   #studentlife-header ul li.last {
   		border-right: none;
   
   }
      #studentlife-header ul li a {
        font-size: 0.9em;
        line-height: 1.2em;
        margin: 0;
        padding: 0;
        text-decoration: none;
        text-transform: uppercase;
        color: #999; }
      #studentlife-header ul li a:hover {
        color: #fff; }
    #studentlife-header ul li#univ-nav-all {
      border-right: none;
      padding-right: 0; }
      #studentlife-header ul li#univ-nav-all a {
        text-transform: none; }
    .clearfix { clear: both;}
    
    body {
    	margin: 0;
    	background-color: black;
    }
        
</style>

	

<div id="studentlife-header">
	<div class="studentlife-container">
		<div class="main-links"><a href="http://www.uiowa.edu/" target="_blank">The University of Iowa</a> <span><a href="http://studentlife.uiowa.edu" target="_blank">Division of Student Life</a></span></div>
		<ul id="univ-nav">
			<li id="univ-nav-imu"><a href="http://imu.uiowa.edu" target="_blank">Iowa Memorial Union</a></li>
			<li id="univ-nav-recserv"><a href="http://recserv.uiowa.edu/" target="_blank">Recreational Services</a></li>
			<li id="univ-nav-osl" class="last"><a href="http://imu.uiowa.edu/students/" target="_blank">Student Involvement/Leadership</a></li>
			<!--<li id="univ-nav-all"><a href="/events/#">All Departments</a> -->
							
			</li>
		</ul>
		
		<div class="clearfix"></div> <!-- TODO: remove -->
	</div>
</div>
        
	<div id="fancybox">
	<div id="fancyexit" onclick="hideFancy();" style="cursor:pointer;"></div>
	<?php echo do_shortcode( '[contact-form-7 id="179" title="Request Info"]' ); ?>
	</div>

<?php 

thematic_body();

// action hook for placing content before opening #wrapper
thematic_before(); 

if (apply_filters('thematic_open_wrapper', true)) {
	echo '<div id="wrapper" class="hfeed" onclick="hideFancy();">';
}
    
    // action hook for placing content above the theme header
    thematic_aboveheader(); 
    
    ?>   
	<a href="http://google.com" onclick="location.replace('http://google.com'); return false;"><div id="exit"></div></a>
	
    <div id="header">
    
    	<div id="branding">
    
        <div id="logo">
        <div id="blog-title">
        <!--<span><a href="<?php bloginfo('url') ?>/" onclick="location.replace('<?php bloginfo('url')?>'); return false;" title="<?php bloginfo('name') ?>" rel="home"><?php bloginfo('name') ?></a></span>-->
        <span><a href="<?php bloginfo('url') ?>/" title="<?php bloginfo('name') ?>" rel="home"><?php bloginfo('name') ?></a></span>
        </div>
        </div>
        <div id="dome"></div>
        </div><!--  #branding -->

	</div><!-- #header-->
        <div id="navbar">
        <div id="access">
	    		
	    	<div class="skip-link"><a href="#content" title="<?php _e('Skip navigation to the content', 'thematic'); ?>"><?php _e('Skip to content', 'thematic'); ?></a></div><!-- .skip-link -->
            
            	<?php wp_nav_menu( array('menu' => 'Primary',  'walker' => new description_walker() )); ?>
	        
		</div><!-- #access -->
		</div>
    <?php
    
    // action hook for placing content below the theme header
    thematic_belowheader();
    
    ?>   
    <div id="main">
    