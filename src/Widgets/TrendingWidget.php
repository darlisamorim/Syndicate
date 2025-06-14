<?php
/**
 * Src: TrendingWidget
 * Local: src/Widget/TrendingWidget.php
 * Description: Widget personalizado c/ tendências atuais
 *
 * @package Syndicate
 */

namespace Syndicate\Widgets;

use WP_Widget;
use WP_Query;

class TrendingWidget extends WP_Widget {
    /**
     * Construtor: define ID base e nome do widget.
     */
    public function __construct() {
        parent::__construct(
            'syndicate_trending_widget',
            __('Trending Now', 'syndicate'),
            ['description' => __('Exibe posts populares ou recentes como Trending.', 'syndicate')]
        );
    }

    /**
     * Exibição do widget no frontend.
     */
    public function widget($args, $instance) {
        echo $args['before_widget'];

        if (!empty($instance['title'])) {
            echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        }

        $query = new WP_Query(['posts_per_page' => 5]);

        echo '<ul class="space-y-2">';
        while ($query->have_posts()) : $query->the_post();
            echo '<li><a href="' . get_permalink() . '" class="text-black hover:underline">' . get_the_title() . '</a></li>';
        endwhile;
        echo '</ul>';

        wp_reset_postdata();

        echo $args['after_widget'];
    }

    /**
     * Formulário de configuração no admin.
     */
    public function form($instance) {
        $title = !empty($instance['title']) ? $instance['title'] : __('Trending Now', 'syndicate');
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>">
                <?php _e('Título:', 'syndicate'); ?>
            </label>
            <input class="widefat"
                   id="<?php echo esc_attr($this->get_field_id('title')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('title')); ?>"
                   type="text"
                   value="<?php echo esc_attr($title); ?>">
        </p>
        <?php
    }
}

/**
 * Registro do widget.
 */
function register_trending_widget() {
    register_widget(TrendingWidget::class);
}
add_action('widgets_init', __NAMESPACE__ . '\\register_trending_widget');