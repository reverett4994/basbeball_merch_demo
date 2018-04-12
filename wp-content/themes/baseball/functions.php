<?php

function addCSS(){
  wp_enqueue_style('style',get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','addCSS');

function addCSSOWL(){
  wp_enqueue_style('OWL 1',get_stylesheet_directory_uri() . '/owl.carousel.min.css');
}
add_action('wp_enqueue_scripts','addCSSOWL');

function addCSSOWL2(){
  wp_enqueue_style('OWL 2',get_stylesheet_directory_uri() . '/owl.theme.default.css');
}
add_action('wp_enqueue_scripts','addCSSOWL2');

function addJS(){
  wp_enqueue_script('OWL',get_stylesheet_directory_uri() . '/owlcarousel/owl.carousel.min.js' );
}
add_action('wp_enqueue_scripts','addJS');

//Theme Setup
function learning_wp_setup(){
  //Feature Image Support
  add_theme_support('post-thumbnails');
  // width,height,cropping
  add_image_size('small-thumbnail', 180, 120, true);
  add_image_size('banner-image', 920, 210, array( 'left', 'top' ));
  add_image_size('menu', 300, 250);
  //nav menus
  register_nav_menus(array(
    'header' => __('Header Menu'),
    'header_dropdown' => __('Header Dropdown Menu'),
    'footer' => __('Footer Menu'),
  ));

  // add post format stream_support
  add_theme_support('post-formats',array('aside','gallery','link'));


}

add_action('after_setup_theme','learning_wp_setup');


function dropdown_tag_cloud( $args = '' ) {
  $defaults = array(
    'smallest' => 8, 'largest' => 22, 'unit' => 'pt', 'number' => 45,
    'format' => 'flat', 'orderby' => 'name', 'order' => 'ASC',
    'exclude' => '', 'include' => ''
  );
  $args = wp_parse_args( $args, $defaults );

  $tags = get_tags( array_merge($args, array('orderby' => 'count', 'order' => 'DESC')) ); // Always query top tags

  if ( empty($tags) )
    return;

  $return = dropdown_generate_tag_cloud( $tags, $args ); // Here's where those top tags get sorted according to $args
  if ( is_wp_error( $return ) )
    return false;
  else
    echo apply_filters( 'dropdown_tag_cloud', $return, $args );
}

function dropdown_generate_tag_cloud( $tags, $args = '' ) {
  global $wp_rewrite;
  $defaults = array(
    'smallest' => 8, 'largest' => 22, 'unit' => 'pt', 'number' => 45,
    'format' => 'flat', 'orderby' => 'name', 'order' => 'ASC'
  );
  $args = wp_parse_args( $args, $defaults );
  extract($args);

  if ( !$tags )
    return;
  $counts = $tag_links = array();
  foreach ( (array) $tags as $tag ) {
    $counts[$tag->name] = $tag->count;
    $tag_links[$tag->name] = get_tag_link( $tag->term_id );
    if ( is_wp_error( $tag_links[$tag->name] ) )
      return $tag_links[$tag->name];
    $tag_ids[$tag->name] = $tag->term_id;
  }

  $min_count = min($counts);
  $spread = max($counts) - $min_count;
  if ( $spread <= 0 )
    $spread = 1;
  $font_spread = $largest - $smallest;
  if ( $font_spread <= 0 )
    $font_spread = 1;
  $font_step = $font_spread / $spread;

  // SQL cannot save you; this is a second (potentially different) sort on a subset of data.
  if ( 'name' == $orderby )
    uksort($counts, 'strnatcasecmp');
  else
    asort($counts);

  if ( 'DESC' == $order )
    $counts = array_reverse( $counts, true );

  $a = array();

  $rel = ( is_object($wp_rewrite) && $wp_rewrite->using_permalinks() ) ? ' rel="tag"' : '';

  foreach ( $counts as $tag => $count ) {
    $tag_id = $tag_ids[$tag];
    $tag_link = clean_url($tag_links[$tag]);
    $tag = str_replace(' ', '&nbsp;', wp_specialchars( $tag ));
    $a[] = "\t<option value='$tag_link'>$tag</option>";
  }

  switch ( $format ) :
  case 'array' :
    $return =& $a;
    break;
  case 'list' :
    $return = "<ul class='wp-tag-cloud'>\n\t<li>";
    $return .= join("</li>\n\t<li>", $a);
    $return .= "</li>\n</ul>\n";
    break;
  default :
    $return = join("\n", $a);
    break;
  endswitch;

  return apply_filters( 'dropdown_generate_tag_cloud', $return, $tags, $args );
}

 ?>
