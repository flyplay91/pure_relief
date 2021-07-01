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
<!--- Template Parts > blog.php -->
<main id="main" class="blog-page">

  <?php global $current_user; wp_get_current_user(); ?>
  
  <div class="blog-sidebar">
    <?php dynamic_sidebar( 'sidebar-blog' ); ?>
  </div>
  
</main>

<?php
get_footer();