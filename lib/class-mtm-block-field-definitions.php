<?php
/**
 * Defining fields for modular content
 *
 * @package Mtm_Field_Definitions
 * @author Marktime Media
 **/
class Mtm_Block_Field_Definitions {

	// single scroll page select
	public function mtm_block_single_scroll_page_select( $label = 'Select Single Scroll Pages' ){

		return apply_filters(
			'mtm_block_single_scroll_page_select_filter',
			array(
				'key'               => 'field_565e2fa2c08cbblock',
				'label'             => $label,
				'name'              => 'mtm_select_pages',
				'type'              => 'relationship',
				'instructions'      => 'Select and re-order other pages, which will display in sections below the main content on this page.',
				'required'          => 0,
				'conditional_logic' => '',
				'wrapper'           =>
					array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
				'post_type'         => array(
					0 => 'page',
				),
				'taxonomy'          => array(
				),
				'filters'           => array(
					0 => 'search',
					1 => 'post_type',
					2 => 'taxonomy',
				),
				'elements'          => array(
					0 => 'featured_image',
				),
				'min'               => '',
				'max'               => '',
				'return_format'     => 'object',
			)
		);
	}


	// Slider
	public static function mtm_innerblock_slider( $label = 'Slider' ) {
		return apply_filters(
			'mtm_innerblock_slider_filter',
			array(
				'key'                   => '57815762d2d5einnerblock',
				'name'                  => 'mtm_innerblock_slider',
				'label'                 => $label,
				'display'               => 'block',
				'fields'                => array(
					array(
						'key'               => 'field_5ee2301b69f7finnerblock',
						'label'             => 'Slider Images',
						'name'              => 'mtm_slider_gallery',
						'type'              => 'gallery',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'return_format'     => 'array',
						'preview_size'      => 'medium',
						'insert'            => 'append',
						'library'           => 'all',
						'min'               => '',
						'max'               => '',
						'min_width'         => '',
						'min_height'        => '',
						'min_size'          => '',
						'max_width'         => '',
						'max_height'        => '',
						'max_size'          => '',
						'mime_types'        => '',
					),
					array(
						'key'               => 'field_5ef1f8ae757bc',
						'label'             => 'Minimum Height (Small Screen)',
						'name'              => 'mtm_min_height',
						'type'              => 'range',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => 200,
						'min'               => 100,
						'max'               => 600,
						'step'              => '',
						'prepend'           => '',
						'append'            => 'px',
					),
					array(
						'key'               => 'field_759fjsdi8ugh',
						'label'             => 'Maximum Height (Large Screen)',
						'name'              => 'mtm_max_height',
						'type'              => 'range',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => 600,
						'min'               => 100,
						'max'               => 800,
						'step'              => '',
						'prepend'           => '',
						'append'            => 'px',
					),
					array(
						'key'               => 'field_hfjsou30t48fjdblock',
						'label'             => 'Slider Type',
						'name'              => 'mtm_slider_type_select',
						'type'              => 'select',
						'instructions'      => '',
						'required'          => 1,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'choices'           => array(
							'gallery'  => 'Gallery (fade transition)',
							'carousel' => 'Carousel (slide transition)',
						),
						'allow_null'        => 0,
						'other_choice'      => 0,
						'save_other_choice' => 0,
						'default_value'     => '',
					),
					array(
						'key'               => 'field_5783de5sdgdgdfgblock',
						'label'             => 'How many show at once?',
						'name'              => 'mtm_carousel_items_on_screen',
						'type'              => 'range',
						'instructions'      => 'Number of carousel items that appear on the screen at one time. This number will automatically scale down on larger screens. Default: 1',
						'required'          => 1,
						'conditional_logic' => array(
							array(
								array(
									'field'    => 'field_hfjsou30t48fjdblock',
									'operator' => '==',
									'value'    => 'carousel',
								),
							),
						),
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => 1,
						'min'               => 1,
						'max'               => 5,
						'step'              => '',
						'prepend'           => '',
						'append'            => '',
					),
					array(
						'key'               => 'field_skhg943ugfb2943hfsablock',
						'label'             => 'Slide Speed (ms)',
						'name'              => 'mtm_carousel_speed',
						'type'              => 'range',
						'instructions'      => 'How long to pause on each slide before transitioning. Mouseover will automatically pause the animation.',
						'required'          => 1,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => 3000,
						'min'               => 500,
						'max'               => 10000,
						'step'              => 100,
						'prepend'           => '',
						'append'            => '',
					),
					array(
						'key'               => 'field_5dd188a07d1c9dfgg844',
						'label'             => 'Text Background Color',
						'name'              => 'mtm_color_picker_background',
						'type'              => 'color_picker',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => '',
					),
					array(
						'key'               => 'field_759fdfghsedfre7593',
						'label'             => 'Text Background Opacity',
						'name'              => 'mtm_opacity',
						'type'              => 'range',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => 0.5,
						'min'               => 0,
						'max'               => 1,
						'step'              => 0.1,
						'prepend'           => '',
						'append'            => '',
					),
					array(
						'key'               => 'field_5gir487tg325u6sdg',
						'label'             => 'Slider Control Options',
						'name'              => 'mtm_slider_autoplay',
						'type'              => 'true_false',
						'instructions'      => 'Also displays a start/stop button',
						'required'          => '',
						'conditional_logic' => '',
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'message'           => 'Autoplay Slider?',
						'default_value'     => 1,
					),
					array(
						'key'               => 'field_5gijopofkr746568u89t',
						'label'             => '',
						'name'              => 'mtm_slider_dots',
						'type'              => 'true_false',
						'instructions'      => 'Displays navigation dots below the slider',
						'required'          => '',
						'conditional_logic' => '',
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'message'           => 'Show Bottom Slide Navigation?',
						'default_value'     => 1,
					),
					array(
						'key'               => 'field_5gijorfghjrt976tu6it',
						'label'             => '',
						'name'              => 'mtm_slider_arrows',
						'type'              => 'true_false',
						'instructions'      => 'Displays previous/next pagination',
						'required'          => '',
						'conditional_logic' => '',
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'message'           => 'Show Slide Arrows?',
						'default_value'     => 1,
					),
				),
				'location'              => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/mtm-block-slider',
						),
					),
				),
				'menu_order'            => 0,
				'position'              => 'side',
				'style'                 => 'default',
				'label_placement'       => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen'        => '',
				'active'                => true,
				'description'           => '',
			)
		);
	}


	// Call To Action
	public static function mtm_innerblock_call_to_action( $label = 'Call To Action' ) {
		return apply_filters(
			'mtm_innerblock_call_to_action_filter',
			array(
				'key'                   => '56f58e7c5bc87block',
				'name'                  => 'mtm_block_call_to_action',
				'label'                 => $label,
				'display'               => 'block',
				'fields'                => array(
					array(
						'key'               => 'field_5dd188a07d1c9block5',
						'label'             => 'Background Color',
						'name'              => 'mtm_color_picker_background',
						'type'              => 'color_picker',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => '#535353',
					),
				),
				'location'              => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/mtm-block-call-to-action',
						),
					),
				),
				'menu_order'            => 0,
				'position'              => 'side',
				'style'                 => 'default',
				'label_placement'       => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen'        => '',
				'active'                => true,
				'description'           => '',
			)
		);
	}

	// Logo/Graphic Showcase
	public static function mtm_block_logo_showcase( $label = 'Logo/Graphic Showcase' ) {
		return apply_filters( 'mtm_block_logo_showcase_filter', array(
			'key' => '56f59482418efblock',
			'name' => 'mtm_module_logo_showcase',
			'label' => $label,
			'display' => 'block',
			'fields' => array(
				array(
					'key' => 'field_56feb088a4a16block',
					'label' => 'Logo/Graphic Area Title',
					'name' => 'mtm_logo_title',
					'type' => 'text',
					'instructions' => 'Optional title for the logo/graphic area (leave blank for no title)',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array(
					'key' => 'field_5dd188a07d1c9block6',
					'label' => 'Background Color',
					'name' => 'mtm_color_picker_background',
					'type' => 'color_picker',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
				),
				array(
					'key' => 'field_56f59494418f0block',
					'label' => 'Add Logo/Graphic',
					'name' => 'mtm_logo_repeater',
					'type' => 'repeater',
					'instructions' => 'Click "Add Logo" to add a logo/graphic showcase to your page (transparent PNG images preferred for logos)',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'collapsed' => 'field_56f594e1418f1block',
					'min' => '',
					'max' => '',
					'layout' => 'block',
					'button_label' => 'Add Logo',
					'sub_fields' => array(
						array(
							'key' => 'field_56f594e1418f1block',
							'label' => 'Logo/Graphic',
							'name' => 'mtm_logo_image',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => 50,
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
							'preview_size' => 'thumbnail',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
						array(
							'key' => 'field_57815a30d2d63block',
							'label' => 'Logo Link',
							'name' => 'mtm_content_link',
							'type' => 'link',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => 50,
								'class' => '',
								'id' => '',
							),
							'post_type' => array(
							),
							'taxonomy' => array(
							),
							'allow_null' => 0,
							'multiple' => 0,
						),
					),
				),
			),

			'location' => array(
				array(
					array(
						'param' => 'block',
						'operator' => '==',
						'value' => 'acf/mtm-block-logo-showcase',
					),
				),
			),
			'menu_order' => 0,
			'position' => 'side',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => '',
			'active' => true,
			'description' => ''
		));
	}

	// Widget Area
	public static function mtm_block_widget_area( $label = 'Widget Area' ) {
		return apply_filters( 'mtm_block_widget_area_filter', array(
			'key' => '570bd7f0a52c7block',
			'name' => 'mtm_module_widget_area',
			'label' => $label,
			'display' => 'block',
			'fields' => array(
				array(
					'key' => 'field_570bd7fba52c8block',
					'label' => 'Widget Area Title',
					'name' => 'mtm_widget_area_title',
					'type' => 'text',
					'instructions' => 'Optional title for widget area (leave blank for no title)',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array(
					'key' => 'field_570bd811a52c9block',
					'label' => 'Select Widget Area',
					'name' => 'mtm_select_widget_area',
					'type' => 'widget_area',
					'instructions' => 'Select which widget area to show. You can add widgets to this area under Appearance > Widgets.',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'allow_null' => 1,
					'display_or_return' => 'return',
				),
				array(
					'key' => 'field_5dd188a07d1c9block7',
					'label' => 'Background Color',
					'name' => 'mtm_color_picker_background',
					'type' => 'color_picker',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
				),
			),

			'location' => array(
				array(
					array(
						'param' => 'block',
						'operator' => '==',
						'value' => 'acf/mtm-block-widget-area',
					),
				),
			),
			'menu_order' => 0,
			'position' => 'side',
			'style' => 'side',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => '',
			'active' => true,
			'description' => ''
		));
	}

	// Post List
	public static function mtm_block_list_posts( $label = 'Post List' ) {
		return apply_filters( 'mtm_block_list_posts_filter', array(
			'key' => '5783de4c38883block',
			'name' => 'mtm_module_listgrid_posts',
			'label' => $label,
			'display' => 'block',
			'fields' => array(
				array(
					'key' => 'field_5783de4c38884block',
					'label' => 'List Title',
					'name' => 'mtm_list_title',
					'type' => 'text',
					'instructions' => 'Optional title for list area (leave blank for no title)',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array(
					'key' => 'field_5783de4c38885block',
					'label' => 'Content Source',
					'name' => 'mtm_list_archive_select',
					'type' => 'select',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'Add Posts Manually' => 'Add Posts Manually',
						'Pick From Taxonomy' => 'Display Single Category',
						'Pick From Post Type' => 'Display Post Type',
					),
					'allow_null' => 0,
					'other_choice' => 0,
					'save_other_choice' => 0,
					'default_value' => '',
				),
				array(
					'key' => 'field_5783de4c38886block',
					'label' => 'Select Category',
					'name' => 'mtm_list_archive_taxonomy',
					'type' => 'taxonomy-chooser',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5783de4c38885block',
								'operator' => '==',
								'value' => 'Pick From Taxonomy',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'tax_type' => 0,
					'choices' => '',
					'type_value' => 1,
					'allow_null' => 0,
					'ui' => 0,
					'ajax' => 0,
					'multiple' => 0,
				),
				array(
					'key' => 'field_5783de4c38887block',
					'label' => 'Select Post Type',
					'name' => 'mtm_list_archive_post_type',
					'type' => 'post_type_selector',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5783de4c38885block',
								'operator' => '==',
								'value' => 'Pick From Post Type',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'select_type' => 0,
				),

				array(
					'key' => 'field_5783e66e808c7block',
					'label' => 'Select Posts',
					'name' => 'mtm_list_archive_manual_posts',
					'type' => 'relationship',
					'instructions' => 'Add and reorder content to build your list. Use the search and filters to narrow down your selection.',
					'required' => 1,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5783de4c38885block',
								'operator' => '==',
								'value' => 'Add Posts Manually',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'post_type' => array(
					),
					'taxonomy' => array(
					),
					'filters' => array(
						0 => 'search',
						1 => 'post_type',
						2 => 'taxonomy',
					),
					'elements' => array (
						0 => 'featured_image',
					),
					'min' => '',
					'max' => '',
					'return_format' => 'object',
				),
				array(
					'key' => 'field_5783de4c38888block',
					'label' => 'Total Number of Items?',
					'name' => 'mtm_list_archive_taxonomy_number',
					'type' => 'number',
					'instructions' => 'How many total items do you want to display in this list?',
					'required' => 1,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5783de4c38885block',
								'operator' => '==',
								'value' => 'Pick From Taxonomy',
							),
						),
						array(
							array(
								'field' => 'field_5783de4c38885block',
								'operator' => '==',
								'value' => 'Pick From Post Type',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => 3,
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'min' => '',
					'max' => '',
					'step' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array(
					'key' => 'field_5783e5dabcde03495block',
					'label' => '',
					'name' => 'mtm_randomize',
					'type' => 'true_false',
					'instructions' => '',
					'required' => '',
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5783de4c38885block',
								'operator' => '==',
								'value' => 'Pick From Post Type',
							),
						),
						array(
							array(
								'field' => 'field_5783de4c38885block',
								'operator' => '==',
								'value' => 'Pick From Taxonomy',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'message' => 'Randomize Posts?',
					'default_value' => 0,
				),
				array(
					'key' => 'field_5783e5d7808c5block',
					'label' => '',
					'name' => 'mtm_show_taxonomy_links',
					'type' => 'true_false',
					'instructions' => 'Do you want to show a list of terms to use as links/filters?',
					'required' => '',
					'conditional_logic' => '',
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'message' => 'Show List of Category Links?',
					'default_value' => 0,
				),
				array(
					'key' => 'field_5783e637808c6block',
					'label' => 'Which Category?',
					'name' => 'mtm_list_archive_taxonomy_links',
					'type' => 'taxonomy-chooser',
					'instructions' => 'Which term should we select to display the terms?',
					'required' => 1,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5783e5d7808c5block',
								'operator' => '==',
								'value' => '1',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'tax_type' => 1,
					'choices' => '',
					'type_value' => 1,
					'allow_null' => 0,
					'ui' => 0,
					'ajax' => 0,
					'multiple' => 0,
				),
				array(
					'key' => 'field_578f8e190874fblock',
					'label' => '',
					'name' => 'mtm_show_view_all_link',
					'type' => 'true_false',
					'instructions' => 'Yes, add a "View All" link to the bottom of this list',
					'required' => '',
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5783de4c38885block',
								'operator' => '==',
								'value' => 'Pick From Taxonomy',
							),
						),
						array(
							array(
								'field' => 'field_5783de4c38885block',
								'operator' => '==',
								'value' => 'Pick From Post Type',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'message' => 'Show "View All" Link?',
					'default_value' => 0,
				),
				array(
					'key' => 'field_57835e9283ur9834bbblock',
					'label' => 'View All Link Text',
					'name' => 'mtm_view_all_link_text',
					'type' => 'text',
					'instructions' => 'Optional text for Veiw All link',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_578f8e190874fblock',
								'operator' => '==',
								'value' => '1',
							),
						),
					),
					'wrapper' => array(
						'width' => 100,
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array(
					'key' => 'field_5dd188a07d1c9block10',
					'label' => 'Background Color',
					'name' => 'mtm_color_picker_background',
					'type' => 'color_picker',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
				),
			),

			'location' => array(
				array(
					array(
						'param' => 'block',
						'operator' => '==',
						'value' => 'acf/mtm-block-list-posts',
					),
				),
			),
			'menu_order' => 0,
			'position' => 'side',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => '',
			'active' => true,
			'description' => ''
		));
	}

	// Post Grid
	public static function mtm_block_grid_posts( $label = 'Post Grid' ) {
		return apply_filters( 'mtm_block_grid_posts_filter', array(
			'key' => '5783de5e38890block',
			'name' => 'mtm_module_gridlist_posts',
			'label' => $label,
			'display' => 'block',
			'fields' => array(
				array(
					'key' => 'field_5783de5e38891block',
					'label' => 'Grid Title',
					'name' => 'mtm_list_title',
					'type' => 'text',
					'instructions' => 'Optional title for grid area (leave blank for no title)',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => 70,
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),

				array(
					'key' => 'field_5783de5e38892block',
					'label' => 'Content Source',
					'name' => 'mtm_list_archive_select',
					'type' => 'select',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'Add Posts Manually' => 'Add Posts Manually',
						'Pick From Taxonomy' => 'Display From Single Category',
						'Pick From Post Type' => 'Display From Post Type',
					),
					'allow_null' => 0,
					'other_choice' => 0,
					'save_other_choice' => 0,
					'default_value' => '',
				),
				array(
					'key' => 'field_5783de5e38893block',
					'label' => 'Select Category',
					'name' => 'mtm_list_archive_taxonomy',
					'type' => 'taxonomy-chooser',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5783de5e38892block',
								'operator' => '==',
								'value' => 'Pick From Taxonomy',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'tax_type' => 0,
					'choices' => '',
					'type_value' => 1,
					'allow_null' => 0,
					'ui' => 0,
					'ajax' => 0,
					'multiple' => 0,
				),
				array(
					'key' => 'field_5783de5e38894block',
					'label' => 'Select Post Type',
					'name' => 'mtm_list_archive_post_type',
					'type' => 'post_type_selector',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5783de5e38892block',
								'operator' => '==',
								'value' => 'Pick From Post Type',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'select_type' => 0,
				),
				array(
					'key' => 'field_5783e5dzyxwv03495block',
					'label' => 'Randomize Posts?',
					'name' => 'mtm_randomize',
					'type' => 'true_false',
					'instructions' => '',
					'required' => '',
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5783de5e38892block',
								'operator' => '==',
								'value' => 'Pick From Taxonomy',
							),
						),
						array(
							array(
								'field' => 'field_5783de5e38892block',
								'operator' => '==',
								'value' => 'Pick From Post Type',
							),
						),
					),
					'wrapper' => array(
						'width' => 30,
						'class' => '',
						'id' => '',
					),
					'message' => '',
					'default_value' => 0,
				),
				array(
					'key' => 'field_5783dee83889eblock',
					'label' => 'Select Posts',
					'name' => 'mtm_list_archive_manual_posts',
					'type' => 'relationship',
					'instructions' => 'Add and reorder content to build your grid. Use the search and filters to narrow down your selection.',
					'required' => 1,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5783de5e38892block',
								'operator' => '==',
								'value' => 'Add Posts Manually',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'post_type' => array(
					),
					'taxonomy' => array(
					),
					'filters' => array(
						0 => 'search',
						1 => 'post_type',
						2 => 'taxonomy',
					),
					'elements' => array (
						0 => 'featured_image',
					),
					'min' => '',
					'max' => '',
					'return_format' => 'object',
				),
				array(
					'key' => 'field_5783de5e38895block',
					'label' => 'Total Number of Items?',
					'name' => 'mtm_list_archive_taxonomy_number',
					'type' => 'number',
					'instructions' => 'How many total items do you want to display in this grid?',
					'required' => 1,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5783de5e38892block',
								'operator' => '==',
								'value' => 'Pick From Taxonomy',
							),
						),
						array(
							array(
								'field' => 'field_5783de5e38892block',
								'operator' => '==',
								'value' => 'Pick From Post Type',
							),
						),
					),
					'wrapper' => array(
						'width' => 30,
						'class' => '',
						'id' => '',
					),
					'default_value' => 3,
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'min' => '',
					'max' => '',
					'step' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array(
					'key' => 'field_5783de5e38896block',
					'label' => 'Number of Items Per Row?',
					'name' => 'mtm_grid_archive_per_row',
					'type' => 'number',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => 3,
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'min' => 1,
					'max' => 6,
					'step' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array(
					'key' => 'field_5783dfaa3889fblock',
					'label' => '',
					'name' => 'mtm_show_taxonomy_links',
					'type' => 'true_false',
					'instructions' => 'Do you want to show a list of terms to use as links/filters?',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => 30,
						'class' => '',
						'id' => '',
					),
					'message' => 'Show List of Category Links?',
					'default_value' => 0,
				),
				array(
					'key' => 'field_5783e0e0388a0block',
					'label' => 'Which List?',
					'name' => 'mtm_list_archive_taxonomy_links',
					'type' => 'taxonomy-chooser',
					'instructions' => 'Which list should we select to display the terms?',
					'required' => 1,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5783dfaa3889fblock',
								'operator' => '==',
								'value' => '1',
							),
						),
					),
					'wrapper' => array(
						'width' => 40,
						'class' => '',
						'id' => '',
					),
					'tax_type' => 1,
					'choices' => '',
					'type_value' => 1,
					'allow_null' => 0,
					'ui' => 0,
					'ajax' => 0,
					'multiple' => 0,
				),
				array(
					'key' => 'field_578f8e4208750block',
					'label' => '',
					'name' => 'mtm_show_view_all_link',
					'type' => 'true_false',
					'instructions' => 'Add a "View All" link to the bottom of this grid',
					'required' => '',
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5783de5e38892block',
								'operator' => '==',
								'value' => 'Pick From Taxonomy',
							),
						),
						array(
							array(
								'field' => 'field_5783de5e38892block',
								'operator' => '==',
								'value' => 'Pick From Post Type',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'message' => 'Show "View All" link?',
					'default_value' => 0,
				),
				array(
					'key' => 'field_57835e9283ur9834block',
					'label' => 'View All Link Text',
					'name' => 'mtm_view_all_link_text',
					'type' => 'text',
					'instructions' => 'Optional text for Veiw All link',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_578f8e4208750block',
								'operator' => '==',
								'value' => '1',
							),
						),
					),
					'wrapper' => array(
						'width' => 100,
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array(
					'key' => 'field_5dd188a07d1c9block11',
					'label' => 'Background Color',
					'name' => 'mtm_color_picker_background',
					'type' => 'color_picker',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'block',
						'operator' => '==',
						'value' => 'acf/mtm-block-grid-posts',
					),
				),
			),
			'menu_order' => 0,
			'position' => 'side',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => '',
			'active' => true,
			'description' => ''
		));
	}

	// Tabs
	public function mtm_block_tabs( $label = 'Tabs' ) {
		return apply_filters( 'mtm_block_tabs_filter', array(
			'key' => '5a00b5acf261ablock',
			'name' => 'mtm_module_tabs',
			'label' => 'Tabs',
			'display' => 'block',
			'fields' => array(
				array(
					array(
						'key' => 'field_5dd188a07d1c9block12',
						'label' => 'Background Color',
						'name' => 'mtm_color_picker_background',
						'type' => 'color_picker',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
					),
					'key' => 'field_5a00b5bdf261bblock',
					'label' => 'Add Tabs',
					'name' => 'mtm_tab_repeater',
					'type' => 'repeater',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'collapsed' => 'field_5a00b5ddf261cblock',
					'min' => 0,
					'max' => 0,
					'layout' => 'block',
					'button_label' => 'Add New Tab',
					'sub_fields' => array(
						array(
							'key' => 'field_5a00b5ddf261cblock',
							'label' => 'Tab Title',
							'name' => 'mtm_tab_title',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5a00b5e8f261dblock',
							'label' => 'Tab Content',
							'name' => 'mtm_tab_content',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'full',
							'media_upload' => 1,
							'delay' => 0,
						),
					),
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'block',
						'operator' => '==',
						'value' => 'acf/mtm-block-tabs',
					),
				),
			),
			'menu_order' => 0,
			'position' => 'side',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => '',
			'active' => true,
			'description' => ''
		));
	}

	// Manual List
	public static function mtm_block_list_manual( $label = 'Manual List' ) {
		return apply_filters( 'mtm_block_list_manual_filter', array(
			'key' => '5728d653cf63fblock',
			'name' => 'mtm_module_listgrid',
			'label' => $label,
			'display' => 'block',
			'fields' => array(
				array(
					'key' => 'field_5728dc4b35580block',
					'label' => 'List Title',
					'name' => 'mtm_list_title',
					'type' => 'text',
					'instructions' => 'Optional title for list area (leave blank for no title)',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => 75,
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array(
					'key' => 'field_5dd188a07d1c9block8',
					'label' => 'Background Color',
					'name' => 'mtm_color_picker_background',
					'type' => 'color_picker',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => 25,
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
				),
				array(
					'key' => 'field_5728d666cf640block',
					'label' => 'Add List Item',
					'name' => 'mtm_add_list_item',
					'type' => 'repeater',
					'instructions' => 'Click "Add List Item" to create a new list row',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'collapsed' => 'field_5728d690cf641block',
					'min' => '',
					'max' => '',
					'layout' => 'block',
					'button_label' => 'Add List Item',
					'sub_fields' => array(
						array(
							'key' => 'field_5728d690cf641block',
							'label' => 'Heading',
							'name' => 'mtm_list_item_heading',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => 50,
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
						array(
							'key' => 'field_57815a30d2345block',
							'label' => 'Content Link',
							'name' => 'mtm_content_link',
							'type' => 'link',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => 50,
								'class' => '',
								'id' => '',
							),
							'post_type' => array(
							),
							'taxonomy' => array(
							),
							'allow_null' => 0,
							'multiple' => 0,
						),
						array(
							'key' => 'field_5728d6b0cf642block',
							'label' => 'Content',
							'name' => 'mtm_list_item_content',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => 50,
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'basic',
							'media_upload' => 1,
						),
						array(
							'key' => 'field_57730099184bdblock',
							'label' => 'File (optional)',
							'name' => 'mtm_list_item_file',
							'type' => 'file',
							'instructions' => 'Include a file with this list item',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => 25,
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
							'library' => 'all',
							'min_size' => '',
							'max_size' => '',
							'mime_types' => '',
						),
						array(
							'key' => 'field_5728d6c7cf643block',
							'label' => 'Image (optional)',
							'name' => 'mtm_list_item_image',
							'type' => 'image',
							'instructions' => 'Include an image with this list item',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => 25,
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
							'preview_size' => 'thumbnail',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
					),
				),
			),

			'location' => array(
				array(
					array(
						'param' => 'block',
						'operator' => '==',
						'value' => 'acf/mtm-block-list-manual',
					),
				),
			),
			'menu_order' => 0,
			'position' => 'side',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => '',
			'active' => true,
			'description' => ''
		));
	}

	// Manual Grid
	public static function mtm_block_grid_manual( $label = 'Manual Grid' ) {
		return apply_filters( 'mtm_block_grid_manual_filter', array(
			'key' => '576a88e224ba2block',
			'name' => 'mtm_module_gridlist',
			'label' => $label,
			'display' => 'block',
			'fields' => array(
				array(
					'key' => 'field_576a88e224ba3block',
					'label' => 'Grid Title',
					'name' => 'mtm_list_title',
					'type' => 'text',
					'instructions' => 'Optional title for grid area (leave blank for no title)',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => 50,
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array(
					'key' => 'field_576bec54e5801block',
					'label' => 'Number of Items Per Row?',
					'name' => 'mtm_grid_archive_per_row',
					'type' => 'number',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => 25,
						'class' => '',
						'id' => '',
					),
					'default_value' => 3,
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'min' => 1,
					'max' => 6,
					'step' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array(
					'key' => 'field_5dd188a07d1c9block9',
					'label' => 'Background Color',
					'name' => 'mtm_color_picker_background',
					'type' => 'color_picker',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => 25,
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
				),
				array(
					'key' => 'field_576a88e224ba8block',
					'label' => 'Add Grid Item',
					'name' => 'mtm_add_list_item',
					'type' => 'repeater',
					'instructions' => 'Click "Add Grid Item" to create a new Grid block',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'collapsed' => 'field_576a88e224ba9block',
					'min' => '',
					'max' => '',
					'layout' => 'block',
					'button_label' => 'Add Grid Item',
					'sub_fields' => array(
						array(
							'key' => 'field_576a88e224ba9block',
							'label' => 'Heading',
							'name' => 'mtm_list_item_heading',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => 50,
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
						array(
							'key' => 'field_57815a30d2d63innerblock',
							'label' => 'Content Link',
							'name' => 'mtm_content_link',
							'type' => 'link',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => 50,
								'class' => '',
								'id' => '',
							),
							'post_type' => array(
							),
							'taxonomy' => array(
							),
							'allow_null' => 0,
							'multiple' => 0,
						),
						array(
							'key' => 'field_576a88e224babblock',
							'label' => 'Content',
							'name' => 'mtm_list_item_content',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => 50,
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'basic',
							'media_upload' => 1,
						),
						array(
							'key' => 'field_57730067184bcblock',
							'label' => 'File (optional)',
							'name' => 'mtm_list_item_file',
							'type' => 'file',
							'instructions' => 'Include a file with this grid item',
							'required' => '',
							'conditional_logic' => '',
							'wrapper' => array (
								'width' => 25,
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
							'library' => 'all',
							'min_size' => '',
							'max_size' => '',
							'mime_types' => '',
						),
						array(
							'key' => 'field_576a88e224bacblock',
							'label' => 'Image (optional)',
							'name' => 'mtm_list_item_image',
							'type' => 'image',
							'instructions' => 'Include an image with this grid item',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => 25,
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
							'preview_size' => 'thumbnail',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
					),
				),
			),

			'location' => array(
				array(
					array(
						'param' => 'block',
						'operator' => '==',
						'value' => 'acf/mtm-block-grid-manual',
					),
				),
			),
			'menu_order' => 0,
			'position' => 'side',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => '',
			'active' => true,
			'description' => ''
		));
	}


	// Show Page Title?
	public static function mtm_block_show_page_title( $label = 'Show Page Title?' ) {
		return apply_filters( 'mtm_block_show_page_title_filter', array(
			'key' => 'field_570c0e236b517block',
			'label' => $label,
			'name' => 'mtm_block_show_page_title',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => 'Yes, show the page title at the top of the page (unchecking this will hide the page title)',
			'default_value' => 0,
		));
	}

	// Show Jump Button?
	public static function mtm_enable_jump_button( $label = 'Enable Back To Top?' ) {
		return apply_filters( 'mtm_enable_jump_button_filter', array(
			'key' => 'field_84gfkd945yd058block',
			'label' => $label,
			'name' => 'mtm_enable_jump_button',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => 'Yes, show a back to top button in all single scroll sections (unchecking this will hide the button)',
			'default_value' => 0,
		));
	}

} // END class


// array(
// 	'key' => 'field_57815a30d2d63innerblock',
// 	'label' => 'Call To Action Link',
// 	'name' => 'mtm_content_link',
// 	'type' => 'link',
// 	'instructions' => '',
// 	'required' => 0,
// 	'conditional_logic' => 0,
// 	'wrapper' => array (
// 		'width' => '',
// 		'class' => '',
// 		'id' => '',
// 	),
// 	'post_type' => array(
// 	),
// 	'taxonomy' => array(
// 	),
// 	'allow_null' => 0,
// 	'multiple' => 0,
// ),