<?php
/**
 * Source/: Functions
 * Local: S/functions.php
 * Description: Arquivo principal de funções do template
 *
 * @package Syndicate
 */

// 🧱 Configurações básicas do tema
function devdesenrolado_setup() {
    add_theme_support('title-tag');                 // Título dinâmico na aba do navegador
    add_theme_support('custom-logo');               // Logo personalizada via Customizer
    add_theme_support('post-thumbnails');           // Suporte a imagens destacadas

    // Menus multilíngues
    register_nav_menus([
        'main_menu_pt' => __('Menu Principal (Português)', 'syndicate'),
        'main_menu_en' => __('Main Menu (English)', 'syndicate'),
    ]);
}
add_action('after_setup_theme', 'devdesenrolado_setup');

// 🎨 Enfileiramento de estilos e scripts
function devdesenrolado_assets() {
    // Estilos
    wp_enqueue_style('tailwind', get_template_directory_uri() . '/resources/css/tailwind.css', [], null);
    wp_enqueue_style('main', get_template_directory_uri() . '/resources/css/main.css', [], null);
    wp_enqueue_style('queries', get_template_directory_uri() . '/resources/css/queries.css', [], null);

    // Scripts
    wp_enqueue_script('jquery', get_template_directory_uri() . '/resources/js/jquery.min.js', [], null, true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/resources/js/main.js', [], null, true);
}
add_action('wp_enqueue_scripts', 'devdesenrolado_assets');

// 🧩 Inclusão de arquivos do tema
$includes = [
    '/src/Helpers/GeneralHelpers.php',             // 👈 Incluído primeiro para uso global
    '/src/Enqueue/Assets.php',
    '/src/Core/TemplateLoader.php',
    '/src/Customizer/ThemeCustomizer.php',
    '/src/Customizer/CustomStyle.php',
    '/src/Setup/ThemeSetup.php',
    '/src/Admin/Settings.php',
    '/src/Widgets/TrendingWidget.php',
];

foreach ($includes as $file) {
    $path = get_template_directory() . $file;
    if (file_exists($path)) {
        require_once $path;
    } else {
        error_log("Arquivo não encontrado: " . $file);
    }
}

// 🔗 Alias global para usar GeneralHelpers::translate() sem namespace
if (class_exists('Syndicate\\Helpers\\GeneralHelpers') && !class_exists('GeneralHelpers')) {
    class_alias('Syndicate\\Helpers\\GeneralHelpers', 'GeneralHelpers');
}

// 🧱 Registro de Sidebars (lateral e rodapés multilíngues)
function devdesenrolado_widgets_init() {
    register_sidebar([
        'name'          => __('Sidebar Principal', 'syndicate'),
        'id'            => 'sidebar-1',
        'description'   => __('Área de widgets lateral.', 'syndicate'),
        'before_widget' => '<div class="mb-6">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="text-lg font-bold mb-2">',
        'after_title'   => '</h3>',
    ]);

    register_sidebar([
        'name'          => __('Rodapé (Português)', 'syndicate'),
        'id'            => 'footer_pt',
        'description'   => __('Área de widgets do rodapé para o idioma Português.', 'syndicate'),
        'before_widget' => '<div class="mb-4">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="text-lg font-bold mb-2">',
        'after_title'   => '</h3>',
    ]);

    register_sidebar([
        'name'          => __('Footer (English)', 'syndicate'),
        'id'            => 'footer_en',
        'description'   => __('Footer widgets area for English language.', 'syndicate'),
        'before_widget' => '<div class="mb-4">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="text-lg font-bold mb-2">',
        'after_title'   => '</h3>',
    ]);
}
add_action('widgets_init', 'devdesenrolado_widgets_init');