<?php
$slider_class = _get_field('mtm_slider_dots') ? '' : ' no-nav';
$slider_class .= _get_field('mtm_slider_arrows') ? '' : ' no-arrows';
$slider_link = _get_field('mtm_content_link');
$slider_gallery = _get_field('mtm_slider_gallery');
$slider_min_height = _get_field('mtm_min_height') ? _get_field('mtm_min_height') . 'px' : '200px';
$slider_max_height = _get_field('mtm_max_height') ? _get_field('mtm_max_height') . 'px' : '400px';
$bg_hex = _get_field('mtm_color_picker_background') ? : '';
$bg_rgb = $bg_hex ? implode(', ', hexTorgb( $bg_hex ) ) : '';
$bg_opacity = _get_field('mtm_opacity') ? : '0.5';
$bg_color = $bg_hex ? 'rgba(' . $bg_rgb .', '. $bg_opacity . ')' : '';
$template = array(
			array( 'core/heading', array(
					'placeholder' => 'Slider Heading',
					'textColor' => 'neutral-white'
			) ),
			array( 'core/paragraph', array(
	        'placeholder' => 'Slider Subheading',
					'textColor' => 'neutral-white',
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

<section class="slider-container">
  <section class="mtm-module--slider flexslider<?php echo $slider_class; ?>">
    <ul class="slides">
		<?php if( $slider_gallery ) :?>
    	<?php foreach( $slider_gallery as $image) : ?>
    		<li class="mtm-module--slider-slide slide" style="background-image:url('<?php echo $image['url']; ?>'); min-height:<?php echo $slider_min_height; ?>; max-height:<?php echo $slider_max_height; ?>;">
    		</li>
      <?php endforeach; ?>
		<?php endif; ?>
  	</ul>
  </section>
  <section class="mtm-module--main-text" style="background-color: <?php echo $bg_color; ?>">
    <div>
      <InnerBlocks template="<?php echo esc_attr( wp_json_encode( $template ) ); ?>" templateLock="insert" />
    </div>
  </section>
</section>
