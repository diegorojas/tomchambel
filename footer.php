		<footer class="site-footer section-inner">
			<div class="metade credits">
				<p><a href="<?php echo esc_url( home_url() ); ?>" class="site-name"><?php bloginfo( 'name' ); ?></a> &copy; <?php echo date( 'Y' ); ?></p>
			</div>
			<div class="metade menu">
				<?php 
				if ( has_nav_menu( 'social-menu' ) ) : 
					wp_nav_menu( array( 
						'theme_location' 	=> 'social-menu',
					) ); 
				
				endif;
				?>
			</div>

		</footer> <!-- footer -->
	    
	    <?php wp_footer(); ?>
	        
	</body>
</html>