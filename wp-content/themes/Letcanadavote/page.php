<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<section id="body_cotainer_part2_inner">
	<h1><?php echo the_title();?></h1>
	<?php 
		if(have_posts()){
			while(have_posts()){
				the_post();
				the_content();	
			}
		}
	?>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
</section>
<?php get_footer();?>
