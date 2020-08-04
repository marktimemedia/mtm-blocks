<?php
/*
Template Name: Single Scroll Page
*/

mtm_load_wrap_header();
$jump = _get_field( 'mtm_enable_jump_button' ) ? true : false; ?>

<section class="mtm-section mtm-section--home single-scroll-main" style="background-image:url('<?php echo esc_url( mtm_acf_image_property( 'mtm_home_background_image', 'url' ) ); ?>')">
	<section class="content--page">

		<?php if ( _get_field( 'mtm_block_show_page_title' ) ) : ?>
			<h1 class="page--title"><?php the_title(); ?><?php edit_post_link( '(Edit)', ' • ' ); ?></h1>
		<?php endif; ?>

		<?php
		while ( have_posts() ) :
			the_post();
			the_content();
		endwhile;
		?>

	</section>
</section>

<?php
// Single Scroll Select (ACF Relationship Field)

$scroll_posts = _get_field( 'mtm_select_pages' );

if ( $scroll_posts ) :

	$j = 1;

	foreach ( $scroll_posts as $post ): // variable must be called $post (IMPORTANT)

		setup_postdata( $post );
		?>

		<section id="<?php echo esc_attr( $post->post_name ); ?>" class= "mtm-section mtm-section-<?php echo esc_attr( $j++ ); ?>">
			<section class="content--<?php echo esc_attr( $post->post_name ); ?>">
				<div class="content--page">

					<?php
					if ( $jump ) {
						mtm_get_block_part( 'mtm-block', 'jump-button' );
					}
					?>

					<?php if ( false !== _get_field( 'mtm_block_show_page_title' ) ) : ?>
						<h2 class="page--title"><?php the_title(); ?><?php edit_post_link( '(Edit)', ' • ' ); ?></h2>
					<?php endif; ?>

					<?php the_content(); ?>

				</div>
			</section>
		</section>

		<?php
	endforeach;

	wp_reset_postdata();

endif;
?>

<?php mtm_load_wrap_footer(); ?>
