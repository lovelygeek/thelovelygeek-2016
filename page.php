<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">
									<?php if ( has_post_thumbnail() ) {
									the_post_thumbnail( 'feat-card-img' );
									} else { ?>
									<img src="<?php bloginfo('template_directory'); ?>/library/images/no-feat-img.jpg" alt="<?php the_title(); ?>" />
									<?php } ?>	
									
									<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>

								</header> <?php // end article header ?>

								<section class="entry-content cf" itemprop="articleBody">
									<?php
										// the content (pretty self explanatory huh)
										the_content();

										/*
										 * Link Pages is used in case you have posts that are set to break into
										 * multiple pages. You can remove this if you don't plan on doing that.
										 *
										 * Also, breaking content up into multiple pages is a horrible experience,
										 * so don't do it. While there are SOME edge cases where this is useful, it's
										 * mostly used for people to get more ad views. It's up to you but if you want
										 * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
										 *
										 * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
										 *
										*/
										wp_link_pages( array(
											'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
											'after'       => '</div>',
											'link_before' => '<span>',
											'link_after'  => '</span>',
										) );
									?>
									
									<?php /* Only displays on the specific 'NEW READER' page. */ if (is_page('new-reader')) { ?> 
										<?php if( have_rows('social_media_links', 'option') ): ?>
									
										    <?php while( have_rows('social_media_links', 'option') ): the_row(); ?>
										
										        <a href="<?php the_sub_field('profile_link'); ?>"><i class="fa <?php the_sub_field('social_icon'); ?> fa-2x" style="color:<?php the_sub_field('icon_color'); ?>;"></i></a>&nbsp;&nbsp;
										
										    <?php endwhile; ?>
									
										<?php endif; ?>
									<?php } ?>
									
								</section> <?php // end article section ?>

								<footer class="article-footer cf">

								</footer>

								

							</article>

							<?php endwhile; endif; ?>

						</main>

						<?php get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
