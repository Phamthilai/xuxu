<?php
/**
 * Displaying Archive pages.
 * @package Hotel Resort
 */

get_header(); ?>

<?php /** post section **/ ?>
<div class="container">
        <?php
        $layout = get_theme_mod( 'hotel_resort_theme_options','One Column');
        if($layout == 'One Column'){?>                                   
            <div id="firstbox" class="mainbox">
                    <?php
                        the_archive_title( '<h1 class="page-title">', '</h1>' );
                        the_archive_description( '<div class="taxonomy-description">', '</div>' );
                    ?>
                    <?php if ( have_posts() ) :
                      /* Start the Loop */
                        
                        while ( have_posts() ) : the_post();

                          get_template_part( 'template-parts/content',get_post_format() ); 
                        
                        endwhile;

                        else :

                          get_template_part( 'no-results' ); 

                        endif; 
                    ?>
                    <div class="navigation">
                        <?php
                            // Previous/next page navigation.
                            the_posts_pagination( array(
                                'prev_text'          => __( 'Previous page', 'hotel-resort' ),
                                'next_text'          => __( 'Next page', 'hotel-resort' ),
                                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'hotel-resort' ) . ' </span>',
                            ));
                        ?>
                    </div>
            </div>
            <div class="clearfix"></div>
        <?php }else if($layout == 'Three Columns'){?>
            <div class="row">
                <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar('sidebar-2'); ?></div>               
                <div id="firstbox" class="col-md-6 col-sm-6 mainbox">
                        <?php
                            the_archive_title( '<h1 class="page-title">', '</h1>' );
                            the_archive_description( '<div class="taxonomy-description">', '</div>' );
                        ?>
                        <?php if ( have_posts() ) :
                          /* Start the Loop */
                            
                            while ( have_posts() ) : the_post();

                              get_template_part( 'template-parts/content',get_post_format() ); 
                            
                            endwhile;

                            else :

                              get_template_part( 'no-results' ); 

                            endif; 
                        ?>
                        <div class="navigation">
                          <?php
                              // Previous/next page navigation.
                              the_posts_pagination( array(
                                  'prev_text'          => __( 'Previous page', 'hotel-resort' ),
                                  'next_text'          => __( 'Next page', 'hotel-resort' ),
                                  'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'hotel-resort' ) . ' </span>',
                              ) );
                          ?>
                        </div>
                </div>                
                <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar('sidebar-2'); ?></div>
            </div>
        <?php }else if($layout == 'Four Columns'){?>
            <div class="row">
                <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar('sidebar-2'); ?></div>                
                <div id="firstbox" class="col-md-3 col-sm-3 mainbox">
                        <?php
                            the_archive_title( '<h1 class="page-title">', '</h1>' );
                            the_archive_description( '<div class="taxonomy-description">', '</div>' );
                        ?>
                        <?php if ( have_posts() ) :
                          /* Start the Loop */
                            
                            while ( have_posts() ) : the_post();

                              get_template_part( 'template-parts/content',get_post_format() ); 
                            
                            endwhile;

                            else :

                              get_template_part( 'no-results' ); 

                            endif; 
                        ?>
                        <div class="navigation">
                            <?php
                                // Previous/next page navigation.
                                the_posts_pagination( array(
                                    'prev_text'          => __( 'Previous page', 'hotel-resort' ),
                                    'next_text'          => __( 'Next page', 'hotel-resort' ),
                                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'hotel-resort' ) . ' </span>',
                                ) );
                            ?>
                        </div>
                </div>
                <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar('sidebar-2'); ?></div>
                <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar('sidebar-3'); ?></div>
            </div>
        <?php }else if($layout == 'Right Sidebar'){?>
            <div class="row">    
                    <div id="firstbox" class="col-md-8 col-sm-8 mainbox">
                        <?php
                            the_archive_title( '<h1 class="page-title">', '</h1>' );
                            the_archive_description( '<div class="taxonomy-description">', '</div>' );
                        ?>
                        <?php if ( have_posts() ) :
                          /* Start the Loop */
                            
                            while ( have_posts() ) : the_post();

                              get_template_part( 'template-parts/content',get_post_format() ); 
                            
                            endwhile;

                            else :

                              get_template_part( 'no-results' ); 

                            endif; 
                        ?>
                        <div class="navigation">
                            <?php
                                // Previous/next page navigation.
                                the_posts_pagination( array(
                                    'prev_text'          => __( 'Previous page', 'hotel-resort' ),
                                    'next_text'          => __( 'Next page', 'hotel-resort' ),
                                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'hotel-resort' ) . ' </span>',
                                ));
                            ?>
                        </div>
                    </div>
                <div class="col-md-4 col-sm-4"><?php get_sidebar(); ?></div>
            </div>
        <?php }else if($layout == 'Left Sidebar'){?>
            <div class="row">
                <div class="col-md-4 col-sm-4"><?php get_sidebar(); ?></div>
                <div id="firstbox" class="col-md-8 col-sm-8 mainbox">
                        <?php
                            the_archive_title( '<h1 class="page-title">', '</h1>' );
                            the_archive_description( '<div class="taxonomy-description">', '</div>' );
                        ?>
                        <?php if ( have_posts() ) :
                          /* Start the Loop */
                            
                            while ( have_posts() ) : the_post();

                              get_template_part( 'template-parts/content',get_post_format() ); 
                            
                            endwhile;

                            else :

                              get_template_part( 'no-results' ); 

                            endif; 
                        ?>
                        <div class="navigation">
                            <?php
                                // Previous/next page navigation.
                                the_posts_pagination( array(
                                    'prev_text'          => __( 'Previous page', 'hotel-resort' ),
                                    'next_text'          => __( 'Next page', 'hotel-resort' ),
                                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'hotel-resort' ) . ' </span>',
                                ) );
                            ?>
                        </div>
                </div>                
            </div>
        <?php }else if($layout == 'Grid Layout'){?>
            <div id="firstbox" class="mainbox">
                    <?php
                        the_archive_title( '<h1 class="page-title">', '</h1>' );
                        the_archive_description( '<div class="taxonomy-description">', '</div>' );
                    ?>
                    <div class="row">
                        <?php if ( have_posts() ) :
                          /* Start the Loop */
                            
                            while ( have_posts() ) : the_post();

                              get_template_part( 'template-parts/grid-layout' ); 
                            
                            endwhile;

                            else :

                              get_template_part( 'no-results' ); 

                            endif; 
                        ?>
                    </div>
                    <div class="navigation">
                        <?php
                            // Previous/next page navigation.
                            the_posts_pagination( array(
                                'prev_text'          => __( 'Previous page', 'hotel-resort' ),
                                'next_text'          => __( 'Next page', 'hotel-resort' ),
                                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'hotel-resort' ) . ' </span>',
                            ));
                        ?>
                    </div>
            </div>
        <?php } ?>
    
</div>

<?php get_footer(); ?>