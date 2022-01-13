<?php get_header(); ?>

        <!-- Banner Section -->
        <section class="page-banner">
            <div class="image-layer" style="background-image:url(<?php echo get_theme_file_uri('/images/background/image-7.jpg'); ?>);"></div>
            <div class="shape-1"></div>
            <div class="shape-2"></div>
            <div class="banner-inner">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <h1>Blog</h1>
                        <div class="page-nav">
                            <ul class="bread-crumb clearfix">
                                <li><a href="index.php">Home</a></li>
                                <li class="active">Blog</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Banner Section -->

        <div class="sidebar-page-container">
            <div class="auto-container">
                <div class="row clearfix">

                    <!--Content Side-->
                    <div class="content-side col-lg-8 col-md-12 col-sm-12">
                        <div class="blog-posts">
                            <?php

                            if (have_posts()):
            
                                $postsPerPage = '';
                                $args = array(
                                        'post_type' => 'post',
                                        'posts_per_page' => $postsPerPage,
                                );
                    
                                $loop = new WP_Query($args);
                    
                                while ($loop->have_posts()) { $loop->the_post();

                            ?>
                            <!--News Block-->
                            <div class="news-block-two" id="<?php echo get_the_ID(); ?>">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <a href="<?php the_permalink(); ?>"><?php
                                            if (has_post_thumbnail(get_the_ID())) {
                                                echo '<img src="'.get_the_post_thumbnail_url(get_the_ID()).'" alt="" style="max-width: 770px; max-height: 444px;">';
                                            }else{
                                                echo '<img src="http://127.0.0.1/wordpress/wp-content/uploads/2021/07/default-post-image-02.png" alt="" style="max-width: 770px; max-height: 444px;"/>';
                                            }
                                        ?></a>
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
                                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h4>
                                        <div class="text"><?php the_excerpt(); ?></div>
                                        <div class="link-box"><a class="theme-btn" href="<?php the_permalink(); ?>">Read More</a>
                                        </div>
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
                            
                            <!--News Block-->
                            <!-- <div class="news-block-three">
                                <div class="inner-box">
                                    <div class="quote-icon"><span>“</span></div>
                                    <div class="text">There are many variations of passages of available but majority
                                        have alteration in some by inject humour or random words. There are many
                                        variations of passages of Lorem Ipsum available, but the majority have suffered
                                        alteration.</div>
                                    <a href="blog-single.html" class="over-link"></a>
                                </div>
                            </div> -->

                            <!--News Block-->
                            <!-- <div class="news-block-three">
                                <div class="inner-box">
                                    <div class="link-icon"><span class="flaticon-link-2"></span></div>
                                    <h4><a href="blog-single.html">Delivering the best digital marketing</a></h4>
                                    <a href="blog-single.html" class="over-link"></a>
                                </div>
                            </div> -->

                            <div class="more-box">
                                <a class="theme-btn btn-style-one loadMoreBtn" id="loadMore" href="#">
                                    <i class="btn-curve"></i>
                                    <span class="btn-title loadMoreBtn-label">Load more posts</span>
                                </a>
                                <!-- <button class="theme-btn btn-style-one loadMoreBtn" id="more_posts loadMore">
                                    <i class="btn-curve"></i>
                                    <span class="btn-title loadMoreBtn-label">Load more posts</span>
                                </button> -->
                            </div>
                        </div>
                        
                    </div>

                    <!--Sidebar Side-->
                    <?php get_sidebar();//dynamic_sidebar('main-sidebar'); ?>

                </div>
            </div>
        </div>

        <?php get_footer(); ?>