<?php

function theme_styles()
{
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/html/css/bootstrap.min.css' );
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri().'/html/css/magnific-popup.min.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/html/css/font-awesome.min.css' );
	wp_enqueue_style( 'styles', get_template_directory_uri().'/html/css/style.cssœ' );

}
function theme_scripts($value='')
{
	?>
	<script type="text/javascript">
	var get_template_directory_uri = "<?php echo get_template_directory_uri(); ?>";
	</script>
	<?php
	wp_enqueue_script('modernizr',get_template_directory_uri().'/html/js/modernizr.js',array(),'',false);
	wp_enqueue_script('jquery',get_template_directory_uri().'/html/js/jquery.min.js',array(),'',false);

	wp_enqueue_script('plugins',get_template_directory_uri().'/html/js/plugins.js',array(),'',true);
	wp_enqueue_script('smooth-scroll',get_template_directory_uri().'/html/js/smooth-scroll.js',array(),'',true);
	wp_enqueue_script('jquery.countTo',get_template_directory_uri().'/html/js/jquery.countTo.js',array(),'',true);

	if(is_front_page()){
		wp_enqueue_script('particles',get_template_directory_uri().'/html/js/particles.min.js',array(),'',true);
	}

	wp_enqueue_script('main',get_template_directory_uri().'/html/js/main.js',array(),'',true);
}
add_action('wp_enequeue_scripts','theme_styles');
add_action('wp_enequeue_scripts','theme_scripts');
