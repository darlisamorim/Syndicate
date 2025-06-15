<?php
/**
 * Templates: Page
 * Local: templates/page.php
 * Description: Exibe o conteúdo de uma página estática.
 *
 * @package Syndicate
 */

get_header(); ?>

<main class="container mx-auto px-4 mt-6">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="max-w-3xl mx-auto">
            <header class="mb-6 border-b pb-4">
                <h1 class="text-4xl font-bold text-black leading-tight mb-2"><?php the_title(); ?></h1>
            </header>

            <div class="prose max-w-none text-gray-800 leading-relaxed">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; else : ?>
        <p class="text-gray-600 text-center"><?php echo esc_html__('Conteúdo não encontrado.', 'syndicate'); ?></p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
