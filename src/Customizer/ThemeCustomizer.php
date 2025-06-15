<?php
/**
 * Src: ThemeCustomizer
 * Local: src/Customizer/ThemeCustomizer.php
 * Description: Configurações do tema via Personalizar (Customizer)
 *
 * @package Syndicate
 */

namespace Syndicate\Customizer;

class ThemeCustomizer {
    /**
     * Registra as opções no Customizer
     */
    public static function register($wp_customize) {
        /**
         * 🎨 Seção de Cores do Tema
         */
        $wp_customize->add_section('syndicate_colors', [
            'title'    => __('Cores do Tema', 'syndicate'),
            'priority' => 30,
        ]);

        // Cor primária
        $wp_customize->add_setting('syndicate_primary_color', [
            'default'   => '#000000',
            'transport' => 'refresh',
        ]);

        $wp_customize->add_control(new \WP_Customize_Color_Control($wp_customize, 'syndicate_primary_color', [
            'label'    => __('Cor Principal', 'syndicate'),
            'section'  => 'syndicate_colors',
            'settings' => 'syndicate_primary_color',
        ]));

        /**
         * 🔤 Seção de Tipografia
         */
        $wp_customize->add_section('syndicate_typography', [
            'title'    => __('Tipografia', 'syndicate'),
            'priority' => 31,
        ]);

        // Tamanho da fonte base
        $wp_customize->add_setting('syndicate_font_size', [
            'default'   => '16px',
            'transport' => 'refresh',
        ]);

        $wp_customize->add_control('syndicate_font_size', [
            'label'   => __('Tamanho da Fonte Base', 'syndicate'),
            'section' => 'syndicate_typography',
            'type'    => 'text',
        ]);

        /**
         * 🌐 Seção de Idioma do Tema
         */
        $wp_customize->add_section('syndicate_language', [
            'title'    => __('Idioma do Tema', 'syndicate'),
            'priority' => 40,
        ]);

        $wp_customize->add_setting('syndicate_language', [
            'default'   => 'pt_BR',
            'transport' => 'refresh',
        ]);

        $wp_customize->add_control('syndicate_language_control', [
            'label'   => __('Escolha o idioma do tema:', 'syndicate'),
            'section' => 'syndicate_language',
            'settings'=> 'syndicate_language',
            'type'    => 'select',
            'choices' => [
                'pt_BR' => '🇧🇷 Português',
                'en_US' => '🇺🇸 English',
            ],
        ]);
    }

    /**
     * Inicializa o Customizer
     */
    public static function init() {
        add_action('customize_register', [__CLASS__, 'register']);
    }
}

// Inicialização do Customizer
\Syndicate\Customizer\ThemeCustomizer::init();