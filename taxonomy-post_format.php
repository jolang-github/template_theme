<?php get_header(); ?>

		<div class="primary col-md-8">

			<?php if ( have_posts() ) : ?>
				<h2 class="archive-title"><?php printf( __( '%s Archives', 'twentythirteen' ), '<span>' . get_post_format_string( get_post_format() ) . '</span>' ); ?></h2>
				
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
				<?php endwhile; ?>

				<?php twentythirteen_paging_nav(); ?>

			<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>
			<?php endif; ?>

		</div><!-- .primary -->
        <div class="secondary col-md-4">
            <?php get_sidebar(); ?>
        </div><!-- .secondary -->
<?php get_footer(); ?>