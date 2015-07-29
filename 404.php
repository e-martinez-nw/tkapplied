<?php get_header(); ?>

<div id="error404">
	<div class="container">
		<div class="col-sm-12">

			<h1>Parece que se ha producido un error</h1>
			<p>Utiliza el navegador para encontrar contenido o intenta con nuestro buscador:</p>

			<div class="search-btn">
				<?php get_search_form(); ?>
			</div>

			<img src="<?php bloginfo('template_url') ?>/img/backgrounds/bg-404.jpg" />

		</div><!--.col-sm-12-->
	</div><!--.container-->
</div><!-- /#main-content -->

<?php get_footer(); ?>
