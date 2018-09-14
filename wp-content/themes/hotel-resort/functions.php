<?php
/**
 * Hotel Resort functions and definitions
 * @package Hotel Resort
 */

if ( ! function_exists( 'hotel_resort_setup' ) ) :

/* Theme Setup */

function hotel_resort_setup() {

	$GLOBALS['content_width'] = apply_filters( 'hotel_resort_content_width', 640 );

	load_theme_textdomain( 'hotel-resort', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	add_image_size('hotel-resort-homepage-thumb',240,145,true);
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'hotel-resort' ),
	) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'f1f1f1'
	) );
    /*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support(
		'post-formats', array(
			'image',
			'video',
			'gallery',
			'audio',
		)	
	);

	add_editor_style( array( 'css/editor-style.css', hotel_resort_font_url() ) );

	// Theme Activation Notice
	global $pagenow;
	
	if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {
		add_action( 'admin_notices', 'hotel_resort_activation_notice' );
	}
}
endif; // hotel_resort_setup
add_action( 'after_setup_theme', 'hotel_resort_setup' );

// Notice after Theme Activation
function hotel_resort_activation_notice() {
	echo '<div class="hotelwelcome notice notice-success is-dismissible">';
		echo '<h3>'. esc_html__( 'Warm Greetings to you!!', 'hotel-resort' ) .'</h3>';
		echo '<p>'. esc_html__( ' Our sincere thanks for choosing our hotel resort theme. We assure you a high performing theme for your hotel business. Please proceed towards welcome section to start an amazing journey with us..', 'hotel-resort' ) .'</p>';
		echo '<p><a href="'. esc_url( admin_url( 'themes.php?page=hotel_resort_guide' ) ) .'" class="button button-primary">'. esc_html__( 'Welcome...', 'hotel-resort' ) .'</a></p>';
	echo '</div>';
}

/*Site URL*/
define('HOTEL_RESORT_FREE_THEME_DOC','https://logicalthemes.com/docs/free-hotel-resort/','hotel-resort');
define('HOTEL_RESORT_SUPPORT','https://wordpress.org/support/theme/hotel-resort/','hotel-resort');
define('HOTEL_RESORT_BUY_NOW','https://www.logicalthemes.com/themes/premium-hotel-resort-wordpress-theme/','hotel-resort');
define('HOTEL_RESORT_LIVE_DEMO','https://logicalthemes.com/hotel-resort-wordpress-theme/','hotel-resort');
define('HOTEL_RESORT_PRO_DOC','https://logicalthemes.com/docs/hotel-resort-pro/','hotel-resort');
define('HOTEL_RESORT_DEMO_DATA','https://logicalthemes.com/docs/hotel-resort-demo.xml.zip','hotel-resort');
define('HOTEL_RESORT_CREDIT','https://www.logicalthemes.com/','hotel-resort');
if ( ! function_exists( 'hotel_resort_credit' ) ) {
	function hotel_resort_credit(){
		echo "<a href=".esc_url(HOTEL_RESORT_CREDIT)." target='_blank'>".esc_html__('Logical Themes','hotel-resort')."</a>";
	}
}

/*radio button sanitization*/
function hotel_resort_sanitize_choices( $input, $setting ) {
    global $wp_customize;
    $control = $wp_customize->get_control( $setting->id );
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

/* Theme Widgets Setup */
function hotel_resort_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'hotel-resort' ),
		'description'   => __( 'Appears on blog page sidebar', 'hotel-resort' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Posts and Pages Sidebar', 'hotel-resort' ),
		'description'   => __( 'Appears on posts and pages', 'hotel-resort' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 3', 'hotel-resort' ),
		'description'   => __( 'Appears on posts and pages', 'hotel-resort' ),
		'id'            => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'hotel-resort' ),
		'description'   => __( 'Appears in footer', 'hotel-resort' ),
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'hotel-resort' ),
		'description'   => __( 'Appears in footer', 'hotel-resort' ),
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'hotel-resort' ),
		'description'   => __( 'Appears in footer', 'hotel-resort' ),
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 4', 'hotel-resort' ),
		'description'   => __( 'Appears in footer', 'hotel-resort' ),
		'id'            => 'footer-4',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'hotel_resort_widgets_init' );

/* Theme Font URL */
function hotel_resort_font_url() {
	$font_url = '';
	$font_family = array();
	$font_family[] = 'PT Sans:300,400,600,700,800,900';
	$font_family[] = 'Roboto:400,700';
	$font_family[] = 'Roboto Condensed:400,700';
	$font_family[] = 'Open Sans';
	$font_family[] = 'Overpass';
	$font_family[] = 'Montserrat:300,400,600,700,800,900';
	$font_family[] = 'Playball:300,400,600,700,800,900';
	$font_family[] = 'Alegreya:300,400,600,700,800,900';
	$font_family[] = 'Julius Sans One';
	$font_family[] = 'Arsenal';
	$font_family[] = 'Slabo';
	$font_family[] = 'Lato';
	$font_family[] = 'Overpass Mono';
	$font_family[] = 'Source Sans Pro';
	$font_family[] = 'Raleway';
	$font_family[] = 'Merriweather';
	$font_family[] = 'Droid Sans';
	$font_family[] = 'Rubik';
	$font_family[] = 'Lora';
	$font_family[] = 'Ubuntu';
	$font_family[] = 'Cabin';
	$font_family[] = 'Arimo';
	$font_family[] = 'Playfair Display';
	$font_family[] = 'Quicksand';
	$font_family[] = 'Padauk';
	$font_family[] = 'Muli';
	$font_family[] = 'Inconsolata';
	$font_family[] = 'Bitter';
	$font_family[] = 'Pacifico';
	$font_family[] = 'Indie Flower';
	$font_family[] = 'VT323';
	$font_family[] = 'Dosis';
	$font_family[] = 'Frank Ruhl Libre';
	$font_family[] = 'Fjalla One';
	$font_family[] = 'Oxygen';
	$font_family[] = 'Arvo';
	$font_family[] = 'Noto Serif';
	$font_family[] = 'Lobster';
	$font_family[] = 'Crimson Text';
	$font_family[] = 'Yanone Kaffeesatz';
	$font_family[] = 'Anton';
	$font_family[] = 'Libre Baskerville';
	$font_family[] = 'Bree Serif';
	$font_family[] = 'Gloria Hallelujah';
	$font_family[] = 'Josefin Sans';
	$font_family[] = 'Abril Fatface';
	$font_family[] = 'Varela Round';
	$font_family[] = 'Vampiro One';
	$font_family[] = 'Shadows Into Light';
	$font_family[] = 'Cuprum';
	$font_family[] = 'Rokkitt';
	$font_family[] = 'Vollkorn';
	$font_family[] = 'Francois One';
	$font_family[] = 'Orbitron';
	$font_family[] = 'Patua One';
	$font_family[] = 'Acme';
	$font_family[] = 'Satisfy';
	$font_family[] = 'Josefin Slab';
	$font_family[] = 'Quattrocento Sans';
	$font_family[] = 'Architects Daughter';
	$font_family[] = 'Russo One';
	$font_family[] = 'Monda';
	$font_family[] = 'Righteous';
	$font_family[] = 'Lobster Two';
	$font_family[] = 'Hammersmith One';
	$font_family[] = 'Courgette';
	$font_family[] = 'Permanent Marker';
	$font_family[] = 'Cherry Swash';
	$font_family[] = 'Cormorant Garamond';
	$font_family[] = 'Poiret One';
	$font_family[] = 'BenchNine';
	$font_family[] = 'Economica';
	$font_family[] = 'Handlee';
	$font_family[] = 'Cardo';
	$font_family[] = 'Alfa Slab One';
	$font_family[] = 'Averia Serif Libre';
	$font_family[] = 'Cookie';
	$font_family[] = 'Chewy';
	$font_family[] = 'Great Vibes';
	$font_family[] = 'Coming Soon';
	$font_family[] = 'Philosopher';
	$font_family[] = 'Days One';
	$font_family[] = 'Kanit';
	$font_family[] = 'Shrikhand';
	$font_family[] = 'Tangerine';
	$font_family[] = 'IM Fell English SC';
	$font_family[] = 'Boogaloo';
	$font_family[] = 'Bangers';
	$font_family[] = 'Fredoka One';
	$font_family[] = 'Bad Script';
	$font_family[] = 'Volkhov';
	$font_family[] = 'Shadows Into Light Two';
	$font_family[] = 'Marck Script';
	$font_family[] = 'Sacramento';
	$font_family[] = 'Unica One';

	$query_args = array(
		'family'	=> urlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
}


/* Theme enqueue scripts */
function hotel_resort_scripts() {
	wp_enqueue_style( 'hotel-resort-font', hotel_resort_font_url(), array() );
	wp_enqueue_style( 'css-bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
	wp_enqueue_style( 'hotel-resort-basic-style', get_stylesheet_uri() );
	wp_style_add_data( 'hotel-resort-style', 'rtl', 'replace' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/css/fontawesome-all.css' );
	wp_enqueue_style( 'css-nivo-style', get_template_directory_uri().'/css/nivo-slider.css' );

	// Slider
		$hotel_resort_slider_title_color = get_theme_mod('hotel_resort_slider_title_color', '');
	    $hotel_resort_slider_title_font_family = get_theme_mod('hotel_resort_slider_title_font_family', '');
	    $hotel_resort_slider_title_font_size = get_theme_mod('hotel_resort_slider_title_font_size', '');
	    // Button
		$hotel_resort_slider_atag_color = get_theme_mod('hotel_resort_slider_atag_color', '');
	    $hotel_resort_slider_atag_font_family = get_theme_mod('hotel_resort_slider_atag_font_family', '');
	    $hotel_resort_slider_atag_font_size = get_theme_mod('hotel_resort_slider_atag_font_size', '');
	    // Paragraph
	    $hotel_resort_slider_paragraph_color = get_theme_mod('hotel_resort_slider_paragraph_color', '');
	    $hotel_resort_slider_paragraph_font_family = get_theme_mod('hotel_resort_slider_paragraph_font_family', '');
	    $hotel_resort_slider_paragraph_font_size = get_theme_mod('hotel_resort_slider_paragraph_font_size', '');

	//topbar
	    
	    $hotel_resort_topbar_color = get_theme_mod('hotel_resort_topbar_color', '');
	    $hotel_resort_topbar_font_family = get_theme_mod('hotel_resort_topbar_font_family', '');
	    $hotel_resort_topbar_font_size = get_theme_mod('hotel_resort_topbar_font_size', '');

		//social media
	     // buttons
		$hotel_resort_socialicons_atag_color = get_theme_mod('hotel_resort_socialicons_atag_color', '');
		//logo
	    $hotel_resort_logo_atag_color = get_theme_mod('hotel_resort_logo_atag_color', '');
	    //logo heading
	    $hotel_resort_logo_font_family = get_theme_mod('hotel_resort_logo_font_family', '');
	    $hotel_resort_logo_font_size = get_theme_mod('hotel_resort_logo_font_size', '');
	    //description
	    $hotel_resort_description_color = get_theme_mod('hotel_resort_description_color', '');
	    $hotel_resort_description_font_family = get_theme_mod('hotel_resort_description_font_family', '');
	    $hotel_resort_description_font_size = get_theme_mod('hotel_resort_description_font_size', '');
	// Accomodation
		$hotel_resort_accomodation_heading_color = get_theme_mod('hotel_resort_accomodation_heading_color', '');
	    $hotel_resort_accomodation_heading_font_family = get_theme_mod('hotel_resort_accomodation_heading_font_family', '');
	    $hotel_resort_accomodation_heading_font_size = get_theme_mod('hotel_resort_accomodation_heading_font_size', '');
	    // Button
		$hotel_resort_accomodation_atag_color = get_theme_mod('hotel_resort_accomodation_atag_color', '');
	    $hotel_resort_accomodation_atag_font_family = get_theme_mod('hotel_resort_accomodation_atag_font_family', '');
	     $hotel_resort_accomodation_atag_font_size = get_theme_mod('hotel_resort_accomodation_atag_font_size', '');
	    // Paragraph
	    $hotel_resort_accomodation_paragraph_color = get_theme_mod('hotel_resort_accomodation_paragraph_color', '');
	    $hotel_resort_accomodation_paragraph_font_family = get_theme_mod('hotel_resort_accomodation_paragraph_font_family', '');
	    $hotel_resort_accomodation_paragraph_font_size = get_theme_mod('hotel_resort_accomodation_paragraph_font_size', '');
	    //subtitle
	    $hotel_resort_accomodation_subtitle_font_size = get_theme_mod('hotel_resort_accomodation_subtitle_font_size', '');
	    //service
	    $hotel_resort_accomodation_service_font_size = get_theme_mod('hotel_resort_accomodation_service_font_size', '');


	    $custom_css ='
			#slider .slide-cap h2{
			    color:'.esc_html($hotel_resort_slider_title_color).'!important;
			    font-family: '.esc_html($hotel_resort_slider_title_font_family).'!important;
			    font-size: '.esc_html($hotel_resort_slider_title_font_size).'!important;
			}
			#slider .slide-cap a.read-more{
				color:'.esc_html($hotel_resort_slider_atag_color).'!important;
			    font-family: '.esc_html($hotel_resort_slider_atag_font_family).'!important;
			    font-size: '.esc_html($hotel_resort_slider_atag_font_size).'!important;
			}
			#slider .slide-cap p{
			    color:'.esc_html($hotel_resort_slider_paragraph_color).'!important;
			    font-family: '.esc_html($hotel_resort_slider_paragraph_font_family).'!important;
			    font-size: '.esc_html($hotel_resort_slider_paragraph_font_size).'!important;
			}
			p.phone, p.mail, p.location,.top-contact i ,.social-media i,.top-contact{
			    color:'.esc_html($hotel_resort_topbar_color).'!important;
			    font-size: '.esc_html($hotel_resort_topbar_font_size).'!important;
			}
			p.phone, p.mail, p.location{
			    font-family: '.esc_html($hotel_resort_topbar_font_family).'!important;
			}
			.header .logo a{
				color:'.esc_html($hotel_resort_logo_atag_color).'!important;
			}
			.header .logo h1,.header .logo a{
				font-family: '.esc_html($hotel_resort_logo_font_family).'!important;
			    font-size: '.esc_html($hotel_resort_logo_font_size).'!important;
			}
			.header .logo p{
			    color:'.esc_html($hotel_resort_description_color).'!important;
			    font-family: '.esc_html($hotel_resort_description_font_family).'!important;
			    font-size: '.esc_html($hotel_resort_description_font_size).'!important;
			}
			#accomodation h4,#accomodation h3,.subtitle{
			    color:'.esc_html($hotel_resort_accomodation_heading_color).'!important;
			    font-family: '.esc_html($hotel_resort_accomodation_heading_font_family).'!important;
			    font-size: '.esc_html($hotel_resort_accomodation_heading_font_size).'!important;
			}
			#accomodation a.r_button{
				color:'.esc_html($hotel_resort_accomodation_atag_color).'!important;
			    font-family: '.esc_html($hotel_resort_accomodation_atag_font_family).'!important;
			    font-size: '.esc_html($hotel_resort_accomodation_atag_font_size).'!important;
			}
			#accomodation p{
			    color:'.esc_html($hotel_resort_accomodation_paragraph_color).'!important;
			    font-family: '.esc_html($hotel_resort_accomodation_paragraph_font_family).'!important;
			    font-size: '.esc_html($hotel_resort_accomodation_paragraph_font_size).'!important;
			}
			.subtitle{
				font-size: '.esc_html($hotel_resort_accomodation_subtitle_font_size).'!important;
			}
			#accomodation h4{
				font-size: '.esc_html($hotel_resort_accomodation_service_font_size).'!important;
			}

			';

		wp_add_inline_style( 'hotel-resort-basic-style',$custom_css );

	wp_enqueue_script( 'nivo-slider-jquery', get_template_directory_uri() . '/js/jquery.nivo.slider.js', array('jquery') );
	wp_enqueue_script( 'bootstrap-jquery', get_template_directory_uri() . '/js/bootstrap.js', array('jquery') ,'',true);
	wp_enqueue_script( 'hotel-resort-customscripts', get_template_directory_uri() . '/js/custom.js', array('jquery') );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'hotel_resort_scripts' );

function hotel_resort_ie_stylesheet(){
	wp_enqueue_style('hotel-resort-ie', get_template_directory_uri().'/css/ie.css', array('hotel-resort-basic-style'));
	wp_style_add_data( 'hotel-resort-ie', 'conditional', 'IE' );
}
add_action('wp_enqueue_scripts','hotel_resort_ie_stylesheet');


/* Custom template tags for this theme. */
require get_template_directory() . '/inc/template-tags.php';

/* Load Jetpack compatibility file. */
require get_template_directory() . '/inc/customizer.php';

/* Implement the Custom Header feature. */
require get_template_directory() . '/inc/custom-header.php';

/* Implement the About theme page */
require get_template_directory() . '/inc/getting-started/getting-started.php';
