<?php // Call To Action Wrapper
$anchor     = _get_field( 'mtm_widget_area_title' ) ? sanitize_title_with_dashes( _get_field( 'mtm_widget_area_title' ) ) : ''; // title to anchor tag
$class_name = 'mtm_module_widget_area ' . mtm_color_picker_class( 'mtm_color_picker_background', false, true );

if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$class_name .= ' align' . $block['align'];
}
?>

<div class="<?php echo esc_attr( $class_name ); ?>" id="<?php echo( esc_html( $anchor ) ); ?>" style="background-color:<?php the_field( 'mtm_color_picker_background' ); ?>">

	<?php mtm_get_block_part( 'mtm-block', 'widget-area' ); ?>

</div>
