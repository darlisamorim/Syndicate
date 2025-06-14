<?php
/**
 * Src: Assets
 * Local: src/Enqueue/Assets.php
 * Description: Carrega os scripts e estilos do tema Syndicate News
 *
 * @package SyndicateNews
 */

namespace SyndicateNews\Enqueue;

if ( ! defined('ABSPATH') ) {
    exit; // Evita acesso direto ao arquivo
}

class Assets {

    public function __construct() {
        add_action('wp_enqueue_scripts', [$this, 'enqueue_styles']);
        add_action('wp_enqueue_scripts', [$this, 'enqueue_scripts']);
    }

    /**
     * Enfileira os estilos do tema
     */
    public function enqueue_styles() {
        // TailwindCSS compilado
        wp_enqueue_style(
            'syndicate-tailwind',
            get_template_directory_uri() . '/resources/css/tailwind.css',
            [],
            SYNDICATE_NEWS_VERSION
        );

        // CSS principal
        wp_enqueue_style(
            'syndicate-main',
            get_template_directory_uri() . '/resources/css/main.css',
            [],
            SYNDICATE_NEWS_VERSION
        );

        // CSS de media queries
        wp_enqueue_style(
            'syndicate-queries',
            get_template_directory_uri() . '/resources/css/queries.css',
            [],
            SYNDICATE_NEWS_VERSION
        );
    }

    /**
     * Enfileira os scripts do tema
     */
    public function enqueue_scripts() {
        // Substitui o jQuery padrão pelo local (opcional)
        wp_deregister_script('jquery');
        wp_enqueue_script(
            'jquery',
            get_template_directory_uri() . '/resources/js/jquery.min.js',
            [],
            SYNDICATE_NEWS_VERSION,
            true
        );

        // JS principal do tema
        wp_enqueue_script(
            'syndicate-main-js',
            get_template_directory_uri() . '/resources/js/main.js',
            ['jquery'],
            SYNDICATE_NEWS_VERSION,
            true
        );

        // Suporte a comentários em posts
        if ( is_singular() && comments_open() && get_option('thread_comments') ) {
            wp_enqueue_script('comment-reply');
        }
    }
}