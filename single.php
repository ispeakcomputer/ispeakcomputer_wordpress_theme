<?php get_header()?>

<div class="posts">

  <?php while(have_posts()):the_post()?>
   <div id="single" class="single_post">
     <a href="#"><?php the_post_thumbnail( 'medium', array('class' => 'img-rounded', 'class' => 'post_img')); ?></a>
    <h2><?php the_title()?></h2>
    <?php the_content(); ?>
    <a href="<?php echo get_permalink(); ?>">Browse Categories</a>
    <div class="hashtags">
      <?php the_category() ?>
    </div>
  </div>
  <hr>
</div>
<?php endwhile;?>
<div class="navi">
  <!-- <div class="innernavi"> -->
<ul>
   <li>
    <?php previous_post_link('%link', '<img src="wp-content/themes/instablog/icons/backward.png">'); ?>
   </li>
<li> <a href="/blog">  <img src="wp-content/themes/instablog/icons/home.png" /></a></li>
    <li>
    <?php next_post_link('%link','<img src="wp-content/themes/instablog/icons/forward.png">'); ?>
    </li>
  </ul>
  <!-- </div> -->
</div>

<?php get_footer()?>
