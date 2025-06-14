<?php
/**
 * Src: GeneralHelpers
 * Local: src/Helpers/GeneralHelpers.php
 * Description: Funções utilitárias do tema
 *
 * @package SyndicateNews
 */

namespace Syndicate\Helpers;

class GeneralHelpers {

    /**
     * Limita o excerpt (resumo) a um número definido de palavras.
     *
     * @param int $limit Número de palavras desejadas.
     * @return string Resumo limitado.
     */
    public static function excerpt_limit($limit = 20) {
        return wp_trim_words(get_the_excerpt(), $limit, '...');
    }

    /**
     * Retorna a data formatada de um post.
     *
     * @param string $format Formato da data. Ex: 'd M Y'
     * @return string Data formatada.
     */
    public static function formatted_date($format = 'd M Y') {
        return get_the_date($format);
    }

    /**
     * Retorna a imagem destacada do post ou vazio se não existir.
     *
     * @param string $size Tamanho da imagem (ex: 'medium', 'large').
     * @param string $class Classes adicionais para o elemento <img>.
     * @return string HTML da imagem destacada ou vazio.
     */
    public static function get_thumbnail($size = 'medium_large', $class = '') {
        if (has_post_thumbnail()) {
            return get_the_post_thumbnail(null, $size, ['class' => $class]);
        }

        return '';
    }
}