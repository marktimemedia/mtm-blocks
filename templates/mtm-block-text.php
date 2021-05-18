<?php // Module: Text Single & Dual
$image      = get_field( 'mtm_callout_background_image' );
$align      = get_field( 'mtm_module_alignment' ) ? get_field( 'mtm_module_alignment' ) : 'left';
$bg_hex     = get_field( 'mtm_color_picker_callout' ) ? get_field( 'mtm_color_picker_callout' ) : '#000000';
$bg_rgb     = $bg_hex ? implode( ', ', hex_to_rgb( $bg_hex ) ) : '';
$bg_opacity = get_field( 'mtm_opacity_callout' ) ? get_field( 'mtm_opacity_callout' ) : '0.5';
$bg_color   = $bg_hex ? 'rgba(' . $bg_rgb . ', ' . $bg_opacity . ')' : '';
$template   = array(
	array(
		'core/heading',
		array(
			'placeholder' => 'Callout heading',
			'textColor'   => 'neutral-darkest',
		),
	),
	array(
		'core/paragraph',
		array(
			'placeholder' => 'Callout subheading',
			'textColor'   => 'neutral-darkest',
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
					'placeholder' => 'Click to learn more',
				),
			),
		),
	),
);
?>
<div class="content--inner <?php echo esc_attr( $align ); ?>">

	<?php if ( $image ) : ?>
		<div class="mtm-module--content-secondary">
			<div class="mtm-module--content-secondary-image" style="background-image:url('<?php echo wp_kses_post( $image['sizes']['large'] ); ?>')">
				<span class="mtm-module--content-secondary-wrapper" style="background-color:<?php echo esc_attr( $bg_color ); ?>;">
					<?php the_field( 'mtm_module_text_area_2' ); ?>
				</span>
			</div>
		</div>
	<?php else : ?>
		<div class="mtm-module--content-secondary">
			<span class="mtm-module--content-secondary-wrapper" style="background-color:<?php echo esc_attr( $bg_color ); ?>;">
				<?php the_field( 'mtm_module_text_area_2' ); ?>
			</span>
		</div>
	<?php endif; ?>

	<div class="mtm-module--content-primary">
		<InnerBlocks template="<?php echo esc_attr( wp_json_encode( $template ) ); ?>" />
	</div>
</div>
