<?php
/**
 * Src: CustomStyle
 * Local: src/Customizer/CustomStyle.php
 * Description: Injeta variáveis CSS com base nas opções do Customizer
 *
 * @package Syndicate
 */

namespace Syndicate\Customizer;

class CustomStyle {
    /**
     * Renderiza o estilo inline com base nas configurações do tema
     */
    public static function render() {
        $primary = get_theme_mod('syndicate_primary_color', '#111827');

        if (!empty($primary)) {
            echo '<style type="text/css">
                :root {
                    --color-primary: ' . esc_attr($primary) . ';
                }
            </style>';
        }
    }
}

// Adiciona o estilo customizado no <head>
add_action('wp_head', ['Syndicate\Customizer\CustomStyle', 'render']);