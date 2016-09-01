				<div id="sidebar1" class="sidebar m-all t-1of3 d-2of7 last-col cf" role="complementary">
					<div class="widget widget_about">
						<img src="<?php the_field('profile_picture', 'option'); ?>" alt="Hi, I'm Cristina!" class="avatar aligncenter" />
						<p><?php the_field('intro_text', 'option'); ?></p>
					</div>
					<p class="widget-cta"><a href="<?php echo home_url(); ?>/about">Learn More</a></p>				
				
					<div class="widget_subscribe">
						<p style="text-align:center;"><img src="<?php echo get_template_directory_uri(); ?>/library/images/icon-envelope.svg" alt="subscribe" /></p>
						<h4 class="widgettitle">Subscribe</h4>
						Get my latest posts delivered straight to your inbox. Enter your email below.
						<?php echo do_shortcode('[gravityform id="3" title="false" description="false"]'); ?>
					</div>				
				
					<div class="widget">
						<h4 class="widgettitle">Popular Posts</h4>
						<?php
						    if (function_exists('wpp_get_mostpopular'))
						        wpp_get_mostpopular('limit=5&range=all&order_by=views&post_type=post&thumbnail_width=50&thumbnail_height=50&stats_views=0&post_html="<li><span class="thumb">{thumb}</span> <span class=title><a href=\'{url}\'>{text_title}</a></span></li>"');
						?>					
					</div>
					
					<div class="widget">
						<h4 class="widgettitle">Series</h4>
						<ul class="segments">
							<li><a href="<?php echo home_url(); ?>/tag/week-in-review/"><img src="<?php echo get_template_directory_uri(); ?>/library/images/week-in-review.png" alt="Week in Review" /></a></li>
							<li><a href="<?php echo home_url(); ?>/tag/whats-in-my-beauty-bag/"><img src="<?php echo get_template_directory_uri(); ?>/library/images/in-my-beauty-bag.png" alt="What's in My Beauty Bag" /></a></li>
							<li><a href="<?php echo home_url(); ?>/tag/my-favorite-things/"><img src="<?php echo get_template_directory_uri(); ?>/library/images/favorite-things.png" alt="My Favorite Things" /></a></li>
							<li><a href="<?php echo home_url(); ?>/tag/year-in-review/"><img src="<?php echo get_template_directory_uri(); ?>/library/images/year-in-review.png" alt="Year in Review" /></a></li>
							<li><a href="<?php echo home_url(); ?>/tag/a-day-in-the-life/"><img src="<?php echo get_template_directory_uri(); ?>/library/images/day-in-the-life.png" alt="A Day in the Life" /></a></li>
							<li><a href="<?php echo home_url(); ?>/tag/the-january-cure/"><img src="<?php echo get_template_directory_uri(); ?>/library/images/january-cure.png" alt="The January Cure" /></a></li>
						</ul>
					</div>
									
					<div class="widget">
						<h4 class="widgettitle">Browse By...</h4>
						
						
						<!-- category -->
						<?php wp_dropdown_categories( 'show_option_none=SELECT CATEGORY' ); ?>
							<script type="text/javascript">
								<!--
								var dropdown = document.getElementById("cat");
								function onCatChange() {
									if ( dropdown.options[dropdown.selectedIndex].value > 0 ) {
										location.href = "<?php echo esc_url( home_url( '/' ) ); ?>?cat="+dropdown.options[dropdown.selectedIndex].value;
									}
								}
								dropdown.onchange = onCatChange;
								-->
							</script>
						
						<!-- month -->
						<select name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
							<option value=""><?php echo esc_attr( __( 'SELECT MONTH' ) ); ?></option> 
							<?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option', 'show_post_count' => 1 ) ); ?>
						</select>
					</div>
					<p class="widget-cta"><a href="<?php echo home_url(); ?>/archives">View the Archives</a></p>
					
					<div class="widget_search">
						<h4 class="widgettitle">Search</h4>
						<label for="s" class="screen-reader-text"><p class="text-center"><?php _e('Looking for something?','bonestheme'); ?></p></label>
						<?php get_search_form(); ?>
					</div>
				</div>
