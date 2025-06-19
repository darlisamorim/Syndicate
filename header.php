<?php
/**
 * Source/: Header
 * Local: S/header.php
 * Description: Cabeçalho do tema
 *
 * @package Syndicate
 */

use Syndicate\Helpers\GeneralHelpers;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Título dinâmico multilíngue -->
    <title>
        <?php
        $page_title = wp_get_document_title();
        $site_name  = get_bloginfo('name');
        echo esc_html("{$page_title} – {$site_name}");
        ?>
    </title>

    <!-- Hreflang automático para SEO multilíngue -->
    <?php
    if (class_exists(GeneralHelpers::class)) {
        GeneralHelpers::print_hreflang_tags();
    }
    ?>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-pap3Dq4lIEjCm+..." crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-white text-black antialiased'); ?>>

<header class="bg-white border-b border-gray-200">
    <div class="container mx-auto px-4 py-4 flex items-center justify-between">

        <!-- Logo personalizada ou nome do site -->
        <?php if (has_custom_logo()) : ?>
            <div class="logo"><?php the_custom_logo(); ?></div>
        <?php else : ?>
            <a href="<?php echo esc_url(home_url()); ?>" class="text-2xl font-bold tracking-tight">
                <?php bloginfo('name'); ?>
            </a>
        <?php endif; ?>

        <!-- Navegação principal multilíngue -->
        <nav class="text-sm" aria-label="<?php echo esc_attr__('Menu principal', 'syndicate'); ?>">
            <?php
            $lang = function_exists('pll_current_language') ? pll_current_language() : 'pt';
            $menu_location = ($lang === 'en') ? 'main_menu_en' : 'main_menu_pt';

            wp_nav_menu([
                'theme_location' => $menu_location,
                'container'      => false,
                'menu_class'     => 'flex space-x-4 font-medium text-gray-700',
                'fallback_cb'    => false,
            ]);
            ?>
        </nav>
    </div>
</header>