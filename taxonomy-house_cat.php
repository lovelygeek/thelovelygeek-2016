<?php
/*
 * CUSTOM POST TYPE TAXONOMY TEMPLATE for HOUSE
 *
 * This is the custom post type taxonomy template. If you edit the custom taxonomy name,
 * you've got to change the name of this template to reflect that name change.
 *
 * For Example, if your custom taxonomy is called "register_taxonomy('shoes')",
 * then your template name should be taxonomy-shoes.php
 *
 * For more info: http://codex.wordpress.org/Post_Type_Templates#Displaying_Custom_Taxonomies
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
						
							<div class="hentry">
							<?php
							the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="taxonomy-description">', '</div>' );
							?>
							
							<div class="house-gallery">
								<p>Click the thumbnails below to learn more about each room and see more photos!</p>
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							
								<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
									<?php if ( has_post_thumbnail() ) {
									the_post_thumbnail( 'gallery-200' );
									} else { ?>
									<img src="http://placehold.it/200x200" alt="<?php the_title(); ?>" />
									<?php } ?>	
								</a>		

							<?php endwhile; ?>
							 
							</div>
									<?php bones_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the archive.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>
							</div>
						</main>

					<?php get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
