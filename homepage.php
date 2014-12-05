<?php
/**

Template Name: Homepage

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
	<div id="feature-section" class="cf" style="margin-bottom:20px;">
		<div align="center" style="margin-bottom:15px;"><h3><b>WELCOME BACK, KANAVAIANS!</b></h3></div>
		<div id="slide">
			<div id="slider">
				<div id="flexislider" class="flexslider">
					<label onClick="newsClick();">News</label> &nbsp;|&nbsp; <label  onClick="promoClick();">Promo (coming soon)</label> &nbsp;|&nbsp; <label  onClick="eventClick();">Event (coming soon)</label><br/>
					<div id='xslideshow' onClick="">
						<?php
							$dir=	dirname(__FILE__)."/images/slideshow/news/";
							$files = scandir($dir,1);
							for($i = 0;$i < count($files)-2;$i++){
								echo "<img src='".get_template_directory_uri()."/images/slideshow/news/".$files[$i]."'>";
							}
						?>
					</div>
				</div>	
			</div>	
		</div>
	</div>
			
	<div class="clear"></div>
	
	<div class="latest-head grid_12" style="display:none">
		<h3>New arrivals</h3>
	</div>
	<!--
	<div id="primary" class="content-area container_12">
		<div id="article-area" class="cf ">
			
			
			<div class="article-list cf">
				<?php //include("artikel.php"); ?>
				<div id="home-product-container">
					<div id="indeks-left-home-product">
						<img src="<?php echo get_template_directory_uri();?>/images/logo/footer.png">
					</div>
					<div id="indeks-right-home-product">
						<img src="<?php echo get_template_directory_uri();?>/images/logo/footer.png">
					</div>
				</div>
			</div>
		
		</div>
		
		<div class="grid_12">
			<?php kriesi_pagination(); ?>
		</div>
		
	</div>#primary .content-area -->


<?php get_footer(); ?>