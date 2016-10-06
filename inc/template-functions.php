<?php

// Display icon Widget
function themo_display_icon( $instance, $return = false, $class, $show_div = true ) {

	$icon = $instance['icon']['icon'];
	$style = $instance['icon']['style'];
	$image = $instance['icon']['image'];

	$open = ( $style != 'standard' && $show_div == true  ) ? '<div class="' . $class . ' ' . esc_attr( $style ) . '-med-icon">' : '';
	$close = ( $style != 'standard' && $show_div == true ) ? '</div>' : '';
	if( $image ) {
		$output = wp_get_attachment_image( $image, 'full', false, array( 'class' => 'th-icon th-icon-graphic' ) );
	} elseif( $icon ) {
		$output = siteorigin_widget_get_icon( $icon, $icon_styles );
	} elseif( !$image && !$icon ) {
		$open = '';
		$close = '';
	}

	if( $return == true ) {
		return $open . $output . $close;
	} else {
		echo $open . $output . $close;
	}

}

// Display link Widget
function themo_display_link( $instance, $class, $content ) {

	$url = sow_esc_url( $instance['link']['url'] );
	$target = ( $instance['link']['new_window'] ) ? ' target="_blank"' : '';
	$lightbox_width = ( $instance['link']['lightbox_width'] && $instance['link']['lightbox'] == 'on' ) ? ' data-width="' . esc_html( $instance['link']['lightbox_width'] ) . '"' : '';
	$lightbox = ( $instance['link']['lightbox'] == 'on' ) ? ' data-toggle="lightbox"' : '';
	$content = ( $content ) ? $content : ' ';
	$class = ( $class ) ? 'class="' . $class . '"' : '';

	$link = '<a %s href="%s"%s%s%s>%s</a>';

	echo sprintf( $link, $class, $url, $target, $lightbox, $lightbox_width, $content );

}

// Display button Widget
function themo_display_button( $instance ) {
	$type = $instance['button']['button_type'];
	$text = $instance['button']['button_text'];
	$style = $instance['button']['button_style'];
	$icon = $instance['button']['button_icon'];
	$link = $instance['button']['button_link'];
	$product_button = $instance['button']['product_button'];
	$product_sku = $instance['button']['product_sku'];
	$graphic = $instance['button']['button_graphic'];
	$graphic_link = $instance['button']['graphic_link'];

	if( $type == 'button' ) {

		$class = 'btn th-btn btn-' . esc_attr( $style );
		$content = esc_html( $text ) . themo_display_icon( $icon, true );

		themo_display_link( $link, $class, $content );

	} elseif ( $type == 'add-to-cart' ) {

		echo do_shortcode('[add_to_cart id="' . $product_button . '" ' . $product_sku . '"]');

	} elseif ( $type == 'graphic' ) {

		$class = 'th-btn btn-image';
		$content = wp_get_attachment_image( $graphic, 'full', false, '' );

		themo_display_link( $graphic_link, $class, $content );

	}
}

function themo_portfolio_post() { ?>
	<div id="post-130" class=" th-portfolio-item item col-md-3 col-sm-6 p-development p-integration post-130 status-publish format-standard has-post-thumbnail hentry themo_project_type-development themo_project_type-integration">
		<div class="th-port-wrap">
			<img width="500" height="500" src="http://stratus-3c99.kxcdn.com/stratus/wp-content/uploads/2015/03/office-800-380x380.jpg" class="img-responsive th-port-img wp-post-image" alt="Office" srcset="http://stratus-3c99.kxcdn.com/stratus/wp-content/uploads/2015/03/office-800-380x380.jpg 380w, http://demo.themovation.com/stratus/wp-content/uploads/2015/03/office-800-150x150.jpg 150w, http://demo.themovation.com/stratus/wp-content/uploads/2015/03/office-800-180x180.jpg 180w, http://demo.themovation.com/stratus/wp-content/uploads/2015/03/office-800-300x300.jpg 300w, http://demo.themovation.com/stratus/wp-content/uploads/2015/03/office-800-60x60.jpg 60w" sizes="(max-width: 380px) 100vw, 380px" />
			<div class="th-port-overlay"></div>
			<div class="th-port-inner">
				<div class="th-port-center">
					<i class="th-port-icon glyphicons glyphicons-lightbulb"></i>
					<h3 class="th-port-title">Idea Collaboration</h3>
					<p class="th-port-sub">Malesuada tortor nunc</p>
				</div>
				<a class="th-port-link" href="#"></a>
			</div>
		</div>
	</div>
<?php }

/**
* GLOBAL VARIABLES
*/
global $th_acc_count, $th_acc_panel_count, $th_folio_count;
$th_acc_panel_count = $th_acc_count = $th_folio_count = 0;
