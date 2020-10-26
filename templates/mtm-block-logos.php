<?php // Logos (ACF Repeater Field) ?>

<div class="content--inner">
	<?php if ( _get_field( 'mtm_logo_title' ) ) : ?>
		<h2 class="mtm-module-title"><?php the_field( 'mtm_logo_title' ); ?></h2>
		<?php
	endif;
	$count = count( _get_field( 'mtm_logo_repeater' ) );
	if ( have_rows( 'mtm_logo_repeater' ) ) :
		$j = 1;
		?>
		<div class="mtm-module--logos">
			<?php
			while ( have_rows( 'mtm_logo_repeater' ) ) :
				the_row(); // Loop through each item
				$url = get_sub_field( 'mtm_content_link' ) ? get_sub_field( 'mtm_content_link' )['url'] : '';
				?>
				<a class="mtm-logo-grid mtm-per-row-<?php echo esc_attr( $count ); ?> logo-<?php echo esc_attr( $j++ ); ?>" href="<?php echo esc_url( $url ); ?>"><img src="<?php echo esc_url( mtm_acf_sub_image_property( 'mtm_logo_image', 'url' ) ); ?>"></a>
			<?php endwhile; ?>
		</div>
	<?php endif; // End ACF Repeater Field ?>
</div>
