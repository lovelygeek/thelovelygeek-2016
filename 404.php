<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

					<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

						<article id="post-not-found" class="hentry cf">

							<header class="article-header">
								
								<h1>404 - Page Not Found</h1>
								<h2>¯\_(ツ)_/¯</h2>
								
							</header>

							<section class="entry-content">	

								<p>Sorry, but the page you requested has not been found.</p>

								<p>I'm not blaming you, but have you checked your address bar? There might be a typo in the URL. If there isn't, you could try searching my website for the content you were looking for:</p>

							</section>

							<section class="search">

									<p><?php get_search_form(); ?></p>

							</section>
							
							<section class="entry-content">

								<p>Alternatively, you can go to my <a href="<?php echo home_url(); ?>">home page</a> or <a href="<?php echo home_url(); ?>/archives">browse my archives</a>.</p>	

								<p>One last thing, if you're feeling so kind, please <a href="<?php echo home_url(); ?>/contact">tell me about this error</a>, so that I can fix it. Thank you!</p>
								
								<h3>Sitemap</h3>
								<ul>
								<?php wp_list_pages( array( 'title_li' => '' ) ); ?>
								<li><a href="<?php echo home_url(); ?>/humans.txt">Humans.txt</a></li>
								</ul>

							</section>

							<!--<footer class="article-footer"></footer>-->

						</article>

					</main>	

				</div>

			</div>

<?php get_footer(); ?>
