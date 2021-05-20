<article class="mtm-list--single">
	<?php $content_size = has_post_thumbnail() && get_field( 'mtm_show_image' ) ? '' : '-full'; ?>
	<?php if ( has_post_thumbnail() && get_field( 'mtm_show_image' ) ) : ?>
		<section class="mtm-list--image">
			<a aria-hidden="true" tabindex="-1" href="<?php the_permalink(); ?>"><figure class="post--thumbnail mtm-post-thumbnail has-background-image cropped" style="background-image:url(<?php the_post_thumbnail_url( 'medium_large' ); ?>)"></figure></a>
		</section>
	<?php endif; ?>
	<section class="mtm-list--post-content<?php echo esc_attr( $content_size ); ?>">
		<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		<?php if ( get_field( 'mtm_show_date' ) ) : ?>
			<p class="post--byline"><?php the_time( 'F j, Y' ); ?></p>
		<?php endif; ?>
		<?php if ( get_field( 'mtm_show_excerpt' ) ) : ?>
			<?php the_excerpt(); ?>
		<?php endif; ?>
	</section>
</article>
