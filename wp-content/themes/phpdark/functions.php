<?php 
/* post featured image */
if (function_exists('add_theme_support')) {

    function theme_support_options() {

        add_theme_support('title-tag');
        add_theme_support('custom-header');
        add_theme_support('custom-background');
        add_theme_support('post-thumbnails');
        add_theme_support('post-formats', array(
            'standard',
            'gallery',
            'image',
            'status',
            'chat',
            'audio',
            'video',
            'link',
            'aside',
            'quote'
        ));
    }

}

add_action('init', 'theme_support_options');

get_template_part("classes/Helper");


