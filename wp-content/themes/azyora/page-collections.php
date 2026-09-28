<?php

defined('ABSPATH') || exit;

get_header();

?>

<main class="azyora-collections-page">

    <!-- COLLECTIONS INTRO -->

    <section class="azyora-collections-intro">

        <p class="azyora-section-label">
            AZYORA / COLLECTIONS
        </p>

        <h1>
            COLLECTIONS
        </h1>

        <p class="azyora-collections-description">
            Explore the world of AZYORA through carefully curated
            collections made for every expression of your style.
        </p>

    </section>


    <!-- COLLECTION GRID -->

    <section class="azyora-collections-grid-section">

        <div class="azyora-collections-grid">


            <!-- COLLECTION 01 -->

            <a href="<?php echo esc_url(function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : home_url('/shop/')); ?>"
               class="azyora-collection-card">

                <div class="azyora-collection-image">

                    <div class="azyora-collection-placeholder">
                        <span>01</span>
                    </div>

                    <div class="azyora-collection-overlay">
                        <span>EXPLORE ↗</span>
                    </div>

                </div>

                <div class="azyora-collection-info">

                    <p>
                        01
                    </p>

                    <h2>
                        NEW ARRIVALS
                    </h2>

                    <span>
                        DISCOVER THE LATEST
                    </span>

                </div>

            </a>


            <!-- COLLECTION 02 -->

            <a href="<?php echo esc_url(function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : home_url('/shop/')); ?>"
               class="azyora-collection-card">

                <div class="azyora-collection-image">

                    <div class="azyora-collection-placeholder">
                        <span>02</span>
                    </div>

                    <div class="azyora-collection-overlay">
                        <span>EXPLORE ↗</span>
                    </div>

                </div>

                <div class="azyora-collection-info">

                    <p>
                        02
                    </p>

                    <h2>
                        ESSENTIALS
                    </h2>

                    <span>
                        EVERYDAY SIGNATURES
                    </span>

                </div>

            </a>


            <!-- COLLECTION 03 -->

            <a href="<?php echo esc_url(function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : home_url('/shop/')); ?>"
               class="azyora-collection-card">

                <div class="azyora-collection-image">

                    <div class="azyora-collection-placeholder">
                        <span>03</span>
                    </div>

                    <div class="azyora-collection-overlay">
                        <span>EXPLORE ↗</span>
                    </div>

                </div>

                <div class="azyora-collection-info">

                    <p>
                        03
                    </p>

                    <h2>
                        STATEMENT
                    </h2>

                    <span>
                        MADE TO BE NOTICED
                    </span>

                </div>

            </a>


            <!-- COLLECTION 04 -->

            <a href="<?php echo esc_url(function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : home_url('/shop/')); ?>"
               class="azyora-collection-card">

                <div class="azyora-collection-image">

                    <div class="azyora-collection-placeholder">
                        <span>04</span>
                    </div>

                    <div class="azyora-collection-overlay">
                        <span>EXPLORE ↗</span>
                    </div>

                </div>

                <div class="azyora-collection-info">

                    <p>
                        04
                    </p>

                    <h2>
                        EDIT
                    </h2>

                    <span>
                        CURATED FOR AZYORA
                    </span>

                </div>

            </a>


        </div>

    </section>

</main>

<?php get_footer(); ?>