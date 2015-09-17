<?php

    $args = array( 'post_type' => 'orbit_slider' );
    $loop = new WP_Query( $args );
?>

<div class="row">
    <div class="large-12 columns">
        <ul id="featured1" data-orbit data-options="timer_speed:5000;">
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <li>
                        <?php the_post_thumbnail( ); ?>
                        <div class="orbit-caption">
                            <?php the_content() ?>
                        </div>
                    </li>

                <?php endwhile; ?>
        </ul>
    </div>
</div>