<?php
$image        = _get_sub_field( 'mtm_list_item_image' );
$mtm_link     = _get_sub_field( 'mtm_content_link' );
$file         = _get_sub_field( 'mtm_list_item_file' );
$content_size = '-full';
?>

<article class="mtm-list--single">

	<?php
	if ( $image ) :

		$content_size = '';
		$thumb        = $image['sizes']['medium_large'];
		$alt          = $image['alt'];
		?>

		<section class="mtm-list--image">
			<?php if ( $mtm_link ) : ?>
				<a aria-hidden="true" tabindex="-1" href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>">
			<?php endif; ?>
				<figure class="post--thumbnail mtm-post-thumbnail has-background-image cropped" style="background-image:url(<?php echo esc_url( $thumb ); ?>)"></figure>
			<?php if ( $mtm_link ) : ?>
				</a>
			<?php endif; ?>
		</section>

	<?php endif; ?>

	<section class="mtm-list--post-content<?php echo esc_attr( $content_size ); ?>">
		<h4>
			<?php if ( $mtm_link ) : ?>
				<a href="<?php echo esc_url( $link['url'] ); ?>">
			<?php endif; ?>
				<?php the_sub_field( 'mtm_list_item_heading' ); ?>
			<?php if ( $mtm_link ) : ?>
				</a>
			<?php endif; ?>
		</h4>
		<p><?php the_sub_field( 'mtm_list_item_content' ); ?></p>

		<?php
		if ( $file ) :
			mtm_output_file_link( $file );
		endif;
		?>

	</section>
</article>
