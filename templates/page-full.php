<?php
/*
Template Name: Full Width
*/
get_header(); ?>
<div class="row">
	<div class="small-12 large-12 columns" role="main">


      <?php get_template_part( 'parts/orbit-slider' );     ?>

<!--

-->
<!--
    <hr>

      <div class="row">
        <div class="small-6 large-3 columns" role="main">
          <div class="person-box">
            <img src="<?php /* echo get_template_directory_uri()*/?>/assets/img/avatar.jpg" alt="">
            <div class="details">
              <p class="full-name">
                John Brown
              </p>
              <h6>Resposibilities</h6>
              <p class="responsibilities">
                Lorem Ipsum <br>
                Lorem Ipsum
              </p>
              <h6>Profiles</h6>
              <p class="profiles">
                <a href="#"><i class="fa fa-facebook-official"></i></a>
                <a href="#"><i class="fa fa-google-plus-square"></i></a>
                <a href="#"><i class="fa fa-xing-square"></i></a>
              </p>
            </div>
          </div>
        </div>
      </div>

-->



	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h2 class="entry-title"><?php the_title(); ?></h2>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
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

<?php get_template_part( 'parts/marketing-boxes' ); ?>



<?php get_footer(); ?>
