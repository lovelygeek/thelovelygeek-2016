
              <?php
                /*
                 * This is the default post format.
                 *
                 * So basically this is a regular post. if you don't want to use post formats,
                 * you can just copy ths stuff in here and replace the post format thing in
                 * single.php.
                 *
                 * The other formats are SUPER basic so you can style them as you like.
                 *
                 * Again, If you want to remove post formats, just delete the post-formats
                 * folder and replace the function below with the contents of the "format.php" file.
                */
              ?>

              <article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">

					<header class="article-header">
						<?php printf( '<span class="header-category">' . __('', 'bonestheme' ) . ' %1$s</span>' , get_the_category_list(', ') ); ?>
													
						<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail( 'feat-card-img' );
						} else { ?>
						<img src="<?php bloginfo('template_directory'); ?>/library/images/no-feat-img.jpg" alt="<?php the_title(); ?>" />
						<?php } ?>									
						
						<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
	
	
					</header> <?php // end article header ?>

                <section class="entry-content cf" itemprop="articleBody">
	                <p><i class="fa fa-clock-o" aria-hidden="true"></i> <em><?php echo do_shortcode('[rt_reading_time label="Reading Time:" postfix="minutes"]'); ?></em></p>
	                
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
                </section> <?php // end article section ?>

                <footer class="article-footer">

					<div class="cf">
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
					</div>	
					
					<div class="nextposts cf">
						<div class="m-1of2 t-1of2 d-1of2"><p><?php previous_post_link(); ?>&nbsp;</p></div>
						<div class="m-1of2 t-1of2 d-1of2 last"><p class="alignright"><?php next_post_link(); ?></p></div>
					</div>	

                </footer> <?php // end article footer ?>
                
              </article> <?php // end article ?>
              
              <section class="hentry related">
              	<?php bones_related_posts(); ?>
              </section>	

               <?php comments_template(); ?>
