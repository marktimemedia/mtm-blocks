<?php // Logos Wrapper
$anchor = _get_field( 'mtm_logo_title' ) ? sanitize_title_with_dashes( _get_field( 'mtm_logo_title' ) ) : '' ; // title to anchor tag
$className = 'mtm_module_logo_showcase '. mtm_color_picker_class( 'mtm_color_picker_background', false, true );
if( !empty($block['className']) ) {
   $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
   $className .= ' align' . $block['align'];
}
?>

<div class="<?php echo esc_attr($className); ?>" id="<?php echo( esc_html( $anchor ) ); ?>" style="background-color:<?php the_field('mtm_color_picker_background'); ?>">

  <?php mtm_get_block_part( 'mtm-block', 'logos' ); ?>

</div>