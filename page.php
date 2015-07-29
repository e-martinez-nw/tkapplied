<?php get_header(); ?>
	
<div id="page">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article>
				<header>
					<div class="container">
						<div class="col-sm-12">

							<h1><?php the_title(); ?></h1>

						</div><!--.col-sm-12-->
					</div><!--.container-->
				</header>
				
				<div class="container content">
					<div class="col-sm-12">
						<?php the_content(); ?>
					</div><!--.col-sm-12-->
				</div><!--.container-->

			</article>

		<?php endwhile; else : ?>
		<?php endif; ?>
	</div><!--.container-->

<?php get_footer(); ?>