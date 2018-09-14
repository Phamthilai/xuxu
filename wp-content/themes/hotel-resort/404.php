<?php
/**
 * Display 404 page
 * @package Hotel Resort
 */

get_header(); ?>

<div id="main-content">
    <div class="container page-content">  
        <h1><?php printf( '<strong>%s</strong> %s', esc_html__( '404', 'hotel-resort' ), esc_html__( 'Not Found', 'hotel-resort' ) ) ?></h1>
        <p class="text-404"><?php esc_html_e( 'Looks like you have taken a wrong turn', 'hotel-resort' ); ?></p>
        <p class="text-404"><?php esc_html_e( 'Dont worry it happens to the best of us.', 'hotel-resort' ); ?></p>
        <div class="read-moresec">
            <a href="<?php echo esc_url( home_url() ); ?>" class="button hvr-sweep-to-right"><?php esc_html_e( 'Return to the home page', 'hotel-resort' ); ?></a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<?php get_footer(); ?>