<?php // Contributors Component

$mtm_grid_row_class = mtm_output_row_number( 5 );
$users              = _get_field( 'mtm_user_picker' );

if ( $users ) : ?>
	<div class="mtm-module--content mtm-user-picker">
		<?php
		foreach ( $users as $user ) :
			$userpost   = mtm_check_all_user_posts( $user['ID'] );
			$authorlink = $userpost > 0 ? true : false;
			?>
			<div class="mtm-user-picker--user <?php echo esc_attr( $mtm_grid_row_class ); ?>">
				<?php
				if ( $authorlink ) {
					echo '<a aria-hidden="true" tabindex="-1" href="' . esc_url( get_author_posts_url( $user['ID'] ) ) . '">';
				}
				?>
				<figure>
					<?php echo get_avatar( $user['ID'], 512 ); // outputs complete image tag ?></figure>
					<?php
					if ( $authorlink ) {
						echo '</a>';
					}
					?>
				<h3>
					<?php
					if ( $authorlink ) {
						echo '<a href="' . esc_url( get_author_posts_url( $user['ID'] ) ) . '">';
					}
					echo esc_html( $user['display_name'] );
					if ( $authorlink ) {
						echo '</a>';
					}
					?>
				</h3>
				<p><?php echo esc_html( $user['user_description'] ); ?></p>
			</div>
		<?php endforeach; ?>
	</div>
	<?php
endif;
