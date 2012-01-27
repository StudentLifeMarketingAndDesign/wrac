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
	                
	                ?>
	                
					<div class="entry-content">
	
	                    <?php
	                    
	                    the_content();
	                    
	                    wp_link_pages("\t\t\t\t\t<div class='page-link'>".__('Pages: ', 'thematic'), "</div>\n", 'number');
	                    
	                    edit_post_link(__('Edit', 'thematic'),'<span class="edit-link">','</span>') ?>
	
					</div><!-- .entry-content -->
				</div><!-- #post -->
    			
	        
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