<div class="post <?php if (has_post_thumbnail()){?>has_thumbnail <?php } ?>">
  <div class="post_thumbnail">
    <a href="<?php the_permalink();?>"> <?php the_post_thumbnail('small-thumbnail') ?></a>
  </div>
  <h2><a href="<?php the_permalink();?>"> <?php the_title(); ?></a></h2>
  <p class='post_info'> <?php the_time('F jS, Y'); ?> | by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author()?></a>
  | Posted in <?php

    $cats= get_the_category();
    $separator= ", ";
    $output= "";

    if ($cats) {
      foreach($cats as $cat){
        $output .= "<a href='".get_category_link($cat->term_id)."'>".$cat->cat_name."</a>". $separator;
      }
    }
    echo trim($output, $separator);

  ?></p>
<?php if (is_search() OR is_archive()) { ?>
  <p><?php echo get_the_excerpt(); ?>
   <a href=<?php the_permalink(); ?>>read more</a>
 </p><?php


}else{
  if ($the_post->post_excerpt) {
    ?>
     <p><?php echo get_the_excerpt(); ?>
      <a href=<?php the_permalink(); ?>>read more</a>
    </p><?php
  } else {
      ?><p><?php the_content(); ?></p><?php
    }

}
?>


</div>
