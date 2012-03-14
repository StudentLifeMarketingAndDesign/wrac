<?php

    // calling the header.php
    get_header();

    // action hook for placing content above #container
    thematic_abovecontainer();

?>

		<div id="container">
	
			<?php thematic_abovecontent(); ?>
            
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

				<?php 
            	
            	// create the navigation above the content
            	thematic_navigation_above();
				
            	// calling the widget area 'index-top'
            	get_sidebar('index-top');
            	?>
            	<div id="col_head1"><h1>Latest Blog Posts</h1></div>
            	<div id="col_head2"><h1>Initiatives</h1></div>
            	<div id="col_head3"><h1>Upcoming Events</h1></div>
				<div id="col1">
				<?php
				
				query_posts($query_string . '&cat=-13');
				
				while ( have_posts() ) : the_post();
		
				thematic_abovepost(); ?>

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
     				thematic_postheader(); ?>
					<div class="entry-content">
					<?php
					
	    			echo '<div class="user">';
					echo '<div class="user_thumb">'.get_avatar(get_the_author_meta('ID'),80,'',get_the_author_meta('display_name')).'</div>';
	    			echo thematic_postmeta_authorlink();
	  		 		echo '</div>';
					the_excerpt();
					?>

					<?php wp_link_pages('before=<div class="page-link">' .__('Pages:', 'thematic') . '&after=</div>') ?>
					</div><!-- .entry-content -->
					<?php //thematic_postfooter(); ?>
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
				
					<?php ec3_get_events(5); ?>
					
				</div>
				
			</div><!-- #content -->
            	<div id="featured">
            	<div id="featured-post">
				<?php
				query_posts( 'cat=13' );
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