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


	<?php /* Start loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
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

	</div>
</div>

<?php get_footer(); ?>
