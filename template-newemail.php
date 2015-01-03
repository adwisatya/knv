<?php
/**

Template Name: New Email

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

<!-- 
<?php

if(!empty($_POST['judul']) && !empty($_POST['email']) && !empty($_POST['name']) && !empty($_POST['message'])){
    echo'oit';
   $tujuan='rita_miffies@yahoo.co.id';
    $judul = $_POST['judul'];
    $message = $_POST['message'];
    $pengirim=$_POST['email'];
    $header = "From: $pengirim \r\n";
    $kirim = mail ($tujuan,$judul,$message,$pengirim);?>
<?php
    if ($kirim) { ?>
	<script language="javascript" type="text/javascript">
	alert('Thank you for the message. We will contact you shortly.');
	window.location = './how-to-buy';
	</script>
<?php }
else { ?>
<script language="javascript" type="text/javascript">
alert('Message failed. Please, send an email to gordon@template-help.com');
window.location = './form';
</script>
<?php
}
}
 
?> -->  
<?php if ( have_posts() ) : ?>

                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>

                  <br/><br/><br/>
                   <?php
                        /* Include the Post-Format-specific template for the content.
                         * If you want to overload this in a child theme then include a file
                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                         */
                        get_template_part( 'content', get_post_format() );
                    ?>

                <?php endwhile; ?>

                <?php kriesi_pagination(); ?>

                <?php elseif ( current_user_can( 'edit_posts' ) ) : ?>

                <?php get_template_part( 'no-results', 'index' ); ?>

            <?php endif; ?>

