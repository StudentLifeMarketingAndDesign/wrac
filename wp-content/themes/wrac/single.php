<?php

    // calling the header.php
    get_header();

    // action hook for placing content above #container
    thematic_abovecontainer();

?>

		<div id="container">
			
			<?php thematic_abovecontent(); ?>
			
			<div id="page_content">
		
    	        <?php 
    	        
    	        the_post();
    	        
    	        // create the navigation above the content
				thematic_navigation_above();
		
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
    			
	        
				<div class="sb_header_link"><div><a href="#">Give to WRAC</a></div></div>
    			
	        
				<div class="sb_header"><div>Request Info</div></div>
	        	<div class="sidebar">
	        	<h3>Want to volunteer with WRAC? Sign up here.</h3>
	        	<h3>Name:</h3>
	        	<h3>E-mail:</h3>
	        	<h3>Phone:</h3>
	        	<p>Please check to indicate need for a disability accommodation to participate.</p>
	        	<h3>Other Comments or Questions:</h3>
	        	</ul>
	        	</div>
    			
	        
				<div class="sb_header"><div>Resources</div></div>
	        	<div class="sidebar">
	        	<ul>
	        	<li>Volunteer Application</li>
	        	<li>Volunteer Brochure</li>
	        	<li>Diversity Dialogue Leader Application</li>
	        	<li>Group Facilitator Application</li>
	        	<li>IWIS Application</li>
	        	</ul>
	        	</div>
    	        
    	    <div style="clear:both;"></div>
		
			</div><!-- #page-content -->
			
			<?php thematic_belowcontent(); ?> 
			
		</div><!-- #container -->
		
<?php 

    // action hook for placing content below #container
    thematic_belowcontainer();
    
    // calling footer.php
    get_footer();

?>