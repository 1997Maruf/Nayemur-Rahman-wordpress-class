<?php
// Enqueue Styles and Scripts


function lesson_enqueue_styles()
{
    //Theme style css
    wp_enqueue_style('style-css', get_template_directory_uri() . './style.css');
}
add_action('wp_enqueue_scripts', 'lesson_enqueue_styles');


function lesson_theme_registration()
{
    add_theme_support('custom-logo', array(
        'height'      => 30,
        'width'       => 80,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title', 'site-description'),
    ));
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'lessonlms'),
        'mobile'  => __('Mobile Menu', 'lessonlms'),
        'footer_menu_1'  => __('Footer Menu 1', 'lessonlms'),
        'footer_menu_2'  => __('Footer Menu 2', 'lessonlms'),
    ));
}
add_action('after_setup_theme', 'lesson_theme_registration');


function lessons_customize_register($wp_customize)
{
    // Footer Section
    $wp_customize->add_section('footer_section', array(
        'title'       => __('Footer Settings', 'lessonlms'),
        'priority'    => 120,
        'description' => 'Customize Footer Settings',
    ));

    // Footer Text Setting
    $wp_customize->add_setting('footer_text', array(
        'default'           => 'Need to help for your dream Career? trust us. With Lesson, study becomes a lot easier with us.',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // // Footer Text Control
    $wp_customize->add_control('footer_text_control', array(
        'label'       => __('Footer Text', 'lessonlms'),
        'section'     => 'footer_section',
        'settings'    => 'footer_text',
        'type'        => 'textarea',
    ));
}

add_action('customize_register', 'lessons_customize_register');
