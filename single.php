<?php get_header();?>
<div id="main" class="container single-page ">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); 
			$post_id = get_the_ID();
			$post_categories = wp_get_post_categories( $post_id );
			$cats = array();
			foreach($post_categories as $c){
			    $cat = get_category( $c );
			    $cats[] = array( 'name' => $cat->name, 'slug' => $cat->slug );
			}
		?>
			<header class="page-header <?php print_r($cats[0]['slug']);?>">
				<h1><?php the_title(); ?></h1>
				<div class="content col-md-8 col-md-offset-2">
				<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail('large');
					}else{?>
						<img alt="Silvana Cerini Logo" src="<?php echo get_stylesheet_directory_uri();?>/images/backfoto_large.jpg" /> 
					<?php }?>
				</div>
			</header>
			<section class="content col-md-8 col-md-offset-2 ">
				<?php the_content(); ?>
			</section>
		<?php endwhile;?>
	<?php endif; ?>
</div>
<?php get_footer();?>


