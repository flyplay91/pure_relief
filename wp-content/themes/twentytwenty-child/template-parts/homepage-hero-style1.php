<!--- Homepage Hero - Style 1-->
<?php if (have_rows('hero_group')) :
    $home_hero_group = get_field('hero_group');
    $home_hero_image = $home_hero_group['background_image']['url'];
    while (have_rows('hero_group')) : the_row(); ?>

        <div class="hero-style1" style="background-image: url(<?php echo $home_hero_image ?>)">
            <div class="hero-style1-wrapper">
                <div class="style1-left">
                    <h2>
                        <a href="/cbd-peach-gummies/" title="CBD Peach Gummies">
                            Get a Taste of Summer<br>
                            With Our New<br>
                            CBD Peach Gummies
                        </a>
                    </h2>

                    <ul>
                        <li><i aria-hidden="true" class="fas fa-check-circle"></i> New Peachy Taste</li>
                        <li><i aria-hidden="true" class="fas fa-check-circle"></i> All the Benefits of CBD</li>
                        <li><i aria-hidden="true" class="fas fa-check-circle"></i> 100% All Natural</li>
                    </ul>

                    <a href="/cbd-peach-gummies/" title="CBD Peach Gummies" class="hero-button-style1">
                        Shop Now
                    </a>

                </div>

                <!-- <div class="style1-right">
                    <a href="/cbd-peach-gummies/" title="CBD Peach Gummies">
                        <div class="style-right-img">

                        </div>
                    </a>
                </div> -->
            </div>
        </div>

        <?php endwhile;
    endif; ?>
<!--- End Homepage Hero - Style 1-->