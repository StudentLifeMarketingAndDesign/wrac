<?php
	/*
	Template Name: Archives
	*/
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
	            
	            thematic_abovepost();
	            
	            ?>
	
				<div id="post-<?php the_ID();
					echo '" ';
					if (!(THEMATIC_COMPATIBLE_POST_CLASS)) {
						post_class();
						echo '>';
					} else {
						echo 'class="';
						thematic_post_class();
						echo '">';
					}
	                
	                // creating the post header
	                thematic_postheader();
	                
	                ?>
	                
					<div class="entry-content">
	                
	                    <?php 
	                    
	                    the_content();
	
	                    // action hook for the 404 content
	                    thematic_archives();
	
	                    edit_post_link(__('Edit', 'thematic'),'<span class="edit-link">','</span>');
	                    
	                    ?>
	
					</div><!-- .entry-content -->
				</div><!-- #post -->
    		</div>
    		<?php
    		if ( in_category(5) ){
    			include 'sidebar-events.php';
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