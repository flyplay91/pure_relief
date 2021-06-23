<?php if( have_rows('hero_group')) :
        $home_hero_group = get_field('hero_group');
        $home_slider_desktop = $home_hero_group['desktop_slider'];
        $home_slider_mobile = $home_hero_group['mobile_slider'];
        while ( have_rows('hero_group')): the_row(); ?>
        
        <section class="home-hero desktop">     
             <?php echo do_shortcode("[rev_slider alias='$home_slider_desktop']"); ?>
        </section>

        <section class="home-hero mobile">     
            <?php echo do_shortcode("[rev_slider alias='$home_slider_mobile']"); ?>    
        </section>
       
        <?php endwhile;
                endif; ?>