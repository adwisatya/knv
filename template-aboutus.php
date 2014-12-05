<?php
/**

Template Name: About Us

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
		<h3> ABOUT US</h3>
	</div>
	<!-- edit bagian sini -->
<div style="text-align:center;">
	<img src="<?php echo get_template_directory_uri(); ?>/images/aboutus.jpg"/ width=50% height=50% >
	</div>
	<div id="primary" class="content-area container_12">
		<div id="article-area" class="cf">
			<!--<div style="margin-left:20px;float:left;margin-right:20px;height:350px;">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo/logo.jpg" width="150px" height="150px">
			</div>-->
			<div>
				<p style="margin-left:20px;height:350px;text-align:center;">
					<b style="font-size:35px;">KANAVAIA</b> was established in 2014. We offer the first ever <b>3in1 Detachable Bag</b> inspired by the beauty of nature. 
You can have a duffel bag, a body bag and a backpack in just one bag. We also bring the ambience of Fire, Earth, Air and Water in our collections.
We are committed to be your companion. So, start your journey with us and take your companion away with you!
				</p>
			</div>
		</div>
		<div class="grid_12">
			<?php kriesi_pagination(); ?>
		</div>
	</div><!-- #primary .content-area -->
	</div>

<?php get_footer(); ?>