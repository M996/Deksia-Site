<?php
/**
* Template Name: Home Page
*
*/

get_header();


?>

<div id="homepage">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>

  	<?php the_title(); ?>
  	<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>
  	<?php the_content(); ?>

  <?php endwhile; ?>
  <?php endif;?>

</div><!--#homepage-->

<?php
get_footer();
