<?php // Slider Wrapper
$class_name = 'mtm_module_slider';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$class_name .= ' align' . $block['align'];
}
?>

<div class="<?php echo esc_attr( $class_name ); ?>">

	<?php mtm_get_block_part( 'mtm-block', 'slider' ); ?>

</div>
