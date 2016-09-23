<?php get_header(); ?>

    <section class="herounit hero-home">
        <div class="herounit-content">
                <?php while ( have_posts() ) : the_post();
                     $home_hero_title= get_field('home_hero_title');
                     $home_hero_subtitle= get_field('home_hero_subtitle');
                     $get_involved_button= get_field('get_involved_button');
                ?>
                    <h1 class="home-hero-midas"><?php echo $home_hero_title ?></h1>
                    <h2><?php echo $home_hero_subtitle ?></h2>
                    <a class = "button" href = "<?php echo home_url(); ?>/get-involved" > <?php echo $get_involved_button ?> </a>
                <?php endwhile; // end of the loop. ?>
        </div>
    </section><!-- Hero -->

    <section class = "home-season">
        <div class = "site-content">
            <?php while ( have_posts() ) : the_post();
                     $season_year = get_field('season_year');
                     $between_seasons=get_field('between_seasons')
                ?>
                <div class ="home-season-container">
                    <h2><?php echo $season_year?> </h2>
                    <?php if( get_field('no_current_season') ): ?>                                   <!-- init if check for current season -->
                                <p class="between-seasons"><?php echo $between_seasons?></p>
                    <?php else: ?>
                        <?php if( have_rows('season_plays') ):
                            $i = False;?>                                                                            <!-- init if check for season plays, count -->
                            <?php while( have_rows('season_plays') ): the_row();
                                // vars
                                $image = get_sub_field('season_play_image');
                                $name = get_sub_field('season_play_name');
                                $playwright = get_sub_field('season_play_playwright');
                                $director = get_sub_field('season_play_director');
                                $size = 'thumbnail';
                                $i = !$i;
                            ?>                                                                                              <!-- init while loop season plays -->
                                <article class="<?php if($i) {echo "image-left";} else {echo "image-right";}?>">    <!-- switch image sides alternatingly -->
                                    <?php if($image); {
                                            echo wp_get_attachment_image( $image, $size );
                                        } ?>
                                    <aside>
                                        <h3><?php echo $name; ?></h3>
                                        <p>by <span><?php echo $playwright; ?></span></p>
                                        <p>directed by <span> <?php echo $director; ?></span></p>
                                    </aside>
                                    <div style="clear:both;"></div>
                                </article>
                            <?php endwhile; ?>                                                                 <!-- end while loop season plays -->
                        <?php endif; ?>                                                                           <!-- end if check for season plays, count -->
                    <?php endif; ?>                                                                               <!-- end if check for current season -->

                </div>
            <?php endwhile; // end of the loop. ?>
        </div>
    </section>

<section class = "home-short-order">
    <div class="site-content">
        <div class = "left-hand-box">
            <p>HI I AM TESTING!</p>
        </div>


    </div>
</section>

<section class = "home-short-order">
    <div class="site-content">
        <div class = "left-hand-box">
            <p>Box Number 2!</p>
        </div>


    </div>
    <div style="clear:both;"></div>
</section>

<?php get_footer(); ?>
