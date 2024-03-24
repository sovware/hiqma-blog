<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;
?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php the_content(); ?>

</div>