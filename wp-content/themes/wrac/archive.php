<?php

    // calling the header.php
    get_header();

    // action hook for placing content above #container
    thematic_abovecontainer();

?>

		<div id="container">
		
		    <?php thematic_abovecontent(); ?>
			
			<div id="page_content">
			<div class="hentry">
		
		        <?php 
		
		        the_post();
		
		        // displays the page title
		        thematic_page_title();
		
		        rewind_posts();
		
		        // create the navigation above the content
		        thematic_navigation_above();
		
		        // action hook creating the archive loop
		        thematic_archiveloop();
		
		        // create the navigation below the content
		        thematic_navigation_below();
		
		        ?>
    		</div>
	        
				<div class="sb_header_link" onclick="location.href='#';" style="cursor:pointer;"><div>Give to WRAC</a></div></div>
    			
	        
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
		</div><!-- #container -->

<?php 

    // action hook for placing content below #container
    thematic_belowcontainer();
    
    // calling footer.php
    get_footer();

?>