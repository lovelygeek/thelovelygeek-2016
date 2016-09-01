<?php
/*
 Template Name: Cast Page
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>

								</header> <?php // end article header ?>

								<section class="entry-content cf" itemprop="articleBody">
									
									<?php the_content(); ?>
									
									<div class="cf">
										<?php if( get_field('whos_who') ): ?>
										   <?php while( has_sub_field('whos_who') ): 
										    $image = get_sub_field('photo');
										   ?>
										
											<div class="m-all t-all d-1of2 cast">
											<img src="<?php echo $image['sizes']['feat-card-img'];?>" alt="<?php the_sub_field('name'); ?>">
											<h4><?php the_sub_field('name'); ?></h4>
											<?php the_sub_field('small_bio'); ?>
											</div>
										
										<?php endwhile; ?><?php endif; ?>
									</div>	
									
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