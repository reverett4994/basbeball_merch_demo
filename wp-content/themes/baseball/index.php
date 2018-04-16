<?php
get_header();
?>
<h1>Showing <?php echo single_cat_title() ?></h1>
<div class="site-content clearfix">
  <div class="main-column">
    <?php if(have_posts()) :
      while (have_posts()) : the_post(); ?>
        <?php get_template_part('content',get_post_format()) ?>
      <?php endwhile;

    else :
      echo "</p>No Content</p>";

    endif;?>
  </div>

<?php get_sidebar() ?>
</div>



<?php get_footer();

?>
