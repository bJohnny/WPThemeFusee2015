<?php
/**
 * Template Name: Fusee Examples
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
			</article>

			<?php
			$args = array( 'post_type' => 'fusee-examples' );
			$loop = new WP_Query( $args );


			?>
			<div class="row">
				<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
					<?php
					$image = get_field( 'image' );
					$url_exec_file = get_field( 'standalone_executable' );
					$url_android_apk = get_field( 'android_version' );
					$url_html5_version = get_field( 'html5_version' );
					$os_support = get_field( 'os_support' );

					?>
					<article id="post-<!-- id -->" class="fusee-example"><!-- id -->
						<div class="entry-content">
							<?php if( $image ) :?>
								<figure>
									<img class="size-full wp-image-904 alignleft" src="<?php echo $image; ?>" width="360">
								</figure>
							<?php endif; ?>
							<header>
								<h3 class="left"><?php the_title(); ?></h3>
								<div class="download-icons">
									<?php foreach( $os_support as $os ) : ?>
										<?php
										$href = $url_exec_file;
										$fa_icon = $os;

										switch($os){
											case 'html5':
												$href = $url_html5_version;
												break;
											case 'android':
												$href = $url_android_apk;
												break;
											case 'mac':
												$fa_icon = 'apple';
												break;
										}
										?>

										<a href="<?php echo $href; ?>" class="download-icon">
											<i class="fa fa-<?php echo $fa_icon; ?> fa-2x"></i>
										</a>
									<?php endforeach; ?>
							</header>

							<?php the_content() ?>
						</div>
						<!-- content -->
					</article>
					<hr>
				<?php endwhile ?>
			</div>
		<?php endwhile; // End the loop ?>


	</div>
</div>





	<?php get_footer(); ?>
