
<link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet" type="text/css" /></link>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <h1<span class="header"><?php the_title(); ?></span></h1>
  		<h3<span class="brase"><?php the_content(); ?> </span></h3>
 <?php echo get_the_date(); ?>

<?php endwhile; ?>
<?php endif; ?>

<div class="test">
  <p>

  </p>
</div>

<?php get_footer(); ?>
