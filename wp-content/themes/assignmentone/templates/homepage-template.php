<?php
/**
 * Template Name: Homepage Template
 * Template Post Type: Page
 */

get_header();
?>
<main>
    <!-- masthead -->
    <section class="masthead d-flex align-items-center" style="background-image: url('<?php echo wp_kses_post(get_field('masthead_image')); ?>');">
    <div class="m-auto">
        <div>
            <h1><?php echo wp_kses_post(get_field('page_title')); ?></h1>
        </div>
    </section>

    <section class="container home-intro text-center">
        <!-- main content -->
        <div>
            <h2><?php echo wp_kses_post(get_field('row_title')); ?></h2>
            <p><?php echo wp_kses_post(get_field('row_one_text')); ?></p>
        </div>
    </section>
</main>
<?php
get_footer();
?>