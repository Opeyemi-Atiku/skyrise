<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Client-Project-Info</title>
		<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="/assets/css/easy-responsive-tabs.css">
		<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
		<link href="/assets/images/fav-icon.png" rel="icon">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
		<link href="/assets/style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="/assets/css/pushy.css">
		<link rel="stylesheet" href="/assets/sidenav.min.css">
		<style>
            a.carousel-control-prev, a.carousel-control-next {
                width: 50px;
                height: 50px;
                top: 45%;
                background: #007efa;
            }
    	</style>
	</head>
	<body>
	    @include('navbar')
	 
	    
	            <div class="error-page"><h1>404</h1>
	                <h3 >
	                    Project not found!!!
	                </h3> 
	          
	        </div>

	    
	    		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/js/fullpage.js"></script>
		<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script type="text/javascript" src="assets/js/dropdown.js"></script>
		<script type="text/javascript" src="/assets/sidenav.min.js"></script>
		<script>$('[data-sidenav]').sidenav();</script>
		<script>
			var swiper = new Swiper('.swiper-three', {
			 slidesPerView: 1.14,
			spaceBetween: 15,
			
			  speed:300,
			freeMode: false,
			slidesPerGroup: 1,
			loop: false,	
			  pagination: {
			    el: '.swiper-pagination',
			    clickable: true,
			  },
			navigation: {
			    nextEl: '.swiper-button-next',
			    prevEl: '.swiper-button-prev',
			  },
			breakpoints: {
			     
			    767:{
			        slidesPerView: 3, slidesPerGroup: 3,  spaceBetween: 30, speed:1200
			       
			    }
			   
			    }
			});
		</script>
		<script>
			$(window).on('load', function () {    
			
			  $('body').removeClass('stop-scrolling');
			});
		</script>
		<script>
			$(window).on('load', function(){
			    $('.overlay').fadeOut(500);
			})
		</script>
		<script>
			$('.panel-collapse').on('show.bs.collapse', function () {
			   $(this).siblings('.panel-heading').addClass('active');
			 });
			
			 $('.panel-collapse').on('hide.bs.collapse', function () {
			   $(this).siblings('.panel-heading').removeClass('active');
			 });
		</script>
		<script type="text/javascript">
			var myFullpage = new fullpage('#fullpage', {
			  autoScrolling:false,
			fitToSection:false,
			
			});
		</script>   
		<script>   
			$('.dropdown-el').click(function(e) {
			  e.preventDefault();
			  e.stopPropagation();
			  $(this).toggleClass('expanded');
			  $('#'+$(e.target).attr('for')).prop('checked',true);
			});
			$(document).click(function() {
			  $('.dropdown-el').removeClass('expanded');
			});
		</script>   
		<script>
			$(document).ready(function(){
			  $(".forgot").click(function(){
			    $(".login-form").hide(500);
			    $(".forgot-form").show(500);
			  });
			});
		</script>
		<script src="assets/js/pushy.min.js"></script> 
	    
	    
	</body>
</html>