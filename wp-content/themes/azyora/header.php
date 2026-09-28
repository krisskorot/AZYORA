<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="azyora-header">

    <div class="azyora-header-inner">

        <!-- LOGO -->

        <a
            href="<?php echo esc_url(home_url('/')); ?>"
            class="azyora-brand"
        >

            <img
                src="http://localhost:8881/wp-content/uploads/2026/09/ChatGPT-Image-Sep-27-2026-12_58_43-PM.png"
                alt="AZYORA"
                class="azyora-logo-image"
                width="220"
                height="58"
            >

        </a>


        <!-- DESKTOP NAVIGATION -->

        <nav class="azyora-navigation">

            <a
                href="<?php echo esc_url(home_url('/')); ?>"
                class="<?php echo is_front_page() ? 'active' : ''; ?>"
            >
                Home
            </a>


            <a
                href="<?php echo esc_url(function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : home_url('/shop/')); ?>"
                class="<?php echo function_exists('is_shop') && (is_shop() || is_product_category() || is_product_tag() || is_product()) ? 'active' : ''; ?>"
            >
                Shop
            </a>


            <a
                href="<?php echo esc_url(home_url('/collections/')); ?>"
                class="<?php echo is_page('collections') ? 'active' : ''; ?>"
            >
                Collections
            </a>


            <a
                href="<?php echo esc_url(home_url('/about/')); ?>"
                class="<?php echo is_page('about') ? 'active' : ''; ?>"
            >
                About
            </a>

        </nav>


        <!-- ACTIONS -->

        <div class="azyora-actions">

            <a
                href="#"
                class="azyora-action"
                aria-label="Search"
            >

                <svg viewBox="0 0 24 24">
                    <circle cx="11" cy="11" r="6.5"></circle>
                    <path d="M16 16L21 21"></path>
                </svg>

            </a>


            <a
                href="#"
                class="azyora-action"
                aria-label="Account"
            >

                <svg viewBox="0 0 24 24">
                    <circle cx="12" cy="8" r="3.5"></circle>
                    <path d="M5 21C5.8 16.8 8.1 14.5 12 14.5C15.9 14.5 18.2 16.8 19 21"></path>
                </svg>

            </a>


            <a
                href="<?php echo esc_url(function_exists('wc_get_cart_url') ? wc_get_cart_url() : home_url('/cart/')); ?>"
                class="azyora-action"
                aria-label="Shopping bag"
            >

                <svg viewBox="0 0 24 24">
                    <path d="M5 8.5H19L18 21H6L5 8.5Z"></path>
                    <path d="M9 9V6.5C9 4.8 10.3 3.5 12 3.5C13.7 3.5 15 4.8 15 6.5V9"></path>
                </svg>

                <span class="azyora-cart-count">
                    0
                </span>

            </a>

        </div>


        <!-- MOBILE MENU BUTTON -->

        <button
            class="azyora-menu-toggle"
            type="button"
            aria-label="Open menu"
            aria-expanded="false"
            aria-controls="azyora-mobile-menu"
        >

            <span></span>
            <span></span>
            <span></span>

        </button>

    </div>


    <!-- MOBILE MENU -->

    <div
        class="azyora-mobile-menu"
        id="azyora-mobile-menu"
    >

        <div class="azyora-mobile-menu-header">

            <span class="azyora-mobile-menu-title">
                MENU
            </span>

            <button
                class="azyora-mobile-menu-close"
                type="button"
                aria-label="Close menu"
            >
                ×
            </button>

        </div>


        <nav class="azyora-mobile-navigation">

            <a href="<?php echo esc_url(home_url('/')); ?>">
                Home
            </a>

            <a href="<?php echo esc_url(function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : home_url('/shop/')); ?>">
                Shop
            </a>

            <a href="<?php echo esc_url(home_url('/collections/')); ?>">
                Collections
            </a>

            <a href="<?php echo esc_url(function_exists('wc_get_cart_url') ? wc_get_cart_url() : home_url('/cart/')); ?>">
                Cart
            </a>

        </nav>


        <div class="azyora-mobile-secondary">

            <a href="#">
                Search
            </a>

            <a href="#">
                Account
            </a>

            <a href="<?php echo esc_url(home_url('/about/')); ?>">
                About
            </a>

        </div>

    </div>

</header>