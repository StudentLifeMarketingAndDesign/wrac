<?php

    // calling the header.php
    get_header();

    // action hook for placing content above #container
    thematic_abovecontainer();

?>

		<div id="container">
	
			<?php thematic_abovecontent(); ?>
            
            <div id="slider">
            <div id="slide_cont">
            <?php
            
			$args = array( 'post_type' => 'slider', 'posts_per_page' => 1 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
				echo '<div id="slide_tit">';
				the_title();
				echo '</div>';
				echo '<div id="slide_desc">';
				the_content();
				echo '</div>';
			endwhile;

			// Reset Query
			wp_reset_query();

			?>
			</div>
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
<?php the_excerpt(); ?>

					<?php wp_link_pages('before=<div class="page-link">' .__('Pages:', 'thematic') . '&after=</div>') ?>
					</div><!-- .entry-content -->
					<?php //thematic_postfooter(); ?>
				</div><!-- #post -->

			<?php 
				
				thematic_belowpost();

				if ($count==$thm_insert_position) {
						get_sidebar('index-insert');
				}
				$count = $count + 1;
		endwhile;
            	?>
				</div>
				<div id="col2">
				<?php
				
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
<?php the_excerpt(); ?>

					<?php wp_link_pages('before=<div class="page-link">' .__('Pages:', 'thematic') . '&after=</div>') ?>
					</div><!-- .entry-content -->
					<?php //thematic_postfooter(); ?>
				</div><!-- #post -->

			<?php 
				
				thematic_belowpost();

				if ($count==$thm_insert_position) {
						get_sidebar('index-insert');
				}
				$count = $count + 1;
		endwhile;
            	?>
				</div>
				<div id="col3">
				<?php
				
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
<?php the_excerpt(); ?>

					<?php wp_link_pages('before=<div class="page-link">' .__('Pages:', 'thematic') . '&after=</div>') ?>
					</div><!-- .entry-content -->
					<?php //thematic_postfooter(); ?>
				</div><!-- #post -->

			<?php 
				
				thematic_belowpost();

				if ($count==$thm_insert_position) {
						get_sidebar('index-insert');
				}
				$count = $count + 1;
		endwhile;
            	?>
				</div>
				<?php
            	// calling the widget area 'index-bottom'
            	get_sidebar('index-bottom');
				
            	// create the navigation below the content
            	thematic_navigation_below();
            	
            	?>
				
			</div><!-- #content -->
            	<div id="featured">
            	<div id="featured-post">
				<?php
            	// action hook for placing content above the index loop
            	thematic_above_indexloop();
				
            	// action hook creating the index loop
            	thematic_featured_post();
				
            	// action hook for placing content below the index loop
            	thematic_below_indexloop();
            	?>
				</div>
            	<div id="featured-thumb">
            	<?php
            	the_post_thumbnail('medium');
            	?>
            	</div>
            	<div id="more-topics"><span>more topics</span>
            	<?php wp_nav_menu( array('menu' => 'more topics' )); ?>
            	</div>
            	</div>
            <div id="content-butt"></div>
		
			<?php thematic_belowcontent(); ?> 
		
		</div><!-- #container -->

<?php 

    // action hook for placing content below #container
    thematic_belowcontainer();
    
    // calling footer.php
    get_footer();

?>