<?php get_header(); // This fxn gets the header.php file and renders it ?>

<div class="simple-carousel" data-example-id="simple-carousel" class="">
	<div class="carousel slide carousel-fade container" id="carousel-example-generic" data-ride="carousel">
		<ol class="carousel-indicators"> 
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li> 
			<li data-target="#carousel-example-generic" data-slide-to="1" class=""></li> 
			<li data-target="#carousel-example-generic" data-slide-to="2" class=""></li> 
			<li data-target="#carousel-example-generic" data-slide-to="3" class=""></li> 
		</ol> 
		<div class="carousel-inner col-md-12" role="listbox"> 
			<div class="item active"> 
				<img alt="First slide [900x500]" src="<?php echo get_stylesheet_directory_uri();?>/images/seniora_joven_mujer.jpg" data-holder-rendered="true"> 
				<h3 class="caption">"nunca negociemos por temor, pero tampoco nunca tengamos temor de negociar"</h3>
				<h4 class="autor">John F. Kennedy</h4>
			</div> 
			<div class="item "> 
				<img alt="Second slide [900x500]"  src="<?php echo get_stylesheet_directory_uri();?>/images/manos.jpg" data-holder-rendered="true"> 
					<h3 class="caption">"Negociar con uno mismo es elegir la mejor de las opciones para luego, con empeño, esforzarse para mejorarla"</h3>
					<h4 class="autor">André Maurois</h4>
			</div> 
			<div class="item "> 
				<img alt="Second slide [900x500]"  src="<?php echo get_stylesheet_directory_uri();?>/images/equipo.jpg" data-holder-rendered="true"> 
				<h3 class="caption">"Negociar con uno mismo es no perdurar en la desición equivocada"</h3>
				<h4 class="autor">Silvana Cerini</h4>
				<!--<a href="http://www.freepik.com/free-photos-vectors/business">Business photograph designed by Freepik</a>-->
			</div> 
			<div class="item "> 
				<img alt="Second slide [900x500]"  src="<?php echo get_stylesheet_directory_uri();?>/images/fortachon.jpg" data-holder-rendered="true"> 
				<h3 class="caption">"Negociar con uno mismo es escuchar respetuosamente y actuar con ética, conducta que importa honestidad para con uno, y para los demás"</h3>
				<h4 class="autor">Silvana Cerini</h4>
				<!--<a href="http://www.freepik.com/free-photos-vectors/business">Business photograph designed by Freepik</a>-->
			</div> 
		</div> 
		<a href="#carousel-example-generic" class="left carousel-control" role="button" data-slide="prev"> <span class="fa fa-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> 
		<a href="#carousel-example-generic" class="right carousel-control" role="button" data-slide="next"> <span class="fa fa-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> 
	</div> 
</div>
<section class="posteos container">
		<?php
		$args = array( 'post_type' => array( 'post', 'page') ,'category_name' => 'inicio', 'posts_per_page' => 10 );
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post(); $counter++; ?>
		<article class="col-md-6">
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
					<a href="<?php the_permalink();?>" class="vermas">Ver más</a>
				</div>
		</article>
		<?php endwhile; // end of the loop. ?>
		<!--<a href='http://www.freepik.com/free-photo/co-workers-making-decisions_861094.htm'>Designed by Freepik</a>-->
</section>
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>


