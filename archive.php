<?php get_header();?>
<section class="posteos container categorias">
<h1><?php single_cat_title(); ?></h1>
<header class="page-header"></header>
<h2><?php echo category_description(); ?></h2>
<?php while ( have_posts() ) : the_post();?>

<?php if (is_category('libros')) : ?>
	<article class="row" <?php post_class(); ?>>
		<div class="col-md-3">
			<?php
			if ( has_post_thumbnail() ) {
				the_post_thumbnail('full');
			}else{?>
				<img alt="Silvana Cerini Logo" src="<?php echo get_stylesheet_directory_uri();?>/images/backfoto.jpg" /> 
			<?php } ?>
		</div>
		<div class="col-md-9">
			<h2><?php the_title(); ?></h2>
			<div class="content">
				<?php the_content(); ?>
			</div>
		</div>
	</article>
<?php elseif(is_category('video')): ?>
	<article class="row" <?php post_class(); ?>>
			<h2><?php the_title(); ?></h2>
			<div class="content">
				<?php the_content(); ?>
			</div>
			<?php 
			if ( has_post_thumbnail() ) {?>
				<div class="video-image"><?php the_post_thumbnail('full');?></div>
			<?php }else{?>
				<div class="videoWrapper">
					<?php echo get_post_meta($post->ID, 'video', true); ?>
				</div>
			<?php } ?>
	</article>
<?php elseif(is_category('empresas-capacitadas')): ?>
	<article class="col-md-3 empresas" <?php post_class(); ?>>
			<a href="<?php echo get_post_meta($post->ID, 'link', true); ?>" target="_blank">
			<div class="logo-wrap">
			<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail(array(150,9999));
			}else{?>
				<img alt="Silvana Cerini Logo" src="<?php echo get_stylesheet_directory_uri();?>/images/backfoto.jpg" /> 
			<?php } ?>
		</div>
			<h5><?php the_title(); ?></h5>
			</a>
			
	</article>

	
<?php else : ?>
<article class="col-md-6"  <?php post_class(); ?>>
	<!--<div class="date-wrap">
		<span class="fa fa-calendar-o"></span>
		<h4><?php the_time('d');?></h4>
		<h5><?php the_time('M');?></h5>
	</div>-->
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
		<?php //echo content(50); ?>
		<?php the_excerpt(); ?>
	</div>
	<a href="<?php the_permalink();?>" class="vermas">Ver más</a>
</article>
<?php endif; ?>
<?php endwhile; // end of the loop. ?>

<?php 
	if(is_category('empresas-capacitadas')){?>
	<div class="capacitadas-externas">
	<?php 
	$args = array(
    	'category_name' => 'empresas-capacitadas-externas'
		);
	$category_query = new WP_Query($args);
	
		if ($category_query->have_posts()) {
		    while ($category_query->have_posts()) {
		        $category_query->the_post();
		        ?>
		        <h2 class="entry-title"><?php the_title(); ?></h2>
		        <div class="entry-content" itemprop="text"><?php the_content(); ?></div>
		        <?php
		    }
		}?>
	</div>
	<?php }?>
</section>
<?php get_footer();?>