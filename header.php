<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|Crimson+Text" rel="stylesheet">

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <div id="wrapper" class="hfeed">
    <header class="header" id="header" role="banner">
      <nav class="header__nav" id="menu" role="navigation">
        <ul class="header__item  header__item--left header__nav__list">
          <li class="header__nav__list__item">
            <a class="header__nav__link" href="<?php echo esc_url( home_url( '/sobre' ) ); ?>">Sobre</a>
          </li>
        </ul>
        <div class="header__item  header__item--center header__nav__list">
          <h1 class="site__title" id="site-title">
            <a class="header__logo site__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"></a>
          </div>
        </li>
        <ul class="header__item header__item--right header__nav__list">
          <li class="header__nav__list__item">
            <a class="header__nav__link" href="<?php echo esc_url( home_url( '/contato' ) ); ?>">Contato</a>
          </li>
          <li class="header__nav__list">
            <a class="header__nav__link" href="<?php the_field('instagram_url'); ?>">Instagram</a>
          </li>
        </ul>
      </nav>
    </header>
    <div id="container">
<!-- <div id="search"> -->
  <?php /*get_search_form(); */?>
<!-- </div> -->