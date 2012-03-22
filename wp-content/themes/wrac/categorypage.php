<?php
/*
Template Name: Category Page
*/
?>

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
	        
	        <h1 class="entry-title"><?php echo get_the_title(); ?></h1>
	           
	            <div id="cat-content">
	            <?php
	              	
	              	
	                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	                	echo "<div id='page_thumb'>";
						the_post_thumbnail('large');
						echo "</div>";
					}
					
	            echo '<div class="entry-content">';
	            the_content();
	            echo '</div>';
	
	            // create the navigation above the content
	            thematic_navigation_above();
				
	            // action hook for placing content above the category loop
	            thematic_above_categoryloop();
	            
				query_posts( array ( 'category_name' => get_the_title() ) );
	
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
    		if ( in_category(13) ){
    			include 'sidebar-gtf.php';
    		} else {
    			include 'sidebar.php';
    		}
    		?>
    			
    			
		</div><!-- #page-content -->
		</div><!-- #container -->

<?php 

    // action hook for placing content below #container
    thematic_belowcontainer();
    
    // calling footer.php
    get_footer();

?>