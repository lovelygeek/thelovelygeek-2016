<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

								<header class="article-header">
									<?php printf( '<span class="header-category">' . __('', 'bonestheme' ) . ' %1$s</span>' , get_the_category_list(', ') ); ?>
																
									<?php if ( has_post_thumbnail() ) {
									the_post_thumbnail( 'feat-card-img' );
									} else { ?>
									<img src="<?php bloginfo('template_directory'); ?>/library/images/no-feat-img.jpg" alt="<?php the_title(); ?>" />
									<?php } ?>									
									
									<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

								</header>

								<section class="entry-content cf">
									<p><i class="fa fa-clock-o" aria-hidden="true"></i> <em><?php echo do_shortcode('[rt_reading_time label="Reading Time:" postfix="minutes" postfix_singular="minute"]'); ?></em></p>
									<?php the_excerpt(); ?>
								</section>

								<footer class="article-footer cf">
									<div class="m-all t-1of3 d-1of3">
										<i class="fa fa-comments-o" aria-hidden="true"></i>
										&nbsp;<a href="<?php comments_link(); ?>"><?php comments_number( __( '<span>No</span> Comments', 'bonestheme' ), __( '<span>One</span> Comment', 'bonestheme' ), __( '<span>%</span> Comments', 'bonestheme' ) );?></a>
												
									</div>
									
									<div class="m-all t-1of3 d-1of3">
										<i class="fa fa-calendar" aria-hidden="true"></i>
										&nbsp;<?php the_time('F d, Y');?>
									</div>
									
									<div class="m-all t-1of3 d-1of3 last-col">
										<i class="fa fa-tags" aria-hidden="true"></i>
										&nbsp;<?php the_tags( '<span class="footer-tags tags"><span class="tags-title">' . __( '', 'bonestheme' ) . '</span> ', ', ', '</span>' ); ?>
									</div>									
								</footer>

							</article>

							<?php endwhile; ?>

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
												<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>


						</main>

					<?php get_sidebar(); ?>

				</div>

			</div>


<?php get_footer(); ?>
