<?php

/* =========================================
   AZYORA THEME SETUP
========================================= */

function azyora_theme_setup() {

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    add_theme_support('custom-logo');

    add_theme_support('woocommerce');

}

add_action('after_setup_theme', 'azyora_theme_setup');


/* =========================================
   AZYORA CSS
========================================= */

function azyora_enqueue_styles() {

    wp_enqueue_style(
        'azyora-style',
        get_stylesheet_uri(),
        array(),
        '1.6'
    );

}

add_action('wp_enqueue_scripts', 'azyora_enqueue_styles');


/* =========================================
   MOBILE MENU
========================================= */

function azyora_mobile_menu_script() {

    wp_enqueue_script(
        'azyora-mobile-menu',
        get_template_directory_uri() . '/mobile-menu.js',
        array(),
        '1.0',
        true
    );

}

add_action(
    'wp_enqueue_scripts',
    'azyora_mobile_menu_script'
);


/* =========================================
   REMOVE WORDPRESS EXTRA HEAD DATA
========================================= */

remove_action(
    'wp_head',
    'wp_generator'
);

remove_action(
    'wp_head',
    'rsd_link'
);

remove_action(
    'wp_head',
    'wlwmanifest_link'
);

remove_action(
    'wp_head',
    'wp_shortlink_wp_head'
);

remove_action(
    'wp_head',
    'rest_output_link_wp_head'
);


/* =========================================
   DISABLE WORDPRESS EMOJIS
========================================= */

function azyora_disable_emojis() {

    remove_action(
        'wp_head',
        'print_emoji_detection_script',
        7
    );

    remove_action(
        'wp_print_styles',
        'print_emoji_styles'
    );

}

add_action(
    'init',
    'azyora_disable_emojis'
);


/* =========================================
   DISABLE WORDPRESS EMBEDS
========================================= */

function azyora_disable_embeds() {

    remove_action(
        'wp_head',
        'wp_oembed_add_discovery_links'
    );

    remove_action(
        'wp_head',
        'wp_oembed_add_host_js'
    );

}

add_action(
    'init',
    'azyora_disable_embeds'
);


/* =========================================
   HOMEPAGE - NO WOOCOMMERCE CART SESSION
========================================= */

function azyora_disable_home_cart_session($initialize) {

    $request_uri = isset($_SERVER['REQUEST_URI'])
        ? strtok($_SERVER['REQUEST_URI'], '?')
        : '/';

    $home_path = parse_url(
        home_url('/'),
        PHP_URL_PATH
    );

    if (
        $request_uri === $home_path ||
        $request_uri === rtrim($home_path, '/') . '/'
    ) {

        return false;

    }

    return $initialize;

}

add_filter(
    'woocommerce_cart_session_initialize',
    'azyora_disable_home_cart_session',
    1
);


/* =========================================
   HOMEPAGE - REMOVE BLOCK CSS
========================================= */

function azyora_remove_home_block_assets() {

    if (is_front_page()) {

        wp_dequeue_style(
            'wp-block-library'
        );

        wp_dequeue_style(
            'wp-block-library-theme'
        );

    }

}

add_action(
    'wp_enqueue_scripts',
    'azyora_remove_home_block_assets',
    999
);


/* =========================================
   HOMEPAGE - REMOVE WOOCOMMERCE CSS
========================================= */

function azyora_remove_home_woocommerce_styles() {

    if (!is_front_page()) {
        return;
    }

    wp_dequeue_style(
        'woocommerce-general'
    );

    wp_dequeue_style(
        'woocommerce-layout'
    );

    wp_dequeue_style(
        'woocommerce-smallscreen'
    );

    wp_dequeue_style(
        'woocommerce_frontend_styles'
    );

    wp_dequeue_style(
        'wc-blocks-style'
    );

    wp_dequeue_style(
        'wc-blocks-vendors-style'
    );

}

add_action(
    'wp_enqueue_scripts',
    'azyora_remove_home_woocommerce_styles',
    999
);


/* =========================================
   HOMEPAGE - REMOVE WOOCOMMERCE JAVASCRIPT
========================================= */

function azyora_remove_home_woocommerce_scripts() {

    if (!is_front_page()) {
        return;
    }

    wp_dequeue_script(
        'woocommerce'
    );

    wp_deregister_script(
        'woocommerce'
    );

    wp_dequeue_script(
        'wc-add-to-cart'
    );

    wp_deregister_script(
        'wc-add-to-cart'
    );

    wp_dequeue_script(
        'wc-cart-fragments'
    );

    wp_deregister_script(
        'wc-cart-fragments'
    );

    wp_dequeue_script(
        'js-cookie'
    );

    wp_deregister_script(
        'js-cookie'
    );

    wp_dequeue_script(
        'sourcebuster'
    );

    wp_deregister_script(
        'sourcebuster'
    );

    wp_dequeue_script(
        'wc-order-attribution'
    );

    wp_deregister_script(
        'wc-order-attribution'
    );

}

add_action(
    'wp_enqueue_scripts',
    'azyora_remove_home_woocommerce_scripts',
    999
);


/* =========================================
   FRONTEND HEARTBEAT OFF
========================================= */

function azyora_disable_heartbeat_frontend() {

    if (!is_admin()) {

        wp_deregister_script(
            'heartbeat'
        );

    }

}

add_action(
    'wp_enqueue_scripts',
    'azyora_disable_heartbeat_frontend',
    100
);