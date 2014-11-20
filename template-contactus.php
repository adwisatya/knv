<?php
/**

Template Name: Contact Us

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

<style>
table {
   margin-left: -200px;
  margin-right: auto;
  width:200%;
} 
th{
	text-align: right;
}
td {
	text-align: left;
	font-size: 16px;
	vertical-align: middle;
}
p{
	text-align: center;
}
</style>
	<div id="feature-section" class="cf">	
	<div class="latest-head grid_12">
		<h3>How to Buy</h3>
	</div>
	<!-- edit bagian sini -->
	<div id="primary" class="content-area container_12">
		<div id="article-area" class="cf">
			<div>
				<p>
				Drop us an email, text us or catch us on social media to get your <font face ='big_noodle_titling.ttf'> KANAVAIA </font>
				collections right away !
				</p>
				<p>(Don't forget to specify your orders and details to us)
				</p>
<p>
					<table>
						<tr>
						<th>
				<a href = "mailto:shop@kanavaia.com">
					<img src="<?php echo get_template_directory_uri(); ?>/images/emailicon.png" width="5%" height="5%" ></img> </a>
				</th>				
				<td><a href = "mailto:shop@kanavaia.com"> shop@kanavaia.com</a></td>
				</tr>

				<tr>
			<th>
				<a href = "http://www.instagram.com/kanavaia">
					<img src="<?php echo get_template_directory_uri(); ?>/images/instaicon.png" width="5%" height="5%" ></img> </a> 
				</th>
				<td>
					<a href = "http:// www.instagram.com/kanavaia"> kanavaia </a>
				</td>

				</tr>

		<tr>
					<th>						
				<a href = "http://www.twitter.com/kanavaia">
					<img src="<?php echo get_template_directory_uri(); ?>/images/twittericon.png" width="5%" height="5%" ></img> </a>
				</th>
				<td>
						<a href= " http://www.twitter.com/kanavaia">@kanavaia
				</a>
			</td>
		</tr>
				<tr>
					<th>
				<img src="<?php echo get_template_directory_uri(); ?>/images/lineicon.png" width="5%" height="5%" ></img> 
			</th>
				<td>kanavaia</td>
				</tr>
				<tr>
					<th>
						<img src="<?php echo get_template_directory_uri(); ?>/images/phoneicon.png" width="5%" height="5%" ></img>
					</th>
						<td> +6281905944988</td>
					</tr>

				<tr>
					<th>
				<a href ="http://www.facebook.com/kanavaia.">
					<img src="<?php echo get_template_directory_uri(); ?>/images/facebookicon.png" width="5%" height="5%" ></img> </a>
				</th>
					<td>
						<a href = "http://www.facebook.com/kanavaia.">kanavaia.</a>
				</a>
			</td>
		</tr>
	</table>
</p>
			</div>
		</div>
		<div class="grid_12">
			<?php kriesi_pagination(); ?>
		</div>
	</div><!-- #primary .content-area -->
<?php get_footer(); ?>