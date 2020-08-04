<?php
/**
 * Registers all ACF Fields
 *
 * To filter the layouts directly:
 *
 * function my_mtm_layouts_filter( $array ){
 *
 *  // Add new fields to the end of the array
 *  array_push( $array, array( 'my_key' => my_array_function() ) );
 *
 *  // Remove existing fields from the array
 *  unset( $array['field_key'] );
 *
 *  return $array;
 * }
 * add_filter( 'mtm_content_modules_layouts_filter', 'my_mtm_layouts_filter' );
 */

/**
* Modular Fields
*/
class Mtm_Block_Field_Local_Add extends Mtm_Block_Field_Groups {

	public function __construct() {
		add_action( 'after_setup_theme', array( $this, 'mtm_add_field_groups' ), 2 );
	}

	public function mtm_add_field_groups() {

		if ( function_exists( 'acf_add_local_field_group' ) ) {

			acf_add_local_field_group( $this->mtm_block_logo_showcase() );
			acf_add_local_field_group( $this->mtm_block_widget_area() );
			acf_add_local_field_group( $this->mtm_block_list_manual() );
			acf_add_local_field_group( $this->mtm_block_grid_manual() );
			acf_add_local_field_group( $this->mtm_block_list_posts() );
			acf_add_local_field_group( $this->mtm_block_grid_posts() );
			acf_add_local_field_group( $this->mtm_block_tabs() );

			acf_add_local_field_group( $this->mtm_innerblock_slider() );
			acf_add_local_field_group( $this->mtm_innerblock_call_to_action() );

			acf_add_local_field_group( $this->mtm_template_block_single_scroll() );
			acf_add_local_field_group( $this->mtm_enable_jump_button() );
		}
	}
} // END class

new Mtm_Block_Field_Local_Add();


/**
 * Registers all Project-specific (non-modular) ACF Fields
 * Declares all Field Groups
 */

function mtm_block_category( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug'  => 'custom-blocks',
				'title' => __( 'Custom Blocks', 'custom-blocks' ),
			),
		)
	);
}
add_filter( 'block_categories', 'mtm_block_category', 10, 2 );

/**
* Standard Metabox fields
*/
function register_acf_block_types() {

	$lipsum_button    = 'Button';
	$lipsum_color     = '';
	$lipsum_image     = '';
	$lipsum_sentence  = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eu lacus ipsum. ';
	$lipsum_paragraph = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eu lacus ipsum. Aliquam lacinia metus vel tincidunt suscipit. Vivamus ullamcorper nec quam commodo eleifend. Nulla vitae urna id mauris ornare tempus in et turpis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce porta elit orci, id posuere enim fermentum ut.'

	// Manual List
	acf_register_block_type(
		array(
			'name'            => 'mtm_block_list_manual',
			'title'           => __( 'Manual List Block' ),
			'description'     => __( 'Manually create content that will be displayed in a list format' ),
			'render_template' => MTM_CBLOCK_PLUGIN_DIR . 'templates/mtm-wrapper-list-manual.php',
			'category'        => 'custom-blocks',
			'icon'            => 'excerpt-view',
			'keywords'        => array( 'list' ),
			'mode'            => 'preview',
		)
	);

	// Content List
	acf_register_block_type(
		array(
			'name'            => 'mtm_block_list_posts',
			'title'           => __( 'Content List Block' ),
			'description'     => __( 'Select existing content that will be displayed in a list format' ),
			'render_template' => MTM_CBLOCK_PLUGIN_DIR . 'templates/mtm-wrapper-list-post.php',
			'category'        => 'custom-blocks',
			'icon'            => 'excerpt-view',
			'keywords'        => array( 'list', 'posts' ),
			'mode'            => 'preview',
		)
	);

	// Manual Grid
	acf_register_block_type(
		array(
			'name'            => 'mtm_block_grid_manual',
			'title'           => __( 'Manual Grid Block' ),
			'description'     => __( 'Manually create content that will be displayed in a grid format' ),
			'render_template' => MTM_CBLOCK_PLUGIN_DIR . 'templates/mtm-wrapper-grid-manual.php',
			'category'        => 'custom-blocks',
			'icon'            => 'grid-view',
			'keywords'        => array( 'grid' ),
			'mode'            => 'preview',
		)
	);

		// Content Grid
		acf_register_block_type(
			array(
				'name'            => 'mtm_block_grid_posts',
				'title'           => __( 'Content Grid Block' ),
				'description'     => __( 'Select existing content that will be displayed in a gridt format' ),
				'render_template' => MTM_CBLOCK_PLUGIN_DIR . 'templates/mtm-wrapper-grid-post.php',
				'category'        => 'custom-blocks',
				'icon'            => 'grid-view',
				'keywords'        => array( 'grid', 'posts' ),
				'mode'            => 'preview',
			)
		);

		// Tabs
		acf_register_block_type(
			array(
				'name'            => 'mtm_block_tabs',
				'title'           => __( 'Tabs Block' ),
				'description'     => __( 'Display tabs that can stack to an accoridon on mobile' ),
				'render_template' => MTM_CBLOCK_PLUGIN_DIR . 'templates/mtm-wrapper-tabs.php',
				'category'        => 'custom-blocks',
				'icon'            => 'index-card',
				'keywords'        => array( 'tabs' ),
				'mode'            => 'preview',
			)
		);

		// Logo Showcase
		acf_register_block_type(
			array(
				'name'            => 'mtm_block_logo_showcase',
				'title'           => __( 'Logo Showcase Block' ),
				'description'     => __( 'Display a showcase of logo images with links' ),
				'render_template' => MTM_CBLOCK_PLUGIN_DIR . 'templates/mtm-wrapper-logos.php',
				'category'        => 'custom-blocks',
				'icon'            => 'star-filled',
				'keywords'        => array( 'logos' ),
				'mode'            => 'preview',
			)
		);

		// Widget Area
		acf_register_block_type(
			array(
				'name'            => 'mtm_block_widget_area',
				'title'           => __( 'Widget Area Block' ),
				'description'     => __( 'Display one of your custom widget areas' ),
				'render_template' => MTM_CBLOCK_PLUGIN_DIR . 'templates/mtm-wrapper-widget-area.php',
				'category'        => 'custom-blocks',
				'icon'            => 'feedback',
				'keywords'        => array( 'widgets', 'sidebar' ),
				'mode'            => 'preview',
			)
		);

		// Back To Top
		acf_register_block_type(
			array(
				'name'            => 'mtm_block_jump_button',
				'title'           => __( 'Back To Top Block' ),
				'description'     => __( 'Display a simple "back to top" button' ),
				'render_template' => MTM_CBLOCK_PLUGIN_DIR . 'templates/mtm-block-jump-button.php',
				'category'        => 'custom-blocks',
				'icon'            => 'arrow-up-alt',
				'keywords'        => array( 'back to top' ),
				'mode'            => 'preview',
			)
		);

}

/**
* Fields Using InnerBlocks
**/
function register_acf_innerblock_types() {

	// Call To Action
	acf_register_block_type(
		array(
			'name'            => 'mtm_block_call_to_action',
			'title'           => __( 'Call To Action Block' ),
			'description'     => __( 'Call to action with title, subtitle, and buttons' ),
			'render_template' => MTM_CBLOCK_PLUGIN_DIR . 'templates/mtm-wrapper-call-to-action.php',
			'category'        => 'custom-blocks',
			'icon'            => 'welcome-view-site',
			'keywords'        => array( 'call to action' ),
			'mode'            => 'preview',
			'supports'        => array(
				'align'              => true,
				'mode'               => false,
				'__experimental_jsx' => true,
			),
		)
	);

	// Slider
	acf_register_block_type(
		array(
			'name'            => 'mtm_block_slider',
			'title'           => __( 'Slider Block' ),
			'description'     => __( 'Display a slider, where each slide has background image, headline, text, and link' ),
			'render_template' => MTM_CBLOCK_PLUGIN_DIR . 'templates/mtm-wrapper-slider.php',
			'category'        => 'custom-blocks',
			'icon'            => 'images-alt2',
			'keywords'        => array( '' ),
			'mode'            => 'preview',
			'supports'        => array(
				'align'              => true,
				'mode'               => false,
				'__experimental_jsx' => true,
			),
			'enqueue_assets'  => function() {
				wp_enqueue_style( 'tinyslider_css', plugins_url( 'assets/css/tiny-slider.css', dirname( __FILE__ ) ), '', 1 );
				wp_enqueue_script( 'tinyslider', plugins_url( 'assets/js/min/tiny-slider-min.js', dirname( __FILE__ ) ), array( 'jquery' ), 1, true );
			},
		)
	);
}

// Check if function exists and hook into setup.
if ( function_exists( 'acf_register_block_type' ) ) {
	add_action( 'acf/init', 'register_acf_block_types' );
}

if ( get_option( 'acf_version' ) >= 5.9 ) {
	if ( function_exists( 'acf_register_block_type' ) ) {
		add_action( 'acf/init', 'register_acf_innerblock_types' );
	}
}




/**
* Original ACF field registration
* To be refactored as seen above
*/

if ( function_exists( 'acf_add_local_field_group' ) ) :

	// $mtm_field_groups = new Mtm_Field_Groups();

	// acf_add_local_field_group( $mtm_field_groups->mtm_content_modules() );

	// Block Settings
	acf_add_local_field_group(
		array(
			'key'                   => 'group_5b3f7572ce4f5BLOCK',
			'title'                 => 'Custom Block Settings',
			'fields'                => array(
				array(
					'key'               => 'field_5b3f7580fae80BLOCK',
					'label'             => 'Include Stylesheets?',
					'name'              => 'mtm_block_enqueue_stylesheets',
					'type'              => 'true_false',
					'instructions'      => 'Defaults to checked. If unchecked, you will need to include your own stylesheets in your theme.',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'message' => 'Enqueue the stylesheets from this plugin?',
					'default_value' => 1,
					'ui' => 0,
					'ui_on_text' => '',
					'ui_off_text' => '',
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'options_page',
						'operator' => '==',
						'value' => 'page-components-settings',
					),
				),
			),
			'menu_order' => 0,
			'position' => 'normal',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => '',
			'active' => 1,
			'description' => '',
		)
	);

	// Background Img
	acf_add_local_field_group(
		array(
			'key' => 'group_56831a6c39e46block',
			'title' => 'Background Image',
			'fields' => array(
				array(
					'key' => 'field_565cdb92e45d7block',
					'label' => 'Add Background Image',
					'name' => 'mtm_home_background_image',
					'type' => 'image',
					'instructions' => '(Optional) Add a background image to the homepage area',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
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
			'location' => array(
				array(
					array(
						'param' => 'blocktemplates',
						'operator' => '==',
						'value' => '../templates/template-single-scroll.php',
					),
				),
			),
			'menu_order' => 100,
			'position' => 'side',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => '',
			'active' => 1,
			'description' => '',
		)
	);

endif;
