<?php
/**
 * Funções principais do tema Syndicate
 */

// 🧱 Configurações básicas do tema
function devdesenrolado_setup() {
    add_theme_support('title-tag');                 // Título dinâmico na aba do navegador
    add_theme_support('custom-logo');               // Logo personalizada via Customizer
    add_theme_support('post-thumbnails');           // Suporte a imagens destacadas

    register_nav_menus([
        'main-menu' => __('Menu Principal', 'devdesenrolado'),
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
    '/src/Setup/Assets.php',
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


// 🧱 Registro de Sidebars
function devdesenrolado_widgets_init() {
    register_sidebar([
        'name'          => __('Sidebar Principal', 'devdesenrolado'),
        'id'            => 'sidebar-1',
        'description'   => __('Área de widgets lateral.'),
        'before_widget' => '<div class="mb-6">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="text-lg font-bold mb-2">',
        'after_title'   => '</h3>',
    ]);
}
add_action('widgets_init', 'devdesenrolado_widgets_init');
