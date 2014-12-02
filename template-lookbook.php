<?php
/**

Template Name: collections
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package web2feel
 * @since web2feel 1.0
 */


/* Bagian untuk collections */

get_header(); ?>
			
	<div class="clear"></div>
	
	<div id="collection-title" style="">
		<h3>LOOKBOOK</h3>
	</div>

	<div id="primary" class="content-area container_12">
		Slideshow here
		
		<div class="grid_12">
			<?php kriesi_pagination(); ?>
		</div>
		
	</div><!-- #primary .content-area -->


<?php get_footer(); ?>