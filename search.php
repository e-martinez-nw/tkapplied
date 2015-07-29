<?php get_header(); ?>

<div id="noticias">
	<div class="main-title">
		<div class="container">
			<div class="col-sm-12">
				<h1><span>Resultados de búsqueda para:</span></br><strong><?php echo esc_attr(get_search_query()); ?></strong></h1>
			</div><!--.col-sm-12-->
		</div><!--.container-->
	</div><!--.main-title-->

	<div class="container posts">
		<?php if (have_posts()) : ?> 
			<?php while (have_posts()) : the_post(); ?>
			<div class="col-sm-4">
				<article>
					<header>
						<?php if ( has_post_thumbnail() ) : ?>
								<div class="feature-img">
									<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail(); ?>
									</a>
								</div><!--.feature-img-->
							<?php endif; ?>						
						<h3><strong><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></strong></h3>
					</header>

					<?php the_excerpt(); ?>

					<div class="more">
						<a href="<?php the_permalink(); ?>">Leer más</a>
					</div>
				</article>
			</div><!--.col-sm-4-->
			<?php endwhile; ?>

			<div class="clearfix"></div>

			<?php if (function_exists('nw_paginate_links')) { ?>
					<?php nw_paginate_links(); ?>
			<?php } else { ?>
					<nav class="wp-prev-next">
							<ul class="clearfix">
								<li class="prev-link"><?php next_posts_link( __( '&laquo; Older Entries', 'NuevaWeb' )) ?></li>
								<li class="next-link"><?php previous_posts_link( __( 'Newer Entries &raquo;', 'NuevaWeb' )) ?></li>
							</ul>
					</nav>
			<?php } ?>

		<?php else : ?>

			<?php // A 404 answer goes here ?>

		<?php endif; ?>

	</div><!--.container posts-->
<?php get_footer(); ?>
