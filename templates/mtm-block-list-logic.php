<?php // List (ACF Repeater Field)

$orderbyvar = _get_field( 'mtm_randomize' ) ? 'rand' : 'date';
$ordervar   = 'DESC'; // in case we want to populate this dynamically later
?>
<div class="content--inner">
	<?php if ( _get_field( 'mtm_list_title' ) ) : ?>

		<h2 class="mtm-module-title"><?php the_field( 'mtm_list_title' ); ?></h2>
		<?php
	endif;

	if ( 'Pick From Taxonomy' === _get_field( 'mtm_list_archive_select' ) ) : // Taxonomy Source
		?>

		<div class="mtm-module--list">
			<?php
			if ( _get_field( 'mtm_show_taxonomy_links' ) ) :
				mtm_terms_from_taxonomy_links( _get_field( 'mtm_list_archive_taxonomy_links' ) ); // output taxonomy
			endif;

			$list_query   = mtm_taxonomy_query( 'list', 3, $orderbyvar, $ordervar );
			$mtm_taxonomy = mtm_acf_taxonomy_property( 'list', 'taxonomy' );
			$mtm_term     = mtm_acf_taxonomy_property( 'list', 'slug' );

			if ( $list_query->have_posts() ) :
				global $post;
				$org_post = $post; // save this in case we are inside a nested query/post object
				while ( $list_query->have_posts() ) :
					$list_query->the_post();
					mtm_get_block_part( 'mtm-content', 'list-view' );
				endwhile;
				$post = $org_post; // reset to original query
			endif;

			if ( _get_field( 'mtm_show_view_all_link' ) ) :
				$viewtext = _get_field( 'mtm_view_all_link_text' ) ? _get_field( 'mtm_view_all_link_text' ) : 'View All';
				if ( _get_field( 'mtm_view_all_link_text' ) ) :
					?>
					<a aria-label="View All" class="mtm-view-all-link" href="<?php echo esc_url( get_term_link( $mtm_term, $mtm_taxonomy ) ); ?>"><?php echo esc_html( _get_field( 'mtm_view_all_link_text' ) ); ?></a>
				<?php else : ?>
					<a aria-label="View All" class="mtm-view-all-link" href="<?php echo esc_url( get_term_link( $mtm_term, $mtm_taxonomy ) ); ?>"><?php echo esc_html( $viewtext ); ?></a>
					<?php
				endif;
			endif;
			?>
		</div>

	<?php elseif ( 'Pick From Post Type' === _get_field( 'mtm_list_archive_select' ) ) : // Post Type Source ?>
		<div class="mtm-module--list">
			<?php
			if ( _get_field( 'mtm_show_taxonomy_links' ) ) :
				mtm_terms_from_taxonomy_links( _get_field( 'mtm_list_archive_taxonomy_links' ) ); // output taxonomy
			endif;

			$posttype               = _get_field( 'mtm_list_archive_post_type' );
			$list_post_query_number = _get_field( 'mtm_list_archive_taxonomy_number' );
			$list_post_query        = mtm_page_component_post_query( $posttype, $list_post_query_number, $orderbyvar, $ordervar );
			if ( $list_post_query->have_posts() ) :
				global $post;
				$org_post = $post; // save this in case we are inside a nested query/post object
				while ( $list_post_query->have_posts() ) :
					$list_post_query->the_post();
					mtm_get_block_part( 'mtm-content', 'list-view' );
				endwhile;
				$post = $org_post; // reset to original query
			endif;

			if ( _get_field( 'mtm_show_view_all_link' ) ) :
				$viewtext = _get_field( 'mtm_view_all_link_text' ) ? _get_field( 'mtm_view_all_link_text' ) : 'View All';
				if ( 'post' === $posttype ) : // Posts
					?>
					<a aria-label="View All" class="mtm-view-all-link" href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>"><?php echo esc_html( $viewtext ); ?></a>
					<?php
				elseif ( 'page' === $posttype || 'attachment' === $posttype || 'revision' === $posttype || 'nav_menu_item' === $posttype ) : // Unsupported archives
					return;
				else : // everything else
					?>
					<a aria-label="View All" class="mtm-view-all-link" href="<?php echo esc_url( get_site_url() ) . '/' . esc_attr( $posttype ); ?>"><?php echo esc_html( $viewtext ); ?></a>
					<?php
				endif;
			endif;
			?>
		</div>

	<?php elseif ( 'Add Posts Manually' === _get_field( 'mtm_list_archive_select' ) ) : // Post Type Source ?>
		<div class="mtm-module--list">
			<?php
			if ( _get_field( 'mtm_show_taxonomy_links' ) ) :
				mtm_terms_from_taxonomy_links( _get_field( 'mtm_list_archive_taxonomy_links' ) ); // output taxonomy
			endif;

			$grid_posts = _get_field( 'mtm_list_archive_manual_posts' );
			if ( $grid_posts ) :
				global $post;
				$org_post = $post; // save this in case we are inside a nested query/post object
				foreach ( $grid_posts as $post ) : // variable must be called $post (IMPORTANT)
					setup_postdata( $post );
					mtm_get_block_part( 'mtm-content', 'list-view' );
				endforeach;
				$post = $org_post; // reset to original query
			endif;
			?>
		</div>

		<?
	endif; // End Pick from Source ?>
</div>
