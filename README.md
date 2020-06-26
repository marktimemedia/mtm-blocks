# ACF Custom Blocks For WordPress

ACF Blocks plugin for WordPress for displaying custom content within pages and posts. **Requires [Advanced Custom Fields Pro](http://advancedcustomfields.com/pro), [ACF Term and Taxonomy Chooser](https://github.com/marktimemedia/acf-term-and-taxonomy-chooser), [ACF Post Type Selector](https://github.com/TimPerry/acf-post-type-selector) and [ACF Widget Area Field](https://wordpress.org/plugins/advanced-custom-fields-widget-area-field/)**.

Recommended for use with [MTM Customizer](https://github.com/marktimemedia/mtm-customizer) and [Pink Spring Theme](https://github.com/marktimemedia/pink-spring)

Works with most standard WordPress themes. Includes jQuery Flexslider (with option to not enqueue script if you already have it elsewhere)

### Custom ACF Blocks
1. Logo Feature with image/link repeater
2. Widget Area
3. Post List
4. Post Grid
5. Manual List
6. Manual Grid
7. Tabs

### Custom Blocks with InnerBlocks (requires ACF 5.9+)
1. Slider (Gallery) with InnerBlocks of heading, subheading, buttons
2. Call to Action with InnerBlocks of heading, subheading, buttons

### Page Templates (block templates coming soon, once WordPress supports them)
1. Custom Block Template (adds ability to hide or show the main page title)
2. Single Scroll Template (adds ability to output other pages below the main page, also background image)

### Vague Description of How To Use
1. Install and activate the plugin
2. Build posts and pages using Custom Blocks
3. Supports regular, wide, and full alignment
4. Several blocks have custom background colors
4. Can filter custom ACF colors to match your theme by targeting `mtm_block_colors_filter`


### Vague Description of How To Theme
1. Create a folder called `mtm-templates` in the root of your theme or child theme
2. Copy any of the `block` or `content` template parts in the plugin `templates` folder into your `mtm-templates` folder, and modify/style them at will. The plugin will automatically override them.
3. To call any of the custom template parts from another part of your theme, use the `mtm_get_block_part()` function
