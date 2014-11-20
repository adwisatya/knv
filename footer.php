<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package web2feel
 * @since web2feel 1.0
 */
?>

</div><!-- #main .site-main -->
</div>

<div id="bottom">
<div class="container_12 cf">
	<ul>
	<?php if ( !function_exists('dynamic_sidebar')
	        || !dynamic_sidebar("Footer") ) : ?>  
	<?php endif; ?>
	</ul>
</div>
</div>

<footer id="colophon" class="site-footer" role="contentinfo">
<div class="container_6">
	<div class="site-info">
			<div class="fcred">
				<div align="right"><a href="http://kanavaia.com"><img src="<?php echo get_template_directory_uri();?>/images/logo/footer.png" width="200px" height="35px"></a></div>
			</div>		
	</div><!-- .site-info -->	
	
</div><!-- #page .hfeed .site -->
</footer><!-- #colophon .site-footer -->

<?php wp_footer(); ?>

</body>
</html>
<!-- footer sudah beres -->