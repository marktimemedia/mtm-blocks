!function($){var _="fade",i=!0,s=!0,t=3e3,f=!0,e=!0;fsOptions.mtm_fs_wp_field_animation_type&&(_=fsOptions.mtm_fs_wp_field_animation_type),"true"!=fsOptions.mtm_fs_wp_field_slider_height&&"false"!=fsOptions.mtm_fs_wp_field_slider_height||(s=JSON.parse(fsOptions.mtm_fs_wp_field_slider_height)),"true"!=fsOptions.mtm_fs_wp_field_animation_autoplay&&"false"!=fsOptions.mtm_fs_wp_field_animation_autoplay||(i=JSON.parse(fsOptions.mtm_fs_wp_field_animation_autoplay)),fsOptions.mtm_fs_wp_field_animation_speed&&(t=fsOptions.mtm_fs_wp_field_animation_speed),fsOptions.mtm_fs_wp_field_control_nav&&(f=JSON.parse(fsOptions.mtm_fs_wp_field_control_nav)),fsOptions.mtm_fs_wp_field_direction_nav&&(e=JSON.parse(fsOptions.mtm_fs_wp_field_direction_nav)),$(window).load(function(){$(".flexslider").flexslider({animation:_,smoothHeight:s,slideshow:i,slideshowSpeed:t})})}(jQuery);