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
	                
	                echo '<h1 class="entry-title">';
	                the_title();
	                echo '</h1>';
				?>
	                
					<div id="staff_descr">
					<?php
						the_excerpt();
					?>
					</div>
				
				<div id="staff_bio">
	                    <?php
	                    
	                    the_content();
	                    
	                    wp_link_pages("\t\t\t\t\t<div class='page-link'>".__('Pages: ', 'thematic'), "</div>\n", 'number');
	                    
	                    edit_post_link(__('Edit', 'thematic'),'<span class="edit-link">','</span>');
						?>
				</div>
				<?php
						echo "<div id='staff_pic'>";
	         	 	    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
							the_post_thumbnail('staff');
						}
						echo "</div>";
				?>
					<div id="staff_inf">
						<?php
						$email = get_post_meta($post->ID, 'email', true);
						$phone = get_post_meta($post->ID, 'phone', true);
						echo '<div class="item"><span class="descr">email</span><a class="email" href="mailto:' . $email . '">' . $email . '</a></div>';
						if ($phone != null) {
						echo '<div class="item"><span class="descr">phone</span>' . $phone . '</div>';
						}
						?>
					</div>
					
				</div><!-- #post -->
    			
	        
				<?php
				include 'sidebar-about.php'
				?>
	
	        <?php
	        
	        thematic_belowpost();
	        
	        ?>
	
			</div><!-- #content -->
			
		</div><!-- #container -->

<?php 

    // action hook for placing content below #container
    thematic_belowcontainer();

    // calling the standard sidebar 
    //thematic_sidebar();
    
    // calling footer.php
    get_footer();

?>