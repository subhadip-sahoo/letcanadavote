<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

//get_header(); ?>

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
                                <!--<div class="top_text">
                                    <h1>contact@letcanadavote.ca</h1>
                                    <h2>+91 (33) 3008 3333</h2>
                                    <br class="spacer d1"> 
                                </div>-->
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
            
            <!--header banner part -->
          		<div class="header_banner_part">
                
                  
                  
                  
                  <div class="banner">
       	  		    	<ul class="bxslider">
						  <li style="background:url(<?php bloginfo('template_url');?>/images/banner1.jpg) no-repeat center top; ">
                          	 <div class="banner_text_center">
								<div class="banner_hadder">
									<div class="txtbk">
										<h1>We invite you to vote canada</h1>
									</div>
								 </div>
							  </div>
                             <img src="<?php bloginfo('template_url');?>/images/banner1.jpg" title="Funky roots" alt="" />
                          </li>
                          <li style="background:url(<?php bloginfo('template_url');?>/images/banner2.jpg) no-repeat center top; ">
                          	 <div class="banner_text_center">
								<div class="banner_hadder">
									<div class="txtbk">
										<h1>Vote on the issues that matter</h1>
									</div>
								 </div>
							  </div>
                             <img src="<?php bloginfo('template_url');?>/images/banner2.jpg" title="Funky roots" alt="" />
                          </li>
                          <li style="background:url(<?php bloginfo('template_url');?>/images/banner3.jpg) no-repeat center top;">
                          	<div class="banner_text_center">
                                <div class="banner_hadder">
                                    <div class="txtbk">
                                        <h3>Apply political pressure by getting educated about this planet you will live on then talking to the people making decissions for you</h3>
                                    </div>
                                 </div>
                              </div>
                          	<img src="<?php bloginfo('template_url');?>/images/banner3.jpg" title="The long and winding road" alt="" />
                          </li>
                        </ul>
                     </div>
                </div>
            <!--header banner part end -->
        </header>
    <!--header paer end --> 
     <!--body container2 part -->
		<section id="body_cotainer_part">
      		<div class="top_information_part2">
            	<div class="line"><img src="<?php bloginfo('template_url');?>/images/arr.jpg" alt=""></div>
               <h2>How about Education INSTEAD of Legislation?<br> <span>Let Canada Decide for Themselves<br> We are an Educated People</span></h2>
      		</div><br>
		</section>
	<!--body container2 part  end-->
    <!--body container part -->
		<section id="body_cotainer_part2">
          <div class="top_information_part">
                <?php
				$page_id = 4;
 $page_data = get_page( $page_id );

echo apply_filters('the_content', $page_data->post_content);
 ?>
          </div>
		</section>
	<!--body container part  end-->
    
     <!--body container3 part -->
        <section id="body_cotainer_part3">
            
           <div id="left_box1">
               <?php 
                global $wpdb;
                $sl_no = 1;
                $args = array('posts_per_page' => 5, 'offset' => 0, 'post_type' => 'polls', 'order' => 'DESC');
                query_posts($args);
                if(have_posts()){
                    while(have_posts()){
                        the_post();
                ?>
                    <div class="box1">
                        <div class="s1"><?php echo $sl_no;?>.</div>
                        <div class="s2">
                            <br><a href="<?php echo the_permalink();?>"><?php echo the_title();?></a>
                        </div>
                    </div>
                   <div style="clear:both"></div>
               <?php
                        $sl_no++;
                    }
                }
				wp_reset_postdata();
               ?>
          </div>
          
          <div id="right_box1">
                <?php 
                $args = array('posts_per_page' => 5, 'offset' => 5, 'post_type' => 'polls', 'order' => 'DESC');
                query_posts($args);
                if(have_posts()){
                    while(have_posts()){
                        the_post();
                ?>
                    <div class="box1">
                        <div class="s1"><?php echo $sl_no;?>.</div>
                        <div class="s2">
                            <br><a href="<?php echo the_permalink();?>"><?php echo the_title();?></a>
                        </div>
                    </div>
                   <div style="clear:both"></div>
               <?php
                        $sl_no++;
                    }
                }
				wp_reset_postdata();
            ?>
        </div>
    </section>
        <br style="clear:both"><br>
	<!--body container3 part  end-->
	
	
    <?php get_footer(); ?>