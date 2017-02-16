<?php get_header.php() ?>

<div class="">

  <?php while(have_posts()): ?>
    <h2><?php the_title() ?></h2>
    <?php the_content(); ?>
  <?php endwhile; ?>

</div>

<?php get_footer() ?>
<!-- <?php get_sidebar() ?> -->
