<?php get_header(); ?>
	<style>
		#page, #primary{background: none;}
		.site-info{color:#fff;}
		.page-content {border-bottom:none;}
		#page > .container {background: none;}
		#secondary{background-color:#333;}
		}
	</style>
	<div id="content" class="site-content" role="main">
		<video autoplay loop style="min-width:100%;min-height:100%;width:auto;height:auto;position:fixed;margin:auto;top:0;bottom:0;left:0;right:0;z-index:-1;">
			<source src="http://camporez.com/assets/videos/luke.mp4" type="video/mp4">
			Your browser does not support the video tag.
		</video>
		<div class="page-content" style="text-align: center; color: #fff; opacity: .75; font-weight:normal;">
			<h1 id="404" style="text-align: center; color: #fff; opacity: .75; font-weight: bold;font-size:500%;">404</h1>
			<h2 style="text-align: center;">Esta página acaba de descobrir que Darth Vader é seu pai e fugiu para não ser encontrada.</h2>
			<h2><a href="<?php echo home_url(); ?>" class="btn btn-primary btn-lgbtn btn-primary btn-lg">Volte para a página inicial</a></h2>
			<?php get_search_form(); ?>
		</div>
	</div>
<?php get_footer(); ?>
