<?php // Manual Grid
global $mtm_grid_row_class;

$link = _get_sub_field('mtm_content_link');
$image = _get_sub_field( 'mtm_list_item_image' );
$file = _get_sub_field( 'mtm_list_item_file' ) ?>

<div class="mtm-grid--single <?php echo $mtm_grid_row_class; ?>">
	<div class="mtm-grid--single-content">
		<?php if ( $image ) :
			$content_size = '';
			$thumb = $image['sizes'][ 'medium_large' ];
			$alt = $image['alt']; ?>
			<section class="mtm-grid--image">
				<?php if( $link ): ?><a aria-hidden="true" tabindex="-1" href="<?php echo esc_url( $link['url'] ) ?>" target="<?php echo $link['target'];?>"><?php endif; ?>
					<figure class="post--thumbnail mtm-post-thumbnail" style="background-image:url(<?php echo esc_url( $thumb ); ?>)"></figure>
				<?php if( $link ): ?></a><?php endif; ?>
			</section>
		<?php endif; ?>
		<h3>
			<?php if( $link ): ?><a href="<?php echo esc_url( $link['url'] ) ?>" target="<?php echo $link['target'];?>"><?php endif; ?>
				<?php the_sub_field( 'mtm_list_item_heading' ); ?>
			<?php if( $link ): ?></a><?php endif; ?>
		</h3>
		<p><?php the_sub_field( 'mtm_list_item_content' ); ?></p>
		<?php if( $file ): mtm_output_file_link( $file ); endif;?>
	</div>
</div>
