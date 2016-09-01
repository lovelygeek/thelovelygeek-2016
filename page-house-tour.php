<?php
/*
 Template Name: House Tour Page
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
							
							<h1 class="page-title"><?php the_title(); ?></h1>


<?php if( have_rows('house_listing') ): ?>

	<?php while( have_rows('house_listing') ): the_row(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

			<header class="article-header">
				

				<span class="header-category">
					<?php the_sub_field('years_in_house'); ?>
				</span>

				
				<a href="<?php the_sub_field('category_link'); ?>"><img src="<?php the_sub_field('house_featured_image'); ?>" alt="<?php the_sub_field('house_name'); ?>" /></a>
																		
				
				<h1 class="h2 entry-title"><a href="<?php the_sub_field('category_link'); ?>"><?php the_sub_field('house_name'); ?></a></h1>


			</header>

			<section class="entry-content cf">
				<?php the_sub_field('description'); ?>
				
				<p><a href="<?php the_sub_field('category_link'); ?>" class="pink-btn">View More</a></p>
			</section>

<!-- 			<footer class="article-footer cf"></footer> -->

		</article>


	<?php endwhile; ?>	

<?php endif; ?>


						</main>

						<?php get_sidebar(); ?>

				</div>

			</div>


<?php get_footer(); ?>
