<?php
/**

Template Name: collection-category
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
		<h3>PRODUCTS</h3>
	</div>

	<div id="primary" class="content-area container_12" style="margin-left:-10px;">
		<div id="article-area" class="cf ">
			<div class="article-list cf">
				<?php //include("artikel.php"); ?>
				<center><h4>COLLECTIONS</h4></center>

				<div id="home-collection-container">
					<div id="left-home-product">
						<a href="http://kanavaia.com/?department=ziga"><img src="<?php echo get_template_directory_uri(); ?>/images/collection/button/ziga.jpg"></a>
					</div>
					<div id="right-home-product">
						<a href="http://kanavaia.com/?department=heia"><img src="<?php echo get_template_directory_uri(); ?>/images/collection/button/heia.jpg"></a>
					</div>
				</div>
			</div>
		</div>
		
		<div class="grid_12">
			<?php kriesi_pagination(); ?>
		</div>
		
	</div><!-- #primary .content-area -->


<?php get_footer(); ?>