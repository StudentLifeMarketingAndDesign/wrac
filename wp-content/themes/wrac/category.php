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
	           
	            <div id="cat-content">
	
	            <?php
	        
	            // displays the page title
	            thematic_page_title();
	
	            // create the navigation above the content
	            thematic_navigation_above();
				
	            // action hook for placing content above the category loop
	            thematic_above_categoryloop();			
	
	            // action hook creating the category loop
	            thematic_categoryloop();
	
	            // action hook for placing content below the category loop
	            thematic_below_categoryloop();			
	
	            // create the navigation below the content
	            thematic_navigation_below();
	            
	            ?>
	            </div>
	        </div>
    			
    			
    		<?php
    		if ( in_category(5) ){
    			include 'sidebar-events.php';
    		}
    		else if ( in_category(13) ){
    			include 'sidebar-gtf.php';
    		}
    		include 'sidebar.php';
    		?>
		</div><!-- #page-content -->
		</div><!-- #container -->

<?php 

    // action hook for placing content below #container
    thematic_belowcontainer();
    
    // calling footer.php
    get_footer();

?>