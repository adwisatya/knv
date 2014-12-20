<?php
/**

Template Name: lookbook
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

get_header(); 
?>
	<div id="feature-section" class="cf" >
		<div align="center"><h3><b>LOOKBOOK</b></h3></div>
	</div>
	<div id="feature-section" class="cf">
		<div id="slide">
			<div id="slider" style="height:720px;">
				<div id="flexisliderLookbook" style="height:720px;">
					<label onClick="fireClick();">FIRE</label> &nbsp;&nbsp; <label  onClick="earthClick();">EARTH</label> &nbsp;&nbsp; <label>WATER (coming soon)</label>&nbsp;&nbsp; <label>AIR (coming soon)</label><br/>
					<div id='xslideshowLookbook' onClick="">
						<?php
							$dir=	dirname(__FILE__)."/images/lookbook/fire/";
							$files = scandir($dir,1);
							for($i = 0;$i < count($files)-2;$i++){
								echo "<img src='".get_template_directory_uri()."/images/lookbook/fire/".$files[$i]."'>";
							}
						?>
					</div>
				</div>	
			</div>	
		</div>
	</div>


<?php get_footer(); ?>