<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="shortcut icon" href="<?php bloginfo('template_url');?>/images/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?php bloginfo('template_url');?>/images/favicon.ico" type="image/x-icon">
<script src="<?php bloginfo('template_url');?>/js/modernizr.custom.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/jquery-1.10.2.min.js"></script>
<link href="<?php bloginfo('template_url');?>/css/style.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_url');?>/css/tablet.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_url');?>/css/iphone.css" rel="stylesheet" type="text/css">


<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/jquery.bxslider.css" type="text/css" />

<script src="<?php bloginfo('template_url');?>/js/jquery.bxslider.js"></script>
<script>
$(document).ready(function() {
    $('.bxslider').bxSlider({
	  mode: 'fade',
	  captions: false,
	  auto:true
	});
});
</script>
<script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});	
			
			$('.bottom_footer ul li:last').remove();
		});
	</script>
	<?php wp_head(); ?>
</head>

<body>
	<!--header paer start -->
    	<header>
        	<!--top container part -->
            	<section class="top_part">
                	<article>
                    	<!--logo part -->
                        	<figure>
                       	    	<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url');?>/images/logo.jpg" alt="Let Canada Vote" title="Let Canada Vote"> </a>
                            </figure>
                        <!--logo part end -->
                        <!--top right part -->
                        	<div class="top_right_part">
                                <?php 
									if ( is_active_sidebar( 'sidebar-4' ) ) :
										dynamic_sidebar( 'sidebar-4' ); 
									endif; 
								?>
                                <nav>
									<?php
										$args = array(
											'theme_location'  => '',
											'menu'            => '',
											'container'       => '',
											'container_class' => '',
											'container_id'    => '',
											'menu_class'      => 'menu',
											'menu_id'         => '',
											'echo'            => true,
											'fallback_cb'     => 'wp_page_menu',
											'before'          => '',
											'after'           => '',
											'link_before'     => '',
											'link_after'      => '',
											'items_wrap'      => '<ul>%3$s</ul>',
											'depth'           => 0,
											'walker'          => ''
										);
										wp_nav_menu( $args );
									?>
                                	<!--<ul>
                                    	<li><a href="index.html" class="active">Home</a></li>          
                                        <li><a href="topic.html">Topic</a></li>          
                                        <li><a href="polls.html">Polls</a></li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>-->
                                    <a href="#" id="pull">Menu</a>
                                </nav>
                                
                                <br class="spacer"> 
                            </div>
                            <br class="spacer">
                        <!--top right part end -->
                    </article>
                </section>
                <div class="spacer"></div>
            <!--top container part end -->                       
        </header>