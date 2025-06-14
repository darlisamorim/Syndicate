<?php
/**
 * Templates: Comments
 * Local: templates/comments.php
 * Description: Exibe a área de comentários do post.
 *
 * @package Syndicate
 */

if (post_password_required()) {
    return;
}
?>

<div id="comments" class="mt-10">
    <?php if (have_comments()) : ?>
        <h2 class="text-2xl font-bold mb-4">
            <?php
            $comment_count = get_comments_number();
            printf(
                _n('Um comentário', '%s comentários', $comment_count, 'devdesenrolado'),
                number_format_i18n($comment_count)
            );
            ?>
        </h2>

        <ol class="space-y-4">
            <?php
            wp_list_comments([
                'style' => 'ol',
                'short_ping' => true,
                'avatar_size' => 48,
                'callback' => null,
            ]);
            ?>
        </ol>

        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
            <nav class="comment-navigation mt-6">
                <div class="nav-previous"><?php previous_comments_link('&larr; Comentários anteriores'); ?></div>
                <div class="nav-next"><?php next_comments_link('Próximos comentários &rarr;'); ?></div>
            </nav>
        <?php endif; ?>
    <?php endif; ?>

    <?php
    if (!comments_open()) :
        echo '<p class="text-sm text-gray-500">Os comentários estão fechados.</p>';
    endif;
    ?>

    <?php comment_form(); ?>
</div>
