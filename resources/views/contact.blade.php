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
		<title>Client-Contact</title>
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/images/fav-icon.png" rel="icon">
		<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
		<link href="assets/style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="assets/css/fullpage.css" />
		<link rel="stylesheet" href="assets/css/pushy.css">
		<link rel="stylesheet" href="/assets/sidenav.min.css">
	</head>
	<body>
		<div class="overlay">
			<div class="overlay__inner">
				<div class="overlay__content"><span class="spinner"></span></div>
			</div>
		</div>

		<div id="header">
    @include('navbar')
           <nav class="navbar navbar-expand-lg navbar-light bg-darkz dynamic bg-black">
        
        		<a class="navbar-brand" href="/"><img src="/assets/images/logo.png" alt="Skyrise-logo" /></a>
        
        		<button class="menu-btn d-none toggle" id="sidenav-toggle"><i class="zmdi zmdi-menu"></i></button>
        
        		<div class="collapse navbar-collapse" id="navbarSupportedContent">
        
        			<ul class="navbar-nav mr-auto ml-auto">
        
        				
        					<li class="nav-item">
        
        					<a class="nav-link" href="/search-projects">PROJECTS <span class="sr-only">(current)</span></a>
        
        				</li>
        				<li class="nav-item">
        
        					<a class="nav-link" href="/contact">Contact <span class="sr-only">(current)</span></a>
        
        				</li>
        
        			</ul>
        
        			<ul class="navbar-right ex-spcz">
                    </ul>
        
        		</div>
        
        	</nav>
        
        </div>


        <nav class="sidenav bg-black" data-sidenav data-sidenav-toggle="#sidenav-toggle">
        
        
        	<ul class="sidenav-menu">
        			<li>
        				<a href="/">HOME</a>
        			</li>
        				<li>
        				<a href="/search-projects">PROJECTS</a>
        			</li>
        			<li class="d-none">
        				<a href="/search-projects" data-sidenav-dropdown-toggle class="active">
        
        					<span class="sidenav-link-title">PROJECTS</span>
        					<span class="sidenav-dropdown-icon show" data-sidenav-dropdown-icon>
        						<i class="zmdi zmdi-plus"></i>
        
        					</span>
        					<span class="sidenav-dropdown-icon" data-sidenav-dropdown-icon>
        						<i class="zmdi zmdi-minus"></i>
        					</span>
        				</a>
        
        				<ul class="sidenav-dropdown" data-sidenav-dropdown>
        					<li>
        						<div class="ex-spc">
        							<form method="post" action="/search-project">
        
        								{{ csrf_field() }}
        								
        								<div class="input-space-white-scl">
        									<div class="custom-select-nw-wrapper">
        										<select name="sortType" id="Cities" class="custom-select-nw sources" placeholder="Cities">
                                                    
                                                    <!--<option value="all">All</option>-->
        											
        											@foreach($cities as $city)
        
        										        @if($city->city != '')
                                                            <option value="{{ $city->city }}">{{ $city->city }}</option>
                                                        @endif
        
        										    @endforeach
        
        										</select>
        									</div>
        								</div>
        								<div class="input-space-white-scl">
        									<div class="custom-select-nw-wrapper-two">
        										<select name="property" id="Property" class="custom-select-nw sources" placeholder="Property Type">
                                                    <!--<option value="0">All</option>-->
        											<option value="1">Attached</option>
        											<option value="2">Detached</option>
        											<option value="3">Duplex</option>
        
        										</select>
        									</div>
        								</div>
        								<div class="input-space-white mb-0">
        									<input type="submit" value="GO" />
        								</div>
        							</form>
        						</div>
        					</li>
        
        				</ul>
        			</li>
        
        
        
        
        
        
        			<li>
        				<a href="/contact">CONTACT</a>
        			</li>
        
        
        
        		</ul>
        
        
        </nav>


        <nav class="pushy pushy-right d-none bg-black" data-focus="#first-link">
        
        	<div class="pushy-content">
        
        		<ul>
        
        			<li class="pushy-link"><a href="/">HOME</a></li>
                    <li class="pushy-link"><a href="/contact">CONTACT</a></li>
        
        		</ul>
        
        	</div>
        
        </nav>

		<div>
		<div class="section contact">
			<div class="container">
				<div class="contact-info">
					<div class="heading-menu clearfix">
						<h2>CONTACT</h2>
					</div>
					<p>Got a question? We’re here to help. Give us a call or send us a message using the form below.  
					<p>
					<div class="row">
						<div class="col-xl-4 col-md-6">
							<ul class="contact-infoz clearfix">
								<li><i class="zmdi zmdi-phone"></i><a href="tel:(604) 805 - 8888">(604) 805 - 8888</a></li>
								<li><i class="zmdi zmdi-email"></i><a href="mailto:hello@skyriseprojects.com">hello@skyriseprojects.com</a></li>
							</ul>
						</div>
						<div class="col-xl-4 col-md-6 col-lg-4 pl-lg-3 pr-lg-3 p-r-5">
						    <form method="post" action="/send-message">
						        {{ csrf_field() }}
    							<div class="row ex-sppc">
    								<div class="col-6 pr-1">
    									<div class="input-space">
    										<label>First name</label>
    										<input type="text" placeholder="" name="first_name" required>
    									</div>
    								</div>
    								<div class="col-6 pl-1">
    									<div class="input-space">
    										<label>Last name</label>
    										<input type="text" name="last_name" required>
    									</div>
    								</div>
    							</div>
    								<div class="input-space">
    								<label>Email address</label>
    								<input type="email" name="email" required>
    							</div>
    							<div class="input-space">
    								<label>Phone number</label>
    								<input type="tel" name="phone" required>
    							</div>
    						
								<div class="input-space">
    								<label>Subject</label>
    								<input type="text" name="subject" required>
    							</div>
    							<div class="input-space">
    								<label>Message</label>
    								<textarea name="" id="" name="message" required></textarea>
    							</div>
    							<div class="control-group no-cr">
    								<label class="control control-checkbox three mt-0 pt-0">
    									You agree to our <a href="">terms of service</a> & <a href="">privacy policy</a>.
    									<input type="checkbox" class="three" name="agreed" required>	
    									<div class="control_indicator"></div></label>
    							
    							</div>
    							<div class="input-space ex-b mb-l">
    								<input type="submit" value="SEND MESSAGE" data-toggle="modal" data-target="#publish-project">
    							</div>
    						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	    @include('footer')		
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