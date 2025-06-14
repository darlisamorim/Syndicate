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
            <h3 class="text-base font-semibold text-black mb-2">Navegação</h3>
            <ul class="space-y-1">
                <li><a href="<?php echo esc_url(home_url('/sobre')); ?>" class="hover:underline">Sobre</a></li>
                <li><a href="<?php echo esc_url(home_url('/contato')); ?>" class="hover:underline">Contato</a></li>
                <li><a href="<?php echo esc_url(home_url('/politica-de-privacidade')); ?>" class="hover:underline">Política de Privacidade</a></li>
            </ul>
        </div>

        <!-- Redes sociais -->
        <div>
            <h3 class="text-base font-semibold text-black mb-2">Siga nas redes</h3>
            <ul class="flex space-x-4">
                <li><a href="#" class="hover:text-black" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#" class="hover:text-black" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#" class="hover:text-black" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#" class="hover:text-black" aria-label="YouTube"><i class="fab fa-youtube"></i></a></li>
            </ul>
        </div>

    </div>

    <div class="text-center mt-10 text-xs text-gray-500">
        &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Todos os direitos reservados.
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>