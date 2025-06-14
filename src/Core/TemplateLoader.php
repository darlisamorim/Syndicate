<?php
/**
 * Src: TemplateLoader
 * Local: src/Core/TemplateLoader.php
 * Description: Classe utilitária para carregar views do tema
 *
 * @package Syndicate
 */

namespace Syndicate\Core;

class TemplateLoader {
    /**
     * Carrega um arquivo da pasta /views
     *
     * @param string $view Nome da view (ex: 'posts/content')
     * @param array $args Argumentos que serão extraídos como variáveis
     */
    public static function load($view, $args = []) {
        $path = get_template_directory() . '/views/' . $view . '.php';

        if (file_exists($path)) {
            extract($args);
            include $path;
        } else {
            echo "<!-- View '{$view}' não encontrada em /views -->";
        }
    }
}
