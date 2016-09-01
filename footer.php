			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="wrap cf">

				<div class="m-all t-1of3 d-1of3 dribbble_shot">
					<h4>What I'm Working On</h4>
					<a href="https://dribbble.com/LovelyGeek" title="@LovelyGeek on dribbble" target="_blank"><img src="<?php the_field('dribbble_screenshot', 'option'); ?>" alt="@LovelyGeek on dribbble" /></a>
					<p>
						<i class="fa fa-dribbble fa-lg" aria-hidden="true"></i>
						<a href="https://dribbble.com/LovelyGeek" target="_blank">LovelyGeek on dribbble</a>
					</p>
				</div> 
								
				<div class="m-all t-1of3 d-1of3">
					<h4>Lovely Grams</h4>
					<?php echo do_shortcode('[jr_instagram id="2"]'); ?>
					<p>
						<i class="fa fa-instagram fa-lg" aria-hidden="true"></i>
						<a href="https://www.instagram.com/thelovelygeek/" target="_blank">TheLovelyGeek on Instagram</a>
					</p>
				</div>
					
				<div class="m-all t-1of3 d-1of3 policies">	
					<h4>Policies</h4>
					<a href="<?php echo home_url(); ?>/a-bloggers-disclaimer/">Blogger's Disclaimer</a><br />
					<a href="<?php echo home_url(); ?>/privacy-policy">Privacy Policy</a></br >
					<a href="<?php echo home_url(); ?>/terms-conditions">Terms &amp; Conditions</a>
					
					<h4>Copyright</h4>
					<span class="source-org copyright"><a href="http://www.whatiscopyright.org/" target="_blank" title="What is copyright?">&copy;</a> <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</span>
					<br />All rights reserved.
					<br /><a href="<?php echo home_url(); ?>/humans.txt">Crafted with &hearts; in California.</a>
				</div>	

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->