<?php
/**
 * Source/: Footer
 * Local: S/footer.php
 * Description: Rodapé do tema com suporte multilíngue via widgets
 *
 * @package Syndicate
 */
?>

<footer class="bg-white border-t mt-12 py-10 text-sm text-gray-600">
    <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-8">

        <!-- Logo e descrição -->
        <div>
            <a href="<?php echo esc_url(home_url()); ?>" class="text-xl font-bold text-black block mb-2">
                <?php bloginfo('name'); ?>
            </a>
            <p><?php bloginfo('description'); ?></p>
        </div>

        <!-- Widgets do rodapé (dinâmicos por idioma) -->
        <div>
            <?php
            // Detecta idioma com suporte ao Customizer
            $lang = function_exists('pll_current_language') ? pll_current_language() : 'pt';

            if ($lang === 'pt' && is_active_sidebar('footer_pt')) {
                dynamic_sidebar('footer_pt');
            } elseif ($lang === 'en' && is_active_sidebar('footer_en')) {
                dynamic_sidebar('footer_en');
            } else {
                echo '<p>' . esc_html__('Nenhum widget disponível.', 'syndicate') . '</p>';
            }
            ?>
        </div>

        <!-- Redes sociais -->
        <div>
            <h3 class="text-base font-semibold text-black mb-2">
                <?php echo esc_html__('Siga-Nos', 'syndicate'); ?>
            </h3>
            <ul class="flex space-x-4">
                <li><a href="#" class="hover:text-black" aria-label="<?php echo esc_attr__('Facebook', 'syndicate'); ?>"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#" class="hover:text-black" aria-label="<?php echo esc_attr__('Twitter', 'syndicate'); ?>"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#" class="hover:text-black" aria-label="<?php echo esc_attr__('Instagram', 'syndicate'); ?>"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#" class="hover:text-black" aria-label="<?php echo esc_attr__('YouTube', 'syndicate'); ?>"><i class="fab fa-youtube"></i></a></li>
            </ul>
        </div>
    </div>

    <div class="text-center mt-10 text-xs text-gray-500">
        &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php echo esc_html__('Todos os direitos reservados.', 'syndicate'); ?>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>