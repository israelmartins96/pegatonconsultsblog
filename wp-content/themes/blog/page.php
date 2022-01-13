<?php get_header(); ?>

        <!-- Banner Section -->
        <section class="page-banner">
            <div class="image-layer" style="background-image:url(<?php echo get_theme_file_uri('images/background/image-7.jpg'); ?>);"></div>
            <div class="shape-1"></div>
            <div class="shape-2"></div>
            <div class="banner-inner">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <h1><?php the_title(); ?></h1>
                        <div class="page-nav">
                            <ul class="bread-crumb clearfix">
                                <li><a href="http://pegatonconsults.com">Home</a></li>
                                <li class="active"><?php the_title(); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Banner Section -->

        <!-- News Section -->
        <section class="news-section">
            <div class="auto-container">

                <div class="row clearfix">
                    <?php

                        if (have_posts()):
        
                        while(have_posts()) {
                            the_post();

                    ?>
                    <!--News Block-->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt=""></a>
                            </div>
                            <div class="lower-box">
                                <div class="post-meta">
                                    <ul class="clearfix">
                                        <li><span class="far fa-clock"></span> <?php the_time('F jS, Y'); ?></li>
                                        <li><span class="far fa-user-circle"></span> <?php the_author(); ?></li>
                                        <li><span class="far fa-comments"></span> <?php if (get_comments_number() <= 1): ?>
                                        <?php echo get_comments_number(); ?> Comment
                                        <?php else: ?>
                                        <?php echo get_comments_number(); ?> Comments
                                        <?php endif; ?></li>
                                    </ul>
                                </div>
                                <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                <div class="text"><?php the_excerpt(); ?></div>
                                <div class="link-box"><a class="theme-btn" href="<?php the_permalink(); ?>"><span
                                            class="flaticon-next-1"></span></a></div>
                            </div>
                        </div>
                    </div>
                    <?php
                        
                            }
                        
                        else:
                            echo '
                            <div class="text">
                                <p>There are no posts.</p>
                            </div>';

                        endif;

                    ?>
                </div>
                <div class="more-box">
                    <a class="theme-btn btn-style-one" href="#">
                        <i class="btn-curve"></i>
                        <span class="btn-title">Load more posts</span>
                    </a>
                </div>
            </div>
        </section>

<?php get_footer(); ?>