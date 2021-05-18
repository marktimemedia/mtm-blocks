<?php // Content & Callout Wrapper
$anchor = get_field( 'mtm_text_area_title' ) ? sanitize_title_with_dashes( get_field( 'mtm_text_area_title' ) ) : '' ; // title to anchor tag
$class_name = 'mtm_module_content_callout '. mtm_color_picker_class( 'mtm_color_picker_background', false, true );
if( !empty($block['className']) ) {
   $class_name .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
   $class_name .= ' align' . $block['align'];
}
?>

<div class="<?php echo esc_attr($class_name); ?>" id="<?php echo( esc_html( $anchor ) ); ?>" style="background-color:<?php the_field('mtm_color_picker_background'); ?>">

  <?php mtm_get_block_part( 'mtm-block', 'text' ); ?>

</div>
