<?php get_header(); ?>

<main class="azyora-home">

    <!-- HERO -->
    <section class="azyora-hero">

        <img
            src="http://localhost:8881/wp-content/uploads/2026/09/ChatGPT-Image-Sep-27-2026-11_51_03-AM.png"
            alt="AZYORA Fashion"
            class="azyora-hero-image"
        >

        <div class="azyora-hero-content">

            <p class="azyora-hero-label">
                NEW COLLECTION
            </p>

            <h1>
                STEP INTO<br>
                SOMETHING DIFFERENT.
            </h1>

            <a
                href="<?php echo esc_url(function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : home_url('/shop/')); ?>"
                class="azyora-hero-button"
            >
                SHOP NOW
            </a>

        </div>

    </section>


    <!-- FEATURED COLLECTION -->
    <section class="azyora-featured">

        <div class="azyora-featured-header">

            <div>
                <p class="azyora-section-label">
                    AZYORA / 01
                </p>

                <h2>
                    FEATURED<br>
                    COLLECTION
                </h2>
            </div>

            <a
                href="<?php echo esc_url(function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : home_url('/shop/')); ?>"
                class="azyora-view-all"
            >
                VIEW ALL
                <span>↗</span>
            </a>

        </div>


        <?php

        if (function_exists('wc_get_products')) {

            $featured_products = wc_get_products(
                array(
                    'status'   => 'publish',
                    'limit'    => 4,
                    'featured' => true,
                    'orderby'  => 'date',
                    'order'    => 'DESC',
                )
            );

            if (empty($featured_products)) {

                $featured_products = wc_get_products(
                    array(
                        'status'  => 'publish',
                        'limit'   => 4,
                        'orderby' => 'date',
                        'order'   => 'DESC',
                    )
                );
            }

            if (!empty($featured_products)) :
                ?>

                <div class="azyora-featured-grid">

                    <?php foreach ($featured_products as $product) : ?>

                        <?php

                        $product_id = $product->get_id();

                        $product_url = get_permalink($product_id);

                        $image_url = wp_get_attachment_image_url(
                            $product->get_image_id(),
                            'large'
                        );

                        if (!$image_url) {
                            $image_url = wc_placeholder_img_src('large');
                        }

                        ?>

                        <a
                            href="<?php echo esc_url($product_url); ?>"
                            class="azyora-product-card"
                        >

                            <div class="azyora-product-image-wrap">

                                <img
                                    src="<?php echo esc_url($image_url); ?>"
                                    alt="<?php echo esc_attr($product->get_name()); ?>"
                                    class="azyora-product-image"
                                    loading="lazy"
                                >

                                <span class="azyora-product-arrow">
                                    ↗
                                </span>

                            </div>

                            <div class="azyora-product-info">

                                <h3>
                                    <?php echo esc_html($product->get_name()); ?>
                                </h3>

                                <span>
                                    <?php echo wp_kses_post($product->get_price_html()); ?>
                                </span>

                            </div>

                        </a>

                    <?php endforeach; ?>

                </div>

            <?php else : ?>

                <div class="azyora-empty-products">

                    <p>
                        YOUR FIRST COLLECTION IS COMING SOON.
                    </p>

                    <span>
                        Add products from WooCommerce to display them here.
                    </span>

                </div>

            <?php endif;

        }

        ?>

    </section>

</main>

<?php get_footer(); ?>