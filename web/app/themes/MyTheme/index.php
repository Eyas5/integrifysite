<?php get_header(); ?>
<h1><?php wp_title(''); ?></h1>


<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		//?>
<h1><?php echo get_the_title(); ?></h1>
		<p><?php echo get_the_content(); ?></p>
    <?php
	} // end while
} // end if
?>
<?php get_footer(); ?>
