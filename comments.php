<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

if (post_password_required()) {
    return;
}

if (!have_comments() && !comments_open()) {
    return;
}

$comments_number = get_comments_number();
$comments_text   = sprintf(_n('%s Comment', '%s Comments', $comments_number, 'directorist'), number_format_i18n($comments_number));
$comment_args    = array(
    'callback' => 'Sovware\Theme\Helper::comments_callback',
);

$comment_form_fields =  array(
    'author' => '<div class="row"><div class="col-md-6"><input name="author" type="text" placeholder="' . esc_attr_x('Name*', 'placeholder', 'directorist') . '" class="form-control m-bottom-30" required></div>',
    'email' => '<div class="col-md-6">
    <input name="email" type="email" placeholder="' . esc_attr_x('Email*', 'placeholder', 'directorist') . '" class="form-control m-bottom-30" required>
    </div></div>',
    'url' => '',
);

$comment_form_args = array(
    'class_submit'  => 'submit btn-send',
    'submit_field'  => '<div class="form-submit">%1$s %2$s</div>',
    'comment_field' =>  '<div class="form-group comment-form-comment"><textarea id="comment" name="comment" required placeholder="'.esc_attr__( 'Comment *', 'metro' ).'" class="textarea form-control" rows="10" cols="40"></textarea></div>',
    'fields' => apply_filters('comment_form_default_fields', $comment_form_fields),
);

if (have_comments()) { ?>
    <div class="comments-area" id="comments">
        <div class="comment-title">
            <h3><?php echo esc_html($comments_text); ?></h3>
        </div>

        <div class="comment-lists">
            <ul class="media-list list-unstyled">
                <?php wp_list_comments($comment_args); ?>
            </ul>
        </div>

        <div class="comment-pagination">
            <nav class="navigation pagination d-flex justify-content-center" role="navigation">
                <div class="nav-links">
                    <?php paginate_comments_links(
                        array(
                            'prev_text' => '<span class="la la-long-arrow-left"></span>',
                            'next_text' => '<span class="la la-long-arrow-right"></span>',
                        )
                    ); ?>
                </div>
            </nav>
        </div>
    </div>
    <?php
}
if (comments_open()) : ?>
    <?php comment_form($comment_form_args); ?>
<?php else : ?>
    <div class="no-comments"><?php esc_html_e('Comments are closed.', 'directorist'); ?></div>
<?php endif;