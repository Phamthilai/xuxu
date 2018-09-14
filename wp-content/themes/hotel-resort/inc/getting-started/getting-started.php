<?php
//about theme info
add_action( 'admin_menu', 'hotel_resort_gettingstarted' );
function hotel_resort_gettingstarted() {    	
	add_theme_page( esc_html__('Get Started: Hotel Theme', 'hotel-resort'), esc_html__('Get Started', 'hotel-resort'), 'edit_theme_options', 'hotel_resort_guide', 'hotel_resort_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function hotel_resort_admin_theme_style() {
   wp_enqueue_style( 'hotel-resort-font', hotel_resort_admin_font_url(), array() );
   wp_enqueue_style('custom-admin-style', get_template_directory_uri() . '/inc/getting-started/getting-started.css');
   //wp_enqueue_script('tabs', get_template_directory_uri() . '/inc/getting-started/js/tab.js');
}
add_action('admin_enqueue_scripts', 'hotel_resort_admin_theme_style');

// Theme Font URL
function hotel_resort_admin_font_url() {
	$font_url = '';
	$font_family = array();
	$font_family[] = 'Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';

	$query_args = array(
		'family'	=> urlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
}

//guidline for about theme
function hotel_resort_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'hotel-resort' );
?>

<div class="wrapper-info">
	<div class="top-section">
	    <div class="col-left">
	    	<h2><?php esc_html_e( 'Welcome to Hotel Resort Theme', 'hotel-resort' ); ?></h2>
	    	<span class="version">Version: <?php echo esc_html($theme['Version']);?></span>
	    	<p><?php esc_html_e('Hotel Resort WordPress Theme is designed for resort, hotel, inn, bed and breakfast, holiday homes, accommodation, and room reservation services. Food critics, bloggers, and bakers can also use the hotel/resort based WordPress theme to make websites for recipes, cuisines, cakes shop, bakery items, Chinese dishes, and a lot more. It is built on the Bootstrap framework which is helpful in building professional websites and aids the theme designers/ developers a lot. This minimal WordPress theme has an easy to use WordPress Customizer, a variety of personalization options, secure and clean code, a testimonial section, interactive user interface, etc. You can display mesmerizing images of your resort and your team in the gallery section in addition to beautiful banners. The social media options integrated into the theme will make your site stand out from the competitors. Make your website amazing with this multipurpose, absolutely free, and completely mobile-friendly theme.','hotel-resort'); ?></p>
	    </div>
	    <div class="col-right">
	    	<div class="logo">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/free-theme-image.png" alt="" />
			</div>
	    </div>
	    <div class="info-link">
			<a href="<?php echo esc_url( HOTEL_RESORT_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'hotel-resort' ); ?></a>
			<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'hotel-resort'); ?></a>
			<a href="<?php echo esc_url( HOTEL_RESORT_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'hotel-resort'); ?></a>			
			<a href="<?php echo esc_url( HOTEL_RESORT_DEMO_DATA ); ?>" target="_blank"><?php esc_html_e('Demo Data', 'hotel-resort'); ?></a>
			<a class="get-pro" href="<?php echo esc_url( HOTEL_RESORT_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get Pro', 'hotel-resort'); ?></a>
		</div>
	</div>

	<div class="accordain-sec">
		<div class="block">
		  	<input type="radio" name="city" id="cityA" checked />   
		  	<label for="cityA"><span><?php esc_html_e( 'Visit to our amazing Premium Theme', 'hotel-resort' ); ?></span><span class="dashicons dashicons-arrow-down"></span></label>
		  	<div class="info1">
			  	<h3><?php esc_html_e( 'Premium Theme Information', 'hotel-resort' ); ?></h3>
			  	<hr class="hr-accr">
			  	<div class="sec-left-inner">
			  		<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/premium-theme-image.png" alt="" />
			  		<p class="lite-para"><?php esc_html_e('Premium hotel website template is the perfected and far superior version of free hotel theme. This responsive premium hotel website template has top-grade design and is laden with helpful features and theme related functionalities that is limited to our premium themes only. Our themes are made completely on Bootstrap V4 and have both secure and clean coding standard in all aspects ensuring safety and stability. All food industry-related businesses and owners can make use of our hotel/resort based WordPress theme to make websites for recipes, cuisines, cakes shop, bakery items, Chinese dishes and so on and so forth. This multipurpose theme template takes care of the security of the data and also provides much flexibility. Our premium hotel reservation website template come with unlimited sliders, multiple template pages, homepage templates, exclusive features & functionalities, woo commerce, secure and optimized codes, font Google family, typography, font awesome icons, custom header, backgrounds colours and so much more than it might not be enough envelope it all here.','hotel-resort'); ?></p>

					<div class="info-link-top">
						<a href="<?php echo esc_url( HOTEL_RESORT_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Buy Now', 'hotel-resort' ); ?></a>
						<a href="<?php echo esc_url( HOTEL_RESORT_LIVE_DEMO ); ?>" target="_blank"> <?php esc_html_e( 'Live Demo', 'hotel-resort' ); ?></a>
						<a href="<?php echo esc_url( HOTEL_RESORT_PRO_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Pro Documentation', 'hotel-resort' ); ?></a>
					</div>
					
			  	</div>
		  	</div>
		</div>
		<div class="block">
		  	<input type="radio" name="city" id="cityB"/>
		  	<label for="cityB"><span><?php esc_html_e( 'Theme Features', 'hotel-resort' ); ?></span><span class="dashicons dashicons-arrow-down"></span></label>
		  	<div class="info2">
			    <h3><?php esc_html_e( 'Lite Theme v/s Premium Theme', 'hotel-resort' ); ?></h3>
			  	<hr class="hr-accr">
			  	<div class="table-image">
					<table class="tablebox">
						<thead>
							<tr>
								<th></th>
								<th><?php esc_html_e('Free Themes', 'hotel-resort'); ?></th>
								<th><?php esc_html_e('Premium Themes', 'hotel-resort'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php esc_html_e('Theme Customization', 'hotel-resort'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Responsive Design', 'hotel-resort'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Logo Upload', 'hotel-resort'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Social Media Links', 'hotel-resort'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Slider Settings', 'hotel-resort'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Number of Slides', 'hotel-resort'); ?></td>
								<td class="table-img"><?php esc_html_e('4', 'hotel-resort'); ?></td>
								<td class="table-img"><?php esc_html_e('Unlimited', 'hotel-resort'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Template Pages', 'hotel-resort'); ?></td>
								<td class="table-img"><?php esc_html_e('3', 'hotel-resort'); ?></td>
								<td class="table-img"><?php esc_html_e('6', 'hotel-resort'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Home Page Template', 'hotel-resort'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'hotel-resort'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'hotel-resort'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Contact us Page Template', 'hotel-resort'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('1', 'hotel-resort'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Blog Templates & Layout', 'hotel-resort'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Full width/Left/Right Sidebar)', 'hotel-resort'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Page Templates & Layout', 'hotel-resort'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('2(Left/Right Sidebar)', 'hotel-resort'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Full Documentation', 'hotel-resort'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Latest WordPress Compatibility', 'hotel-resort'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Woo-Commerce Compatibility', 'hotel-resort'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support 3rd Party Plugins', 'hotel-resort'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Secure and Optimized Code', 'hotel-resort'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Exclusive Functionalities', 'hotel-resort'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no-alt"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Enable / Disable', 'hotel-resort'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no-alt"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Google Font Choices', 'hotel-resort'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no-alt"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Gallery', 'hotel-resort'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no-alt"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Simple & Mega Menu Option', 'hotel-resort'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no-alt"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Support to add custom CSS / JS ', 'hotel-resort'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no-alt"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Shortcodes', 'hotel-resort'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no-alt"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Custom Background, Colors, Header, Logo & Menu', 'hotel-resort'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no-alt"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Premium Membership', 'hotel-resort'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no-alt"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Budget Friendly Value', 'hotel-resort'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no-alt"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Priority Error Fixing', 'hotel-resort'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no-alt"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Custom Feature Addition', 'hotel-resort'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no-alt"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('All Access Theme Pass', 'hotel-resort'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no-alt"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Seamless Customer Support', 'hotel-resort'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no-alt"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr>
								<td></td>
								<td class="table-img"></td>
								<td class="update-link"><a href="<?php echo esc_url( HOTEL_RESORT_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get Pro', 'hotel-resort'); ?></a></td>
							</tr>
						</tbody>
					</table>
				</div>
		 	</div>
		</div>
	</div>
</div>
<?php } ?>