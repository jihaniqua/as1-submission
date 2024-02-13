<?php
/**
 * Template Name: Single Post Template
 * Template Post Type: Post
 */

get_header();

$featuredImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
$featuredImgUrl = esc_url($featuredImg[0]);
?>
    <main>
    <!-- masthead -->
    <section class="post-masthead d-flex align-items-center" style="background-image: url('<?php echo $featuredImgUrl; ?>'); box-shadow: inset 0 0 0 1000px rgba(244,241,236,.7);">
        <div class="m-auto">
            <h1><?php the_title(); ?></h1>
        </div>
    </section>

    <section class="container py-5">
        <!-- post content -->
        <div>
            <!-- date and categories -->
            <div class="d-flex mb-4">
                <p class="pe-5"><small><?php echo get_the_date(); ?></small></p>
                <p><small><?php echo the_category(', ', '', get_the_ID()); ?></small><p>
            </div>
            <!-- main content -->
            <article class="post-content col-12 col-md-10 col-lg-8">
                <?php echo get_the_content(); ?>
            </article>
            <!-- tags -->
            <p class="mt-5"><?php the_tags(); ?></p>        
        <div>

        <!-- other posts -->
        <aside class="text-center my-5">
            <div class="row g-4">
            <?php
                $the_query = new WP_Query('posts_per_page=3');
                while ($the_query->have_posts()) : $the_query->the_post();
                    $post_thumbnail_id = get_post_thumbnail_id();
                    $post_thumbnail_url = wp_get_attachment_image_url($post_thumbnail_id, 'large');
            ?>
            <div class="col-sm-12 col-md-4">
                <a href="<?php the_permalink(); ?>">
                    <img src="<?php echo $post_thumbnail_url ?>" alt="post featured image" class="card-img-top">
                </a>
                <a href="<?php the_permalink(); ?>">
                <h5 class="py-3">
                    <?php the_title(); ?>
                </h5>
                </a>
            </div>
            <?php
                endwhile;
                wp_reset_postdata();
            ?>
            </div>
        </aside>
    </section>
</main>
<?php
get_footer();
?>