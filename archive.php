<?php get_header();?>
<section class="posteos container categorias">
<header class="page-header">
<h1><?php single_cat_title(); ?></h1>
<h2><?php echo category_description(); ?></h2>
</header>
<?php while ( have_posts() ) : the_post();?>
<article class="col-md-6"  <?php post_class(); ?>>
	<h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
	<div class="foto">
		<a href="<?php the_permalink();?>"><?php 
			if ( has_post_thumbnail() ) {
				the_post_thumbnail('homepage-thumb');
			}else{?>
				<img alt="Silvana Cerini Logo" src="<?php echo get_stylesheet_directory_uri();?>/images/backfoto.jpg" /> 
			<?php }
		?></a>
	</div>
	<div class="content">
		<?php echo content(50); ?>
	</div>
</article>
<?php endwhile; // end of the loop. ?>
</section>
<?php get_footer();?>