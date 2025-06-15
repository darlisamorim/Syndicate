<?php
/**
 * Templates: Category
 * Local: templates/category.php
 * Description: Template para exibir posts de uma categoria
 *
 * @package Syndicate
 */

get_header(); ?>

<main class="max-w-6xl mx-auto px-4 py-10">
    <header class="mb-10">
        <h1 class="text-3xl font-bold text-gray-900">
            <?php
            printf(
                esc_html__('Categoria: %s', 'syndicate'),
                single_cat_title('', false)
            );
            ?>
        </h1>

        <?php if (category_description()) : ?>
            <p class="text-gray-600 mt-2"><?php echo category_description(); ?></p>
        <?php endif; ?>
    </header>

    <?php if (have_posts()) : ?>
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            <?php while (have_posts()) : the_post(); ?>
                <article class="bg-white rounded-lg shadow overflow-hidden">
                    <a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-48 object-cover">
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/resources/images/notfound.png" alt="<?php echo esc_attr__('Imagem não disponível', 'syndicate'); ?>" class="w-full h-48 object-cover">
                        <?php endif; ?>

                        <div class="p-4">
                            <h2 class="text-lg font-semibold text-gray-800"><?php the_title(); ?></h2>
                            <p class="text-sm text-gray-500"><?php echo get_the_date(); ?></p>
                        </div>
                    </a>
                </article>
            <?php endwhile; ?>
        </div>

        <!-- Navegação entre páginas -->
        <div class="mt-10">
            <?php
            the_posts_navigation([
                'prev_text' => esc_html__('&larr; Publicações anteriores', 'syndicate'),
                'next_text' => esc_html__('Próximas publicações &rarr;', 'syndicate'),
            ]);
            ?>
        </div>
    <?php else : ?>
        <div class="text-center mt-12">
            <img src="<?php echo get_template_directory_uri(); ?>/resources/images/notfound.png" alt="<?php echo esc_attr__('Nenhuma publicação', 'syndicate'); ?>" class="mx-auto w-32 h-32 mb-4 opacity-60">
            <p class="text-gray-600"><?php echo esc_html__('Nenhuma publicação encontrada.', 'syndicate'); ?></p>
        </div>
    <?php endif; ?>
</main>

<?php get_footer(); ?>