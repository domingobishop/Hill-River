<?php get_header(); ?>

<main id="main" class="bc-main" role="main">
    <section id="nav-banner">
        <div class="container">
            <div class="row">
                <div class="col-xs-4 box text-center">
                    <div class="box-content">
                        <a href="/products/">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/products.jpg" alt="" class="img-responsive">
                        </a>
                        <h3>Products</h3>
                    </div>
                </div>
                <div class="col-xs-4 box text-center">
                    <div class="box-content">
                        <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/virtual-tour.jpg" alt="" class="img-responsive">
                        </a>
                        <h3>Virtual tour</h3>
                    </div>
                </div>
                <div class="col-xs-4 box text-center">
                    <div class="box-content">
                        <a href="#our-story">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/our-story.jpg" alt="" class="img-responsive">
                        </a>
                        <h3>Our story</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="home-content">
        <section id="welcome">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <article>
                            <div class="entry-summary text-center">
                                <?php
                                $your_query = new WP_Query('pagename=welcome');
                                while ($your_query->have_posts()) : $your_query->the_post(); ?>
                                    <div class="entry-content">
                                        <?php the_content(); ?>
                                    </div>
                                <?php endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <section id="our-story">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <article>
                            <div class="entry-summary">
                                <?php
                                $your_query = new WP_Query('pagename=our-story');
                                while ($your_query->have_posts()) : $your_query->the_post(); ?>
                                    <div class="entry-header">
                                        <h3 class="text-center">
                                            <?php the_title(); ?>
                                        </h3>
                                    </div>
                                    <div class="entry-content">
                                        <?php the_content(); ?>
                                    </div>
                                <?php endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                        </article>
                        <a href="#" class="btn btn-default">Virtual tour</a>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="contact text-center">
                            <h3>Contact us</h3>
                            <div class="col-md-6">
                                <p><strong>Craig Jaeschke</strong><br>
                                Managing Director</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Grant Jaeschke</strong><br>
                                    Managing Director</p>
                            </div>
                            <h4>Hill River Hay</h4>
                            <p>
                                Ystalyfera Avenue<br>
                                PO Box 492<br>
                                CLARE SA 5453<br>
                                Office: 08 8843 9178<br>
                                Fax: 08 8843 9177<br>
                                E-mail: <a href="mailto:admin@hrhay.com.au">admin@hrhay.com.au</a>
                            </p>
                            <h3>What else we do</h3>
                            <p><a href="#" class="btn btn-default">Jaeschke's Hill River Estate Wine</a> <a href="#" class="btn btn-default">Jaeschke's Broiler Farm</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>
