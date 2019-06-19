<?php 

get_header('single');

if ( have_posts() )  : 

	while ( have_posts() ) : the_post(); ?>

		<div <?php post_class( 'section-inner' ); ?>>
		
			<header class="page-header section-inner'; ?>">
			
				<div>
			
					<?php 
					the_title( '<h1 class="title">', '</h1>' );

					// Make sure we have a custom excerpt
					if ( has_excerpt() ) the_excerpt();

					// Only output post meta data on single
					if ( is_single() ) : ?>

						<div class="meta">

							<?php echo the_category( ', ' ); ?>

						</div>

					<?php endif; ?>
					
				</div>
			
			</header><!-- .page-header -->


			<div class="entry-content section-inner">

				<?php the_content(); ?>

			</div> <!-- .content -->

			<?php 
			
			wp_link_pages( array(
				'before' => '<p class="section-inner linked-pages">' . __( 'Pages:', 'hamilton' ),
			) ); 
			
			if ( get_post_type() == 'post' ) : ?>

				<div class="meta bottom section-inner group">
				
					<?php if ( get_the_tags() ) : ?>
				
						<p class="tags"><?php the_tags( ' #', ' #', ' ' ); ?></p>
					
					<?php endif; ?>

					<!-- <p><a href="<?php // the_permalink(); ?>" title="<?php // the_time( get_option( 'date_format' ) ); ?> <?php // the_time( get_option( 'time_format' ) ); ?>"><?php // the_date( get_option( 'date_format' ) ); ?></a></p> -->

				</div> <!-- .meta -->

			<?php endif; ?>

		</div> <!-- .post -->
		<div class="related-posts-wrapper section-inner">
			<h1 class="title">Other projects</h1>
		</div>
		<?php 
		
		if ( get_post_type() == 'post' ) get_template_part( 'related-posts' );

	endwhile;

endif; 

get_footer(); ?>