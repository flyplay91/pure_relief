<?php

/**
 * Template Name: Blog Post Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main class="post-page">
    <div class="post-page__inner">
        <div class="post-left-bar">
            <div class="post-left-bar--item">
                <h2>COLLECTIONS</h2>
                <ul>
                    <?php
                    $categories = get_categories();
                    foreach ($categories as $category) {
                        echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
                    }
                    ?>
                </ul>
            </div>

            <div class="post-left-bar--item">
                <h2>Recommended</h2>

                <?php if (have_rows('recommendation_group')) :
                    $recomendation_group = get_field('recommendation_group');
                    while (have_rows('recommendation_group')) : the_row(); ?>
                        <div class="recommended-posts">
                            <?php if (have_rows('post_repeater')) :
                                while (have_rows('post_repeater')) : the_row();
                                    $post_item = get_sub_field('post_item');
                                    $post_id = $post_item->ID;
                                    $post_title = get_the_title($post_id);
                                    $post_link = get_post_permalink($post_id);
                                    $categories = get_the_category($post_id);

                            ?>
                                    <div class="recommended-post">
                                        <div class="widget-post-thumb">
                                            <a href="<?php echo $post_link; ?>">
                                                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post_id)) ?>">
                                            </a>
                                        </div>
                                        <div class="widget-post-description">
                                            <div class="widget-blog-title">
                                                <a href="<?php echo $post_link; ?>">
                                                    <?php echo $post_title; ?>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                            <?php endwhile;
                            endif; ?>
                        </div>
                <?php endwhile;
                endif; ?>
            </div>
        </div>

        <div class="post-content">
            <div class="post-breadcrumb"></div>
            <div class="post-content__inner">
                <h1><?php the_title(); ?></h1>
                <span class="post-author">
                    <?php
                    $author_id = $post->post_author;
                    the_author_meta('user_nicename', $author_id);
                    ?>
                </span>
                <span class="post-date">
                    <?php echo get_the_date(); ?>
                </span>
                <div class="post-image">
                    <?php echo the_post_thumbnail(); ?>
                </div>

                <div class="post-content">
                    <?php
                    the_content();
                    ?>
                </div>
            </div>
        </div>

        <div class="post-right-bar"></div>
    </div>
</main>

<?php get_footer();
