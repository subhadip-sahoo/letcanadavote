<!--footer part start-->
		<footer>
    		<section class="footer_body">
            	<div class="soce">
            	<a href="" class="face"></a>
                <a href="" class="twtter"></a>
                <a href="" class="in"></a>
                <a href="" class="gmail"></a>
                <a href="" class="gmail2"></a>
                </div>
                <div class="bottom_footer">
                <!--<ul>
                    <li><a href="index.html">Home</a></li>  
                    <li> -- </li>        
                    <li><a href="topic.html" class="active">Topic</a></li> 
                    <li> -- </li>          
                    <li><a href="polls.html">Polls</a></li>
                    <li> -- </li>         
                    <li><a href="about.html">About Us</a></li> 
                    <li> -- </li>         
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>-->
				<?php
					$args_footer = array(
						'theme_location'  => 'footer-menu',
						'menu'            => '',
						'container'       => '',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'menu',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '<li> -- </li>',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul>%3$s</ul>',
						'depth'           => 0,
						'walker'          => ''
					);
					wp_nav_menu( $args_footer );?>

				<?php //dynamic_sidebar( 'copyright-widget-area' );?>
				
              &copy; Letcanadavote. 2014. All Rights Reserved. Website Design | Web Development | SEO PPC Services: <a target="_blank" rel="nofollw" href="http://www.businessprodesigns.com/">www.businessprodesigns.com</a></div>
            </section>
    	</footer>
   <!--footer part end-->  
   <?php wp_footer(); ?>
</body>
</html>