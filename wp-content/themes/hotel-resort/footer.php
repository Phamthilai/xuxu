<?php
/**
 * Displaying Footer.
 * @package Hotel Resort
 */
?>
<div class="footersec">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-3">
	            <?php dynamic_sidebar('footer-1');?>
	        </div>
	        <div class="col-md-3 col-sm-3">
	            <?php dynamic_sidebar('footer-2');?>
	        </div>
	        <div class="col-md-3 col-sm-3">
	            <?php dynamic_sidebar('footer-3');?>
	        </div> 
	        <div class="col-md-3 col-sm-3">
	            <?php dynamic_sidebar('footer-4');?>
	        </div>        
		</div>
	</div>
</div>
<div class="copyright-wrapper">
	<div class="inner">
        <div class="copyright">
           <p><?php echo esc_html(get_theme_mod('hotel_resort_footer_copy',__('Design & Developed By','hotel-resort'))); ?> <?php hotel_resort_credit(); ?></p>
        </div>
        <div class="clear"></div>
    </div>
</div>
<?php wp_footer(); ?>

</body>
</html>