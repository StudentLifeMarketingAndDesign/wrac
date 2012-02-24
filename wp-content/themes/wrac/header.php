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
				thumbnails: false
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

<div id="top"></div>

	
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
    