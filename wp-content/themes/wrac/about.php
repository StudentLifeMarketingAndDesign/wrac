<?php
/*
Template Name: About WRAC Page
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
	
	            <?php
	        
	            // calling the widget area 'page-top'
	            get_sidebar('page-top');
	
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
	              	
	              	if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	                	echo "<div id='page_thumb'>";
						the_post_thumbnail('large');
						echo "</div>";
					}
	                
	                ?>
	                
					<div class="entry-content">
	
	                    <?php
	                    
	                    the_content();
	                    
	                    wp_link_pages("\t\t\t\t\t<div class='page-link'>".__('Pages: ', 'thematic'), "</div>\n", 'number');
	                    
	                    edit_post_link(__('Edit', 'thematic'),'<span class="edit-link">','</span>') ?>
	
					</div><!-- .entry-content -->
				</div><!-- #post --> 	        
    			
	        
				<div class="sb_header"><div>Contact Us</div></div>
	        	<div class="sidebar"><h3>Women's Resources and Action Center</h3>
	        	<p>
	        	30 N. Madison St.<br />
	        	Iowa City, IA 52245
	        	</p>
	        	<h3 style="float:left;">P: &nbsp;</h3>
	        	<p style="float:left;margin:0;">(319) 335-1486</p>
	        	<h3 style="float:left;">F: &nbsp;</h3>
	        	<p style="float:left;margin:0;">(319) 353-1985</p>
	        	<h3 style="float:left;">E: &nbsp;</h3>
	        	<p style="float:left;">wrac@uiowa.edu</p>
	        	<h3>Business Hours</h3>
	        	<p>
	        	Monday - Friday<br />
	        	9:00 AM - 5:00 PM
	        	</p>
	        	</div>
	        	
	        	<?php
	        	include 'sidebar-about.php';
	        	?>
	
	        <?php
	        
	        thematic_belowpost();
	        
	        ?>
	
			</div><!-- #content -->
			
			<?php thematic_belowcontent(); ?> 
			
		</div><!-- #container -->

<?php 

    // action hook for placing content below #container
    thematic_belowcontainer();

    // calling the standard sidebar 
    //thematic_sidebar();
    
    // calling footer.php
    get_footer();

?>