
    			
	        
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
    	        
    	    <div style="clear:both;"></div>