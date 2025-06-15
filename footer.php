<?php
/**
 * Source/: Footer
 * Local: S/footer.php
 * Description: Rodapé do tema
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

        <!-- Navegação do rodapé -->
        <div>
            <h3 class="text-base font-semibold text-black mb-2">
                <?php echo esc_html__('Navegação', 'syndicate'); ?>
            </h3>
            <ul class="space-y-1">
                <li>
                    <a href="<?php echo esc_url(home_url('/sobre')); ?>" class="hover:underline">
                        <?php echo esc_html__('Sobre', 'syndicate'); ?>
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/contato')); ?>" class="hover:underline">
                        <?php echo esc_html__('Contato', 'syndicate'); ?>
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/politica-de-privacidade')); ?>" class="hover:underline">
                        <?php echo esc_html__('Política de Privacidade', 'syndicate'); ?>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Redes sociais -->
        <div>
            <h3 class="text-base font-semibold text-black mb-2">
                <?php echo esc_html__('Siga nas redes', 'syndicate'); ?>
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