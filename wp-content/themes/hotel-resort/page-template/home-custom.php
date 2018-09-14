<?php
/**
 * Template Name: Home Custom Page
 */
?>
<?php if( get_theme_mod('hotel_resort_slide_number') != '' ){ ?>

<div class="headertemplate">
 <?php get_header(); ?>
</div>
<?php }else{?>  
  <?php get_header(); ?>
<?php }?>

<?php /** slider section **/ ?>
  <div class="slider-main">
    <?php
      $pages = array();
      for ( $count = 1; $count <= 5; $count++ ) {
        $mod = absint( get_theme_mod( 'hotel_resort_slidersettings-page-' . $count ) );
        if ( 'page-none-selected' != $mod ) {
          $pages[] = $mod;
        }
      }
      
      if( !empty($pages) ) :
        $args = array(
          'posts_per_page' => 5,
          'post_type' => 'page',
          'post__in' => $pages,
          'orderby' => 'post__in'
        );
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) :
          $count = 1;
          ?>
          <div id="slider" class="nivoSlider">
            <?php
              $hotel_resort_n = 0;
            while ( $query->have_posts() ) : $query->the_post();
                
                $hotel_resort_n++;
                $hotel_resort_slideno[] = $hotel_resort_n;
                $hotel_resort_slidetitle[] = get_the_title();
                $hotel_resort_slidecontent[] = get_the_content();
                $hotel_resort_slidelink[] = esc_url( get_permalink() );
                ?>
                  <img src="<?php the_post_thumbnail_url('full'); ?>" title="#slidecaption<?php echo esc_attr( $hotel_resort_n ); ?>" />
                <?php
              $count++;
            endwhile;
            ?>
          </div>

          <?php
          $hotel_resort_k = 0;
            foreach( $hotel_resort_slideno as $hotel_resort_sln ){ ?>
              <div id="slidecaption<?php echo esc_attr( $hotel_resort_sln ); ?>" class="nivo-html-caption">
                <div class="slide-cap  ">
                  <h2><?php echo esc_html( $hotel_resort_slidetitle[$hotel_resort_k] ); ?></h2>
                  <p><?php echo esc_html( $hotel_resort_slidecontent[$hotel_resort_k] ); ?></p>
                  <a class="read-more" href="<?php echo esc_url( $hotel_resort_slidelink[$hotel_resort_k] ); ?>"><?php esc_html_e( 'Learn More','hotel-resort' ); ?></a>
                </div>
              </div>
              <?php $hotel_resort_k++;
          }          
        else : ?>
            <div class="header-no-slider"></div>
          <?php
        endif;
      else : ?>
          <div class="header-no-slider"></div>
      <?php
      endif; 
    ?>
  </div>

<?php do_action( 'hotel_resort_after_slider' ); ?>

<?php /*--accomodation--*/?>
<section id="accomodation">
  <div class="container">
    <div class="acco-main-box">
        <?php if( get_theme_mod('hotel_resort_title') != ''){ ?>     
            <h3><?php echo esc_html(get_theme_mod('hotel_resort_title',__('Accomodation','hotel-resort'))); ?></h3>            
            <div class="images_border">
              <img src="<?php echo esc_url( get_theme_mod('',get_template_directory_uri().'/images/Design.png') ); ?>" alt="">
            </div>
        <?php }?>
        <?php if( get_theme_mod('hotel_resort_subtitle') != ''){ ?>
        <div class="subtitle"><?php echo esc_html(get_theme_mod('hotel_resort_subtitle',__('The Best Quality Accomodation','hotel-resort'))); ?>
        </div>
        <?php }?>
    </div>
    <div class="row">
    <?php $pages = array();
    for ( $count = 0; $count <= 2; $count++ ) {
      $mod = absint( get_theme_mod( 'hotel_resort_page_settings' . $count ));
      if ( 'page-none-selected' != $mod ) {
        $pages[] = $mod;
      }
    }
    if( !empty($pages) ) :
      $args = array(
        'post_type' => 'page',
        'post__in' => $pages,
        'orderby' => 'post__in'
      );
      $query = new WP_Query( $args );
      if ( $query->have_posts() ) :
        $count = 0;
        while ( $query->have_posts() ) : $query->the_post(); ?>
          <div class="col-md-4">
              <div class="box-image text-center">
                <img src="<?php the_post_thumbnail_url('full'); ?>"/>
              </div>
              <div class="box-content text-center">
                <h4><?php the_title(); ?></h4>
                <p><?php the_excerpt(); ?></p>
                <div class="clearfix"></div>
                <div class="wow bounceInUp"><a class="r_button hvr-sweep-to-right"  href="<?php the_permalink(); ?>"><?php esc_html_e('View Room Details','hotel-resort'); ?></a>
                </div>
              </div>
          </div>
        <?php $count++; endwhile; ?>
      <?php else : ?>
          <div class="no-postfound"></div>
      <?php endif;
    endif; wp_reset_postdata();?>
  </div>
      <div class="clearfix"></div>
  </div> 
</section>

<?php do_action( 'hotel_resort_after_secondsec' ); ?>

<div id="main-content" class="container">
  <?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; // end of the loop. ?>
</div>

<?php get_footer(); ?>