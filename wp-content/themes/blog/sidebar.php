<div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                        <aside class="sidebar blog-sidebar">
                            <!--Sidebar Widget-->
                            <div class="sidebar-widget search-box">
                                <div class="widget-inner">
                                    <?php get_search_form(); ?>
                                </div>
                            </div>

                            <div class="sidebar-widget recent-posts">
                                <div class="widget-inner">
                                    <div class="sidebar-title">
                                        <h4>Latest Posts</h4>
                                    </div>

                                    <?php
                                        $args = array( 'numberposts' => '5' );
                                        $recent_posts = wp_get_recent_posts(3);

                                        foreach ($recent_posts as $recent){

                                            $recent_posts_thumbnails = wp_get_attachment_image_src(get_post_thumbnail_id($recent["ID"]));
                                            
                                            foreach ($recent_posts_thumbnails as $thumbnail) {
                                            
                                            echo '<div class="post">
                                                <figure class="post-thumb"><img src="'.esc_url($thumbnail).'"></figure>
                                                <h5 class="text"><a href="'.get_permalink($recent["ID"]).'">'.$recent["post_title"].'</a></h5>
                                            </div>';

                                            break;

                                            }

                                        }
                                    ?>
                                </div>
                            </div>

                            <div class="sidebar-widget archives">
                                <div class="widget-inner">
                                    <div class="sidebar-title">
                                        <h4>Categories</h4>
                                    </div>
                                    <ul>
                                        <?php

                                            $categories = get_categories(array(
                                                'taxonomy' => 'category',
                                                'orderby' => 'name',
                                                'parent' => 0,
                                                'hide_empty' => 0,
                                            ));
                                            $output = '';

                                            if ($categories) {
                                                
                                                foreach ($categories as $category) {
                                                    
                                                    $output .= '

                                        <li><a href="'.get_category_link($category->term_id).'">'.$category->cat_name.'</a></li>
                                                    ';

                                                }
                                                
                                                echo $output;

                                            }

                                        ?>
                                    </ul>
                                </div>
                            </div>

                            <div class="sidebar-widget popular-tags">
                                <div class="widget-inner">
                                    <div class="sidebar-title">
                                        <h4>Tags</h4>
                                    </div>
                                    <div class="tags-list clearfix">
                                        <?php

                                            $post_tags = get_categories(array(
                                                'taxonomy' => 'post_tag',
                                                'orderby' => 'name',
                                                'parent' => 0,
                                                'hide_empty' => 0,
                                            ));
                                            $output = '';
                                            $separator = '<span>| </span>';
                                            $tags = array();
                                            $display_output = '';

                                            if ($post_tags) {
                                                
                                                foreach ($post_tags as $post_tag) {
                                                    
                                                    $output = '

                                        <a href="'.get_category_link($post_tag->term_id).'">'.$post_tag->cat_name.'</a>
                                                    ';

                                                    array_push($tags, $output);

                                                    $display_output = implode($separator, $tags);

                                                }
                                                
                                                print_r($display_output);

                                            }

                                        ?>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="sidebar-widget recent-comments">
                                <div class="widget-inner">
                                    <div class="sidebar-title">
                                        <h4>Comments</h4>
                                    </div>

                                    <div class="comment">
                                        <div class="icon">
                                            <span class="flaticon-speech-bubble-2"></span>
                                        </div>
                                        <h5 class="text"><a href="#">A Wordpress Commenter on Launch New Mobile App</a>
                                        </h5>
                                    </div>

                                    <div class="comment">
                                        <div class="icon">
                                            <span class="flaticon-speech-bubble-2"></span>
                                        </div>
                                        <h5 class="text"><a href="#">John Doe on Template: <br>Comments</a></h5>
                                    </div>

                                    <div class="comment">
                                        <div class="icon">
                                            <span class="flaticon-speech-bubble-2"></span>
                                        </div>
                                        <h5 class="text"><a href="#">A Wordpress Commenter on Launch New Mobile App</a>
                                        </h5>
                                    </div>

                                    <div class="comment">
                                        <div class="icon">
                                            <span class="flaticon-speech-bubble-2"></span>
                                        </div>
                                        <h5 class="text"><a href="#">John Doe on Template: <br>Comments</a></h5>
                                    </div>

                                </div>
                            </div> -->


                        </aside>
                    </div>