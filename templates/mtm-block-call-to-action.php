<?php // Module: Call To Action
$align = _get_field( 'mtm_button_alignment' ) ? : 'default';
$size = _get_field( 'mtm_button_size' ) ? : 'default';
$template = array(
		array( 'core/heading', array(
				'placeholder' => 'Call to action heading',
				'textColor' => 'neutral-white'
		) ),
		array( 'core/paragraph', array(
        'placeholder' => 'Call to action subheading',
				'textColor' => 'neutral-lightest',
				'fontSize' => 'medium'
    ) ),
		array( 'core/buttons', array(
			'className' => 'mtm-cta-buttons'
		), array(
			array( 'core/button', array(
	        'placeholder' => 'Click to learn more',
					'backgroundColor' => 'neutral-white',
					'textColor' => 'neutral-white',
					'className' => 'is-style-outline'
	    ) ),
    ) )
);
?>
<div class="content--inner">
	<section class="mtm-module--cta">
		<InnerBlocks template="<?php echo esc_attr( wp_json_encode( $template ) ); ?>" templateLock="insert" />
	</section>
</div>
