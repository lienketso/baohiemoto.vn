<?php

if (!class_exists('Redux'))
    {
    return;
    }
function newIconFont() 
    { 
        wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/fontawesome-all.css' );
    }

add_action( 'redux/page/earna_options/enqueue', 'newIconFont' );

$opt_name = "earna_options";
$theme    = wp_get_theme();
$args = array(
    'opt_name' => $opt_name,
    'display_name' => $theme->get('Name') ,
    'display_version' => $theme->get('Version') ,
    'menu_type' => 'menu',
    'allow_sub_menu' => true,
    'menu_title'        => esc_html__( 'Earna Options', 'earna' ),
    'google_api_key' => '',
    'google_update_weekly' => false,
    'async_typography' => true,
    'admin_bar' => false,
    'admin_bar_icon' => '',
    'admin_bar_priority' => 50,
    'global_variable' => $opt_name,
    'dev_mode' => false,
    'update_notice' => false,
    'customizer' => false,
    'page_priority' => 3,
    'page_parent' => 'themes.php',
    'page_permissions' => 'manage_options',
    'menu_icon' => '',
    'last_tab' => '',
    'page_icon' => 'icon-themes',
    'page_slug' => 'themeoptions',
    'save_defaults' => true,
    'default_show' => false,
    'default_mark' => '',
    'show_import_export' => true
);
Redux::setArgs( $opt_name, $args );

Redux::setSection($opt_name, array(
    'title' => esc_html__('Top Bar', 'earna') ,
    'id' => esc_html__('topbar', 'earna') ,
    'icon' => 'far fa-arrow-alt-circle-up',
    'fields' => array(

        array(
            'title'     => esc_html__( 'Heading', 'earna' ),
            'id'        => 'headingsection1',
            'type'      => 'text',
            'default'   => esc_html__( 'Contact Info', 'earna' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Section 1', 'earna' ),
            'id'        => 't_1',
            'type'      => 'section',
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Title', 'earna' ),
            'id'        => 't_title1',
            'type'      => 'text',
            'default'   => esc_html__( 'Address', 'earna' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Icon Class', 'earna' ),
            'id'        => 't_icon1',
            'description' => esc_html__( 'Paste Font-Aweosme Icon Class', 'earna' ),
            'type'      => 'text',
            'default'   => esc_html__( 'fas fa-map-marker-alt', 'earna' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Text', 'earna' ),
            'id'        => 't_text1',
            'type'      => 'text',
            'default'   => esc_html__( 'California, TX 70240', 'earna' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Section 2', 'earna' ),
            'id'        => 't_2',
            'type'      => 'section',
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Title', 'earna' ),
            'id'        => 't_title2',
            'type'      => 'text',
            'default'   => esc_html__( 'Email', 'earna' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Icon Class', 'earna' ),
            'id'        => 't_icon2',
            'description' => esc_html__( 'Paste Font-Aweosme Icon Class', 'earna' ),
            'type'      => 'text',
            'default'   => esc_html__( 'fas fa-envelope-open', 'earna' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Text', 'earna' ),
            'id'        => 't_text2',
            'type'      => 'text',
            'default'   => esc_html__( 'Info@gmail.com', 'earna' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Section 3', 'earna' ),
            'id'        => 't_3',
            'type'      => 'section',
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Title', 'earna' ),
            'id'        => 't_title3',
            'type'      => 'text',
            'default'   => esc_html__( 'OFFICE HOURS', 'earna' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Icon Class', 'earna' ),
            'id'        => 't_icon3',
            'description' => esc_html__( 'Paste Font-Aweosme Icon Class', 'earna' ),
            'type'      => 'text',
            'default'   => esc_html__( 'fas fa-clock', 'earna' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Text', 'earna' ),
            'id'        => 't_text3',
            'type'      => 'text',
            'default'   => esc_html__( 'Office Hours: 8:00 AM – 7:45 PM', 'earna' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Section 4', 'earna' ),
            'id'        => 't_4',
            'type'      => 'section',
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Title', 'earna' ),
            'id'        => 't_title4',
            'type'      => 'text',
            'default'   => esc_html__( 'Have any Question?', 'earna' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Icon Class', 'earna' ),
            'id'        => 't_icon4',
            'description' => esc_html__( 'Paste Font-Aweosme Icon Class', 'earna' ),
            'type'      => 'text',
            'default'   => esc_html__( 'fas fa-phone', 'earna' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Text', 'earna' ),
            'id'        => 't_text4',
            'type'      => 'text',
            'default'   => esc_html__( '+123 456 7890', 'earna' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Section 5', 'earna' ),
            'id'        => 't_5',
            'type'      => 'section',
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Title', 'earna' ),
            'id'        => 't_title5',
            'type'      => 'text',
            'default'   => esc_html__( 'CONTACT', 'earna' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Text', 'earna' ),
            'id'        => 't_text5',
            'type'      => 'text',
            'default'   => esc_html__( '+123 456 7890', 'earna' ),
            'indent'    => true
        ),
    )
));

Redux::setSection($opt_name, array(
    'title' => esc_html__('Social Icons', 'earna') ,
    'id' => esc_html__('socialicons', 'earna') ,
    'icon' => 'fas fa-heading',
    'subsection' => true,
    'fields' => array(

        array(
            'title'     => esc_html__( 'Heading', 'earna' ),
            'id'        => 'headingsection3',
            'type'      => 'text',
            'default'   => esc_html__( 'Connect With Us', 'earna' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Section One', 'earna' ),
            'id'        => 'se1',
            'type'      => 'section',
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Icon Class', 'earna' ),
            'id'        => 'sicon1',
            'description' => esc_html__( 'Paste Font-Aweosme Icon Class', 'earna' ),
            'type'      => 'text',
            'default'   => esc_html__( 'fab fa-facebook-f', 'earna' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Link', 'earna' ),
            'id'        => 'sl1',
            'type'      => 'text',
            'default'   => esc_html__( '#', 'earna' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Section Two', 'earna' ),
            'id'        => 'se2',
            'type'      => 'section',
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Icon Class', 'earna' ),
            'id'        => 'sicon2',
            'description' => esc_html__( 'Paste Font-Aweosme Icon Class', 'earna' ),
            'type'      => 'text',
            'default'   => esc_html__( 'fab fa-twitter', 'earna' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Link', 'earna' ),
            'id'        => 'sl2',
            'type'      => 'text',
            'default'   => esc_html__( '#', 'earna' ),
            'indent'    => true
        ),

         array(
            'title'     => esc_html__( 'Section Three', 'earna' ),
            'id'        => 'se3',
            'type'      => 'section',
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Icon Class', 'earna' ),
            'id'        => 'sicon3',
            'description' => esc_html__( 'Paste Font-Aweosme Icon Class', 'earna' ),
            'type'      => 'text',
            'default'   => esc_html__( 'fab fa-linkedin-in', 'earna' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Link', 'earna' ),
            'id'        => 'sl3',
            'type'      => 'text',
            'default'   => esc_html__( '#', 'earna' ),
            'indent'    => true
        ),


        
    )
));

Redux::setSection($opt_name, array(
    'title' => esc_html__('Additional Links', 'earna') ,
    'id' => esc_html__('additional', 'earna') ,
    'icon' => 'fas fa-heading',
    'subsection' => true,
    'fields' => array(

        array(
            'title'     => esc_html__( 'Heading', 'earna' ),
            'id'        => 'headingsection2',
            'type'      => 'text',
            'default'   => esc_html__( 'Additional Links', 'earna' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Menu Location', 'earna' ),
            'id'        => 'addtionalmenu1',
            'type'      => 'text',
            'default'   => esc_html__( 'Additional Links', 'earna' ),
            'readonly' => true,
            'indent'    => true
        ),
    )
));

Redux::setSection($opt_name, array(
    'title' => esc_html__('Header', 'earna') ,
    'id' => esc_html__('header', 'earna') ,
    'icon' => 'far fa-arrow-alt-circle-up',
    'fields' => array(

        array(
            'title'     => esc_html__( 'Favicon', 'earna' ),
            'id'        => 'favicon',
            'type'      => 'media',
            'default'  => array(
                'url'=> get_template_directory_uri() . '/img/favicon.png'
                ), 
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Logo', 'earna' ),
            'id'        => 'logo_start',
            'type'      => 'section',
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Logo', 'earna' ),
            'id'        => 'logo',
            'type'      => 'media',
            'default'  => array(
                'url'=> get_template_directory_uri() . '/img/logo-light.png'
                ), 
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Sticky Logo', 'earna' ),
            'id'        => 'sticky-logo',
            'type'      => 'media',
            'default'  => array(
                'url'=> get_template_directory_uri() . '/img/logo.png'
                ), 
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Description', 'earna' ),
            'id'        => 'h_description',
            'type'      => 'textarea',
            'default'   => esc_html__( 'Arrived compass prepare an on as. Reasonable particular on my it in sympathize. Size now easy eat hand how. Unwilling he departure elsewhere dejection at. Heart large seems may purse means few blind.', 'earna' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Link', 'earna' ),
            'id'        => 'h_link1',
            'type'      => 'text',
            'default'   => esc_html__( '#', 'earna' ),
            'indent'    => true
        ),
    )
));

Redux::setSection($opt_name, array(
    'title' => esc_html__('Footer', 'earna') ,
    'id' => esc_html__('footer', 'earna') ,
    'icon' => 'far fa-arrow-alt-circle-up',
    'fields' => array(

        array(
            'title'     => esc_html__( 'Footer Logo', 'earna' ),
            'id'        => 'footerlogo',
            'type'      => 'media',
            'default'  => array(
                'url'=> get_template_directory_uri() . '/img/logo-light.png'
                ), 
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Footer Logo Version 2', 'earna' ),
            'id'        => 'footerlogo-sticky',
            'type'      => 'media',
            'default'  => array(
                'url'=> get_template_directory_uri() . '/img/logo.png'
                ), 
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Description', 'earna' ),
            'id'        => 'footerdes',
            'type'      => 'textarea',
            'default'   => esc_html__( 'Excellence decisively nay man yet impression for contrasted remarkably. There spoke happy for you are out. Fertile how old address did showing.', 'earna' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'CopyRight Text', 'earna' ),
            'id'        => 'copyright',
            'type'      => 'textarea',
            'default'   => esc_html__( '&copy; Copyright 2021. earna WordPres Theme By WordPressRiver', 'earna' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Menu Location', 'earna' ),
            'id'        => 'addtionalmenu',
            'type'      => 'text',
            'default'   => esc_html__( 'Footer Menu', 'earna' ),
            'readonly' => true,
            'indent'    => true
        ),

    )
));

Redux::setSection($opt_name, array(
    'title' => esc_html__('Footer Links 1', 'earna') ,
    'id' => esc_html__('companylinkshead', 'earna') ,
    'icon' => 'far fa-arrow-alt-circle-up',
    'subsection' => true,
    'fields' => array(

        array(
            'title'     => esc_html__( 'Heading', 'earna' ),
            'id'        => 'footermenu1',
            'type'      => 'text',
            'default'   => esc_html__( 'Quick Link', 'earna' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Menu Location', 'earna' ),
            'id'        => 'c1',
            'type'      => 'text',
            'default'   => esc_html__( 'Quick Links', 'earna' ),
            'readonly' => true,
            'indent'    => true
        ),

    )
));

Redux::setSection($opt_name, array(
    'title' => esc_html__('Footer Links 2', 'earna') ,
    'id' => esc_html__('solutionlinkshead', 'earna') ,
    'icon' => 'far fa-arrow-alt-circle-up',
    'subsection' => true,
    'fields' => array(

        array(
            'title'     => esc_html__( 'Heading', 'earna' ),
            'id'        => 'footermenu2',
            'type'      => 'text',
            'default'   => esc_html__( 'Community', 'earna' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Menu Location', 'earna' ),
            'id'        => 'sol1',
            'type'      => 'text',
            'default'   => esc_html__( 'Community', 'earna' ),
            'readonly' => true,
            'indent'    => true
        ),

    )
));

Redux::setSection($opt_name, array(
    'title' => esc_html__('Contact Info', 'earna') ,
    'id' => esc_html__('contactinfofooter', 'earna') ,
    'icon' => 'far fa-arrow-alt-circle-up',
    'subsection' => true,
    'fields' => array(

        array(
            'title'     => esc_html__( 'Heading', 'earna' ),
            'id'        => 'contactinfo1',
            'type'      => 'text',
            'default'   => esc_html__( 'Contact Info', 'earna' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Section 1', 'earna' ),
            'id'        => 'c_1',
            'type'      => 'section',
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Icon Class', 'earna' ),
            'id'        => 'footericon1',
            'type'      => 'text',
            'description' => esc_html__( 'Paste Font-Aweosme Icon Class', 'earna' ),
            'default'   => esc_html__( 'fas fa-map-marker-alt', 'earna' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Title', 'earna' ),
            'id'        => 'footertitle1',
            'type'      => 'text',
            'default'   => esc_html__( 'Address:', 'earna' ),
            'indent'    => true
        ),
        
        array(
            'title'     => esc_html__( 'Text', 'earna' ),
            'id'        => 'footertext1',
            'type'      => 'textarea',
            'default'   => esc_html__( '5919 Trussville Crossings Pkwy, Birmingham', 'earna'),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Section 2', 'earna' ),
            'id'        => 'c_2',
            'type'      => 'section',
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Icon Class', 'earna' ),
            'id'        => 'footericon2',
            'type'      => 'text',
            'description' => esc_html__( 'Paste Font-Aweosme Icon Class', 'earna' ),
            'default'   => esc_html__( 'fas fa-envelope', 'earna' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Text', 'earna' ),
            'id'        => 'footertitle2',
            'type'      => 'textarea',
            'default'   => esc_html__( 'Email:', 'earna' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Text', 'earna' ),
            'id'        => 'footertext2',
            'type'      => 'textarea',
            'default'   => esc_html__( 'Info@gmail.com', 'earna' ),
            'indent'    => true
        ),

        
        array(
            'title'     => esc_html__( 'Section 3', 'earna' ),
            'id'        => 'c_3',
            'type'      => 'section',
            'indent'    => true
        ),
        
        array(
            'title'     => esc_html__( 'Icon Class', 'earna' ),
            'id'        => 'footericon3',
            'type'      => 'text',
            'description' => esc_html__( 'Paste Font-Aweosme Icon Class', 'earna' ),
            'default'   => esc_html__( 'fas fa-phone', 'earna' ),
            'indent'    => true
        ),


       array(
            'title'     => esc_html__( 'Text', 'earna' ),
            'id'        => 'footertitle3',
            'type'      => 'textarea',
            'default'   => esc_html__( 'Phone:', 'earna' ),
            'indent'    => true
        ),
        
        array(
            'title'     => esc_html__( 'Text', 'earna' ),
            'id'        => 'footertext3',
            'type'      => 'textarea',
            'default'   => esc_html__( '+123-456-7890', 'earna' ),
            'indent'    => true
        ),


    )
));

Redux::setSection($opt_name, array(
    'title' => esc_html__('Styling', 'earna') ,
    'id' => esc_html__('earna_color', 'earna') ,
    'icon' => 'fas fa-edit',
    'fields' => array(
    array(
            'id'        => 'main_color_earna',
            'title'     => esc_html__( 'Main Theme Color', 'earna' ),
            'subtitle'  => esc_html__( 'The main color of the site.', 'earna' ),
            'type'      => 'select',
            'options'   => array(
                '2'     => esc_html__( 'Sky Blue', 'earna' ),
                '1'     => esc_html__( 'Strong Blue', 'earna' ),
                '3'     => esc_html__( 'Orange', 'earna' ),
                '4'     => esc_html__( 'Pink', 'earna' ),
                '5'     => esc_html__( 'Green', 'earna' ),
                '6'     => esc_html__( 'Purple', 'earna' ),
                '7'     => esc_html__( 'Custom Colors', 'earna' ),
            ),
            'default'   => '1',
            'indent'    => true,
        ),

    array(
            'title'     => esc_html__( 'Custom Color Option', 'earna' ),
            'id'        => 'customcolors',
            'type'      => 'section',
            'indent'    => true,
            'required'  => array( 'main_color_earna', 'equals', '7' ),
        ),

    array(
            'title'     => esc_html__( 'Choose Main Theme Color', 'earna' ),
            'id'        => 'colorcode',
            'type'      => 'color',
            'default'  => '#1273eb',
            'validate' => 'color',
            'transparent' => false,
            'required'  => array( 'main_color_earna', 'equals', '7' ),
        ),

    array(
        'title'     => esc_html__( 'Choose Theme Gradient Color', 'earna' ),
        'id'       => 'color-gra',
        'type'     => 'color_gradient',
        'default'  => array(
            'from' => 'rgba(18,115,235,1)',
            'to'   => 'rgba(0,212,255,1)', 
        ),
    'transparent' => false,
    'required'  => array( 'main_color_earna', 'equals', '7' ),
    ),
)
));