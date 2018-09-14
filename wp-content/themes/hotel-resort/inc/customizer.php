<?php
/**
 * Hotel Resort Theme Customizer
 *
 * @package Hotel Resort
 */

/**
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function hotel_resort_customize_register( $wp_customize ) {	

	//add home page setting pannel
	$wp_customize->add_panel( 'hotel_resort_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'hotel-resort' ),
	    'description' => __( 'Description of what this panel does.', 'hotel-resort' ),
	) );

	$wp_customize->add_section( 'hotel_resort_left_right' , array(
    	'title'      => __( 'General Settings', 'hotel-resort' ),
		'priority'   => null,
		'panel' => 'hotel_resort_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('hotel_resort_theme_options',array(
        'default' => __( 'Right Sidebar', 'hotel-resort' ),
        'sanitize_callback' => 'hotel_resort_sanitize_choices'	        
	));

	$wp_customize->add_control('hotel_resort_theme_options',
	    array(
	        'type' => 'radio',
	        'label' => __( 'Do you want this section', 'hotel-resort' ),
	        'section' => 'hotel_resort_left_right',
	        'choices' => array(
	            'One Column' => __('One Column ','hotel-resort'),
	            'Three Columns' => __('Three Columns','hotel-resort'),
	            'Four Columns' => __('Four Columns','hotel-resort'),
	            'Right Sidebar' => __('Right Sidebar','hotel-resort'),
	            'Left Sidebar' => __('Left Sidebar','hotel-resort'),
	            'Grid Layout' => __('Grid Layout','hotel-resort')
	        ),
	));

	$font_array = array(
    '' => __( 'No Fonts', 'hotel-resort' ),
    'Abril Fatface' => __( 'Abril Fatface', 'hotel-resort' ),
    'Acme' => __( 'Acme', 'hotel-resort' ),
    'Anton' => __( 'Anton', 'hotel-resort' ),
    'Architects Daughter' => __( 'Architects Daughter', 'hotel-resort' ),
    'Arimo' => __( 'Arimo', 'hotel-resort' ),
    'Arsenal' => __( 'Arsenal', 'hotel-resort' ),
    'Arvo' => __( 'Arvo', 'hotel-resort' ),
    'Alegreya' => __( 'Alegreya', 'hotel-resort' ),
    'Alfa Slab One' => __( 'Alfa Slab One', 'hotel-resort' ),
    'Averia Serif Libre' => __( 'Averia Serif Libre', 'hotel-resort' ),
    'Bangers' => __( 'Bangers', 'hotel-resort' ),
    'Boogaloo' => __( 'Boogaloo', 'hotel-resort' ),
    'Bad Script' => __( 'Bad Script', 'hotel-resort' ),
    'Bitter' => __( 'Bitter', 'hotel-resort' ),
    'Bree Serif' => __( 'Bree Serif', 'hotel-resort' ),
    'BenchNine' => __( 'BenchNine', 'hotel-resort' ),
    'Cabin' => __( 'Cabin', 'hotel-resort' ),
    'Cardo' => __( 'Cardo', 'hotel-resort' ),
    'Courgette' => __( 'Courgette', 'hotel-resort' ),
    'Cherry Swash' => __( 'Cherry Swash', 'hotel-resort' ),
    'Cormorant Garamond' => __( 'Cormorant Garamond', 'hotel-resort' ),
    'Crimson Text' => __( 'Crimson Text', 'hotel-resort' ),
    'Cuprum' => __( 'Cuprum', 'hotel-resort' ),
    'Cookie' => __( 'Cookie', 'hotel-resort' ),
    'Chewy' => __( 'Chewy', 'hotel-resort' ),
    'Days One' => __( 'Days One', 'hotel-resort' ),
    'Dosis' => __( 'Dosis', 'hotel-resort' ),
    'Droid Sans' => __( 'Droid Sans', 'hotel-resort' ),
    'Economica' => __( 'Economica', 'hotel-resort' ),
	'Fredoka One' => __( 'Fredoka One', 'hotel-resort' ),
    'Fjalla One' => __( 'Fjalla One', 'hotel-resort' ),
    'Francois One' => __( 'Francois One', 'hotel-resort' ),
    'Frank Ruhl Libre' => __( 'Frank Ruhl Libre', 'hotel-resort' ),
    'Gloria Hallelujah' => __( 'Gloria Hallelujah', 'hotel-resort' ),
    'Great Vibes' => __( 'Great Vibes', 'hotel-resort' ),
    'Handlee' => __( 'Handlee', 'hotel-resort' ),
    'Hammersmith One' => __( 'Hammersmith One', 'hotel-resort' ),
    'Inconsolata' => __( 'Inconsolata', 'hotel-resort' ),
    'Indie Flower' => __( 'Indie Flower', 'hotel-resort' ),
    'IM Fell English SC' => __( 'IM Fell English SC', 'hotel-resort' ),
    'Julius Sans One' => __( 'Julius Sans One', 'hotel-resort' ),
    'Josefin Slab' => __( 'Josefin Slab', 'hotel-resort' ),
    'Josefin Sans' => __( 'Josefin Sans', 'hotel-resort' ),
    'Kanit' => __( 'Kanit', 'hotel-resort' ),
    'Lobster' => __( 'Lobster', 'hotel-resort' ),
    'Lato' => __( 'Lato', 'hotel-resort' ),
    'Lora' => __( 'Lora', 'hotel-resort' ),
    'Libre Baskerville' => __( 'Libre Baskerville', 'hotel-resort' ),
    'Lobster Two' => __( 'Lobster Two', 'hotel-resort' ),
    'Merriweather' => __( 'Merriweather', 'hotel-resort' ),
    'Monda' => __( 'Monda', 'hotel-resort' ),
    'Montserrat' => __( 'Montserrat', 'hotel-resort' ),
    'Muli' => __( 'Muli', 'hotel-resort' ),
    'Marck Script' => __( 'Marck Script', 'hotel-resort' ),
    'Noto Serif' => __( 'Noto Serif', 'hotel-resort' ),
    'Open Sans' => __( 'Open Sans', 'hotel-resort' ),
    'Overpass' => __( 'Overpass', 'hotel-resort' ),
    'Overpass Mono' => __( 'Overpass Mono', 'hotel-resort' ),
    'Oxygen' => __( 'Oxygen', 'hotel-resort' ),
    'Orbitron' => __( 'Orbitron', 'hotel-resort' ),
    'Patua One' => __( 'Patua One', 'hotel-resort' ),
    'Pacifico' => __( 'Pacifico', 'hotel-resort' ),
    'Padauk' => __( 'Padauk', 'hotel-resort' ),
    'Playball' => __( 'Playball', 'hotel-resort' ),
    'Playfair Display' => __( 'Playfair Display', 'hotel-resort' ),
    'PT Sans' => __( 'PT Sans', 'hotel-resort' ),
    'Philosopher' => __( 'Philosopher', 'hotel-resort' ),
    'Permanent Marker' => __( 'Permanent Marker', 'hotel-resort' ),
    'Poiret One' => __( 'Poiret One', 'hotel-resort' ),
    'Quicksand' => __( 'Quicksand', 'hotel-resort' ),
    'Quattrocento Sans' => __( 'Quattrocento Sans', 'hotel-resort' ),
    'Raleway' => __( 'Raleway', 'hotel-resort' ),
    'Rubik' => __( 'Rubik', 'hotel-resort' ),
    'Rokkitt' => __( 'Rokkitt', 'hotel-resort' ),
    'Russo One' => __( 'Russo One', 'hotel-resort' ),
    'Righteous' => __( 'Righteous', 'hotel-resort' ),
    'Slabo' => __( 'Slabo', 'hotel-resort' ),
    'Source Sans Pro' => __( 'Source Sans Pro', 'hotel-resort' ),
    'Shadows Into Light Two' => __( 'Shadows Into Light Two', 'hotel-resort'),
    'Shadows Into Light' => __( 'Shadows Into Light', 'hotel-resort' ),
    'Sacramento' => __( 'Sacramento', 'hotel-resort' ),
    'Shrikhand' => __( 'Shrikhand', 'hotel-resort' ),
    'Tangerine' => __( 'Tangerine', 'hotel-resort' ),
    'Ubuntu' => __( 'Ubuntu', 'hotel-resort' ),
    'VT323' => __( 'VT323', 'hotel-resort' ),
    'Varela Round' => __( 'Varela Round', 'hotel-resort' ),
    'Vampiro One' => __( 'Vampiro One','hotel-resort' ),
    'Vollkorn' => __( 'Vollkorn', 'hotel-resort' ),
    'Volkhov' => __( 'Volkhov','hotel-resort' ),
    'Yanone Kaffeesatz' => __( 'Yanone Kaffeesatz','hotel-resort' )
    );

	//Topbar section
	$wp_customize->add_section('hotel_resort_topbar',array(
		'title'	=> __('Topbar','hotel-resort'),
		'description'	=> __('Add Topbar Content here','hotel-resort'),
		'priority'	=> null,
		'panel' => 'hotel_resort_panel_id',
	));

	$wp_customize->add_setting('hotel_resort_phone',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('hotel_resort_phone',array(
		'label'	=> __('Add Phone Number','hotel-resort'),
		'section'	=> 'hotel_resort_topbar',
		'setting'	=> 'hotel_resort_phone',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('hotel_resort_mail',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('hotel_resort_mail',array(
		'label'	=> __('Add Email','hotel-resort'),
		'section'	=> 'hotel_resort_topbar',
		'setting'	=> 'hotel_resort_mail',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('hotel_resort_location',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('hotel_resort_location',array(
		'label'	=> __('Add Location','hotel-resort'),
		'section'	=> 'hotel_resort_topbar',
		'setting'	=> 'hotel_resort_location',
		'type'		=> 'text'
	));

	// This is Topbar Color picker setting
	$wp_customize->add_setting( 'hotel_resort_topbar_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hotel_resort_topbar_color', array(
		'label' => __('Topbar Color', 'hotel-resort'),
		'section' => 'hotel_resort_topbar',
		'settings' => 'hotel_resort_topbar_color',
	)));

	//This is Topbar FontFamily picker setting
	$wp_customize->add_setting('hotel_resort_topbar_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'hotel_resort_sanitize_choices'
	));
	$wp_customize->add_control('hotel_resort_topbar_font_family', array(
	    'section'  => 'hotel_resort_topbar',
	    'label'    => __( 'Topbar Fonts','hotel-resort'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting('hotel_resort_topbar_font_size',array(
		'default'	=> '12px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('hotel_resort_topbar_font_size',array(
		'label'	=> __('Topbar Font Size','hotel-resort'),
		'section'	=> 'hotel_resort_topbar',
		'setting'	=> 'hotel_resort_topbar_font_size',
		'type'	=> 'text'
	));

	// This is Logo Tag Color picker setting
	$wp_customize->add_setting( 'hotel_resort_logo_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hotel_resort_logo_atag_color', array(
		'label' => __('Logo', 'hotel-resort'),
		'section' => 'hotel_resort_topbar',
		'settings' => 'hotel_resort_logo_atag_color',
	)));

	//This is logo FontFamily picker setting
	$wp_customize->add_setting('hotel_resort_logo_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'hotel_resort_sanitize_choices'
	));
	$wp_customize->add_control('hotel_resort_logo_font_family', array(
	    'section'  => 'hotel_resort_topbar',
	    'label'    => __( 'Logo Font','hotel-resort'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is logo FontSize setting
	$wp_customize->add_setting('hotel_resort_logo_font_size',array(
		'default'	=> '45px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('hotel_resort_logo_font_size',array(
		'label'	=> __('Logo Font Size','hotel-resort'),
		'section'	=> 'hotel_resort_topbar',
		'setting'	=> 'hotel_resort_logo_font_size',
		'type'	=> 'text'
	));

	// This is Description Color picker setting
	$wp_customize->add_setting( 'hotel_resort_description_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hotel_resort_description_color', array(
		'label' => __('Description Color', 'hotel-resort'),
		'section' => 'hotel_resort_topbar',
		'settings' => 'hotel_resort_description_color',
	)));

	//This is Description FontFamily picker setting
	$wp_customize->add_setting('hotel_resort_description_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'hotel_resort_sanitize_choices'
	));
	$wp_customize->add_control('hotel_resort_description_font_family', array(
	    'section'  => 'hotel_resort_topbar',
	    'label'    => __( 'Description Fonts','hotel-resort'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting('hotel_resort_description_font_size',array(
		'default'	=> '12px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('hotel_resort_description_font_size',array(
		'label'	=> __('Description Font Size','hotel-resort'),
		'section'	=> 'hotel_resort_topbar',
		'setting'	=> 'hotel_resort_description_font_size',
		'type'	=> 'text'
	));

	//Social Icons(topbar)
	$wp_customize->add_section('hotel_resort_social_media',array(
		'title'	=> __('Social Media','hotel-resort'),
		'description'	=> __('Add Social Media Url here','hotel-resort'),
		'priority'	=> null,
		'panel' => 'hotel_resort_panel_id',
	));

	$wp_customize->add_setting('hotel_resort_youtube_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('hotel_resort_youtube_url',array(
		'label'	=> __('Add Youtube link','hotel-resort'),
		'section'	=> 'hotel_resort_social_media',
		'setting'	=> 'hotel_resort_youtube_url',
		'type'		=> 'url'
	));

	$wp_customize->add_setting('hotel_resort_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('hotel_resort_facebook_url',array(
		'label'	=> __('Add Facebook link','hotel-resort'),
		'section'	=> 'hotel_resort_social_media',
		'setting'	=> 'hotel_resort_facebook_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('hotel_resort_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('hotel_resort_twitter_url',array(
		'label'	=> __('Add Twitter link','hotel-resort'),
		'section'	=> 'hotel_resort_social_media',
		'setting'	=> 'hotel_resort_twitter_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('hotel_resort_rss_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('hotel_resort_rss_url',array(
		'label'	=> __('Add RSS link','hotel-resort'),
		'section'	=> 'hotel_resort_social_media',
		'setting'	=> 'hotel_resort_rss_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('hotel_resort_insta_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('hotel_resort_insta_url',array(
		'label'	=> __('Add Instagram link','hotel-resort'),
		'section'	=> 'hotel_resort_social_media',
		'setting'	=> 'hotel_resort_insta_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('hotel_resort_pint_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('hotel_resort_pint_url',array(
		'label'	=> __('Add Pinterest link','hotel-resort'),
		'section'	=> 'hotel_resort_social_media',
		'setting'	=> 'hotel_resort_pint_url',
		'type'	=> 'url'
	));

	//home page slider
	$wp_customize->add_section( 'hotel_resort_slidersettings' , array(
    	'title'      => __( 'Slider Settings', 'hotel-resort' ),
		'priority'   => null,
		'panel' => 'hotel_resort_panel_id'
	) );

	for ( $count = 1; $count <= 4; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'hotel_resort_slidersettings-page-' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'absint'
		) );

		$wp_customize->add_control( 'hotel_resort_slidersettings-page-' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'hotel-resort' ),
			'section'  => 'hotel_resort_slidersettings',
			'type'     => 'dropdown-pages'
		) );		
	}

	// This is title Color picker setting
	$wp_customize->add_setting( 'hotel_resort_slider_title_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hotel_resort_slider_title_color', array(
		'label' => __('Title Color', 'hotel-resort'),
		'section' => 'hotel_resort_slidersettings',
		'settings' => 'hotel_resort_slider_title_color',
	)));

	//This is title FontFamily picker setting
	$wp_customize->add_setting('hotel_resort_slider_title_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'hotel_resort_sanitize_choices'
	));
	$wp_customize->add_control('hotel_resort_slider_title_font_family', array(
	    'section'  => 'hotel_resort_slidersettings',
	    'label'    => __( 'Title Fonts','hotel-resort'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting('hotel_resort_slider_title_font_size',array(
		'default'	=> '12px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('hotel_resort_slider_title_font_size',array(
		'label'	=> __('Title Font Size','hotel-resort'),
		'section'	=> 'hotel_resort_slidersettings',
		'setting'	=> 'hotel_resort_slider_title_font_size',
		'type'	=> 'text'
	));

	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'hotel_resort_slider_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hotel_resort_slider_paragraph_color', array(
		'label' => __('Content Color', 'hotel-resort'),
		'section' => 'hotel_resort_slidersettings',
		'settings' => 'hotel_resort_slider_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('hotel_resort_slider_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'hotel_resort_sanitize_choices'
	));
	$wp_customize->add_control(
	    'hotel_resort_slider_paragraph_font_family', array(
	    'section'  => 'hotel_resort_slidersettings',
	    'label'    => __( 'Content Fonts','hotel-resort'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting('hotel_resort_slider_paragraph_font_size',array(
		'default'	=> '12px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('hotel_resort_slider_paragraph_font_size',array(
		'label'	=> __('Content Font Size','hotel-resort'),
		'section'	=> 'hotel_resort_slidersettings',
		'setting'	=> 'hotel_resort_slider_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is Button Color picker setting
	$wp_customize->add_setting( 'hotel_resort_slider_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hotel_resort_slider_atag_color', array(
		'label' => __('Button Color', 'hotel-resort'),
		'section' => 'hotel_resort_slidersettings',
		'settings' => 'hotel_resort_slider_atag_color',
	)));

	//This is Button FontFamily picker setting
	$wp_customize->add_setting('hotel_resort_slider_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'hotel_resort_sanitize_choices'
	));
	$wp_customize->add_control('hotel_resort_slider_atag_font_family', array(
	    'section'  => 'hotel_resort_slidersettings',
	    'label'    => __( 'Button Fonts','hotel-resort'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting('hotel_resort_slider_atag_font_size',array(
		'default'	=> '12px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('hotel_resort_slider_atag_font_size',array(
		'label'	=> __('Button Font Size','hotel-resort'),
		'section'	=> 'hotel_resort_slidersettings',
		'setting'	=> 'hotel_resort_slider_atag_font_size',
		'type'	=> 'text'
	));
	
	//Accomodation
	$wp_customize->add_section('hotel_resort_acco',array(
		'title'	=> __('Accomodation','hotel-resort'),
		'description'=> __('This section will appear below the slider.','hotel-resort'),
		'panel' => 'hotel_resort_panel_id',
	));
	
	
	$wp_customize->add_setting('hotel_resort_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('hotel_resort_title',array(
		'label'	=> __('Section Title','hotel-resort'),
		'section'=> 'hotel_resort_acco',
		'setting'=> 'hotel_resort_title',
		'type'=> 'text'
	));
	
	$wp_customize->add_setting('hotel_resort_subtitle',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('hotel_resort_subtitle',array(
		'label'	=> __('Section Sub-Title','hotel-resort'),
		'section'=> 'hotel_resort_acco',
		'setting'=> 'hotel_resort_subtitle',
		'type'=> 'text'
	));

	for ( $count = 0; $count <= 2; $count++ ) {

	$wp_customize->add_setting( 'hotel_resort_page_settings' . $count, array(
		'default'           => '',
		'sanitize_callback' => 'absint'
	));
	$wp_customize->add_control( 'hotel_resort_page_settings' . $count, array(
		'label'    => __( 'Select Accomodation Page', 'hotel-resort' ),
		'section'  => 'hotel_resort_acco',
		'type'     => 'dropdown-pages'
	));

	// This is accomodation title Color picker setting
	$wp_customize->add_setting( 'hotel_resort_accomodation_heading_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hotel_resort_accomodation_heading_color', array(
		'label' => __('Title Color', 'hotel-resort'),
		'section' => 'hotel_resort_acco',
		'settings' => 'hotel_resort_accomodation_heading_color',
	)));

	//This is accomodation FontFamily picker setting
	$wp_customize->add_setting('hotel_resort_accomodation_heading_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'hotel_resort_sanitize_choices'
	));
	$wp_customize->add_control('hotel_resort_accomodation_heading_font_family', array(
	    'section'  => 'hotel_resort_acco',
	    'label'    => __( 'Title Fonts','hotel-resort'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is accomodation FontSize setting
	$wp_customize->add_setting('hotel_resort_accomodation_heading_font_size',array(
		'default'	=> '45px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('hotel_resort_accomodation_heading_font_size',array(
		'label'	=> __('Title Font Size','hotel-resort'),
		'section'	=> 'hotel_resort_acco',
		'setting'	=> 'hotel_resort_accomodation_heading_font_size',
		'type'	=> 'text'
	));

	//This is Accomodation subtitle FontSize setting
	$wp_customize->add_setting('hotel_resort_accomodation_subtitle_font_size',array(
		'default'	=> '45px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('hotel_resort_accomodation_subtitle_font_size',array(
		'label'	=> __('Subtitle Font Size','hotel-resort'),
		'section'	=> 'hotel_resort_acco',
		'setting'	=> 'hotel_resort_accomodation_subtitle_font_size',
		'type'	=> 'text'
	));

	//This is heading subtitle FontSize setting
	$wp_customize->add_setting('hotel_resort_accomodation_service_font_size',array(
		'default'	=> '45px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('hotel_resort_accomodation_service_font_size',array(
		'label'	=> __('Service Heading Font Size','hotel-resort'),
		'section'	=> 'hotel_resort_acco',
		'setting'	=> 'hotel_resort_accomodation_service_font_size',
		'type'	=> 'text'
	));	

	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'hotel_resort_accomodation_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hotel_resort_accomodation_paragraph_color', array(
		'label' => __('Content Color', 'hotel-resort'),
		'section' => 'hotel_resort_acco',
		'settings' => 'hotel_resort_accomodation_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('hotel_resort_accomodation_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'hotel_resort_sanitize_choices'
	));
	$wp_customize->add_control('hotel_resort_accomodation_paragraph_font_family', array(
	    'section'  => 'hotel_resort_acco',
	    'label'    => __( 'Content Fonts','hotel-resort'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting('hotel_resort_accomodation_paragraph_font_size',array(
		'default'	=> '12px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('hotel_resort_accomodation_paragraph_font_size',array(
		'label'	=> __('Content Font Size','hotel-resort'),
		'section'	=> 'hotel_resort_acco',
		'setting'	=> 'hotel_resort_accomodation_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is Button Color picker setting
	$wp_customize->add_setting( 'hotel_resort_accomodation_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hotel_resort_accomodation_atag_color', array(
		'label' => __('Button Color', 'hotel-resort'),
		'section' => 'hotel_resort_acco',
		'settings' => 'hotel_resort_accomodation_atag_color',
	)));

	//This is Button FontFamily picker setting
	$wp_customize->add_setting('hotel_resort_accomodation_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'hotel_resort_sanitize_choices'
	));
	$wp_customize->add_control('hotel_resort_accomodation_atag_font_family', array(
	    'section'  => 'hotel_resort_acco',
	    'label'    => __( 'Button Fonts','hotel-resort'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting('hotel_resort_accomodation_atag_font_size',array(
		'default'	=> '12px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('hotel_resort_accomodation_atag_font_size',array(
		'label'	=> __('Button Font Size','hotel-resort'),
		'section'	=> 'hotel_resort_acco',
		'setting'	=> 'hotel_resort_accomodation_atag_font_size',
		'type'	=> 'text'
	));

	}

	//footer
	$wp_customize->add_section('hotel_resort_footer_section',array(
		'title'	=> __('Footer Text','hotel-resort'),
		'description'	=> __('Add some text for footer like copyright etc.','hotel-resort'),
		'panel' => 'hotel_resort_panel_id'
	));
	
	$wp_customize->add_setting('hotel_resort_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('hotel_resort_footer_copy',array(
		'label'	=> __('Copyright Text','hotel-resort'),
		'section'	=> 'hotel_resort_footer_section',
		'type'		=> 'text'
	));
	
}
add_action( 'customize_register', 'hotel_resort_customize_register' );	

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Hotel_Resort_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Hotel_Resort_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Hotel_Resort_Customize_Section_Pro(
				$manager,
				'example_1',
				array(
					'priority' => 9,
					'title'    => esc_html__( 'Hotel Resort Pro', 'hotel-resort' ),
					'pro_text' => esc_html__( 'Update Pro',         'hotel-resort' ),
					'pro_url'  => esc_url('https://www.logicalthemes.com/themes/premium-hotel-resort-wordpress-theme/')
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'hotel-resort-customize-controls', trailingslashit( get_template_directory_uri() ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'hotel-resort-customize-controls', trailingslashit( get_template_directory_uri() ) . '/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Hotel_Resort_Customize::get_instance();