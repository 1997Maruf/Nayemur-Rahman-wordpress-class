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

    add_theme_support('post-thumbnails');


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

    //blog section
    $wp_customize->add_section('blog_section', array(
        'title'       => __('Blog Settings', 'lessonlms'),
        'priority'    => 130,
        'description' => 'Customize Blog Settings',
    ));

    //blog headding
    $wp_customize->add_setting('blog_heading', array(
        'default'           => 'From Our Blog',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('blog_heading_control', array(
        'label'       => __('Blog Heading', 'lessonlms'),
        'section'     => 'blog_section',
        'settings'    => 'blog_heading',
        'type'        => 'text',
    ));

    //blog description
    $wp_customize->add_setting('blog_description', array(
        'default'           => 'Our latest news, articles, and resources, we share with our customers.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('blog_description_control', array(
        'label'       => __('Blog Description', 'lessonlms'),
        'section'     => 'blog_section',
        'settings'    => 'blog_description',
        'type'        => 'textarea',
    ));





    // Footer Section
    $wp_customize->add_section('footer_section', array(
        'title'       => __('Footer Settings', 'lessonlms'),
        'priority'    => 120,
        'description' => 'Customize Footer Settings',
    ));

    //footer logo
    $wp_customize->add_setting('footer_logo', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo_control', array(
        'label'       => __('Footer Logo', 'lessonlms'),
        'section'     => 'footer_section',
        'settings'    => 'footer_logo',
        'priority'    => 1,
    )));

    //social media links
    $social_media_platforms = array('facebook', 'twitter', 'linkedin', 'instagram', 'youtube');
    foreach ($social_media_platforms as $platform) {
        $wp_customize->add_setting($platform . '_link', array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control($platform . '_link_control', array(
            'label'       => ucfirst($platform) . ' URL',
            'section'     => 'footer_section',
            'settings'    => $platform . '_link',
            'type'        => 'url',
            'priority'    => 1,
        ));
    }


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
    //footer menu 1 title
    $wp_customize->add_setting('footer_menu_1_title', array(
        'default'           => 'Company',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('footer_menu_1_title_control', array(
        'label'       => __('Footer Menu 1 Title', 'lessonlms'),
        'section'     => 'footer_section',
        'settings'    => 'footer_menu_1_title',
        'type'        => 'text',
    ));

    //footer menu 2 title
    $wp_customize->add_setting('footer_menu_2_title', array(
        'default'           => 'Support',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('footer_menu_2_title_control', array(
        'label'       => __('Footer Menu 2 Title', 'lessonlms'),
        'section'     => 'footer_section',
        'settings'    => 'footer_menu_2_title',
        'type'        => 'text',
    ));

    //footer address
    $wp_customize->add_setting('footer_address', array(
        'default'           => '27 Division St, New York, NY 10002, USA',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('footer_address_control', array(
        'label'       => __('Footer Address', 'lessonlms'),
        'section'     => 'footer_section',
        'settings'    => 'footer_address',
        'type'        => 'textarea',
    ));

    //footer location
    $wp_customize->add_setting('footer_location', array(
        'default'           => '27 Division St, New York, NY 10002, USA',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('footer_location_control', array(
        'label'       => __('Footer Location', 'lessonlms'),
        'section'     => 'footer_section',
        'settings'    => 'footer_location',
        'type'        => 'textarea',
    ));

    //footer email
    $wp_customize->add_setting('footer_email', array(
        'default'           => 'email@gmail.com',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('footer_email_control', array(
        'label'       => __('Footer Email', 'lessonlms'),
        'section'     => 'footer_section',
        'settings'    => 'footer_email',
        'type'        => 'text',
    ));

    //footer phone
    $wp_customize->add_setting('footer_phone', array(
        'default'           => '+ 000 1234 567 890',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('footer_phone_control', array(
        'label'       => __('Footer Phone', 'lessonlms'),
        'section'     => 'footer_section',
        'settings'    => 'footer_phone',
        'type'        => 'text',
    ));
}

add_action('customize_register', 'lessons_customize_register');
