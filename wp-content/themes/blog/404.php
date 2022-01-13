<?php
    
    get_header();

?>

        <!-- Banner Section -->
        <section class="page-banner">
            <div class="image-layer" style="background-image:url(<?php echo get_theme_file_uri('images/background/image-7.jpg'); ?>);"></div>
            <div class="shape-1"></div>
            <div class="shape-2"></div>
            <div class="banner-inner">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <h1>Page Not Found</h1>
                        <div class="page-nav">
                            <ul class="bread-crumb clearfix">
                                <li><a href="http://pegatonconsults.com">Home</a></li>
                                <li class="active">Page Not Found</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Banner Section -->

        <!--Error Section-->
        <section class="error-section">
            <div class="auto-container">
                <div class="content">
                    <div class="big-text">
                        <img src="<?php echo get_theme_file_uri('images/icons/404-image.png'); ?>" id="error-404" class="img-fluid" alt="">
                    </div>
                    <h2>Sorry We Can't Find That Page!</h2>
                    <div class="text">The page you are looking for was moved, removed, renamed or never existed.</div>
                    <div class="error-form">
                        <?php
                            $page_name = '404';
                            get_search_form();
                        ?>
                    </div>
                    <div class="link-box">
                        <a class="theme-btn btn-style-one" href="http://pegatonconsults.com">
                            <i class="btn-curve"></i>
                            <span class="btn-title">Back to homepage</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <?php get_footer(); ?>