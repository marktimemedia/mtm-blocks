<article class="mtm-list--single">
	<?php $content_size = has_post_thumbnail() ? '' : '-full'; ?>
	<?php if ( has_post_thumbnail() ) : ?>
		<section class="mtm-list--image">
			<a aria-hidden="true" tabindex="-1" href="<?php the_permalink(); ?>"><figure class="post--thumbnail mtm-post-thumbnail has-background-image cropped" style="background-image:url(<?php the_post_thumbnail_url( 'medium_large' ); ?>)"></figure></a>
		</section>
	<?php endif; ?>
	<section class="mtm-list--post-content<?php echo esc_attr( $content_size ); ?>">
		<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		<p class="post--byline"><?php the_time( 'F j, Y' ); ?></p>
		<?php the_excerpt(); ?>
	</section>
</article>
