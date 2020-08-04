<?php // Module: Widget
$widgetname = _get_field( 'mtm_select_widget_area' );
?>
<div class="content--inner">
<?php if ( _get_field( 'mtm_widget_area_title' ) ) : ?>
	<h2 class="mtm-module--widget-heading mtm-module-title"><?php the_field( 'mtm_widget_area_title' ); ?></h2>
<?php endif; ?>

<?php if ( _get_field( 'mtm_select_widget_area' ) ) : ?>
	<div class="mtm-module--widget wp-block-columns">
		<?php dynamic_sidebar( $widgetname ); ?>
	</div>
<?php endif; ?>
</div>
