<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
  <a class="skip-link screen-reader-text" href="#content">
    <?php esc_html_e( 'Skip to content', 'leaf' ); ?>
  </a>

  <header class="site-header">
    <div class="header-content">

    <div class="site-branding">
      <?php
      the_custom_logo();
      if ( is_front_page() && is_home() ) :
        ?>
        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        <?php
      else :
        ?>
        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
        <?php
      endif;
      $leaf_description = get_bloginfo( 'description', 'display' );
      if ( $leaf_description || is_customize_preview() ) :
        ?>
        <p class="site-description"><?php echo $leaf_description; /* WPCS: xss ok. */ ?></p>
      <?php endif; ?>
    </div><!-- .site-branding -->

    <nav id="site-navigation" class="main-navigation">
      <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'leaf' ); ?></button>
      <?php
      wp_nav_menu( array(
        'theme_location' => 'menu-1',
        'menu_id'        => 'primary-menu',
      ) );
      ?>
    </nav><!-- #site-navigation -->
    
    </div><!-- .header-content -->
  </header><!-- #masthead -->

  <div id="content" class="site-content">
