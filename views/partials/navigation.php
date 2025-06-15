<?php
/**
 * Views: Navigation
 * Local: views/partials/navigation.php
 * Description: Navegação principal personalizada
 *
 * @package Syndicate
 */
?>
<nav class="bg-white border-b border-gray-200">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">

        <!-- Logo -->
        <a href="<?php echo home_url(); ?>" class="text-2xl font-bold text-black">
            <?php echo esc_html__('Daily News', 'syndicate'); ?>
        </a>

        <!-- Botão do menu mobile -->
        <button id="menu-toggle" class="md:hidden text-black focus:outline-none"
                aria-label="<?php echo esc_attr__('Abrir menu', 'syndicate'); ?>">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <!-- Menu de navegação -->
        <ul id="main-menu"
            class="hidden md:flex space-x-6 text-sm font-medium text-black items-center transition-all duration-300 ease-in-out">
            <?php
            wp_nav_menu([
                'theme_location' => 'main-menu',
                'container'      => false,
                'items_wrap'     => '%3$s',
                'fallback_cb'    => false,
                'walker'         => new Walker_Nav_Menu()
            ]);
            ?>
        </ul>
    </div>
</nav>

<script>
    document.getElementById('menu-toggle')?.addEventListener('click', () => {
        const menu = document.getElementById('main-menu');
        menu.classList.toggle('hidden');
    });
</script>