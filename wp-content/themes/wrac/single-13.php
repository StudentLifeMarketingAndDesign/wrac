<?php

    // calling the header.php
    get_header();

    // action hook for placing content above #container
    thematic_abovecontainer();

?>

		<div id="container">
			
			<div id="page_content">
			<a class="backarrow" href="<?php echo get_bloginfo('wpurl') ?>/category/featured"><div id="backarrow"></div><div id="backtoGTF"><span>back to Get Informed</span></div></a>
			<div style="clear:both;"></div>
		
    	        <?php
		
    	        // calling the widget area 'single-top'
    	        get_sidebar('single-top');
		
    	        // action hook creating the single post
    	        thematic_singlepost();
				
    	        // calling the widget area 'single-insert'
    	        //get_sidebar('single-insert');
		
    	        // create the navigation below the content
				//thematic_navigation_below();
		
    	        // calling the comments template
    	        //thematic_comments_template();
		
    	        // calling the widget area 'single-bottom'
    	        //get_sidebar('single-bottom');
    	        
    	        ?>
    			
	        
				<?php
				include 'sidebar.php'
				?>
		
			</div><!-- #page-content -->
			
		</div><!-- #container -->
		
<?php 

    // action hook for placing content below #container
    thematic_belowcontainer();
    
    // calling footer.php
    get_footer();

?>