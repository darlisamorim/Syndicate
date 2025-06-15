<?php
/**
 * Views: Página Inicial
 * Local: views/pages/front-page.php
 * Description: Estrutura da home com seções de destaque, últimas notícias e categorias específicas.
 *
 * @package Syndicate
 */

get_header(); ?>

<main class="container mx-auto px-4 py-8">

    <!-- 📰 Destaque principal -->
    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-4"><?php echo esc_html__('Destaque', 'syndicate'); ?></h2>

        <?php
        $featured = new WP_Query([
            'posts_per_page' => 1,
            'category_name'  => 'destaque',
        ]);

        if ($featured->have_posts()) :
            while ($featured->have_posts()) : $featured->the_post(); ?>
                <?php get_template_part('views/posts/content'); ?>
            <?php endwhile;
            wp_reset_postdata();
        else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/resources/images/notfound.png"
                 alt="<?php echo esc_attr__('Sem destaque', 'syndicate'); ?>"
                 class="w-full h-64 object-cover rounded">
        <?php endif; ?>
    </section>

    <!-- 🗞️ Últimas notícias -->
    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-4"><?php echo esc_html__('Últimas Notícias', 'syndicate'); ?></h2>

        <div class="grid gap-6 md:grid-cols-2">
            <?php
            $recent = new WP_Query([
                'posts_per_page' => 4,
                'post__not_in'   => [$featured->post->ID ?? 0],
            ]);

            if ($recent->have_posts()) :
                while ($recent->have_posts()) : $recent->the_post(); ?>
                    <?php get_template_part('views/posts/content'); ?>
                <?php endwhile;
                wp_reset_postdata();
            else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/resources/images/notfound.png"
                     alt="<?php echo esc_attr__('Sem notícias', 'syndicate'); ?>"
                     class="w-full h-64 object-cover rounded">
            <?php endif; ?>
        </div>
    </section>

    <!-- 📢 Bloco de Anúncio -->
    <section class="my-12 text-center">
        <?php get_template_part('views/components/ad-block', null, ['size' => '728x90']); ?>
    </section>

    <!-- 🧠 Categoria: Tecnologia -->
    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-4"><?php echo esc_html__('Tecnologia', 'syndicate'); ?></h2>

        <div class="grid gap-6 md:grid-cols-3">
            <?php
            $tech = new WP_Query([
                'category_name'  => 'tecnologia',
                'posts_per_page' => 3,
            ]);

            if ($tech->have_posts()) :
                while ($tech->have_posts()) : $tech->the_post(); ?>
                    <?php get_template_part('views/posts/content'); ?>
                <?php endwhile;
                wp_reset_postdata();
            else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/resources/images/notfound.png"
                     alt="<?php echo esc_attr__('Sem posts em tecnologia', 'syndicate'); ?>"
                     class="w-full h-48 object-cover rounded">
            <?php endif; ?>
        </div>
    </section>

</main>

<?php get_footer(); ?>
