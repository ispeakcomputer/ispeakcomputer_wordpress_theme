<?php get_header()?>

<div class="posts">

  <?php while(have_posts()):the_post()?>
   <div class="single_post">
     <a href="#"><?php the_post_thumbnail( 'medium', array('class' => 'img-rounded', 'class' => 'post_img')); ?></a>
    <h2><?php the_title()?></h2>
    <?php the_content(); ?>
    <a href="<?php echo get_permalink(); ?>"> Read More...</a>
    <div class="hashtags">
      <?php the_category() ?>
    </div>
  </div>
  <?php endwhile;?>
</div>


<?php get_footer()?>
