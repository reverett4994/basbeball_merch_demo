 
<!DOCTYPE html >
<html <?php language_attributes();?>>
  <head>
    <meta charset=" <?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Spectral+SC" rel="stylesheet">
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

    <title> <?php bloginfo('name')?></title>
    <?php wp_head();?>
  </head>

  <body <?php body_class();?> >

      <div class="header">
        <div class="logo">
          <a href='/baseball'>MLB Stuff!</a>
        </div>
        <div class="nav">
          <?php
            $args = array(
              'theme_location' => 'header'
            )
            ?>
            <?php  wp_nav_menu($args);?>
            <?php
            $argss = array(
              'theme_location' => 'header_dropdown'
            )
              ?>
            <?php  wp_nav_menu($argss);?>
        </div>
      </div>
