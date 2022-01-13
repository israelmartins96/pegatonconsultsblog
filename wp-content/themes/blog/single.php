<?php

    get_header();

    while (have_posts()) { the_post();

?>

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
                                <li><a href="http://blog.pegatonconsults.com">Blog</a></li>
                                <li class="active"><?php the_title(); ?></li>
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
                        <div class="blog-details">
                            <!--News Block-->
                            <div class="post-details">
                                <div class="inner-box">
                                    <div class="image-box">
                                    <?php
                                        if (has_post_thumbnail(get_the_ID())) {
                                            echo '<img src="'.get_the_post_thumbnail_url(get_the_ID()).'" alt="" style="max-width: 770px; max-height: 444px;">';
                                        }else{
                                            echo '<img src="http://127.0.0.1/wordpress/wp-content/uploads/2021/07/default-post-image-02.png" alt="" style="max-width: 770px; max-height: 444px;"/>';
                                        }
                                    ?>                                        
                                    </div>
                                    <div class="lower-box">
                                        <div class="post-meta">
                                            <ul class="clearfix">
                                                <li><span class="far fa-clock"></span> <?php the_time('F jS, Y'); ?></li>
                                                <li><span class="far fa-user-circle"></span> <?php the_author(); ?></li>
                                                <li><span class="far fa-comments"></span> <?php
                                                    $comments_number = get_comments_number();
                                                    if (get_comments_number() <= 1): ?>
                                                <?php echo get_comments_number(); ?> Comment
                                                <?php else: ?>
                                                <?php echo get_comments_number(); ?> Comments
                                                <?php endif; ?></li>
                                            </ul>
                                        </div>
                                        <h4><?php the_title(); ?></h4>
                                        <div class="text">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="info-row clearfix">
                                    <div class="tags-info">
                                        <strong>Tags:</strong> <?php

                                            $post_tags = get_the_tags(get_the_ID());
                                            $output = '';
                                            $separator = '<span>| </span>';
                                            $tags = array();
                                            $display_output = '';

                                            if ($post_tags) {
                                                
                                                foreach ($post_tags as $post_tag) {
                                                    
                                                    $output = '

                                        <a href="'.get_tag_link($post_tag->term_id).'">'.$post_tag->name.'</a>
                                                    ';

                                                    array_push($tags, $output);

                                                    $display_output = implode($separator, $tags);

                                                }
                                                
                                                print_r($display_output);

                                            }

                                        ?>
                                    </div>
                                    <div class="cat-info">
                                        <strong>Category:</strong> <?php

                                            $categories = get_the_category(get_the_ID());
                                            $output = '';
                                            $separator = '<span>| </span>';
                                            $categories_list = array();
                                            $display_output = '';

                                            if ($categories) {
                                                
                                                foreach ($categories as $category) {
                                                    
                                                    $output = '

                                        <a href="'.get_category_link($category->term_id).'">'.$category->cat_name.'</a>
                                                    ';

                                                    array_push($categories_list, $output);

                                                    $display_output = implode($separator, $categories_list);

                                                }
                                                
                                                print_r($display_output);

                                            }

                                        ?>
                                    </div>
                                </div>
                            </div>
                            <!-- Related Posts -->
                            <div class="post-control-two">
                                <div class="row clearfix">
                                    <?php
                                        $orig_post = $post;
                                        global $post;
                                        $tags = wp_get_post_tags($post->ID);
                                        
                                        if ($tags) {
                                        $tag_ids = array();
                                        foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
                                        $args=array(
                                        'tag__in' => $tag_ids,
                                        'post__not_in' => array($post->ID),
                                        'posts_per_page'=>4, // Number of related posts to display.
                                        'caller_get_posts'=>1
                                        );
                                        
                                        $my_query = new wp_query( $args );
                                        
                                        while( $my_query->have_posts() ) {
                                        $my_query->the_post();
                                    ?>
                                        
                                        <div class="control-col col-md-6 col-sm-12">
                                            <div class="control-inner">
                                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                                <a href="<?php the_permalink(); ?>" class="over-link"></a>
                                            </div>
                                        </div>
                                        
                                    <?php }
                                        }
                                        $post = $orig_post;
                                        wp_reset_query();
                                    ?>
                                </div>
                            </div>
                            <!--Comments Area-->
                            <div class="comments-area">
                                
                                <?php

                                    comments_template('', true);
                                
                                ?>

                            </div>
                            <script>
                                const wpCommentReplyLinks = document.querySelectorAll('.comment-reply-link');
                                const customCommentReplyButtons = document.querySelectorAll('.comment .reply-btn .theme-btn');
                                const hiddenElement = document.querySelectorAll('.hidden');

                                document.addEventListener('DOMContentLoaded', function() {
                                    
                                    for (let index = 0; index < customCommentReplyButtons.length; index++) {
                                        
                                        customCommentReplyButtons[index].setAttribute('href', wpCommentReplyLinks[index].href);
                                        
                                    }

                                    setTimeout(()=>{
                                        
                                        for (let index = 0; index < wpCommentReplyLinks.length; index++) {
                                            
                                            hiddenElement[index].style = 'display: none !important;';
                                            
                                        }
                                        
                                    }, 1000);
                                    
                                });
                                
                            </script>

                            <!--Leave Comment Form-->
                            <div class="leave-comments">
                                <div class="comments-title">
                                    <h3>Leave a comment</h3>
                                </div>
                                <div class="default-form comment-form">
                                    <?php

                                        $fields =  array(

                                        'author' =>
                                            '<div class="col-md-6 col-sm-12 form-group">
                                                <input type="text" name="author" id="author" placeholder="Your Name" value="' . esc_attr( $commenter['comment_author'] ) .
                                                '" required ' . $aria_req . '>
                                            </div>',

                                        'email' =>
                                            '<div class="col-md-6 col-sm-12 form-group">
                                                <input type="email" id="email" name="email" placeholder="Email Address" value="' . esc_attr( $commenter['comment_author_url'] ) .
                                                '" required ' . $aria_req . '>
                                            </div>',

                                        // 'url' =>
                                        //     '<p class="comment-form-url"><label for="url">' . __( 'Website', 'domainreference' ) . '</label>' .
                                        //     '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
                                        //     '" size="30" /></p>',
                                        );

                                        $args = array(
                                            'title_reply' => null,
                                            'submit_button' => '<div class="col-md-12 col-sm-12 form-group">
                                                <button type="submit" name="%1$s" id="%2$s" class="theme-btn btn-style-one %3$s" value="%4$s">
                                                        <i class="btn-curve"></i>
                                                        <span class="btn-title">Submit Comment</span>
                                                    </button>
                                                </div>',
                                            'class_submit' => 'theme-btn btn-style-one',
                                            // 'title_reply' => 'Share Your Thoughts',
                                            'fields' => $fields,
                                            'comment_field' => '<div class="col-md-12 col-sm-12 form-group comment-form-comment">
                                                    <textarea id="comment" name="comment" placeholder="Your Comment" required></textarea>
                                                </div>',
                                            // 'comment_notes_before' => '<h3>Leave a comment</h3>'
                                        );

                                        comment_form($args);
                                    
                                    ?>
                                    <!-- <form method="post" action="#">
                                        <div class="row clearfix">
                                            <div class="col-md-6 col-sm-12 form-group">
                                                <input type="text" name="username" placeholder="Your Name" required="">
                                            </div>

                                            <div class="col-md-6 col-sm-12 form-group">
                                                <input type="email" name="email" placeholder="Email Address"
                                                    required="">
                                            </div>

                                            <div class="col-md-6 col-sm-12 form-group">
                                                <input type="text" name="username" placeholder="Phone Number"
                                                    required="">
                                            </div>

                                            <div class="col-md-6 col-sm-12 form-group">
                                                <input type="text" name="username" placeholder="Subject" required="">
                                            </div>

                                            <div class="col-md-12 col-sm-12 form-group">
                                                <textarea name="message" placeholder="Your Comments"></textarea>
                                            </div>

                                            <div class="col-md-12 col-sm-12 form-group">
                                                <button type="submit" class="theme-btn btn-style-one">
                                                    <i class="btn-curve"></i>
                                                    <span class="btn-title">Submit Comment</span>
                                                </button>
                                            </div>
                                        </div>
                                    </form> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Sidebar Side-->
                    <?php get_sidebar();//dynamic_sidebar('main-sidebar'); ?>
                </div>
            </div>
        </div>

<?php

    }

    get_footer();

?>