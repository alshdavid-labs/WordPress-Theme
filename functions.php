<?php

add_action( 'wp_before_admin_bar_render', 'wpse200296_before_admin_bar_render' ); 

function wpse200296_before_admin_bar_render()
{
    global $wp_admin_bar;

    $wp_admin_bar->remove_menu('customize');
    $wp_admin_bar->remove_menu('new-content');
    $wp_admin_bar->remove_menu('edit');
    $wp_admin_bar->remove_menu('comments');
    $wp_admin_bar->remove_menu('site-name');
    $wp_admin_bar->remove_menu('wp-logo');
    $wp_admin_bar->remove_menu('search');

    $wp_admin_bar->add_menu( array( 
        'id' => '1',
        'title' => __( ' 
            <style>.admin-special-icon { top: 3px; } .admin-special-icon:before { transition: inherit !important; }</style>
            <i class="ab-icon admin-special-icon dashicons-dashboard"></i> Dashboard' ), 
        'href' => '/wp-admin' ) );
    
}

/**
 * Remove customizer options.
 *
 * @since 1.0.0
 * @param object $wp_customize
 */
function ja_remove_customizer_options( $wp_customize ) {
   //$wp_customize->remove_section( 'static_front_page' );
   //$wp_customize->remove_section( 'title_tagline'     );
   //$wp_customize->remove_section( 'nav'               );
   $wp_customize->remove_section( 'themes'              );
}
add_action( 'customize_register', 'ja_remove_customizer_options', 30 );

?>