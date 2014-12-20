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
<footer id="colophon" class="site-footer" role="contentinfo" style="margin-bottom:25px;">
<div class="container_6">
	<div class="site-info">
			<div class="fcred">
				<div align="center" style="color:white;">
					© 2014 Kanavaia. All Rights Reserved.
					<br> Powered by <a href="mailto:a.dwisaty4@yahoo.com">Guerilla Team</a>
				</div>
			</div>		
	</div><!-- .site-info -->	
	
</div><!-- #page .hfeed .site -->
</footer><!-- #colophon .site-footer -->

<?php wp_footer(); ?>
<script type='text/javascript'
        src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'>
    </script>

    <!--script animasi-->
    <script type='text/javascript'>
     function simpleSlideshow(slideContainer, duration)
    {
	var currentSlide = $('img:nth-child(1)', slideContainer);
         $(currentSlide)
        .css({
            opacity: 0
        })
        .appendTo(slideContainer)
 
        .animate({
            opacity: 1
        }, 'normal', function(){
            setTimeout(function(){
                simpleSlideshow(slideContainer, duration);
            }, duration);
        })
    }
 
    $(function(){
        var duration = 3000; // millsecond        
        var slideContainer = $('#xslideshow');
        simpleSlideshow(slideContainer, duration);
        var slideContainer2 = $('#xslideshowLookbook');
        simpleSlideshow(slideContainer2, duration);
    });
    </script>
	
	<!-- Ganti slideshow -->
	<script>
		function newsClick(){
			$('#xslideshow').html('	<?php $dir=	dirname(__FILE__)."/images/slideshow/news/"; $files = scandir($dir,1); for($i = 0;$i < count($files)-2;$i++){echo "<img src=\'".get_template_directory_uri()."/images/slideshow/news/".$files[$i]."\'>";}?>');
		}
		function eventClick(){
			$('#xslideshow').html('	<?php $dir=	dirname(__FILE__)."/images/slideshow/event/"; $files = scandir($dir,1); for($i = 0;$i < count($files)-2;$i++){echo "<img src=\'".get_template_directory_uri()."/images/slideshow/event/".$files[$i]."\'>";}?>');
		}
		function promoClick(){
			$('#xslideshow').html('	<?php $dir=	dirname(__FILE__)."/images/slideshow/promo/"; $files = scandir($dir,1); for($i = 0;$i < count($files)-2;$i++){echo "<img src=\'".get_template_directory_uri()."/images/slideshow/promo/".$files[$i]."\'>";}?>');
		}
		function fireClick(){
			$('#xslideshowLookbook').html('	<?php $dir=	dirname(__FILE__)."/images/lookbook/fire/"; $files = scandir($dir,1); for($i = 0;$i < count($files)-2;$i++){echo "<img src=\'".get_template_directory_uri()."/images/lookbook/fire/".$files[$i]."\'>";}?>');
		}
		function earthClick(){
			$('#xslideshowLookbook').html('	<?php $dir=	dirname(__FILE__)."/images/lookbook/earth/"; $files = scandir($dir,1); for($i = 0;$i < count($files)-2;$i++){echo "<img src=\'".get_template_directory_uri()."/images/lookbook/earth/".$files[$i]."\'>";}?>');
		}
	</script>
</body>
</html>
<!-- footer sudah beres -->