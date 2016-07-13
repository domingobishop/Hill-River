<?php
/**
 * Template Name: Home
 *
 */
get_header(); ?>

<main id="main" class="bc-main" role="main">
    <section id="nav-banner">
        <div class="container">
            <div class="row">
                <?php
                    $tour = get_post_meta( $post->ID, 'home_tour', true );
                    if ($tour) {
                        $offset = '';
                    } else {
                        $offset = 'col-xs-offset-2';
                    }
                ?>
                <div class="col-xs-4 <?php echo $offset; ?> box text-center">
                    <div class="box-content">
                        <a href="/products/">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/products.jpg" alt="" class="img-responsive">
                        </a>
                        <h3>Products</h3>
                    </div>
                </div>
                <?php if ($tour) { ?>
                    <div class="col-xs-4 box text-center">
                        <div class="box-content">
                            <a href="<?php echo $tour; ?>" data-toggle="lightbox" data-gallery="youtubevideos">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/virtual-tour.jpg" alt="" class="img-responsive">
                            </a>
                            <h3>Virtual tour</h3>
                        </div>
                    </div>
                <?php } ?>
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
                        <?php while (have_posts()) : the_post(); ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                        <div class="entry-content text-center">
                                            <?php the_content(); ?>
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
                                <?php $story = get_post_meta( $post->ID, 'home_story', true ); ?>
                                    <div class="entry-header">
                                        <h3 class="text-center">
                                            Our story
                                        </h3>
                                    </div>
                                    <div class="entry-content">
                                        <?php echo $story; ?>
                                    </div>
                            </div>
                        </article>
                        <?php $tour = get_post_meta( $post->ID, 'home_tour', true );
                        if ($tour) { ?>
                            <p><a href="<?php echo $tour; ?>" class="btn btn-default" data-toggle="lightbox" data-gallery="youtubevideos">Virtual tour</a></p>
                        <?php } ?>
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
                            <?php $contact = get_post_meta( $post->ID, 'home_contact', true ); ?>
                            <?php echo $contact; ?>
                            <h3>What else we do</h3>
                            <?php $wine = get_post_meta( $post->ID, 'home_wine', true );
                            if ($wine) { ?>
                                <p><a href="<?php echo $wine; ?>" class="btn btn-default">Jaeschke's Hill River Estate Wine</a></p>
                            <?php } ?>
                            <?php $farm = get_post_meta( $post->ID, 'home_farm', true );
                            if ($farm) { ?>
                                <p><a href="<?php echo $farm; ?>" class="btn btn-default">Jaeschke's Broiler Farm</a></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </section>
    </div>
</main>

<?php get_footer(); ?>
