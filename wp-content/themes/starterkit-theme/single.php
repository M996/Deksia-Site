<?php
/**
* The Template for displaying all single posts
*
*/

get_header();

  // Start the Loop.
  while ( have_posts() ) : the_post();
  
	/*
	* Include the post format-specific template for the content. If you want to
	* use this in a child theme, then include a file called called content-___.php
	* (where ___ is the post format) and that will be used instead.
	*/
	?>
	<div id="">
		<div class="content">
		  <h1><?php the_title();?></h1>
		  <?php the_content();?>
		  <div class="clear"></div>
		</div><!--content-->
		<?php
		  // Previous/next post navigation.
		  twentyfourteen_post_nav();
		  
		  // If comments are open or we have at least one comment, load up the comment template.
		  if ( comments_open() || get_comments_number() ) {
			comments_template();
		  }
		?>
	  
	</div><!--#standardPage-->
	
  <?php endwhile;
  
get_footer();
  