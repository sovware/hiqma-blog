<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

global $wp_query;

if (!$wp_query) {
    $wp_query = $GLOBALS['wp_query'];
}

// Don't print empty markup if there's only one page.

if ($wp_query->max_num_pages < 2) {
    return;
}

$paged = get_query_var('paged') ? intval(get_query_var('paged')) : 1;
$pagenum_link = html_entity_decode(get_pagenum_link());
$query_args = array();
$url_parts = explode('?', $pagenum_link);

if (isset($url_parts[1])) {
    wp_parse_str($url_parts[1], $query_args);
}

$pagenum_link = remove_query_arg(array_keys($query_args), $pagenum_link);
$pagenum_link = trailingslashit($pagenum_link) . '%_%';

$format = $GLOBALS['wp_rewrite']->using_index_permalinks() && !strpos($pagenum_link, 'index.php') ? 'index.php/' : '';
$format .= $GLOBALS['wp_rewrite']->using_permalinks() ? user_trailingslashit('page/%#%', 'paged') : '?paged=%#%';

$links = paginate_links(array(
    'base' => $pagenum_link,
    'format' => $format,
    'total' => $wp_query->max_num_pages,
    'current' => $paged,
    'mid_size' => 3,
    'add_args' => array_map('urlencode', $query_args),
    'prev_text' => wpwax_icon('uil uil-angle-left', false),
    'next_text' => wpwax_icon('uil uil-angle-right', false),
));

echo '<div class="col-md-12"><div class="pagination justify-content-center">' . $links . '</div>';
