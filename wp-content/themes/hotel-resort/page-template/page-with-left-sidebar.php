<?php
/**
 * Template Name:Page with Left Sidebar
 */

get_header(); ?>

<?php do_action( 'hotel_resort_pageleft_header' ); ?>

<div class="container">
    <div class="wrapper"> 
        <div class="row">      
    		<div id="sidebar" class="col-md-4 col-sm-4">
    			<?php dynamic_sidebar('sidebar-2'); ?>
    		</div>		 
    		<div class="col-md-8 col-sm-8" id="main-content" >
    			<?php while ( have_posts() ) : the_post(); ?>
                    <img src="<?php the_post_thumbnail_url('full'); ?>" width="100%">
                    <h1><?php the_title(); ?></h1>
                    <?php the_content();
                    wp_link_pages( array(
                        'before' => '<div class="page-links">' . __( 'Pages:', 'hotel-resort' ),
                        'after'  => '</div>',
                    ) );
                    
                    //If comments are open or we have at least one comment, load up the comment template
                        if ( comments_open() || '0' != get_comments_number() )
                            comments_template();
                    ?>
                <?php endwhile; // end of the loop. ?>
            </div>
        </div>
        <div class="clearfix"></div>    
    </div>
</div>

<?php do_action( 'hotel_resort_pageleft_footer' ); ?>

<?php get_footer(); ?>