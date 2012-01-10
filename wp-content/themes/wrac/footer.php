
    </div><!-- #main -->
    
    <?php
    
    // action hook for placing content above the footer
    thematic_abovefooter();
    
    ?>    
	
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
        <ul id="services">
        <h3>Services</h3>
        <li>Support & Discussion</li>
        <li>Groups</li>
        <li>Counseling</li>
        <li>Scholarships</li>
        <li>Library</li>
        </ul>
        <ul id="events">
        <h3>Events</h3>
        <li>Upcoming</li>
        <li>Past</li>
        </ul>
        <ul id="get-involved">
        <h3>Get Involved</h3>
        <li>Volunteer Programs</li>
        <li>Give to WRAC</li>
        </ul>
        <ul id="resources">
        <h3>Resources</h3>
        <li>Advocacy</li>
        <li>Legal</li>
        <li>Mental Health</li>
        <li>Safety</li>
        </ul>
        
        <div id="disabilities">Individuals with disabilities are encouraged to attend all University of Iowa sponsored events. If you are a person with a disability who requires a reasonable accommodation in order to participate in this program, please contact the Center for Student Leadership and Involvement in advance at 319-335-3059.</div>
        
	</div><!-- #footer -->
	
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