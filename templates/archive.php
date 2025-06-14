<?php
/**
 * Templates: Archive
 * Local: templates/archive.php
 * Description: Template para páginas de Arquivo (categorias, tags, datas, autores)
 *
 * @package Syndicate
 */

get_header(); ?>

<main class="max-w-6xl mx-auto px-4 py-10">
    <header class="mb-10">
        <h1 class="text-3xl font-bold text-gray-900"><?php the_archive_title(); ?></h1>

        <?php if (get_the_archive_description()) : ?>
            <p class="text-gray-600 mt-2"><?php the_archive_description(); ?></p>
        <?php endif; ?>
    </header>

    <?php if (have_posts()) : ?>
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            <?php while (have_posts()) : the_post(); ?>
                <article class="bg-white rounded-lg shadow overflow-hidden">
                    <a href="<?php the_permalink(); ?>" class="block">
                        <?php if (has_post_thumbnail()) : ?>
                            <img
                                    src="<?php the_post_thumbnail_url('medium'); ?>"
                                    alt="<?php the_title_attribute(); ?>"
                                    class="w-full h-48 object-cover">
                        <?php else : ?>
                            <img
                                    src="<?php echo get_template_directory_uri(); ?>/resources/images/notfound.png"
                                    alt="Imagem não disponível"
                                    class="w-full h-48 object-cover">
                        <?php endif; ?>

                        <div class="p-4">
                            <h2 class="text-lg font-semibold text-gray-800"><?php the_title(); ?></h2>
                            <p class="text-sm text-gray-500"><?php echo get_the_date(); ?></p>
                        </div>
                    </a>
                </article>
            <?php endwhile; ?>
        </div>

        <!-- Paginação -->
        <div class="mt-10">
            <?php the_posts_navigation([
                'prev_text' => '&larr; Publicações anteriores',
                'next_text' => 'Próximas publicações &rarr;',
            ]); ?>
        </div>
    <?php else : ?>
        <div class="text-center mt-12">
            <img src="<?php echo get_template_directory_uri(); ?>/resources/images/notfound.png" alt="Nenhuma publicação" class="mx-auto w-32 h-32 mb-4 opacity-60">
            <p class="text-gray-600">Nenhuma publicação encontrada.</p>
        </div>
    <?php endif; ?>
</main>

<?php get_footer(); ?>