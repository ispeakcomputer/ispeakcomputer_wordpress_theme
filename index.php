<?php get_header()?>

<div class="posts">
  <div class="search">
    <?php get_search_form(); ?>

  </div>
  <?php while(have_posts()):the_post()?>
   <div class="single_post">
     <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail( 'medium', array( 'class' => 'post_img')); ?></a>
    <a href="<?php echo get_permalink(); ?>">
     <h2><?php the_title()?></h2>
     <?php the_excerpt(); ?>
      <img id="readmore_button" src="http://www.ispeakcomputer.com/blog/wp-content/themes/instablog/icons/forward.png">
    </a>

    <!-- <div class="hashtags">

      <h4>Explore Related Posts</h4>
      <?php the_category(); ?>
    </div> -->
  </div>
  <?php endwhile;?>
  <hr>
</div>

<div class="navi">
  <!-- <div class="innernavi"> -->
  <ul>
  <li>
    <?php posts_nav_link( '</li><li>' , '<img src="wp-content/themes/instablog/icons/backward.png">' , '<li><img src="wp-content/themes/instablog/icons/forward.png">') ?>
    </li>

  </ul>
  <!-- </div> -->
</div>

<?php get_footer()?>
