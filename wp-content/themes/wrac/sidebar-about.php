 	        
    			
	        
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
    			
	        
				<div class="sb_header"><div>Staff</div></div>
	        	<div class="sidebar">
				<?php
				$args = array( 'post_type' => 'staff', 'posts_per_page' => 99, 'order' => 'ASC' );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
					echo '<h3>';
					?>
					<a href='<?php the_permalink() ?>'>
					<?php
					the_title();
					echo '</a>';
					echo '</h3>';
					echo '<div class="staff_descr">';
					the_excerpt();
					echo '</div>';
				endwhile;
				?>
	        	</div>
    			
	        
				<div class="sb_header"><div>Advisory Board</div></div>
	        	<div class="sidebar">
				<?php
				$args = array( 'post_type' => 'board', 'posts_per_page' => 99, 'order' => 'ASC' );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
					echo '<h3>';
					?>
					<a href='<?php the_permalink() ?>'>
					<?php
					the_title();
					echo '</a>';
					echo '</h3>';
					echo '<div class="staff_descr">';
					the_excerpt();
					echo '</div>';
				endwhile;
				?>
	        	</div>
    	    
    	    
			
			<?php thematic_belowcontent(); ?>