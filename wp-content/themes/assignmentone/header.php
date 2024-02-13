<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>

        <!-- css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo esc_url( home_url('wp-content/themes/assignmentone/assets/css/custom-style.css')); ?>">

        <!-- js -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        
        <!-- fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&family=Inter:wght@100..900&display=swap" rel="stylesheet">
    </head>
    
    <body <?php body_class(); ?>>
        <header class="d-flex flex-column">
            <nav class="navbar navbar-expand-lg justify-content-between px-3">
                <!-- logo -->
                <div>
                    <a href="<?php echo esc_url( home_url() );?>" class="d-flex align-items-center">
                        <img src="<?php echo esc_url( home_url( 'wp-content/uploads/2024/02/mallow-logo.png' ) ); ?>" alt="header logo">
                        <p class="m-0 px-2">Jihan Duerme</p>
                    </a>
                </div>

                <!-- links -->
                <div>
                    <?php
                        wp_nav_menu( array(
                            'menu'           => 'main',
                            'theme_location' => '',
                            'depth'          => 2,
                            'fallback_cb'    => false
                        ));
                    ?>
                </div>
            </nav>
        </header>
        
