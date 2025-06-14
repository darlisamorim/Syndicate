<article <?php post_class('mb-8 border-b pb-4'); ?>>
    <h2 class="text-2xl font-bold mb-2">
        <a href="<?php the_permalink(); ?>" class="hover:underline">
            <?php the_title(); ?>
        </a>
    </h2>

    <div class="mb-4">
        <?php if (has_post_thumbnail()) : ?>
            <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-48 object-cover rounded">
        <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/resources/images/notfound.png" alt="Imagem não disponível" class="w-full h-48 object-cover rounded">
        <?php endif; ?>
    </div>

    <div class="text-sm text-gray-600 mb-2">
        <?php echo get_the_date(); ?> • <?php the_author(); ?>
    </div>

    <div class="text-base text-gray-800">
        <?php the_excerpt(); ?>
    </div>
</article>
