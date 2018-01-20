<?php get_header.php() ?>

<div class="">

  <?php while(have_posts()): ?>
    <h1><?php the_title() ?></h1>
    <?php the_content(); ?>
  <?php endwhile; ?>

</div>

<?php get_footer() ?>
<!-- <?php get_sidebar() ?> -->
