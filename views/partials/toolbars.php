<?php
/**
 * Views: Toolbars
 * Local: views/partials/toolbars.php
 * Description: Barra superior com categorias
 *
 * @package Syndicate
 */
?>
<?php
$categories = get_categories(['orderby' => 'name', 'order' => 'ASC']);

if (!empty($categories)) : ?>
    <div class="bg-gray-100 py-3 border-b border-gray-200">
        <div class="container mx-auto px-4 flex flex-wrap gap-3 text-sm font-medium">
            <?php foreach ($categories as $category) : ?>
                <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>"
                   class="text-gray-800 hover:text-black transition">
                    <?php echo esc_html($category->name); ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>
