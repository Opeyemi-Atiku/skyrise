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
		<title>{{ $project->name }}</title>
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
		<div class="overlay">
			<div class="overlay__inner">
				<div class="overlay__content"><span class="spinner"></span></div>
			</div>
		</div>
	

		@include('navbar')

		
		
		<section class="banner-vw">
    		<img src="https://skyriseprojects.com/testapi/public/uploads/banner/{{ $project->banner[0] }}" class="w-100 dsk-view">
    		<img src="https://skyriseprojects.com/testapi/public/uploads/banner/{{ $project->banner[1] }}" class="w-100 mob-view">
    	</section>

		
		<div id="sticky-anchor"></div>
		<div id="sticky" class="grey-bg clearfix">
			<!--<ul class="action-list clearfix">-->
			<!--	<li><a href="" class="message-icon"> <i class="zmdi zmdi-comment-more"></i> <span>Inquire</span></a></li>-->
			<!--	<li><a href="" class="star-icn"><i class="zmdi zmdi-favorite"></i>  <span>Follow</span></a></li>-->
			<!--</ul>-->
			<div class="container-fluid">
				<h1>{{ $project->name }}</h1>
			</div>
		</div>
		
		@if($project->promotions)
    		<div class="sale-alrt">
    			<div class="container-fluid">
    				<h2>
    					SALES PROMOTION
    				</h2>
    				
    				<p>
    				    
    				    {{ $project->promotions[0]['desc'] }} <a href="/contact">Contact Us</a>
    				</p>
    			</div>
    		</div>
    	@endif
		<div class="inner-content">
			<div class="container-fluid">
				<p class="b-44">{!! nl2br(e($project->description)) !!}</p>
				<div class="info-area">
					<div class="row">
						<div class="col-md-6">
							<ul class="data-desc">
								<li>
									<span>Address</span>
										{{ explode(',', $project->address)[0] }}<br>
        								{{ explode(',', $project->address)[1] }}, {{ explode(',', $project->address)[2] }}<br>
        								{{ explode(',', $project->address)[3] }}
								</li>
								<li>
									<span>Property type</span> 
									{{ $project->condos != null? $project->condos. 'Condos ' : '' }} <i></i> {{ $project->townhouse != null? $project->townhouse. 'Townhouse ' : ''  }} <i></i> {{ $project->rowhouse != null ? $project->rowhouse. 'Rowhouse' : '' }}
								</li>
								<li>
									<span>Price (CAD)</span>
									From ${{ $project->price }}
								</li>
								<li>
									<span>Bedrooms / Bathrooms</span>
									{{ $project->bedroom }} Beds / {{ $project->bathroom }} Baths
								</li>
								<li>
									<span>Interior size (SF)</span>
									{{ $project->interior_size }} SF
								</li>
								
								@if($project->levels != '')
    								<li>
    									<span>Levels</span>
    									{{ $project->levels }}
    								</li>
								@endif
								
								<li>
									<span>Lot size (SF)</span>
									{{ $project->lot }} SF
								</li>
								<li>
									<span>Frontage x Depth (FT)</span>
									{{ $project->frontage }} x {{ $project->depth }} FT
								</li>
								<li>
									<span>Zoning</span>
									{{ $project->zone }}
								</li>
							</ul>
						</div>
						<div class="col-md-6">
							<ul class="data-desc">
							    @if($project->sales_company != '')
    								<li class="pl-md-1">
    									<span>Sales company, brokerage or agent</span>
    									{{ $project->sales_company }}	
    								</li>
    							@endif
    							
								@if($project->completion_mnth != '' && $project->completion_year != '')
    								<li class="pl-md-1">
    									<span>Completion date (estimate) </span>
    									{{ $project->completion_mnth }} {{ $project->completion_year }}
    								</li>
    							@endif
    							
    							@if($project->status != '')
    								<li class="pl-md-1">
    									<span>Status</span>
    									{{ $project->status }}
    								</li>
    							@endif
    							
								<li class="pl-md-1">
									<span>Developer</span>
									{{ $project->developer->name }}
								</li>
								<li>
									<span>Owner builder</span>
									{{ $project->owner }}
								</li>
								@if($project->architect != '')
    								<li>
    									<span>Architect</span>
    									{{ $project->architect }}
    								</li>
    							@endif
    							
    							@if($project->designer != '')
    								<li  class="mb-0">
    									<span>Interior designer</span>
    									{{ $project->designer }}
    								</li>
								@endif
							</ul>
						</div>
					</div>
					<div class="clearfix"></div>
					<!-- btn row end -->
					@if($project->deposit_terms != '')
    					<!-- btn row end -->
    					<h2 class="page-heading">
    						DEPOSIT TERMS
    					</h2>
    					<p>{{ $project->deposit_terms }}</p>
					@endif
					@if($project->videos != null)
    					<h2 class="page-heading">
    						VIDEOS
    					</h2>
    					<!-- video row -->
    					<!-- video row -->
    					<div class="mob-none">
    						<div class="row">
    							@foreach($project->videos as $video)
        							<div class="col-md-4">
        								<div class="box-items">
        									<a href="#"  data-toggle="modal" data-target="#exampleModalCenter" onClick="$('#videoIframe').attr('src', 'https://www.youtube.com/embed/{{ $video['id'] }}')">
        									<img src="https://img.youtube.com/vi/{{ $video['id'] }}/mqdefault.jpg" className="up-img" alt="loading" class="img-responsive ">
        									</a>
        									<p class="page-para mt-2">
        										{{ $video['title'] }}
        									</p>
        								</div>
        							</div>
        						@endforeach
    							
    						</div>
    					</div>
    					<div class="m-right-z d-non">
    						<div class="swiper-container swiper-video right-z">
    							<div class="swiper-wrapper">
    								@foreach($project->videos as $video)
            							<div class="col-md-4">
            								<div class="box-items">
            									<a href="#"  data-toggle="modal" data-target="#exampleModalCenter" onClick="$('#videoIframe').attr('src', 'https://www.youtube.com/embed/{{ $video['id'] }}')">
            									<img src="https://img.youtube.com/vi/{{ $video['id'] }}/mqdefault.jpg" className="up-img" alt="loading" class="img-responsive ">
            									</a>
            									<p class="page-para mt-2">
            										{{ $video['title'] }}
            									</p>
            								</div>
            							</div>
            						@endforeach
            								
    							</div>
    							<!-- Add Arrows -->
    							<div class="swiper-button-next"></div>
    							<div class="swiper-button-prev"></div>
    						</div>
    					</div>
    				@endif
    				
					<h2 class="page-heading">
						AMENITIES
					</h2>
					<div class="row">
						@foreach($project->amenities as $ammenity)
    						<div class="col-md-6">
    							<div class="am-cvr">
    								<span>{{ $ammenity['title'] }}</span>
    								<p>{{ $ammenity['desc'] }}</p>
    								
    							</div>
    						</div>
    					@endforeach
					</div>
					<h2 class="page-heading">
						FLOOR PLAN
					</h2>
					<div class="row">
					    @foreach($project->floors as $floor)
					        @if(array_key_exists('url', $floor['sheet']))
    					            
        						<div class="col-md-4">
        						    <a download href="https://skyriseprojects.com/testapi/public/uploads/floor_sheet/{{ $floor['sheet']['url'] }}">
        							    <div class="border-img-new"><img src="https://skyriseprojects.com/testapi/public/uploads/floor_media/{{ $floor['images']['url'] }}"  style="height: 370px !important;"  class="img-responsive"></div>
        				        	</a>	
        					    </div>
                					
            				@endif
					    @endforeach
					</div>
				</div>
			</div>
		</div>
		<br>
		<br>
		<br>
		<br>
		<br>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="/assets/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
		<script type="text/javascript" src="/assets/js/dropdown.js"></script>
		<script type="text/javascript" src="/assets/sidenav.min.js"></script>
		<script>$('[data-sidenav]').sidenav();</script>
						<!--Video Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered bg-blk" role="document">
    <div class="modal-content bg-blk">
  
      <div class="modal-body bg-blk">
	         <button type="button" class="close bg-black" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
     <iframe width="100%" height="400" src="https://www.youtube.com/embed/y9j-BL5ocW8" id="videoIframe" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>

    </div>
  </div>
</div>
		<script>
			$('.panel-collapse').on('show.bs.collapse', function () {
			   $(this).siblings('.panel-heading').addClass('active');
			 });
			
			 $('.panel-collapse').on('hide.bs.collapse', function () {
			   $(this).siblings('.panel-heading').removeClass('active');
			 });
		</script>
		<script src="/assets/js/pushy.min.js"></script> 
		<script>
			$('#slct22').change(function(){
			alert('aYYZA');
			$('li.pushy-submenu').removeClass('pushy-submenu-closed');
			$('li.pushy-submenu').addClass('pushy-submenu-open');
			});
		</script> 
		<script>
			var swiper = new Swiper('.swiper-video', {
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
			        slidesPerView: 4, slidesPerGroup: 4, speed:1200
			       
			    }
			   
			    }
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
			function sticky_relocate() {
			  var window_top = $(window).scrollTop();
			  var div_top = $('#sticky-anchor').offset().top;
			  if (window_top > div_top) {
			    $('#sticky').addClass('stick');
			  } else {
			    $('#sticky').removeClass('stick');
			  }
			}
			
			$(function() {
			  $(window).scroll(sticky_relocate);
			  sticky_relocate();
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
	</body>
</html>