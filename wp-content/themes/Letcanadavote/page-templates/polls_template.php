<?php
	/* Template Name: Polls */
	get_header(); ?>     
        <section id="body_cotainer_part2_inner">
		<h1>Polls</h1>
          <div id="left_box3">
                <?php 
                $posts_per_page = 10;
				$sl_no = (get_query_var('paged'))? ((get_query_var('paged')-1) * $posts_per_page) + 1  : 1;		
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;				
                $args = array('posts_per_page' => $posts_per_page, 'post_type' => 'polls', 'order' => 'DESC', 'paged' => $paged);
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
				?>					
					
        </div>
        <div class="clearfix"></div>
        <div class="pagination_container">
            <ul>
                <li class="nav-previous alignleft"><?php echo next_posts_link( 'Next' ); ?></li>
                <li class="nav-next alignright"><?php echo previous_posts_link( 'Previous' ); ?></li>                
            </ul>           
        </div>
        <?php
            }
            wp_reset_postdata();
        ?>
    </section>
	<br style="clear:both"><br>	
	<?php get_footer();?>

