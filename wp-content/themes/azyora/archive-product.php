<?php

defined('ABSPATH') || exit;

get_header();

?>

<main class="azyora-shop-page">

    <section class="azyora-shop-header">

        <div class="azyora-shop-header-inner">

            <p class="azyora-shop-label">
                AZYORA COLLECTION
            </p>

            <h1>
                SHOP
            </h1>

            <p class="azyora-shop-description">
                Discover pieces designed to make you stand out.
            </p>

        </div>

    </section>


    <section class="azyora-shop-products">

        <div class="azyora-shop-toolbar">

            <div class="azyora-product-count">
                <?php
                global $wp_query;

                $product_count = isset($wp_query->found_posts)
                    ? $wp_query->found_posts
                    : 0;

                echo esc_html($product_count);
                ?>
                PRODUCTS
            </div>

        </div>


        <?php

        if (woocommerce_product_loop()) {

            woocommerce_product_loop_start();

            while (have_posts()) {

                the_post();

                wc_get_template_part('content', 'product');

            }

            woocommerce_product_loop_end();

        } else {

            do_action('woocommerce_no_products_found');

        }

        ?>

    </section>

</main>

<?php

get_footer();

?>