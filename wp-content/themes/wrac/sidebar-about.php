 	        
    			
	        
				<div class="sb_header"><div>Contact Us</div></div>
	        	<div class="sidebar"><h3>Women's Resources and Action Center</h3>
	        	<p class="sixteen">
	        	130 N. Madison St.<br />
	        	Iowa City, IA 52245
	        	</p>
	        	<h3 style="float:left;">P: &nbsp;</h3>
	        	<p class="sixteen">(319) 335-1486</p>
	        	<h3 style="float:left;">F: &nbsp;</h3>
	        	<p class="sixteen">(319) 353-1985</p>
	        	<h3 style="float:left;">E: &nbsp;</h3>
	        	<p class="sixteen"><a href="mailto:wrac@uiowa.edu">wrac@uiowa.edu</a></p>
	        	<h3>Business Hours</h3>
	        	<p class="sixteen">
	        	Monday - Friday<br />
	        	9:00 AM - 5:00 PM
	        	</p>
	        	</div>
    			
	        
				<div class="sb_header"><div>Staff</div></div>
	        	<div class="sidebar">
				<?php
				$args = array( 'post_type' => 'staff', 'posts_per_page' => 99, 'meta_key' => 'order', 'orderby' => 'meta_value', 'order' => 'ASC' );
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
				$args = array( 'post_type' => 'board', 'posts_per_page' => 99, 'meta_key' => 'order', 'orderby' => 'meta_value', 'order' => 'ASC' );
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