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
	        
	        <h1 class="entry-title">Get Informed</h1>
	           
	            <div id="cat-content">
	            
	            <?php
	
	            // create the navigation above the content
	            thematic_navigation_above();
				
	            // action hook for placing content above the category loop
	            thematic_above_categoryloop();
	            
	            echo '<div id="page-descr">';
	            echo '<p>The Women&#039;s Resource and Action Center (WRAC) at The University of Iowa is a diverse community dedicated to fostering women&#039;s individual empowerment and systemic solutions to all forms of oppression. The Center leads and collaborates on projects that serve UI students, staff, faculty, and the greater community. Call 319-756-3456 for more information.</p>';
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
    			
    			<?php include 'sidebar-gtf.php'; ?>
    			
		</div><!-- #page-content -->
		</div><!-- #container -->

<?php 

    // action hook for placing content below #container
    thematic_belowcontainer();
    
    // calling footer.php
    get_footer();

?>