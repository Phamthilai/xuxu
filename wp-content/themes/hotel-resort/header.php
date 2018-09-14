<?php
/**
 * Display Header.
 * @package Hotel Resort
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="toggle"><a class="toggleMenu" href="#"><?php esc_html_e('Menu','hotel-resort'); ?></a></div>
<div class="header-top">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-sm-7 row">
            <div class="top-contact col-md-3 col-xs-12 col-sm-3">
              <?php if( get_theme_mod( 'hotel_resort_phone','' ) != '') { ?>
                <i class="fa fa-phone" aria-hidden="true"></i><p class="phone"><?php echo esc_html( get_theme_mod('hotel_resort_phone',__('(518) 356-5373','hotel-resort') )); ?></p>
               <?php } ?>
            </div>   
            <div class="top-contact col-md-4 col-xs-12 col-sm-4">
              <?php if( get_theme_mod( 'hotel_resort_mail','' ) != '') { ?>
                <i class="fa fa-envelope" aria-hidden="true"></i><p class="mail"><?php echo esc_html( get_theme_mod('hotel_resort_mail',__('example@gmail.com','hotel-resort')) ); ?></p>
              <?php } ?>
            </div>
            <div class="top-contact col-md-5 col-xs-12 col-sm-5">
              <?php if( get_theme_mod( 'hotel_resort_location','' ) != '') { ?>
                <i class="fa fa-map-marker" aria-hidden="true"></i><p class="location"><?php echo esc_html( get_theme_mod('hotel_resort_location',__('123 Street Dummy Address, India','hotel-resort')) ); ?></p>
              <?php } ?>
            </div>
        </div>
        <div class="col-md-5 col-sm-5">
            <div class="social-media">
               <?php if( get_theme_mod( 'hotel_resort_youtube_url','' ) != '') { ?>
                <a href="<?php echo esc_url( get_theme_mod( 'hotel_resort_youtube_url','' ) ); ?>"><i class="fab fa-youtube" aria-hidden="true"></i></a>
              <?php } ?>
              <?php if( get_theme_mod( 'hotel_resort_facebook_url','' ) != '') { ?>
                <a href="<?php echo esc_url( get_theme_mod( 'hotel_resort_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
              <?php } ?>
              <?php if( get_theme_mod( 'hotel_resort_twitter_url','' ) != '') { ?>
                <a href="<?php echo esc_url( get_theme_mod( 'hotel_resort_twitter_url','' ) ); ?>"><i class="fab fa-twitter" aria-hidden="true"></i></a>
              <?php } ?>
              <?php if( get_theme_mod( 'hotel_resort_rss_url','' ) != '') { ?>
                <a href="<?php echo esc_url( get_theme_mod( 'hotel_resort_rss_url','' ) ); ?>"><i class="fa fa-rss" aria-hidden="true"></i></a>
              <?php } ?>
              <?php if( get_theme_mod( 'hotel_resort_insta_url','' ) != '') { ?>
                <a href="<?php echo esc_url( get_theme_mod( 'hotel_resort_insta_url','' ) ); ?>"><i class="fab fa-instagram" aria-hidden="true"></i></a>
              <?php } ?>
              <?php if( get_theme_mod( 'hotel_resort_pint_url','' ) != '') { ?>
                <a href="<?php echo esc_url( get_theme_mod( 'hotel_resort_pint_url','' ) ); ?>"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a>
              <?php } ?>
            </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
</div>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <div class="logo">
                    <?php if( has_custom_logo() ){ hotel_resort_the_custom_logo();
                     }else{ ?>
                    <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_attr(bloginfo( 'name' )); ?></a></h1>
                    <?php $description = get_bloginfo( 'description', 'display' );
                    if ( $description || is_customize_preview() ) : ?> 
                        <p class="site-description"><?php echo esc_html($description); ?></p> 
                    <?php endif; }?>
                </div>
            </div>
            <div class="col-md-9 col-sm-9">
                <div class="menubox">
                    <div class="nav">
                        <?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div> 
</div>