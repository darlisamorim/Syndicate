<?php
/**
 * Templates: Index
 * Local: templates/index.php
 * Description: Página principal de listagem de posts (loop).
 *
 * @package Syndicate
 */

get_header(); ?>

<main class="max-w-7xl mx-auto px-4 py-8 grid grid-cols-1 lg:grid-cols-3 gap-8">
    <section class="lg:col-span-2">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php \Syndicate\Core\TemplateLoader::load('posts/content'); ?>
            <?php endwhile; ?>

            <!-- Paginação -->
            <div class="mt-10">
                <?php the_posts_pagination([
                    'prev_text' => esc_html__('&larr; Anteriores', 'syndicate'),
                    'next_text' => esc_html__('Próximos &rarr;', 'syndicate'),
                ]); ?>
            </div>
        <?php else : ?>
            <p class="text-gray-600"><?php echo esc_html__('Nenhum post encontrado.', 'syndicate'); ?></p>
        <?php endif; ?>
    </section>

    <?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>