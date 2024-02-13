        <footer class="text-center">
            <section class="d-md-flex p-3">
                <!-- logo -->
                <div>
                    <a href="<?php echo esc_url( home_url() );?>">
                        <?php dynamic_sidebar( 'footer-logo' ); ?>
                    </a>
                </div>

                <!-- info -->
                <div>
                    <?php dynamic_sidebar( 'footer-info' ); ?>
                </div>

                <!-- contact -->
                <div>
                    <?php dynamic_sidebar( 'footer-contact' ); ?>
                </div>

                <!-- social links -->
                <div class="d-md-flex gap-4">
                    <?php dynamic_sidebar( 'footer-social-links' ); ?>
                </div>
            </section>
        </footer>
    </body>
</html>