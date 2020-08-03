<?php
session_start();
require_once("database_con.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="CodePixar">
    <link rel="shortcut icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/img/fav-icon.png" />
    <!-- Meta Description -->
    <meta name="description" content="<?php bloginfo('description') ?>">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <!-- ----------------------------------------------------------------------- -->
    <!--                            Header Part Start                            -->
    <!-- ----------------------------------------------------------------------- -->
    <header id="header">
      <!-- --------------------------- Logo Part Start --------------------------- -->
      <div class="logo_section">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-6 logo">
              <a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt=""></a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-6 cart_social">
                 <a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><i class="fa fa-shopping-cart"></i><span><?php echo sprintf ( _n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></span> </a>
            </div>
          </div>
        </div>
      </div>
      <!-- ---------------------------- Logo Part End ---------------------------- -->
      <!-- --------------------------- Nav Part Start ---------------------------- -->
      <div class="nav_section">
        <nav>
          <div class="container">
            <div class="row">
              <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <?php
                  // Main Menu ADD
                    wp_nav_menu(
                  array(
                  'theme_location'  => 'primary_menu',
                    'menu_class'    => 'navbar-nav mr-auto',
                      'container'     => '',
                  'depth'           => 5,
                  'walker'          => new Jakaria_Nav_Menu()
                    ));
                  ?>
                </div>
              </nav>
            </div>
          </div>
        </nav>
      </div>
      <!-- ---------------------------- Nav Part End ----------------------------- -->
    </header>
    <!-- ----------------------------------------------------------------------- -->
    <!--                             Header Part End                             -->
    <!-- ----------------------------------------------------------------------- -->