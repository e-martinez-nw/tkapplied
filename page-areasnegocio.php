<?php
/*
Template Name: [Áreas de Negocio]
*/
?>

<?php get_header(); ?>
	
<div id="page" class="areas-negocio">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php
			$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
		?> 
			<article>
				<header>
					<div class="container">
						<div class="col-sm-12">

							<strong><h1><?php the_title(); ?></h1></strong>

						</div><!--.col-sm-12-->
					</div><!--.container-->
				</header>
				<div class="description" style="background-image:url('<?php echo $thumb[0]; ?>'); background-position:center; background-size:cover;">
					<div class="container">
						<div class="col-sm-12">
							<?php the_content(); ?>
						</div><!--.col-sm-12-->
					</div><!--.container-->
				</div><!--.description-->

				<div class="container">					
					<?php dynamic_sidebar( 'negocios' ); ?>
				</div><!--.container-->

			</article>

		<?php endwhile; else : ?>
		<?php endif; ?>
	</div><!--.container-->

<?php get_footer(); ?>