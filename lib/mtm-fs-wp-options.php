<?php // options page

/**
 * custom option and settings
 */
function mtm_fs_wp_settings_init() {
    // register a new setting for "mtm_fs_wp" page
    register_setting(
        'mtm_fs_wp',                                // Option Group
        'mtm_fs_wp_options',                        // Option Name
        'mtm_fs_wp_sanitize_inputs'                 // Sanitize callback
    );

    // Flexslider Settings section
    add_settings_section(
        'mtm_fs_wp_section_choose_features',        // ID
        __( 'Flexslider Settings', 'mtm_fs_wp' ),   // Title
        'mtm_fs_wp_section_choose_features_cb',     // Callback
        'mtm_fs_wp'                                 // Page
    );

    // Flexslider Settings fields
    add_settings_field(
        'mtm_fs_wp_field_enqueue_flexslider',
        // use $args' label_for to populate the id inside the callback
        __( 'Enqueue Flexslider Script?', 'mtm_fs_wp' ),
        'mtm_fs_wp_field_enqueue_flexslider_cb',
        'mtm_fs_wp',
        'mtm_fs_wp_section_choose_features',
        [
            'label_for' => 'mtm_fs_wp_field_enqueue_flexslider',
            'class' => 'mtm_fs_wp_row',
            'mtm_fs_wp_custom_data' => 'custom',
        ]
    );

    add_settings_field(
        'mtm_fs_wp_field_enqueue_css',
        // use $args' label_for to populate the id inside the callback
        __( 'Include default Flexslider CSS?', 'mtm_fs_wp' ),
        'mtm_fs_wp_field_enqueue_css_cb',
        'mtm_fs_wp',
        'mtm_fs_wp_section_choose_features',
        [
            'label_for' => 'mtm_fs_wp_field_enqueue_css',
            'class' => 'mtm_fs_wp_row',
            'mtm_fs_wp_custom_data' => 'custom',
        ]
    );

    // Flexslider Options section
    add_settings_section(
        'mtm_fs_wp_section_flexslider_options',         // ID
        __( 'Flexslider Options', 'mtm_fs_wp' ),        // Title
        'mtm_fs_wp_section_flexslider_options_cb',      // Callback
        'mtm_fs_wp'                                     // Page
    );

    // Flexslider Options fields
    add_settings_field(
        'mtm_fs_wp_field_animation_type',
        // use $args' label_for to populate the id inside the callback
        __( 'Animation Type', 'mtm_fs_wp' ),
        'mtm_fs_wp_field_animation_type_cb',
        'mtm_fs_wp',
        'mtm_fs_wp_section_flexslider_options',
        [
            'label_for' => 'mtm_fs_wp_field_animation_type',
            'class' => 'mtm_fs_wp_row',
            'mtm_fs_wp_custom_data' => 'custom',
        ]
    );

    add_settings_field(
        'mtm_fs_wp_field_animation_autoplay',
        // use $args' label_for to populate the id inside the callback
        __( 'Autoplay', 'mtm_fs_wp' ),
        'mtm_fs_wp_field_animation_autoplay_cb',
        'mtm_fs_wp',
        'mtm_fs_wp_section_flexslider_options',
        [
            'label_for' => 'mtm_fs_wp_field_animation_autoplay',
            'class' => 'mtm_fs_wp_row',
            'mtm_fs_wp_custom_data' => 'custom',
        ]
    );

    add_settings_field(
        'mtm_fs_wp_field_animation_speed',
        // use $args' label_for to populate the id inside the callback
        __( 'Animation Speed', 'mtm_fs_wp' ),
        'mtm_fs_wp_field_animation_speed_cb',
        'mtm_fs_wp',
        'mtm_fs_wp_section_flexslider_options',
        [
            'label_for' => 'mtm_fs_wp_field_animation_speed',
            'class' => 'mtm_fs_wp_row',
            'mtm_fs_wp_custom_data' => 'custom',
        ]
    );

    add_settings_field(
        'mtm_fs_wp_field_slider_height',
        // use $args' label_for to populate the id inside the callback
        __( 'Adjust Slider Height', 'mtm_fs_wp' ),
        'mtm_fs_wp_field_slider_height_cb',
        'mtm_fs_wp',
        'mtm_fs_wp_section_flexslider_options',
        [
            'label_for' => 'mtm_fs_wp_field_slider_height',
            'class' => 'mtm_fs_wp_row',
            'mtm_fs_wp_custom_data' => 'custom',
        ]
    );

    // add_settings_field(
    //     'mtm_fs_wp_field_control_nav',
    //     // use $args' label_for to populate the id inside the callback
    //     __( 'Show Pagination Controls', 'mtm_fs_wp' ),
    //     'mtm_fs_wp_field_control_nav_cb',
    //     'mtm_fs_wp',
    //     'mtm_fs_wp_section_flexslider_options',
    //     [
    //         'label_for' => 'mtm_fs_wp_field_control_nav',
    //         'class' => 'mtm_fs_wp_row',
    //         'mtm_fs_wp_custom_data' => 'custom',
    //     ]
    // );
    //
    // add_settings_field(
    //     'mtm_fs_wp_field_direction_nav',
    //     // use $args' label_for to populate the id inside the callback
    //     __( 'Show Next/Previous Controls', 'mtm_fs_wp' ),
    //     'mtm_fs_wp_field_direction_nav_cb',
    //     'mtm_fs_wp',
    //     'mtm_fs_wp_section_flexslider_options',
    //     [
    //         'label_for' => 'mtm_fs_wp_field_direction_nav',
    //         'class' => 'mtm_fs_wp_row',
    //         'mtm_fs_wp_custom_data' => 'custom',
    //     ]
    // );
}
add_action( 'admin_init', 'mtm_fs_wp_settings_init' );

/**
 * custom option and settings:
 * callback functions
 */

// sanitization function
// see https://tommcfarlin.com/sanitizing-arrays-the-wordpress-settings-api/

function mtm_fs_wp_sanitize_inputs( $input ) {

    // Initialize the new array that will hold the sanitize values
    $new_input = array();
    // Loop through the input and sanitize each of the values
    foreach ( $input as $key => $val ) {

        $new_input[ $key ] = ( isset( $input[ $key ] ) ) ? sanitize_text_field( $val ) : '';
    }
    return $new_input;
}

// section callbacks can accept an $args parameter, which is an array.
// $args have the following keys defined: title, id, callback.
// the values are defined at the add_settings_section() function.
function mtm_fs_wp_section_choose_features_cb( $args ) { ?>
 <p id="<?php echo esc_attr( $args['id'] ); ?>"><?php esc_html_e( 'Settings for the flexslider plugin', 'mtm_fs_wp' ); ?></p>
 <?php }

 function mtm_fs_wp_section_flexslider_options_cb( $args ) { ?>
 <p id="<?php echo esc_attr( $args['id'] ); ?>"><?php esc_html_e( 'Common settings for all flexsliders used on your site, if you are using Enqueue Flexslider Script above', 'mtm_fs_wp' ); ?></p>
 <?php }

// field callbacks can accept an $args parameter, which is an array.
// $args is defined at the add_settings_field() function.
// wordpress has magic interaction with the following keys: label_for, class.
// the "label_for" key value is used for the "for" attribute of the <label>.
// the "class" key value is used for the "class" attribute of the <tr> containing the field.
// you can add custom key value pairs to be used inside your callbacks.
function mtm_fs_wp_field_enqueue_flexslider_cb( $args ) {
    // get the value of the setting we've registered with register_setting()
    $options = get_option( 'mtm_fs_wp_options' );
    // output the field
    ?>
    <select id="<?php echo esc_attr( $args['label_for'] ); ?>" data-custom="<?php echo esc_attr( $args['mtm_fs_wp_custom_data'] ); ?>" name="mtm_fs_wp_options[<?php echo esc_attr( $args['label_for'] ); ?>]">
        <option value="yes" <?php echo isset( $options[ $args['label_for'] ] ) ? ( selected( $options[ $args['label_for'] ], 'yes', false ) ) : ( '' ); ?>>
        <?php esc_html_e( 'Yes', 'mtm_fs_wp' ); ?>
        </option>
        <option value="no" <?php echo isset( $options[ $args['label_for'] ] ) ? ( selected( $options[ $args['label_for'] ], 'no', false ) ) : ( '' ); ?>>
        <?php esc_html_e( 'No', 'mtm_fs_wp' ); ?>
        </option>
    </select>
    <p class="description">
    <?php esc_html_e( 'Default: Yes. Select no if another plugin or theme source already includes Flexslider.', 'mtm_fs_wp' ); ?>
    </p>
<?php }

function mtm_fs_wp_field_enqueue_css_cb( $args ) {
    // get the value of the setting we've registered with register_setting()
    $options = get_option( 'mtm_fs_wp_options' );
    // output the field
    ?>
    <select id="<?php echo esc_attr( $args['label_for'] ); ?>" data-custom="<?php echo esc_attr( $args['mtm_fs_wp_custom_data'] ); ?>" name="mtm_fs_wp_options[<?php echo esc_attr( $args['label_for'] ); ?>]">
        <option value="yes" <?php echo isset( $options[ $args['label_for'] ] ) ? ( selected( $options[ $args['label_for'] ], 'yes', false ) ) : ( '' ); ?>>
        <?php esc_html_e( 'Yes', 'mtm_fs_wp' ); ?>
        </option>
        <option value="no" <?php echo isset( $options[ $args['label_for'] ] ) ? ( selected( $options[ $args['label_for'] ], 'no', false ) ) : ( '' ); ?>>
        <?php esc_html_e( 'No', 'mtm_fs_wp' ); ?>
        </option>
    </select>
    <p class="description">
    <?php esc_html_e( 'Default: Yes. Select no if you want to include the CSS another way, or write your own.', 'mtm_fs_wp' ); ?>
    </p>
<?php }

function mtm_fs_wp_field_enable_gallery_cb( $args ) {
    // get the value of the setting we've registered with register_setting()
    $options = get_option( 'mtm_fs_wp_options' );
    // output the field
    ?>
    <select id="<?php echo esc_attr( $args['label_for'] ); ?>" data-custom="<?php echo esc_attr( $args['mtm_fs_wp_custom_data'] ); ?>" name="mtm_fs_wp_options[<?php echo esc_attr( $args['label_for'] ); ?>]">
        <option value="yes" <?php echo isset( $options[ $args['label_for'] ] ) ? ( selected( $options[ $args['label_for'] ], 'yes', false ) ) : ( '' ); ?>>
        <?php esc_html_e( 'Yes', 'mtm_fs_wp' ); ?>
        </option>
        <option value="no" <?php echo isset( $options[ $args['label_for'] ] ) ? ( selected( $options[ $args['label_for'] ], 'no', false ) ) : ( '' ); ?>>
        <?php esc_html_e( 'No', 'mtm_fs_wp' ); ?>
        </option>
    </select>
    <p class="description">
    <?php esc_html_e( 'Default: Yes. Select no if you would like to use standard WordPress galleries instead of converting them to Flexsliders', 'mtm_fs_wp' ); ?>
    </p>
<?php }

function mtm_fs_wp_field_animation_type_cb( $args ) {
    // get the value of the setting we've registered with register_setting()
    $options = get_option( 'mtm_fs_wp_options' );
    // output the field
    ?>
    <select id="<?php echo esc_attr( $args['label_for'] ); ?>" data-custom="<?php echo esc_attr( $args['mtm_fs_wp_custom_data'] ); ?>" name="mtm_fs_wp_options[<?php echo esc_attr( $args['label_for'] ); ?>]">
        <option value="fade" <?php echo isset( $options[ $args['label_for'] ] ) ? ( selected( $options[ $args['label_for'] ], 'fade', false ) ) : ( '' ); ?>>
        <?php esc_html_e( 'Fade', 'mtm_fs_wp' ); ?>
        </option>
        <option value="slide" <?php echo isset( $options[ $args['label_for'] ] ) ? ( selected( $options[ $args['label_for'] ], 'slide', false ) ) : ( '' ); ?>>
        <?php esc_html_e( 'Slide', 'mtm_fs_wp' ); ?>
        </option>
    </select>
    <p class="description">
    <?php esc_html_e( 'Select whether you want slider transition to Fade or Slide. Default: Fade. ', 'mtm_fs_wp' ); ?>
    </p>
<?php }

function mtm_fs_wp_field_animation_autoplay_cb( $args ) {
    // get the value of the setting we've registered with register_setting()
    $options = get_option( 'mtm_fs_wp_options' );
    // output the field
    ?>
    <select id="<?php echo esc_attr( $args['label_for'] ); ?>" data-custom="<?php echo esc_attr( $args['mtm_fs_wp_custom_data'] ); ?>" name="mtm_fs_wp_options[<?php echo esc_attr( $args['label_for'] ); ?>]">
        <option value="true" <?php echo isset( $options[ $args['label_for'] ] ) ? ( selected( $options[ $args['label_for'] ], 'true', false ) ) : ( '' ); ?>>
        <?php esc_html_e( 'Yes', 'mtm_fs_wp' ); ?>
        </option>
        <option value="false" <?php echo isset( $options[ $args['label_for'] ] ) ? ( selected( $options[ $args['label_for'] ], 'false', false ) ) : ( '' ); ?>>
        <?php esc_html_e( 'No', 'mtm_fs_wp' ); ?>
        </option>
    </select>
    <p class="description">
    <?php esc_html_e( 'Select whether you want to autoplay the slider animation. Default: Yes. ', 'mtm_fs_wp' ); ?>
    </p>
<?php }

function mtm_fs_wp_field_slider_height_cb( $args ) {
    // get the value of the setting we've registered with register_setting()
    $options = get_option( 'mtm_fs_wp_options' );
    // output the field
    ?>
    <select id="<?php echo esc_attr( $args['label_for'] ); ?>" data-custom="<?php echo esc_attr( $args['mtm_fs_wp_custom_data'] ); ?>" name="mtm_fs_wp_options[<?php echo esc_attr( $args['label_for'] ); ?>]">
        <option value="true" <?php echo isset( $options[ $args['label_for'] ] ) ? ( selected( $options[ $args['label_for'] ], 'true', false ) ) : ( '' ); ?>>
        <?php esc_html_e( 'Yes', 'mtm_fs_wp' ); ?>
        </option>
        <option value="false" <?php echo isset( $options[ $args['label_for'] ] ) ? ( selected( $options[ $args['label_for'] ], 'false', false ) ) : ( '' ); ?>>
        <?php esc_html_e( 'No', 'mtm_fs_wp' ); ?>
        </option>
    </select>
    <p class="description">
    <?php esc_html_e( 'Select whether you want the height of the slider to automatically adjust based on the content. Default: Yes.', 'mtm_fs_wp' ); ?>
    </p>
<?php }

function mtm_fs_wp_field_animation_speed_cb( $args ) {
    // get the value of the setting we've registered with register_setting()
    $options = get_option( 'mtm_fs_wp_options' );
    // output the field
    ?>
    <input type="number" value="<?php echo $options['mtm_fs_wp_field_animation_speed'] ? esc_attr( $options['mtm_fs_wp_field_animation_speed'] ) : 5000; ?>" id="<?php echo esc_attr( $args['label_for'] ); ?>" data-custom="<?php echo esc_attr( $args['mtm_fs_wp_custom_data'] ); ?>" name="mtm_fs_wp_options[<?php echo esc_attr( $args['label_for'] ); ?>]">
    </input>
    <p class="description">
    <?php esc_html_e( 'Input the speed you want the slider pause between slides, in milliseconds, if your slider is set to Autoplay. Default: 5000.', 'mtm_fs_wp' ); ?>
    </p>
<?php }

function mtm_fs_wp_field_control_nav_cb( $args ) {
    // get the value of the setting we've registered with register_setting()
    $options = get_option( 'mtm_fs_wp_options' );
    // output the field
    ?>
    <select id="<?php echo esc_attr( $args['label_for'] ); ?>" data-custom="<?php echo esc_attr( $args['mtm_fs_wp_custom_data'] ); ?>" name="mtm_fs_wp_options[<?php echo esc_attr( $args['label_for'] ); ?>]">
        <option value="true" <?php echo isset( $options[ $args['label_for'] ] ) ? ( selected( $options[ $args['label_for'] ], 'true', false ) ) : ( '' ); ?>>
        <?php esc_html_e( 'Yes', 'mtm_fs_wp' ); ?>
        </option>
        <option value="false" <?php echo isset( $options[ $args['label_for'] ] ) ? ( selected( $options[ $args['label_for'] ], 'false', false ) ) : ( '' ); ?>>
        <?php esc_html_e( 'No', 'mtm_fs_wp' ); ?>
        </option>
    </select>
    <p class="description">
    <?php esc_html_e( 'Select whether you want to show pagination navigation for the slider. Default: Yes.', 'mtm_fs_wp' ); ?>
    </p>
<?php }

function mtm_fs_wp_field_direction_nav_cb( $args ) {
    // get the value of the setting we've registered with register_setting()
    $options = get_option( 'mtm_fs_wp_options' );
    // output the field
    ?>
    <select id="<?php echo esc_attr( $args['label_for'] ); ?>" data-custom="<?php echo esc_attr( $args['mtm_fs_wp_custom_data'] ); ?>" name="mtm_fs_wp_options[<?php echo esc_attr( $args['label_for'] ); ?>]">
        <option value="true" <?php echo isset( $options[ $args['label_for'] ] ) ? ( selected( $options[ $args['label_for'] ], 'true', false ) ) : ( '' ); ?>>
        <?php esc_html_e( 'Yes', 'mtm_fs_wp' ); ?>
        </option>
        <option value="false" <?php echo isset( $options[ $args['label_for'] ] ) ? ( selected( $options[ $args['label_for'] ], 'false', false ) ) : ( '' ); ?>>
        <?php esc_html_e( 'No', 'mtm_fs_wp' ); ?>
        </option>
    </select>
    <p class="description">
    <?php esc_html_e( 'Select whether you want to show previous/next controls for the slider. Default: Yes.', 'mtm_fs_wp' ); ?>
    </p>
<?php }


/**
 * Add to Settings Menu
 */
function mtm_fs_wp_options_page() {
    // add sublevel menu page
    add_submenu_page(
        'options-general.php',
        'Flexslider Options',
        'Flexslider Options',
        'manage_options',
        'mtm_fs_wp',
        'mtm_fs_wp_options_page_html'
    );
}
add_action( 'admin_menu', 'mtm_fs_wp_options_page' );

/**
 * Output HTML on Settings page
 */
function mtm_fs_wp_options_page_html() {
     // check user capabilities
     if ( ! current_user_can( 'manage_options' ) ) {
        return;
     }

     // add error/update messages

     // check if the user have submitted the settings
     // wordpress will add the "settings-updated" $_GET parameter to the url
     // if ( isset( $_GET['settings-updated'] ) ) {
     // // add settings saved message with the class of "updated"
     //    add_settings_error( 'mtm_fs_wp_messages', 'mtm_fs_wp_message', __( 'Settings Saved', 'mtm_fs_wp' ), 'updated' );
     // }

     // show error/update messages
     settings_errors( 'mtm_fs_wp_messages' ); ?>

     <div class="wrap">
         <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
         <form action="options.php" method="post">
             <?php
             // output security fields for the registered setting "mtm_fs_wp"
             settings_fields( 'mtm_fs_wp' );
             // output setting sections and their fields
             // (sections are registered for "mtm_fs_wp", each field is registered to a specific section)
             do_settings_sections( 'mtm_fs_wp' );
             // output save settings button
             submit_button( 'Save Settings' );
             ?>
         </form>
     </div>
<?php }
