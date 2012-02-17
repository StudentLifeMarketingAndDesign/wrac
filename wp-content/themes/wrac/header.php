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
<link href='http://fonts.googleapis.com/css?family=Arvo:700,400italic,700italic,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>


</head>

<div id="top"></div>

<?php 

thematic_body();

// action hook for placing content before opening #wrapper
thematic_before(); 

if (apply_filters('thematic_open_wrapper', true)) {
	echo '<div id="wrapper" class="hfeed">';
}
    
    // action hook for placing content above the theme header
    thematic_aboveheader(); 
    
    ?>   
	<a href="http://google.com"><div id="exit"></div></a>
	
    <div id="header">
    
    	<div id="branding">
    
        <div id="logo">
        <div id="blog-title">
        <span><a href="<?php bloginfo('url') ?>/" title="<?php bloginfo('name') ?>" rel="home"><?php bloginfo('name') ?></a></span>
        </div>
        </div>
        <div id="dome"></div>
        </div><!--  #branding -->

	</div><!-- #header-->
        <div id="navbar">
        <div id="access">
	    		
	    	<div class="skip-link"><a href="#content" title="<?php _e('Skip navigation to the content', 'thematic'); ?>"><?php _e('Skip to content', 'thematic'); ?></a></div><!-- .skip-link -->
            
            	<?php wp_nav_menu( array('menu' => 'Primary' )); ?>
	        
		</div><!-- #access -->
		</div>
    <?php
    
    // action hook for placing content below the theme header
    thematic_belowheader();
    
    ?>   
    <div id="main">
    