<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;

get_header();

Helper::setPostViews(get_the_id());
?>

<div class="blog-details-wrapper">
    <div class="blog-banner-area__shape1"><img src="<?php echo Helper::get_svg('shapes/shape-rounded.svg'); ?>" alt="blog left design shape" height="293" width="585"></div>
	<div class="blog-banner-area__shape2"><?php echo Helper::the_svg("shapes/shape-circle-cut"); ?></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">

                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        ?>
                        <?php if (has_post_thumbnail()) { ?>
                            <div class="blog-details-thumbnail">
                                <?php the_post_thumbnail('single-blog'); ?>
                            </div>
                        <?php } ?>
                        <article class="blog-details">

                            <?php do_action( 'theme_single_post_table_of_content', get_the_content() ); ?>
                            
                            <div class="blog-details-content">

                                <h1><?php the_title(); ?></h1>

                                <?php get_template_part('template-parts/content-meta'); ?>

                                <div class="blog-body"><?php the_content(); ?></div>

                                <div class="blog-tags"><?php echo get_the_tag_list(' '); ?></div>

                                <?php get_template_part('template-parts/social-share'); ?>

                                <?php get_template_part('template-parts/author-bio'); ?>

                            </div>
                            <div class="blog-share-top">
                                <?php get_template_part('template-parts/social-share'); ?>
                            </div>
                            <?php get_template_part('template-parts/related-blogs');
                            
                            if (comments_open() || get_comments_number()) {
                                comments_template();
                            }
                            ?>

                        </article>
                        <?php
                    }
                }
                else {
                    get_template_part('template-parts/content', 'none');
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();