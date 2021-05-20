<?php // Grid View
global $mtm_grid_row_class;
?>
<article class="mtm-grid--single <?php echo esc_attr( $mtm_grid_row_class ); ?>" id="<?php echo esc_attr( mtm_anchor( get_the_title() ) ); ?>">
	<div class="mtm-grid--single-content">
		<?php if ( has_post_thumbnail() && get_field( 'mtm_show_image' ) ) : ?>
			<section class="mtm-grid--image">
				<a aria-hidden="true" tabindex="-1" href="<?php the_permalink(); ?>"><figure class="post--thumbnail mtm-post-thumbnail has-background-image cropped" style="background-image:url(<?php the_post_thumbnail_url( 'medium_large' ); ?>)"></figure></a>
			</section>
		<?php endif; ?>
		<section class="mtm-grid--post-content">
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<?php if ( get_field( 'mtm_show_date' ) ) : ?>
				<p class="post--byline"><?php the_time( 'F j, Y' ); ?></p>
			<?php endif; ?>
			<?php if ( get_field( 'mtm_show_excerpt' ) ) :
				the_excerpt();
			endif; ?>
		</section>
	</div>
</article>
