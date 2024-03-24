<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

get_header();
?>

<div class="blog-content-area site-search">
    <div class="container">
        <?php

        get_template_part('template-parts/archive', 'banner');

        get_template_part('template-parts/blogs');

        ?>
    </div>
</div>

<?php
get_footer();