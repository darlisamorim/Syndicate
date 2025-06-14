<?php
/**
 *  Source/: Sidebar
 *  Local: S/sidebar.php
 *  Description: Template da barra lateral
 *
 * @package Syndicate
 */

// Se a sidebar não estiver ativa, não renderiza nada
if (!is_active_sidebar('sidebar-1')) {
    return;
}
?>

<aside id="secondary" class="widget-area w-full lg:w-1/4 px-4 mt-8 lg:mt-0">

    <?php dynamic_sidebar('sidebar-1'); ?>

    <!-- Bloco de anúncio adaptável -->
    <?php get_template_part('views/components/ad-block', null, ['size' => '300x250']); ?>

</aside>
