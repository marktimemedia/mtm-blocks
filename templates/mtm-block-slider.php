<?php
// unique numbers for each slider hopefully
$slidecount = wp_rand( 1, 100 );

// class variables
$slider_select     = 'slider-' . $slidecount;
$slider_class      = $slider_select;
$slider_class     .= _get_field( 'mtm_slider_dots' ) ? '' : ' no-nav';
$slider_class     .= _get_field( 'mtm_slider_arrows' ) ? '' : ' no-arrows';
$slider_link       = _get_field( 'mtm_content_link' );
$slider_gallery    = _get_field( 'mtm_slider_gallery' );
$slider_min_height = _get_field( 'mtm_min_height' ) ? _get_field( 'mtm_min_height' ) . 'px' : '200px';
$slider_max_height = _get_field( 'mtm_max_height' ) ? _get_field( 'mtm_max_height' ) . 'px' : '400px';
$bg_hex            = _get_field( 'mtm_color_picker_background' ) ? _get_field( 'mtm_color_picker_background' ) : '';
$bg_rgb            = $bg_hex ? implode( ', ', hex_to_rgb( $bg_hex ) ) : '';
$bg_opacity        = _get_field( 'mtm_opacity' ) ? _get_field( 'mtm_opacity' ) : '0.5';
$bg_color          = $bg_hex ? 'rgba(' . $bg_rgb . ', ' . $bg_opacity . ')' : '';

// innerBlocks template
$template = array(
	array(
		'core/heading',
		array(
			'placeholder' => 'Slider Heading',
			'textColor'   => 'neutral-white',
		),
	),
	array(
		'core/paragraph',
		array(
			'placeholder' => 'Slider Subheading',
			'textColor'   => 'neutral-white',
			'fontSize'    => 'medium',
		),
	),
	array(
		'core/buttons',
		array(
			'className' => 'mtm-cta-buttons',
		),
		array(
			array(
				'core/button',
				array(
					'placeholder'     => 'Click to learn more',
					'backgroundColor' => 'neutral-white',
					'textColor'       => 'neutral-white',
					'className'       => 'is-style-outline',
				),
			),
		),
	),
);

// script variables
$container      = $slider_select ? '.' . $slider_select . ' .slides' : '.slides';
$axis           = 'horizontal';
$controlpos     = 'bottom';
$animation      = _get_field( 'mtm_slider_type_select' ) ? _get_field( 'mtm_slider_type_select' ) : 'gallery';
$autoplay       = _get_field( 'mtm_slider_autoplay' ) ? 'true' : 'false';
$smoothheight   = 'false';
$animationspeed = _get_field( 'mtm_carousel_speed' ) ? _get_field( 'mtm_carousel_speed' ) : 3000;
$controlnav     = _get_field( 'mtm_slider_dots' ) ? 'true' : 'false';
$directionnav   = _get_field( 'mtm_slider_arrows' ) ? 'true' : 'false';
$items          = _get_field( 'mtm_carousel_items_on_screen' ) ? _get_field( 'mtm_carousel_items_on_screen' ) : 1;
$gutter         = _get_field( 'mtm_carousel_gutter' ) ? _get_field( 'mtm_carousel_gutter' ) : 0;
$slideby        = 1;
$autowidth      = 'false';
$mousedrag      = 'false';
$responsive     = ( $items > 1 ) ? '{ "500": { "items": 2 }, "800": { "items": ' . $items . ' } }' : 'false';

// inline script
wp_add_inline_script(
	'tinyslider',
	"(function($) {
		var initializeBlock = function($block) {
			var slider = tns({
				container: '" . $container . "',
				mode: '" . $animation . "',
				axis: '" . $axis . "',
				items: " . $items . ",
				gutter: " . $gutter . ",
				autoWidth: " . $autowidth . ",
				slideBy: " . $slideby . ",
				speed: 500,
				controls: " . $directionnav . ",
				controlsPosition: '" . $controlpos . "',
				controlsText: ['⇦', '⇨'],
				nav: " . $controlnav . ",
				navPosition: '" . $controlpos . "',
				navAsThumbnails: false,
				arrowKeys: true,
				autoplay: " . $autoplay . ",
				autoplayTimeout: " . $animationspeed . ",
				autoplayHoverPause: true,
				autoplayPosition: '" . $controlpos . "',
				loop: true,
				autoHeight: " . $smoothheight . ",
				mouseDrag: " . $mousedrag . ",
				responsive: " . $responsive . ",
			});
		}
			$(document).ready(function() {
				initializeBlock();
				if( window.acf ) {
					window.acf.addAction( 'render_block_preview/type=mtm_block_slider', initializeBlock );
				}
			});
  })( jQuery );"
);
?>
<section class="slider-container">
	<section class="mtm-module--slider <?php echo esc_attr( $slider_class ); ?>">
		<ul class="slides" style="min-height:<?php echo esc_attr( $slider_min_height ); ?>; max-height:<?php echo esc_attr( $slider_max_height ); ?>;">
		<?php if ( $slider_gallery ) : ?>
			<?php foreach ( $slider_gallery as $image ) : ?>
				<li class="mtm-module--slider-slide slide" style="background-image:url('<?php echo esc_url( $image['url'] ); ?>'); min-height:<?php echo esc_attr( $slider_min_height ); ?>; max-height:<?php echo esc_attr( $slider_max_height ); ?>;">
				</li>
			<?php endforeach; ?>
		<?php endif; ?>
		</ul>
		<section class="mtm-module--main-text" style="background-color: <?php echo esc_attr( $bg_color ); ?>">
			<div>
				<InnerBlocks template="<?php echo esc_attr( wp_json_encode( $template ) ); ?>" templateLock="insert" />
			</div>
		</section>
	</section>
</section>
