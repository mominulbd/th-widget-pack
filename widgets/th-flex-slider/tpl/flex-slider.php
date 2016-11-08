<?php

// Flex slider Options stored in Option Tree
if ( function_exists( 'ot_get_option' ) ) {
	$themo_flex_animation  = ot_get_option( 'themo_flex_animation', "fade" );
	$themo_flex_easing  = ot_get_option( 'themo_flex_easing', "swing" );
	$themo_flex_animationloop  = themo_return_on_off_boolean(ot_get_option( 'themo_flex_animationloop', true ));
	$themo_flex_smoothheight  = themo_return_on_off_boolean(ot_get_option( 'themo_flex_smoothheight', false ));
	$themo_flex_slideshowspeed  = ot_get_option( 'themo_flex_slideshowspeed', 7000 );
	$themo_flex_animationspeed  = ot_get_option( 'themo_flex_animationspeed', 600 );
	$themo_flex_randomize  = themo_return_on_off_boolean(ot_get_option( 'themo_flex_randomize', false ));
	$themo_flex_pauseonhover  =themo_return_on_off_boolean( ot_get_option( 'themo_flex_pauseonhover', true ));
	$themo_flex_touch  = themo_return_on_off_boolean(ot_get_option( 'themo_flex_touch', true ));
	$themo_flex_directionnav  = themo_return_on_off_boolean(ot_get_option( 'themo_flex_directionnav', true ));
	$themo_flex_controlNav  = themo_return_on_off_boolean(ot_get_option( 'themo_flex_controlNav', true ));
}

$init_style_loop = 0;
$init_main_loop = 0;
?>

<style scoped>

	<?php foreach( $instance['slides'] as $i => $slide ) { ?>

		#main-flex-slider .themo_slider_<?php echo $init_style_loop; ?> {
			padding-top: <?php echo $slide['padding']['top']; ?>;
			padding-bottom: <?php echo $slide['padding']['bottom']; ?>;
		}

		<?php ++$init_style_loop; ?>

	<?php } ?>

</style>

<div id="main-flex-slider" class="flexslider" >
	<ul class="slides">

		<?php foreach( $instance['slides'] as $i => $slide ) { ?>

			<li>
				<div class="slider-bg slide-cal-<?php echo $slide['styling']['alignment'] ?> <?php echo $slide['background']['contrast'] ?>-text themo_slider_<?php echo $init_main_loop; ?>" style=" background-image:url('http://stratus-3c99.kxcdn.com/stratus/wp-content/uploads/2015/11/home-app-gradient.jpg');    ">
					<div class='container'>
						<div class="row <?php echo ( $slide['styling']['large'] ? 'lrg-txt' : '' ); ?>">

						</div><!-- .row -->
					</div><!-- .container -->
				</div><!-- .slider-bg -->
			</li>

		<?php } ?>

	</ul>
</div>

<script>
	jQuery(window).load(function() {
		themo_start_flex_slider('#main-flex-slider','fade', 'swing', true, true, 4000, 550, false, true, true, true, true);
	});
</script>
