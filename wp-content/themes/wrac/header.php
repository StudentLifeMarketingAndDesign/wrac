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
<base href="<?php echo get_bloginfo('url') ?>"><!--[if lte IE 6]></base><![endif]-->

<!-- Camera -->
    <link rel='stylesheet' id='camera-css'  href='<?php echo get_template_directory_uri(); ?>/camera/css/camera.css' type='text/css' media='all' /> 

    <script type='text/javascript'>
		jQuery(function(){
			
			jQuery('#camera_wrap_1').camera({
			});
		});
		
		function showFancy() {
			jQuery('.fancybox#contact').fadeIn('slow');
		}
		
		function showFancyGive() {
			jQuery('.fancybox#give').fadeIn('slow');
		}
		
		function hideFancy() {
			jQuery('.fancybox').fadeOut('fast');
		}
	</script>
	

<link href='http://fonts.googleapis.com/css?family=Arvo:700,400italic,700italic,400' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css' />
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />


</head>

<?php 

thematic_body();
?>

	


	


<?php include 'division-bar/templates/DivisionBar.php' ?>
        
	<div class="fancybox" id="contact">
	<div class="fancyexit" onclick="hideFancy();" style="cursor:pointer;"></div>
	<?php echo do_shortcode( '[contact-form-7 id="179" title="Request Info"]' ); ?>
	</div>
        
	<div class="fancybox" id="give">
	<div class="fancyexit" onclick="hideFancy();" style="cursor:pointer;"></div>
	<h3>Support WRAC with a tax-deductible donation through the UI Foundation</h3>
<p class="twelve">WRAC provides groups, facilitator training, speaker events, individual counseling, community programming, IWIS, and other services with a small budget and the work of many volunteers. Each gift to WRAC is matched many times over by the work of student and community volunteers. All donations, big or small, are appreciated! Donations are tax-deductible.</p>
<p class="twelve">Donations to the Women's Resource and Action Center Fund support current services and programs including Iowa N.E.W. Leadership. 
Donations to the Women's Resource and Action Center Endowment Fund help secure the financial future of the Center.</p>
	<div class="butt"><a href="https://www.uifoundation.org/GiveToIowa/WebObjects/GiveToIowa.woa/wa/goTo?area=wrac" target="_blank">Donate</a></div>
	</div>
<?php
// action hook for placing content before opening #wrapper
thematic_before(); 

if (apply_filters('thematic_open_wrapper', true)) {
	echo '<div id="wrapper" class="hfeed" onclick="hideFancy();">';
}
    
    // action hook for placing content above the theme header
    thematic_aboveheader(); 
    
    ?>   
	<a href="http://google.com" onclick="location.replace('http://www.weather.com'); return false;"><div id="exit"></div></a>
	
    <div id="header">
    
    	<div id="branding">
    
        <div id="logo">
        <div id="blog-title">
        <!--<span><a href="<?php bloginfo('url') ?>/" onclick="location.replace('<?php bloginfo('url')?>'); return false;" title="<?php bloginfo('name') ?>" rel="home"><?php bloginfo('name') ?></a></span>-->
        <span><a href="<?php bloginfo('url') ?>/" title="<?php bloginfo('name') ?>" rel="home"><?php bloginfo('name') ?></a></span>
        </div>
        </div>
        <div id="dome"><a href="http://www.uiowa.edu"><img src="/wp-content/themes/wrac/library/styles/images/dome.png" alt="The University of Iowa" /></a></div>
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
    