<?php
/**
 * Comments template
 */

if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area">
    
    <?php if (have_comments()) : ?>
        <h2 class="comments-title text-2xl font-bold mb-8 text-foreground">
            <?php
            $comment_count = get_comments_number();
            if ($comment_count == 1) {
                printf(_x('One comment on &ldquo;%1$s&rdquo;', 'comments title', 'waterways'), get_the_title());
            } else {
                printf(_nx('%1$s comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', $comment_count, 'comments title', 'waterways'), number_format_i18n($comment_count), get_the_title());
            }
            ?>
        </h2>
        
        <ol class="comment-list space-y-6 mb-8">
            <?php
            wp_list_comments(array(
                'style'       => 'ol',
                'short_ping'  => true,
                'callback'    => 'waterways_comment_callback',
            ));
            ?>
        </ol>
        
        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
            <nav class="comment-navigation">
                <div class="nav-previous">
                    <?php previous_comments_link(__('Older Comments', 'waterways')); ?>
                </div>
                <div class="nav-next">
                    <?php next_comments_link(__('Newer Comments', 'waterways')); ?>
                </div>
            </nav>
        <?php endif; ?>
        
    <?php endif; ?>
    
    <?php if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) : ?>
        <p class="no-comments text-muted-foreground">
            <?php _e('Comments are closed.', 'waterways'); ?>
        </p>
    <?php endif; ?>
    
    <?php
    comment_form(array(
        'title_reply'          => __('Leave a Comment', 'waterways'),
        'title_reply_to'       => __('Leave a Reply to %s', 'waterways'),
        'cancel_reply_link'    => __('Cancel Reply', 'waterways'),
        'label_submit'         => __('Post Comment', 'waterways'),
        'comment_field'        => '<div class="comment-form-comment mb-4"><label for="comment" class="block text-sm font-medium text-foreground mb-2">' . __('Comment', 'waterways') . ' <span class="required">*</span></label><textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required" class="w-full px-3 py-2 border border-border rounded-md bg-input text-foreground focus:outline-none focus:ring-2 focus:ring-ring"></textarea></div>',
        'fields'               => array(
            'author' => '<div class="comment-form-author mb-4"><label for="author" class="block text-sm font-medium text-foreground mb-2">' . __('Name', 'waterways') . ' <span class="required">*</span></label><input id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30" maxlength="245" required="required" class="w-full px-3 py-2 border border-border rounded-md bg-input text-foreground focus:outline-none focus:ring-2 focus:ring-ring" /></div>',
            'email'  => '<div class="comment-form-email mb-4"><label for="email" class="block text-sm font-medium text-foreground mb-2">' . __('Email', 'waterways') . ' <span class="required">*</span></label><input id="email" name="email" type="email" value="' . esc_attr($commenter['comment_author_email']) . '" size="30" maxlength="100" required="required" class="w-full px-3 py-2 border border-border rounded-md bg-input text-foreground focus:outline-none focus:ring-2 focus:ring-ring" /></div>',
            'url'    => '<div class="comment-form-url mb-4"><label for="url" class="block text-sm font-medium text-foreground mb-2">' . __('Website', 'waterways') . '</label><input id="url" name="url" type="url" value="' . esc_attr($commenter['comment_author_url']) . '" size="30" maxlength="200" class="w-full px-3 py-2 border border-border rounded-md bg-input text-foreground focus:outline-none focus:ring-2 focus:ring-ring" /></div>',
        ),
        'class_submit'         => 'btn btn-primary',
        'submit_button'        => '<input name="%1$s" type="submit" id="%2$s" class="%3$s" value="%4$s" />',
    ));
    ?>
    
</div>

<?php
/**
 * Custom comment callback function
 */
function waterways_comment_callback($comment, $args, $depth) {
    $tag = ($args['style'] === 'div') ? 'div' : 'li';
    ?>
    <<?php echo $tag; ?> id="comment-<?php comment_ID(); ?>" <?php comment_class('comment bg-card border border-border rounded-lg p-6'); ?>>
        <div class="comment-body">
            <div class="comment-meta flex items-center mb-4">
                <div class="comment-author-avatar mr-4">
                    <?php echo get_avatar($comment, 48, '', '', array('class' => 'rounded-full')); ?>
                </div>
                <div class="comment-metadata">
                    <div class="comment-author text-foreground font-semibold">
                        <?php comment_author(); ?>
                    </div>
                    <div class="comment-date text-sm text-muted-foreground">
                        <a href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)); ?>" class="text-muted-foreground hover:text-accent">
                            <?php printf(__('%1$s at %2$s', 'waterways'), get_comment_date(), get_comment_time()); ?>
                        </a>
                        <?php edit_comment_link(__('Edit', 'waterways'), '  ', ''); ?>
                    </div>
                </div>
            </div>
            
            <?php if ($comment->comment_approved == '0') : ?>
                <div class="comment-awaiting-moderation bg-muted text-muted-foreground p-3 rounded-md mb-4">
                    <?php _e('Your comment is awaiting moderation.', 'waterways'); ?>
                </div>
            <?php endif; ?>
            
            <div class="comment-content text-muted-foreground">
                <?php comment_text(); ?>
            </div>
            
            <div class="comment-reply mt-4">
                <?php
                comment_reply_link(array_merge($args, array(
                    'add_below' => 'comment',
                    'depth'     => $depth,
                    'max_depth' => $args['max_depth'],
                    'before'    => '<div class="reply">',
                    'after'     => '</div>',
                    'class'     => 'text-accent hover:text-accent-foreground text-sm font-medium'
                )));
                ?>
            </div>
        </div>
    <?php
}
?>