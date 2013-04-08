<?php

    // calling the header.php
    get_header();

    // action hook for placing content above #container
    thematic_abovecontainer();

?>

		<div id="container">
            
            <div id="slider">
				
        <div class="camera_wrap" id="camera_wrap_1">
				<?php
				$args = array( 'post_type' => 'slider', 'posts_per_page' => 99, 'order' => 'ASC' );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
   					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
					echo '<div data-src="'.$image[0].'">';
					echo '<div class="camera_caption_';
					echo get_post_meta($post->ID, 'alignment', true);
					echo ' fadeFromBottom"><div class="slide_title">';
					the_title();
					echo '</div>';
					echo '<div class="slide_descr">';
					echo "<p>WRAC has been empowering individuals and fighting oppression since 1971</p>";
					echo '</div></div></div>';
				endwhile;
				?>
        </div><!-- #camera_wrap_1 -->
        
            </div>
	
			<div id="content">
			
			
            	<div id="col_head1"><h1><a href="/archives/">Latest Blog Posts</a></h1></div>
            	<div id="col_head2"><h1><a href="/initiatives/">Initiatives</a></h1></div>
            	<div id="col_head3"><h1><a href="/events/?ec3_after=today">Upcoming Events</a></h1></div>
				<div id="col1">
				<?php
				
				query_posts($query_string . '&cat=-5' . '&posts_per_page=3');
				
				while ( have_posts() ) : the_post();
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
     				thematic_colpostheader(); ?>
					<div class="entry-content">
					<?php
					the_excerpt();
					?>
					</div><!-- .entry-content -->
					<div style="clear:both;"></div>
				</div><!-- #post -->

			<?php 
				
				thematic_belowpost();

				if ($count==$thm_insert_position) {
						get_sidebar('index-insert');
				}
				$count = $count + 1;
		endwhile;
				wp_reset_query();
            	?>
				</div>
				<div id="col2">
            	<?php wp_nav_menu( array('menu' => 'Initiatives', 'walker' => new description_walker() ) ); ?>
				</div>
				<div id="col3">
				<?php
				
				ec3_get_events(3);
				/*
				query_posts($query_string . '&cat=5' . '&posts_per_page=3');
				
				while ( have_posts() ) : the_post();?>

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
     				thematic_colpostheader(); ?>
					<div class="entry-content">
					<?php
					the_excerpt();
					?>
					</div><!-- .entry-content -->
					<div style="clear:both;"></div>
				</div><!-- #post -->

			<?php 
				
				thematic_belowpost();

				if ($count==$thm_insert_position) {
						get_sidebar('index-insert');
				}
				$count = $count + 1;
		endwhile;
				wp_reset_query();
				*/
            	?>		
				</div>
				
			</div><!-- #content -->
            	<div id="featured">
            	<div id="featured-post">
				<?php
				query_posts( 'cat=13&posts_per_page=1' );
				while ( have_posts() ) : the_post();
				// action hook creating the index loop
            	thematic_featured_post();
            	?>
				</div>
            	<div id="featured-thumb">
            	<?php
            	the_post_thumbnail('medium');
				endwhile;

				// Reset Query
				wp_reset_query();
            	?>
            	</div>
            	<div id="more-topics"><span>more topics</span>
            	<?php wp_nav_menu( array('menu' => 'more topics' )); ?>
            	</div>
            	</div>
            <div id="content-butt">
		
			<?php thematic_belowcontent(); ?> 
    		
    		</div>
		
		</div><!-- #container -->

<?php 

    // action hook for placing content below #container
    thematic_belowcontainer();
    
    // calling footer.php
    get_footer();

?>