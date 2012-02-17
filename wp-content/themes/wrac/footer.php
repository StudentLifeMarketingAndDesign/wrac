
    </div><!-- #main -->
    
    <?php
    
    // action hook for placing content above the footer
    thematic_abovefooter();
    
    ?>    
	<div id="footwrap">
	<div style="clear:both;"></div>
	<div id="footer">
    
        <div id="find-us">
        <h3>Find Us</h3>
        <h4>
        Women's Resource and Action Center<br />
        130 N. Madison St.<br />
        Iowa City, IA 52245<br />
		</h4>
		<p>
		P: (319) 335-1486<br />
		F: (319) 353-1985<br />
		E: wrac@uiowa.edu
		</p>
        </div>
        <div id="house"></div>
        <div id="services">
        <h3>Services</h3>
            	<?php wp_nav_menu( array('menu' => 'Services' )); ?>
        </div>
        <div id="events">
        <h3>Events</h3>
            	<?php wp_nav_menu( array('menu' => 'Events' )); ?>
        </div>
        <div id="get-involved">
        <h3>Get Involved</h3>
            	<?php wp_nav_menu( array('menu' => 'Get Involved' )); ?>
        </div>
        <div id="resources">
        <h3>Resources</h3>
            	<?php wp_nav_menu( array('menu' => 'Resources' )); ?>
        </div>
        
        <div id="soc_med">
        <a href="http://www.flickr.com/photos/uiowawrac/"><div id="flickr"></div></a>
       <a href="https://www.facebook.com/pages/Womens-Resource-and-Action-Center-WRAC/270704436274625"><div id="facebook"></div></a> 
        <div id="twitter"></div>
        </div>
        
        <div id="disabilities">Individuals with disabilities are encouraged to attend all University of Iowa sponsored events. If you are a person with a disability who requires a reasonable accommodation in order to participate in this program, please contact the Center for Student Leadership and Involvement in advance at 319-335-3059.</div>
        
	</div><!-- #footer -->
	</div>

<div style="clear:both;"></div>
	
    <?php
    
    // action hook for placing content below the footer
    thematic_belowfooter();
    
    if (apply_filters('thematic_close_wrapper', true)) {
    	echo '</div><!-- #wrapper .hfeed -->';
    }
    
    ?>  

<?php 

// calling WordPress' footer action hook
wp_footer();

// action hook for placing content before closing the BODY tag
thematic_after(); 

?>

</body>
</html>