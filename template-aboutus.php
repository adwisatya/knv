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
<!--<div style="text-align:center;">
	<img src="<?php echo get_template_directory_uri(); ?>/images/about us.jpg"/ width=50% height=50% >
	</div>-->
	<div id="primary" class="content-area container_12">
		<div id="article-area" class="cf">
			<div style="margin-left:20px;float:left;margin-right:20px;">
				<img src="<?php echo get_template_directory_uri(); ?>/images/about us.jpg" width="150px" height=auto>
			</div>
			<div>
				<p style="margin-left:20px;text-align:left;">
					<b style="font-size:35px;"><span class='knv'>KANAVAIA</span></b> is the first ever 3in1 Detachable Bag inspired by the beauty of nature. Each bag has different ambience of Fire, Earth, Air and Water.It's a canvas duffle bag with two detachable pockets, which can be worn separately as a backpack and body bag. So, you can have a duffel bag, a body bag and a backpack in just one bag!

Our collections are especially made for sport lovers, travellers and all the adventurous KANAVAIANs out there. We are committed to be your companion. So, start your journey with us and take your companion away with you!
				</p>
		</div>
		<br/>
<p style="text-align:center; margin-left:10px;">
<b>“The starting point of your journey is dream. Achieving is your journey, achievement is your goal. 
<br/>
	Dream it, Achieve it, Nailed it.”</b>
			</p>

		<div class="grid_12">
			<?php kriesi_pagination(); ?>
		</div>
	</div><!-- #primary .content-area -->
	</div>

<?php get_footer(); ?>