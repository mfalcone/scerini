<?php get_header(); // This fxn gets the header.php file and renders it ?>

<div class="simple-carousel" data-example-id="simple-carousel" class="">
	<div class="carousel slide container" id="carousel-example-generic" data-ride="carousel">
		<ol class="carousel-indicators"> 
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li> 
			<li data-target="#carousel-example-generic" data-slide-to="1" class=""></li> 
			<li data-target="#carousel-example-generic" data-slide-to="2" class=""></li> 
		</ol> 
		<div class="carousel-inner col-md-12" role="listbox"> 
			<div class="item active"> 
				<img alt="First slide [900x500]" src="<?php echo get_stylesheet_directory_uri();?>/images/seniora_joven_mujer.jpg" data-holder-rendered="true"> 
			</div> 
			<div class="item "> 
				<img alt="Second slide [900x500]"  src="<?php echo get_stylesheet_directory_uri();?>/images/manos.jpg" data-holder-rendered="true"> 
			</div> 
			<div class="item "> 
				<img alt="Second slide [900x500]"  src="<?php echo get_stylesheet_directory_uri();?>/images/equipo.jpg" data-holder-rendered="true"> 
				<!--<a href="http://www.freepik.com/free-photos-vectors/business">Business photograph designed by Freepik</a>-->
			</div> 
		</div> 
		<a href="#carousel-example-generic" class="left carousel-control" role="button" data-slide="prev"> <span class="fa fa-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> 
		<a href="#carousel-example-generic" class="right carousel-control" role="button" data-slide="next"> <span class="fa fa-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> 
	</div> 
</div>

<?php get_footer(); // This fxn gets the footer.php file and renders it ?>


