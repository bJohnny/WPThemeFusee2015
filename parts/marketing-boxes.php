<?php
    $args = array( 'post_type' => 'marketing-box' );
    $loop = new WP_Query( $args );
?>
<div class="tiles-container">
    <div class="row">
        <?php

        while ( $loop->have_posts() ) : $loop->the_post();
            $icon = get_field( 'fa_icon' );     // returns html class
            $text = get_field( 'text' );
            $button_text = get_field( 'button_text' );
            $button_link = get_field( 'page_link' ) ? get_field( 'page_link' ) : get_field( 'external link' );
            ?>

        <div class="small-12 large-4 columns">
            <div class="marketing-box">
                <div class="icon">
                    <i class="fa <?php echo $icon; ?>"></i>
                </div>
                <p><?php echo $text; ?></p>
                <div class="text-center">
                    <h4><a class="action-link" href="<?php echo $button_link; ?>"><?php echo $button_text; ?> <i class="fa fa-caret-right"></i></a></h4>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</div>