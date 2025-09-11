<?php
// Enqueue Styles and Scripts


function lesson_enqueue_styles()
{
    //Theme style css
    wp_enqueue_style('style-css', get_template_directory_uri() . './style.css');
    // Font Awesome
    wp_enqueue_style('font-awesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css', array(), '7.0.0');
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

    //hero section
    $wp_customize->add_section('hero_section', array(
        'title'       => __('Hero Settings', 'lessonlms'),
        'priority'    => 30,
        'description' => 'Customize Hero Section',
    ));

    //hero image
    $wp_customize->add_setting('hero_image', array(
        'default'           => get_stylesheet_directory_uri() . '/src/img/hero-img.png',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_image_control', array(
        'label'       => __('Hero Image', 'lessonlms'),
        'section'     => 'hero_section',
        'settings'    => 'hero_image',
        'priority'    => 1,
    )));


    //hero title
    $wp_customize->add_setting('hero_title', array(
        'default'           => 'Learn without limits and spread knowledge.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_title_control', array(
        'label'       => __('Hero Title', 'lessonlms'),
        'section'     => 'hero_section',
        'settings'    => 'hero_title',
        'type'        => 'text',
    ));


    //hero description

    $wp_customize->add_setting('hero_description', array(
        'default'           => 'Build new skills for that "this is my year" feeling with courses, certificates, and degrees from world-class universities and companies.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_description_control', array(
        'label'       => __('Hero Description', 'lessonlms'),
        'section'     => 'hero_section',
        'settings'    => 'hero_description',
        'type'        => 'textarea',
    ));

    //hero button text
    $wp_customize->add_setting('hero_button_text', array(
        'default'           => 'See Courses',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_button_text_control', array(
        'label'       => __('Hero Button Text', 'lessonlms'),
        'section'     => 'hero_section',
        'settings'    => 'hero_button_text',
        'type'        => 'text',
    ));

    //hero button link
     $wp_customize->add_setting('hero_button_url', array(
        'default' => '#',
    ));

    $wp_customize->add_control('hero_button_url', array(
        'label' => __('Hero Button URL','lessonlms'),
        'section' => 'hero_section',
        'type' => 'url',
    ));


    // Hero Video Text
    $wp_customize->add_setting('hero_video_text', array(
        'default' => 'Watch Video',
    ));
    $wp_customize->add_control('hero_video_text', array(
        'label' => __('Hero Video Text','lessonlms'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    // Hero video link
    $wp_customize->add_setting('hero_video_url', array(
        'default' => '#',
    ));

    $wp_customize->add_control('hero_video_url', array(
        'label' => __('Hero Video URL','lessonlms'),
        'section' => 'hero_section',
        'type' => 'url',
    ));

    //engagement title
    $wp_customize->add_setting('engagement_title', array(
        'default'           => 'Recent engagement',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('engagement_title_control', array(
        'label'       => __('Engagement Title', 'lessonlms'),
        'section'     => 'hero_section',
        'settings'    => 'engagement_title',
        'type'        => 'text',
    ));


 //student count
    $wp_customize->add_setting('student_count', array(
        'default'           => '50K',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('student_count_control', array(
        'label'       => __('Student Count', 'lessonlms'),
        'section'     => 'hero_section',
        'settings'    => 'student_count',
        'type'        => 'text',
    ));
   
//student label
    $wp_customize->add_setting('student_label', array(
        'default'           => 'Students',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('student_label_control', array(
        'label'       => __('Student Label', 'lessonlms'),
        'section'     => 'hero_section',
        'settings'    => 'student_label',
        'type'        => 'text',
    ));

 //course count
    $wp_customize->add_setting('course_count', array(
        'default'           => '70+',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('course_count_control', array(
        'label'       => __('Course Count', 'lessonlms'),
        'section'     => 'hero_section',
        'settings'    => 'course_count',
        'type'        => 'text',
    ));

     //course label
    $wp_customize->add_setting('course_label', array(
        'default'           => 'Courses',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('course_label_control', array(
        'label'       => __('Course Label', 'lessonlms'),
        'section'     => 'hero_section',
        'settings'    => 'course_label',
        'type'        => 'text',
    ));

    //ui/ux courses count
    $wp_customize->add_setting('ui_ux_course_count', array(
        'default'           => '20',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('ui_ux_course_count_control', array(
        'label'       => __('UI/UX Course Count', 'lessonlms'),
        'section'     => 'hero_section',
        'settings'    => 'ui_ux_course_count',
        'type'        => 'number',
    ));

    //development courses count
    $wp_customize->add_setting('development_course_count', array(
        'default'           => '20',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('development_course_count_control', array(
        'label'       => __('Development Course Count', 'lessonlms'),
        'section'     => 'hero_section',
        'settings'    => 'development_course_count',
        'type'        => 'number',
    ));

    //marketing courses count
    $wp_customize->add_setting('marketing_course_count', array(
        'default'           => '20',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('marketing_course_count_control', array(
        'label'       => __('Marketing Course Count', 'lessonlms'),
        'section'     => 'hero_section',
        'settings'    => 'marketing_course_count',
        'type'        => 'number',
    ));


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


function lesson_widgets_init()
{
    register_sidebar(array(
        'name'          => __('Sidebar', 'lessonlms'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here to appear in your sidebar.', 'lessonlms'),
        'before_widget' => '<section id="%1$s" class="widget %2$s mb-8">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title text-xl font-semibold mb-4">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'lesson_widgets_init');
