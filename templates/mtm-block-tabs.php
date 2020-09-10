<?php //Tabs
$rows = _get_field( 'mtm_tab_repeater' );
?>
<div class="content--inner">
<?php if ( $rows ) : ?>
	<div class="mtm-tabs--wrapper mtm-module--tabs">
		<div class="mtm-tabs--title-container" role="tablist">
			<?php $i = 1; ?>
			<?php foreach ( $rows as $row ) : ?>
				<button class="mtm-tabs--title current" aria-selected="true" id ="tab-title-<?php echo esc_attr( $i ); ?>" data-tab="tab-<?php echo esc_attr( $i ); ?>" role="tab" aria-controls="tab-<?php echo esc_attr( $i++ ); ?>">
					<?php echo esc_html( $row['mtm_tab_title'] ); ?>
				</button>
			<?php endforeach; ?>
		</div>
		<div class="mtm-tabs--content-container">
		<?php $j = 1; ?>
			<?php foreach ( $rows as $row ) : ?>
				<button class="mtm-tabs--title mtm-tabs--title-accordion current" aria-selected="true" id ="tab-title-<?php echo esc_attr( $j ); ?>" data-tab="tab-<?php echo esc_attr( $j ); ?>" >
					<?php echo esc_html( $row['mtm_tab_title'] ); ?>
				</button>
				<div class="mtm-tabs--content current" id="tab-<?php echo esc_attr( $j ); ?>" role="tabpanel" aria-labelledby="tab-title-<?php echo esc_attr( $j++ ); ?>">
					<?php echo wp_kses_post( $row['mtm_tab_content'] ); ?>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
<?php endif; // end have_rows ?>
</div>
