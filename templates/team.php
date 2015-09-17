<?php
/*
Template Name: Team Full Width
*/
get_header(); ?>
<div class="row">
	<div class="small-12 large-12 columns" role="main">











	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h2 class="entry-title"><?php the_title(); ?></h2>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>

          <?php
            $args = array( 'post_type' => 'team');
            $loop = new WP_Query( $args );
          ?>

          <div class="row">
            <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
            <?php


              $image              =   get_field('profile_image');
              if(!$image) {
                $image = '';
                  //
              }
              else {
                $image = get_field('profile_image');
              }

              $full_name          =   get_field('full_name');
              $responsibilities   =   get_field('responsibilities');
              $email              =   get_field('email');
              $facebook_profile   =   get_field('facebook_profile');
              $google_profile     =   get_field('google_profile');
              $xing_profile       =   get_field('xing_profile');

              ?>

            <div class="small-6 large-3 columns" role="main">
              <div class="person-box">
                <img src="<?php echo $image; ?>" alt="">
                <div class="details">
                  <p class="full-name">
                    <?php echo $full_name; ?>
                  </p>
                  <h6>Resposibilities</h6>
                  <p class="responsibilities">
                    <?php echo $responsibilities;?>
                  </p>
                  <h6>Profiles</h6>
                  <p class="profiles">

                      <?php if ( $email ) : ?>
                        <a href="mailto:<?php echo $email; ?>"><i class="fa fa-envelope"></i></a>
                      <?php endif;?>

                      <?php if ( $facebook_profile ) : ?>
                        <a href="<?php echo $facebook_profile; ?>"><i class="fa fa-facebook-official"></i></a>
                      <?php endif; ?>

                      <?php if ( $google_profile ) : ?>
                        <a href="<?php echo $google_profile; ?>"><i class="fa fa-google-plus-square"></i></a>
                      <?php endif; ?>

                      <?php if ( $xing_profile ) : ?>
                        <a href="<?php echo $xing_profile; ?>"><i class="fa fa-xing-square"></i></a>
                      <?php endif; ?>
<!--
                    <a href="#"><i class="fa fa-google-plus-square"></i></a>
                    <a href="#"><i class="fa fa-xing-square"></i></a>
                    -->
                  </p>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
          </div>

			<footer>
				<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php comments_template(); ?>
		</article>
	<?php endwhile; // End the loop ?>
      <hr>

	</div>
</div>


<?php get_footer(); ?>
