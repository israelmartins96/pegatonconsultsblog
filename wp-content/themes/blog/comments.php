<div class="comments-title">
    <h3>
        <?php
            $comments_number = get_comments_number();
            if ($comments_number <= 1):
        ?>
        <?php echo $comments_number; ?> Comment
        <?php else: ?>
        <?php echo $comments_number; ?> Comments
        <?php endif; ?>
    </h3>
</div>

<?php
    
    $args = array(
        'walker'            => null,
        'max_depth'         => '',
        'style'             => 'div',
        'callback'          => 'better_comments',
        // 'end-callback'      => null,
        'type'              => 'all',
        'reply_text'        => 'Reply',
        'page'              => '',
        'per_page'          => '',
        'avatar_size'       => 32,
        'reverse_top_level' => null,
        'reverse_children'  => '',
        'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
        'short_ping'        => false,   // @since 3.6
        'echo'              => true     // boolean, default is true
    );

    wp_list_comments($args);

    // $comments_number = get_comments_number();
    // if ($comments_number >= 1) {

?>

<?php
    // }
?>