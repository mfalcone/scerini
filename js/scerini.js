jQuery(document).ready(function($){
	$('#carousel-example-generic').carousel({
		interval:4000
	})
	$('#carousel-example-generic h3').hide()
	$('#carousel-example-generic .active h3').fadeIn();
	$('#carousel-example-generic').on('slide.bs.carousel', function () {
		$('#carousel-example-generic h3, #carousel-example-generic h4').hide()
		setTimeout(function(){
			console.log($('#carousel-example-generic .active h3').html());
			$('#carousel-example-generic .active h3').fadeIn();
			$('#carousel-example-generic .active h4').delay(400).fadeIn();

		},1000)
	})
})