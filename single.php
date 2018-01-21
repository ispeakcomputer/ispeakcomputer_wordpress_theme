<?php get_header()?>

<div class="posts">

  <?php while(have_posts()):the_post()?>
   <div id="single" class="single_post">
     <a href="#"><?php the_post_thumbnail( 'medium', array('class' => 'img-rounded', 'class' => 'post_img')); ?></a>
    <h1><?php the_title()?></h1>
    <p><?php the_date('F j, Y'); ?></p>
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
    <?php previous_post_link('%link', '<img src="/wp-content/themes/ispeakcomputer/icons/backward.png">'); ?>
   </li>
 <li>
   <a href="/">  <img src="/wp-content/themes/ispeakcomputer/icons/home.png" /></a>
 </li>
    <li>
    <?php next_post_link('%link','<img src="/wp-content/themes/ispeakcomputer/icons/forward.png">'); ?>
    </li>
  </ul>
  <!-- </div> -->
</div>

<?php get_footer()?>
