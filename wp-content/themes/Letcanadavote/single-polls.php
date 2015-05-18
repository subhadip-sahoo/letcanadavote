<?php
global $wpdb, $post;
$get_polls = $wpdb->get_results("SELECT * FROM $wpdb->pollsq WHERE `pollq_post_id` = {$post->ID}");
if(!empty($get_polls)){
	foreach($get_polls as $poll){
		$poll_id = $poll->pollq_id;
	}
}
get_header(); ?>
<script type="text/javascript">
    (function($){
        $(function(){
            $('span a#expand').click(function(){
                //alert(1);
                $('div#replace_collapse').hide();
                $('div#replace_expand').show();
            });
            
            $('span a#collapse').click(function(){
                $('div#replace_expand').hide();
                $('div#replace_collapse').show();
            });
        });
    })(jQuery);
</script>
<section id="body_cotainer_part2_inner">
    <h1 class="poll_single_title"><?php echo the_title();?></h1>
    <?php 
        if(have_posts()){
            while(have_posts()){
                the_post(); 
                $post_id = get_the_ID();
                $post = get_post( $post_id);
                $poll_content = $post->post_content;
    ?>
    <div id="replace_collapse">
        <?php echo (strlen(stripslashes_deep($poll_content)) > 1000)?substr(stripslashes_deep($poll_content), 0, 1000).'...<span><a href="javascript:void(0);" id="expand">Read More</a></span>':stripslashes_deep($poll_content);?>
    </div>
    <div id="replace_expand" style="display: none;">
        <?php echo stripslashes_deep($poll_content).' <span><a href="javascript:void(0);" id="collapse">Read Less</a></span>';?>
    </div>
    <?php
               
                if (function_exists('vote_poll') && !in_pollarchive()): 
    ?>  
                    <li>  
                        <h2>Polls</h2>  
                        <div><?php get_poll($poll_id);?></div> 
                    </li>  
    <?php       endif;
                if ( comments_open() || get_comments_number() ) {
                        comments_template();
                }
            }
        }
    ?>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
</section>
<?php get_footer();?>
