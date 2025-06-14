<?php
/**
 * Templates: 404
 * Local: templates/404.php
 * Description: Página não encontrada
 *
 * @package Syndicate
 */
get_header(); ?>

<main class="max-w-3xl mx-auto px-4 py-20 text-center">
    <img src="<?php echo get_template_directory_uri(); ?>/resources/images/notfound.png" alt="Erro 404 - Página não encontrada" class="mx-auto w-40 h-40 mb-6 opacity-70" />

    <h1 class="text-4xl font-bold text-gray-900 mb-4">404 - Página não encontrada</h1>
    <p class="text-gray-600 mb-6">Desculpe, a página que você está procurando não existe ou foi removida.</p>

    <a href="<?php echo esc_url(home_url()); ?>" class="inline-block px-6 py-2 bg-black text-white rounded hover:bg-gray-800 transition">
        Voltar para a página inicial
    </a>
</main>

<?php get_footer(); ?>
