<?php get_header()?>

<div class="posts">

  <?php while(have_posts()):the_post()?>
   <div class="single_post">
     <a href="#"><?php the_post_thumbnail( 'medium', array('class' => 'img-rounded')); ?></a>
    <h2><?php the_title()?></h2>
    <?php the_excerpt(); ?>
    <a href="<?php echo get_permalink(); ?>"> Read More...</a>
    <div class="hashtags">
      <h4>Explore Related Posts</h4>
      <?php the_category(); ?>
    </div>
  </div>
  <?php endwhile;?>
</div>
<div class="navi">
  <div class="innernavi">

    <?php posts_nav_link( ' ' , '<img src="http://www.ispeakcomputer.com/blog/wp-content/themes/instablog/icons/backward.png">' , '<img src="http://www.ispeakcomputer.com/blog/wp-content/themes/instablog/icons/forward.png">') ?>
  </div>
</div>

<?php get_footer()?>
