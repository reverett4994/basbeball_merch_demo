<?php
get_header();
?>
<div id='single_wrapper'>
	<?php $content_post = get_post($my_postid); 
	$content = $content_post->post_content;
	?>
	<?php echo get_the_post_thumbnail( $page->ID, 'large' ); ?>
	<div class='item_info'>
		<h2><?php single_post_title(); ?></h2>
		<p class='price'>Price: foo bar</p>
		<select name="tag-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
			<option value="#">Select Team</option>
			<?php dropdown_tag_cloud('number=0&order=asc'); ?>
		</select>
	</div>
	<div class='item_desc'> <?php echo $content ?> </div>
</div>
