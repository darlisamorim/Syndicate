<?php
/**
 * Src: ThemeSetup
 * Local: src/Setup/ThemeSetup.php
 * Description: Configurações adicionais do tema
 *
 * @package Syndicate
 */

namespace Syndicate\Setup;

class ThemeSetup {
    /**
     * Inicializa as customizações do tema
     */
    public static function init() {
        // Remove a versão do WordPress do <head>
        remove_action('wp_head', 'wp_generator');

        // Remove estilos embutidos dos widgets de comentários recentes
        add_filter('show_recent_comments_widget_style', '__return_false');

        // Carrega suporte a tradução
        load_theme_textdomain('syndicate', get_template_directory() . '/languages');

        // Troca para o idioma escolhido no Personalizador (ou padrão do WP)
        $lang = get_theme_mod('syndicate_language', get_locale());
        switch_to_locale($lang);

        // Suporte a formatos de post (descomente se for necessário usar)
        // add_theme_support('post-formats', ['aside', 'gallery']);

        // Adicionar outras configurações futuras aqui
    }
}

// Inicializa a configuração no hook apropriado
add_action('after_setup_theme', [ThemeSetup::class, 'init']);