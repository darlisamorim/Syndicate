<?php
/**
 * Source/: Header
 * Local: S/header.php
 * Description: Cabeçalho do tema
 *
 * @package Syndicate
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

        <!-- Navegação principal -->
        <nav class="text-sm" aria-label="<?php echo esc_attr__('Menu principal', 'syndicate'); ?>">
            <?php
            wp_nav_menu([
                'theme_location' => 'main-menu',
                'container'      => false,
                'menu_class'     => 'flex space-x-4 font-medium text-gray-700',
                'fallback_cb'    => false,
            ]);
            ?>
        </nav>
    </div>
</header>