<?php
/**

Template Name: Form

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
  padding:15px;
  vertical-align: middle;
} 
th{
	text-align: right;
}
td {
	text-align: left;
	font-size: 16px;
	
}
p{
	text-align: center;
}
textarea{
	width:40%;
}
</style>

	<div id="feature-section" class="cf">	
	<div class="latest-head grid_12">
		<h3>Email Us</h3>
	</div>
	<!-- edit bagian sini -->
<!--<div style="text-align:center;">
	<img src="<?php echo get_template_directory_uri(); ?>/images/about us.jpg"/ width=50% height=50% >
	</div>-->

	<div id="primary" class="content-area container_12">
		<div id="article-area" class="cf" style="text-align:center">
						<table>
			<form action="<?php echo get_template_directory_uri()?>/newemail.php"method="post">
									<tr>
						<th>
				Name :
				</th>				
				<td><input id="name" name="name" placeholder="Your Name" required="true" type="text"></td>
				</tr>

				<tr>
			<th>
				Email :
				</th>
				<td>
					<input id="email" name="email" placeholder="Your Email" required="true" type="text">
				</td>

				</tr>
<tr>
						<th>
				Judul :
				</th>				
				<td><input id="judul" name="judul" placeholder="Title" required="true" type="text"></td>
				</tr>

				<tr>
		<tr>
					<th>						
			Message :				</th>
				<td>
						<textarea id="message" name="message" placeholder="What is it to tell" width="50%"></textarea>
			</td>
		</tr>			
	</table>
	<input type="submit" name="btnKirim" value="Kirim" id="btnKirim" onclick="test()">
  		</form>
  		<script>
  		function test(){
  			alert('clicked');
  		}
  		</script>
		</div>

		<div class="grid_12">
			<?php kriesi_pagination(); ?>
		</div>
	</div><!-- #primary .content-area -->
	</div>

<?php get_footer(); ?>