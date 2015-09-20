<?php
/*
Template Name: Full Width
*/
get_header(); ?>
<div class="row">
	<div class="small-12 large-12 columns" role="main">

      <?php if(get_field('display_slider')) : ?>
      <?php get_template_part( 'parts/orbit-slider' );     ?>
      <?php endif; ?>

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
				<p><?php /*the_tags();*/ ?></p>
			</footer>
			<?php /*comments_template();*/ ?>
		</article>
	<?php endwhile; // End the loop ?>
      <hr>

	</div>
</div>

<?php if(get_field('display_marketing_boxes')) : ?>
  <?php get_template_part( 'parts/marketing-boxes' ); ?>
<?php endif; ?>




<?php get_footer(); ?>
