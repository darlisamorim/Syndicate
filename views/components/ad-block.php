<?php
/**
 * Components: Ad-Block
 * Local: views/components/ad-block.php
 * Description: Bloco de Anúncio Reutilizável, exibe um banner de publicidade em destaque.
 *
 * @package Syndicate
 */
?>

<div class="my-8">
    <div class="bg-gray-100 p-4 rounded shadow-sm text-center">
        <span class="text-xs uppercase tracking-wide text-gray-500 block mb-2">
            <?php echo esc_html__('Publicidade', 'syndicate'); ?>
        </span>
        <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/resources/images/publicidade.png"
                 alt="<?php echo esc_attr__('Anúncio', 'syndicate'); ?>"
                 class="mx-auto rounded">
        </a>
    </div>
</div>