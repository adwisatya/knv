<?php
/**

Template Name: Collections

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



get_header(); ?>


	<div id="feature-section" class="cf">	
		<div class="latest-head grid_12">
			<h3>How to Buy</h3>
		</div>
		<!-- edit bagian sini -->
		<div id="primary" class="content-area container_12">
			<div id="article-area" class="cf">
				&nbsp;isi di sini &nbsp;
			</div>
			<div class="grid_12">
				<?php kriesi_pagination(); ?>
			</div>
		</div><!-- #primary .content-area -->
	</div>
<?php get_footer(); ?>