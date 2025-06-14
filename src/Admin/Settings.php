<?php
/**
 * Src: Settings
 * Local: src/Admin/Settings.php
 * Description: Página de Configurações do Tema no painel administrativo
 *
 * @package Syndicate
 */

namespace Syndicate\Admin;

class Settings {
    public static function init() {
        add_action('admin_menu', [self::class, 'add_settings_page']);
        add_action('admin_init', [self::class, 'register_settings']);
    }

    /**
     * Adiciona a página de configurações ao menu de Aparência
     */
    public static function add_settings_page() {
        add_theme_page(
            __('Configurações do Tema', 'devdesenrolado'),
            __('Configurações do Tema', 'devdesenrolado'),
            'edit_theme_options',
            'syndicate-theme-settings',
            [self::class, 'render_settings_page']
        );
    }

    /**
     * Registra a configuração do rodapé
     */
    public static function register_settings() {
        register_setting('syndicate_theme_settings_group', 'syndicate_footer_text');

        add_settings_section(
            'syndicate_general_section',
            __('Geral', 'devdesenrolado'),
            null,
            'syndicate-theme-settings'
        );

        add_settings_field(
            'footer_text',
            __('Texto do Rodapé', 'devdesenrolado'),
            [self::class, 'footer_text_field'],
            'syndicate-theme-settings',
            'syndicate_general_section'
        );
    }

    /**
     * Campo de entrada do texto do rodapé
     */
    public static function footer_text_field() {
        $value = esc_attr(get_option('syndicate_footer_text', '© ' . date('Y') . ' - Todos os direitos reservados.'));
        echo '<input type="text" name="syndicate_footer_text" class="regular-text" value="' . $value . '">';
    }

    /**
     * Renderiza a página de configurações
     */
    public static function render_settings_page() {
        ?>
        <div class="wrap">
            <h1><?php _e('Configurações do Tema', 'devdesenrolado'); ?></h1>
            <form method="post" action="options.php">
                <?php
                settings_fields('syndicate_theme_settings_group');
                do_settings_sections('syndicate-theme-settings');
                submit_button();
                ?>
            </form>
        </div>
        <?php
    }
}

Settings::init();
