<?php
    if( ! function_exists( 'better_comments' ) ):
        function better_comments($comment, $args, $depth) {
?>
    <div class="comment-box">
        <div <?php comment_class( $class = 'comment' ); ?> id="li-comment-<?php comment_ID(); ?>">
            <div class="author-thumb">
                <figure class="thumb">
                    <?php echo get_avatar($comment); ?>
                    <img src="images/resource/author-7.jpg" alt="">
                </figure>
            </div>
            <?php if ($comment->comment_approved == '0') : ?>
                <em><?php esc_html_e('Your comment is awaiting moderation.','pegaton-consults-blog'); ?></em>
                <br />
            <?php endif; ?>
            <div class="info">
                <div class="name"><?php echo get_comment_author(); ?></div>
                <div class="date"><?php printf(/* translators: 1: date and time(s). */ esc_html__('%1$s at %2$s' , 'pegaton-consults-blog'), get_comment_date(),  get_comment_time()) ?></div>
            </div>
            <div class="text"><?php comment_text() ?></div>
            <div class="reply-btn">
                <a class="theme-btn btn-style-one" href="#">
                    <i class="btn-curve"></i>
                    <span class="btn-title">Reply
                        <?php
                            $myclass = 'hidden';
                            echo preg_replace( '/comment-reply-link/', 'comment-reply-link ' . $myclass, 
                            get_comment_reply_link(array_merge( $args, array(
                            'add_below' => $add_below, 
                            'depth' => $depth, 
                            'max_depth' => $args['max_depth']))), 1 );
                        ?>
                    </span>
                </a>
            </div>
            
        </div>
<?php
        }
    endif;
?>