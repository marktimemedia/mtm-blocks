<?php // Manual List Wrapper
$anchor = get_field( 'mtm_list_title' ) ? sanitize_title_with_dashes( get_field( 'mtm_list_title' ) ) : '' ; // title to anchor tag
$className = 'mtm_module_listgrid '. mtm_color_picker_class( 'mtm_color_picker_background', false, true );
if( !empty($block['className']) ) {
   $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
   $className .= ' align' . $block['align'];
}
?>

<div class="<?php echo esc_attr($className); ?>" id="<?php echo( esc_html( $anchor ) ); ?>" style="background-color:<?php the_field('mtm_color_picker_background'); ?>">
  <div class="content--inner">
    <?php if( _get_field( 'mtm_list_title' ) ): ?>

    	<h2 class="mtm-module-title"><?php the_field( 'mtm_list_title' ); ?></h2>

    <?php endif;

    if( have_rows( 'mtm_add_list_item' ) ) : // Repeater ?>
  		<div class="mtm-module--list">
  			<?php while( have_rows( 'mtm_add_list_item' ) ): the_row(); // Loop through each itemm
  				mtm_get_block_part( 'mtm-content', 'list-manual' );
  			endwhile; ?>
  		</div>
  	 <?php endif; // End List?>
  </div>
</div>
