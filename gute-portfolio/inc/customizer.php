<?php
/**
 * gute portfolio Theme Customizer
 *
 * @package gute
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function gute_portfolio_sanitize_post_grid($value){ 
    if(!in_array($value, array('grid','list'))){
        $value = 'grid';
    }
    return $value;
}
function gute_portfolio_sanitize_header_text_align($value){ 
    if(!in_array($value, array('left','center','right'))){
        $value = 'left';
    }
    return $value;
}
function gute_portfolio_hometext_show(){ 
    $home_text = get_theme_mod( 'home_text' );
    echo '<h1 id="hometitle" class="text-light">'.$home_text.'</h1>';
}

function gute_portfolio_customize_register( $wp_customize ) {

	$wp_customize->remove_control( 'gute_post_control' );
    $wp_customize->remove_control( 'gute_banner_text_align_control' );

    $wp_customize->add_setting('home_text', array(
        'default' =>  esc_html__( 'I Am John Stevenson', 'gute-portfolio' ),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('home_text_control', array(
        'label'      => __('Your Identity', 'gute'),
        'description'     => __('Enter your home image title here. The title only show in home page', 'gute'),
        'section'    => 'header_image',
        'settings'   => 'home_text',
        'type'       => 'textarea',
        'active_callback' => 'gute_banner_show_hide',

    ));

     $wp_customize->add_setting('home_subtext', array(
        'default' =>  esc_html__( 'WordPress Developer and Web Designer', 'gute-portfolio' ),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('home_subtext_control', array(
        'label'      => __('Your designation', 'gute'),
        'description'     => __('Enter your home image sub-title here. The sub-title only show in home page', 'gute'),
        'section'    => 'header_image',
        'settings'   => 'home_subtext',
        'type'       => 'textarea',
        'active_callback' => 'gute_banner_show_hide',
    ));

     $wp_customize->add_setting('btn_text_one', array(
        'default' =>  esc_html__( 'I Am John Stevenson', 'gute-portfolio' ),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('btn_text_one_control', array(
        'label'      => __('Contact Me', 'gute'),
        'description'     => __('Enter button one text.', 'gute'),
        'section'    => 'header_image',
        'settings'   => 'btn_text_one',
        'type'       => 'text',
        'active_callback' => 'gute_banner_show_hide',
    ));

     $wp_customize->add_setting('btn_url_one', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('btn_url_one_control', array(
        'label'      => __('Button one url', 'gute'),
        'description'     => __('Enter button one url.', 'gute'),
        'section'    => 'header_image',
        'settings'   => 'btn_url_one',
        'type'       => 'text',
        'active_callback' => 'gute_banner_show_hide',
    ));
     $wp_customize->add_setting('btn_text_two', array(
        'default' =>  esc_html__( 'Hire Me', 'gute-portfolio' ),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('btn_text_two_control', array(
        'label'      => __('Button two text', 'gute'),
        'description'     => __('Enter button two text.', 'gute'),
        'section'    => 'header_image',
        'settings'   => 'btn_text_two',
        'type'       => 'text',
        'active_callback' => 'gute_banner_show_hide',
    ));

     $wp_customize->add_setting('btn_url_two', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('btn_url_two_control', array(
        'label'      => __('Button two url', 'gute'),
        'description'     => __('Enter button two url.', 'gute'),
        'section'    => 'header_image',
        'settings'   => 'btn_url_two',
        'type'       => 'text',
        'active_callback' => 'gute_banner_show_hide',
    ));

     $wp_customize->add_setting('gute_post_view', array(
        'default'       => 'grid',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'gute_portfolio_sanitize_post_grid',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('gute_post_control', array(
        'label'      => esc_html__('Post view style', 'gute-portfolio'),
        'section'    => 'gute_post_section',
        'settings'   => 'gute_post_view',
        'type'       => 'select',
        'choices'    => array(
            'grid' => esc_html__('Grid view', 'gute-portfolio'),
            'list' => esc_html__('List view', 'gute-portfolio'),
        ),
    ));
     $wp_customize->add_setting('gute_banner_text_align', array(
        'default'       => 'left',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'gute_portfolio_sanitize_header_text_align',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('gute_portfolio_title_control', array(
        'label'      => esc_html__('Header text position', 'gute-portfolio'),
        'section'    => 'header_image',
        'settings'   => 'gute_banner_text_align',
        'type'       => 'select',
        'choices'    => array(
            'left' => esc_html__('Text Left', 'gute-portfolio'),
            'center' => esc_html__('Text Center', 'gute-portfolio'),
            'right' => esc_html__('Text Right', 'gute-portfolio'),
        ),
        'active_callback' => 'gute_banner_show_hide',

    ));

    $wp_customize->selective_refresh->add_partial( 'home_text', array(
        'selector' => '#hometitle',
        'settings' => array( 'home_text' ),
        'render_callback' => 'gute_portfolio_hometext_show',
    ) );

}
add_action( 'customize_register', 'gute_portfolio_customize_register',99 );
