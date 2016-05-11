<?php /* Template Name: Front Page */ ?>

<h1><?php echo get_the_title();?></h1>

<?php get_header(); ?>
<a href="#menu" id="toggle"><span></span></a>

<div id="menu">
  <ul id="menu1">
    <li><a href="home">Home</a></li>
    <li><a href="Partners">Partners</a></li>
    <li><a href="Participants">Participants</a></li>
    <li><a href="news">News</a></li>
    <li><a href="faq">FAQ</a></li>
  </ul>
</div>

<?php query_posts('showposts=-1'); ?>

<?php while (have_posts()) : the_post(); ?>

<h2>
<a class="linki" href="<?php the_permalink() ?>">
  <?php the_title(); ?></a>
</h2>
<small class="time" ><?php the_time('H:i:s,F jS, Y') ?></small>
<?php the_excerpt(); ?>

<?php endwhile;?>


<img src="<?php echo get_template_directory_uri()?>/assets/images/123123.jpg" height="10px ", width="10px">

<img src="<?php echo get_template_directory_uri()?>/assets/images/777.jpg" height="10px", width="10px">


<?php get_footer(); ?>
