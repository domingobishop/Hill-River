<!DOCTYPE html>
<html lang="en-gb">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta content="initial-scale = 1.0" name="viewport">
    <title>
        <?php wp_title('|', true, 'right'); ?>
    </title>
    <?php wp_head(); ?>

    <link rel='stylesheet'  href='https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/4.0.1/ekko-lightbox.min.css' type='text/css' media='all' />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body <?php body_class(); ?>>
    <header id="head" class="bc-head">
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="col-md-3 col-head">
                    <a class="navbar-brand" href="<?php bloginfo('siteurl'); ?>/"
                       title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" class="img-responsive">
                    </a>
                    <div class="clearfix"></div>
                </div>
                <div class="col-sm-8 col-md-6 col-head">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1"><span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <?php wp_nav_menu(array('menu' => 'Menu 1', 'items_wrap' => '<ul class="nav navbar-nav navbar-left" role="menu">%3$s</ul>', 'container' => false)); ?>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <div class="col-sm-4 col-md-3 col-head">
                    <div class="text-right call-us">
                        <a href="tel:+61888439178">Call us +61&nbsp;8&nbsp;88439178</a>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </nav>
    </header>
    <!-- #head -->
