<?php get_header();?>
<section class="posteos container categorias">
<header class="page-header">
<h1><?php single_cat_title(); ?></h1>
<h2><?php echo category_description(); ?></h2>
</header>
<?php while ( have_posts() ) : the_post();?>
<article class="col-md-6"  <?php post_class(); ?>>
	<div class="date-wrap">
		<span class="fa fa-calendar-o"></span>
		<h4><?php the_time('d');?></h4>
		<h5><?php the_time('M');?></h5>
	</div>
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
	<a href="<?php the_permalink();?>" class="vermas">Ver más</a>
</article>
<?php endwhile; // end of the loop. ?>
</section>
<?php get_footer();?>