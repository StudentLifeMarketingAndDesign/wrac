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
	        
	        <h1 class="entry-title">Events</h1>
	           
	            <div id="cat-content">
	            <?php
	
	            // create the navigation above the content
	            thematic_navigation_above();
				
	            // action hook for placing content above the category loop
	            thematic_above_categoryloop();
	            
	            echo '<div id="page-descr">';
	            echo '<p>WRAC sponsors a wide range of educational programming events throughout the year &#150; from large events such as the annual Iowa Women&#039;s Music Festival each September and conferences in April on race, privilege and cultural competency... to smaller, more intimate discussions as well as skill-building workshops and thought-provoking lectures/presentations.</p>';
	            echo '</div>';
	
	            // action hook creating the category loop
	            thematic_categoryloop();
	
	            // action hook for placing content below the category loop
	            thematic_below_categoryloop();			
	
	            // create the navigation below the content
	            thematic_navigation_below();
	            
	            ?>
	            </div>
	        </div>
    			
    			
    			<? include 'sidebar-events.php'; ?>
    			
    			
		</div><!-- #page-content -->
		</div><!-- #container -->

<?php 

    // action hook for placing content below #container
    thematic_belowcontainer();
    
    // calling footer.php
    get_footer();

?>