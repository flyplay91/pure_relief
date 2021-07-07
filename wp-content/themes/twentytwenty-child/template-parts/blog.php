<?php
/**
 * Template Name: Blog Template
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */

get_header();
?>

<main class="blog-page">
    <div class="blog-page__inner">
        <div class="blog-sidebar">
            <div class="blog-sidebar-item blog-sidebar-category">
                <h2>Learn More</h2>
                <ul>
                <?php
                    $categories = get_categories();
                    foreach($categories as $category) {
                        echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
                    }
                ?>
                </ul>
            </div>

            <div class="blog-sidebar-item blog-sidebar-tag">
                <h2>Trending Topics</h2>
                
                <?php
                    $tags = get_tags();
                    $html = '<div class="post_tags">';
                    foreach ( $tags as $tag ) {
                        $tag_link = get_tag_link( $tag->term_id );
                                
                        $html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
                        $html .= "{$tag->name}</a>";
                    }
                    $html .= '</div>';
                    echo $html;
                ?>
            </div>

            <div class="blog-sidebar-item blog-sidebar-recommendation">
                <h2>Recommended Articles</h2>

                <?php if( have_rows('recomendation_group')) :
                    $recomendation_group = get_field('recomendation_group');
                    while ( have_rows('recomendation_group')): the_row(); ?>
                    <div class="recommended-posts">
                        <?php if( have_rows('post_repeater') ) :
                            while( have_rows('post_repeater') ) : the_row();
                            $post_item = get_sub_field('post_item');
                            $post_id = $post_item->ID;
                            $post_title = get_the_title($post_id);
                            $post_link = get_post_permalink($post_id);
                            $categories = get_the_category($post_id);
                            
                            ?>
                                <div class="recommended-post">
                                    <div class="widget-post-thumb">
                                        <a href="<?php echo $post_link; ?>">
                                            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post_id )) ?>">
                                        </a>
                                    </div>
                                    <div class="widget-post-description">
                                        <div class="widget-blog-cat">
                                            <?php
                                                foreach( $categories as $category ) {
                                                    echo $category->name.'<br>';
                                                }
                                            ?>
                                        </div>
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

        <div class="blog-wrapper">
            <?php if( have_rows('hero_group')) :
                $hero_group = get_field('hero_group');
                $hero_title = $hero_group['title'];
                $hero_link = $hero_group['link'];
                $hero_image = $hero_group['image']['url'];
                $hero_excerpt = $hero_group['excerpt'];
                while ( have_rows('hero_group')): the_row(); ?>
                    <section class="featured-post">
                        <a href="<?php echo $hero_link ?>">
                            <div class="featured-wrap">
                                <div class="featured-content">
                                    <div class="blog-cat featured-cat">Featured Article</div>
                                    <div class="blog-title featured-title"><?php echo $hero_title ?></div>
                                    <div class="the-excerpt"><?php echo $hero_excerpt ?></div>
                                </div>
                                <div class="image-container">
                                    <div class="featured-image cover image-right" style="background-image: url(<?php echo $hero_image ?>)"></div>
                                </div>
                            </div>
                        </a>
                    </section>
                <?php endwhile;
            endif; ?>

            <section class="blog-post-list">
                <div class="blog-post-list__inner">
                    <?php
                        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

                        $post_query = new WP_Query( array(
                            'post_type'      => 'post',
                            'posts_per_page' => 12,
                            'post_status'    => 'publish',
                            'post_parent'    => null,
                            'orderby' => 'date',
                            'order'   => 'DESC',
                            'paged' => $paged
                        ) );
                        
                        while($post_query->have_posts()) : 
                            $post_query->the_post();	
                        ?>
                            <div class="blog-post-item">
                                <div class="post-item-image">
                                    <?php echo the_post_thumbnail(); ?>
                                </div>
                                
                                <div class="post-item-content">
                                    <div class="blog-cat">
                                        <?php
                                            $categories = get_the_category();
                                            if ( ! empty( $categories ) ) { ?>
                                                <ul>
                                                    <?php
                                                        foreach ($categories as $cat) {
                                                            echo "<li>". $cat->name ."</li>";
                                                        }
                                                    ?>
                                                </ul>
                                            <?php
                                            }
                                        ?>
                                    </div>
                                    
                                    <a class="post-item-title" href="<?php the_permalink(); ?>">
                                        <?php echo the_title() ?>
                                    </a>
                                    
                                    <a class="button readmore-button" href="<?php the_permalink(); ?>">Read More</a>
                                </div>
                            </div>
                        <?php
                        endwhile;
                    ?>
                </div>
            </section>
            <?php
        if (function_exists("pagination")) {
            pagination($post_query->max_num_pages);
        } 
        ?>
        </div>
        
    </div>

        
</main>

<?php get_footer();

