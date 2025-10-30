
<?php
function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Меню в заголовке' ),
            'footer-menu' => __( 'Меню в подвале' )
        )
    );
}
add_action( 'init', 'register_my_menus' );
add_theme_support( 'post-thumbnails' );
?>