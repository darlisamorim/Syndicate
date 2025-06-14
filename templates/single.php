<?php
/**
 * Templates: Single
 * Local: templates/single.php
 * Description: Post individual. Exibe o conteúdo completo de um post, com imagem destacada e navegação entre posts.
 *
 * @package Syndicate
 */

get_header(); ?>

<main class="max-w-5xl mx-auto px-4 py-10">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article <?php post_class(); ?>>

            <!-- Título e metadados -->
            <header class="mb-6 border-b pb-4">
                <h1 class="text-4xl font-bold text-gray-900 leading-tight"><?php the_title(); ?></h1>
                <p class="text-sm text-gray-500 mt-2">
                    Publicado em <?php echo get_the_date(); ?> por <?php the_author(); ?>
                </p>
            </header>

            <!-- Imagem destacada ou fallback -->
            <div class="mb-6">
                <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title_attribute(); ?>" class="w-full rounded-lg shadow">
                <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/resources/images/notfound.png" alt="Imagem não disponível" class="w-full rounded-lg shadow">
                <?php endif; ?>
            </div>

            <!-- Conteúdo do post -->
            <div class="prose max-w-none text-gray-800 leading-relaxed">
                <?php the_content(); ?>
            </div>

        </article>

        <!-- Navegação entre posts (se existirem) -->
        <?php
        $prev_post = get_previous_post();
        $next_post = get_next_post();

        if ($prev_post || $next_post) : ?>
            <nav class="flex justify-between items-center mt-12 border-t pt-6 text-sm text-blue-600">
                <?php if ($prev_post) : ?>
                    <a href="<?php echo get_permalink($prev_post); ?>" class="hover:underline">&larr; <?php echo get_the_title($prev_post); ?></a>
                <?php else : ?>
                    <span></span>
                <?php endif; ?>

                <?php if ($next_post) : ?>
                    <a href="<?php echo get_permalink($next_post); ?>" class="hover:underline"><?php echo get_the_title($next_post); ?> &rarr;</a>
                <?php else : ?>
                    <span></span>
                <?php endif; ?>
            </nav>
        <?php endif; ?>

    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>