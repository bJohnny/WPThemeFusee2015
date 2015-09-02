<?php
/*
Template Name: Full Width
*/
get_header(); ?>
<div class="row">
	<div class="small-12 large-12 columns" role="main">


          <ul id="featured1" data-orbit data-options="timer_speed:5000;">
            <li>
              <img src="http://foundation.zurb.com/docs/assets/img/examples/satelite-orbit.jpg" alt=""/>
              <div class="orbit-caption">
                Caption One. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
              </div>
            </li>
            <li>
              <img src="http://foundation.zurb.com/docs/assets/img/examples/andromeda-orbit.jpg" alt=""/>
              <div class="orbit-caption">
                Caption Two. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
              </div>
            </li>
            <li>
              <img src="http://foundation.zurb.com/docs/assets/img/examples/launch-orbit.jpg" alt=""/>
              <div class="orbit-caption">
                Caption Three. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
              </div>
            </li>
          </ul>
    <hr>

      <div class="row">
        <div class="small-6 large-3 columns" role="main">
          <div class="person-box">
            <img src="<?php echo get_template_directory_uri()?>/assets/img/avatar.jpg" alt="">
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
                <a href="#">XING</a>
                <a href="#">Facebook</a>
              </p>
            </div>
          </div>
        </div>
      </div>

	<?php /* Start loop */ ?>
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

<div class="tiles-container">
  <div class="row">
    <div class="small-12 large-4 columns">
      <div class="marketing-box">
        <div class="icon">
          <i class="fa fa-female"></i>
        </div>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam cupiditate distinctio, eius id modi nobis quia!
      </div>

    </div>
    <div class="small-12 large-4 columns">
      <div class="marketing-box">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis dolor fugiat ipsam maxime minus quod rerum.
      </div>
    </div>
    <div class="small-12 large-4 columns">
      <div class="marketing-box">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur cum expedita officia voluptatum? Asperiores, eos, illum!
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
