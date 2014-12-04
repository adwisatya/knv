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


/* Bagian untuk lookbook */

get_header(); ?>
	<div id="feature-section" class="cf">
		<div id="collection-title" style="margin-left:10px;">
			<h3>LOOKBOOK</h3>
		</div>
		<div id="slide">
			<div id="slider">
				<div id="flexislider" class="flexslider">
					<label onClick="newsClick();">FIRE</label> &nbsp;&nbsp; <label  onClick="promoClick();">EARTH</label> &nbsp;&nbsp; <label  onClick="eventClick();">WATER</label>&nbsp;&nbsp; <label  onClick="promoClick();">AIR</label><br/>
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
	<div style="margin-bottom:50px;">
		&nbsp;
	</div>
	<div class="clear"></div>
	


<?php get_footer(); ?>