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
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Welcome-to-Skyrise</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/images/fav-icon.png" rel="icon">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link href="assets/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="assets/css/fullpage.css" />
    <link rel="stylesheet" href="assets/css/pushy.css">
    <link rel="stylesheet" href="/assets/sidenav.min.css">
    <!-- Owl Carousel Css -->
    <link rel="stylesheet" href="assets/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owl-carousel/owl.theme.default.min.css">
    <style type="text/css">
        .owl-slider {
            padding-right: 15px;
            overflow: hidden;
        }
        
        .owl-slider .owl-stage-outer {
            overflow: initial;
        }
        
        .owl-slider .owl-stage {
            display: flex;
        }
        
        .owl-slider.owl-theme .owl-nav {
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            margin: 0;
        }
        
        .owl-slider.owl-theme .owl-prev {
            left: 15px;
        }
        
        .owl-slider.owl-theme .owl-next {
            right: 15px;
        }
        
        .owl-slider.owl-theme .owl-prev,
        .owl-slider.owl-theme .owl-next {
            position: absolute;
            top: 0;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgb(33 37 41 / 60%) !important;
            color: #fff !important;
            font-size: 26px !important;
            margin: 0 !important;
            border-radius: 75%;
            border: 0;
            transform: translateY(-50%);
            box-shadow: 0 5px 20px rgb(18 15 56 / 7%);
            text-decoration: none !important;
            outline: none !important;
        }
        
        .owl-slider.owl-theme .owl-prev:hover,
        .owl-slider.owl-theme .owl-next:hover {
            color: #007efa !important;
        }
        
        .owl-slider.owl-theme .owl-prev.disabled,
        .owl-slider.owl-theme .owl-next.disabled {
            display: none !important;
        }
        
        .owl-slider .owl-item {
            width: 100% !important;
        }
        
        .owl-slider .owl-stage {
            padding-right: 0 !important;
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
    <section class="main-banner position-relative">
        <div class="overlay-bfg"></div>
        <div class="container">
            <div class="caption-max">
                <h1>Selling real estate presale and new home construction projects.</h1>

                <div class="row">
                    <div class="col-4">
                        <div class="align">
                            <div class="stat-wrap">
                                <div class="counter">

                                    <span class="stat-number">{{ $developers }}</span>
                                    <h3>Developers</h3>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="stat-wrap">
                            <div class="counter">

                                <span class="stat-number">{{ $projects }}</span>
                                <h3>Projects</h3>
                            </div>

                        </div>
                    </div>
                    <div class="col-4">
                        <div class="stat-wrap">
                            <div class="counter">

                                <span class="stat-number">{{ $presale_count }}</span>
                                <h3>Presale units</h3>
                            </div>

                        </div>
                    </div>
                </div>

                <!--<a href="" class="primary-btn small auto-marg">Sign up, it’s free!</a>-->
            </div>
        </div>
    </section>

	@if($condoCount > 0)
		<section class="featured-condo dsk-view">
			<div class="featured-outer">
				<div class="container">
					<h2>FEATURED CONDO PROJECTS</h2>
					<div class="row">
						@foreach($all_projects as $proj)
							@if($proj->condos !== null)
								<div class="col-md-6">



									<div class="condo-bx clearfix mb-spc">
										<a href="/project-info/{{ $proj->type_id }}/{{ $proj->id }}">
											<img src="https://skyriseprojects.com/testapi/public/uploads/images/{{ $proj->images[0] }}" alt=""> 
										</a>
										
										<div class="box-desc">
											<h3>{{ $proj->name }}</h3>
											<h4>{{ explode(',', $proj->address)[0] }}, {{ explode(',', $proj->address)[1] }}, {{ explode(',', $proj->address)[2] }}</h4>
										</div>
										
										<!--<div class="box-fav"><i class="zmdi zmdi-favorite"></i></div>-->
									</div>


								</div>
							@endif
						@endforeach

						
					</div>
				</div>
			</div>
		</section>
	@endif

    @if($condoCount > 0)
        <section class="featured-condo mob-view">
            <div class="featured-outer">
                <div class="container">
                    <h2>Featured condo projects</h2>
                </div>
           
                <div id="slider1" class="slider">
                    <div class="stage">
                        <div class="inside">
                            <div class="stager">
                                @foreach($all_projects as $proj) 
                                    @if($proj->condos !== null)
                                        <div class="item">
                                            <div class="condo-outer">

                                                <div class="condo-bx clearfix">
                                                    <a href="/project-info/{{ $proj->type_id }}/{{ $proj->id }}">
                                                        <img src="https://skyriseprojects.com/testapi/public/uploads/images/{{ $proj->images[0] }}" alt="" />	
													</a>
                                                    <div class="box-desc">
                                                        <h3>{{ $proj->name }}</h3>
                                                        <h4>
                                                            {{ explode(',', $proj->address)[0] }}, {{ explode(',', $proj->address)[1] }}, {{ explode(',', $proj->address)[2] }}
                                                        </h4>
                                                    </div>

                                                    <!--<div class="box-fav"><i class="zmdi zmdi-favorite"></i></div>-->
                                                </div>
                                            </div>
                                        </div>

                                    @endif 
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <button type="button" class="webBtn prev"><img src="https://annoying.skyriseprojects.com/assets/images/left-arrow.png" alt="" /></button>
                    <button type="button" class="webBtn next"><img src="https://annoying.skyriseprojects.com/assets/images/right-arrow.png" alt="" /></button>
                </div>
            </div>
        </section>
      

    @endif



	@if($townCount > 0)
		<section class="featured-condo dsk-view">
			<div class="featured-outer top-bd">
				<div class="container">
					<h2>FEATURED TOWNHOUSE PROJECTS</h2>
					<div class="row">
						@foreach($all_projects as $proj)
							@if($proj->townhouse !== null)
								<div class="col-md-6">



									<div class="condo-bx clearfix mb-spc">
										<a href="/project-info/{{ $proj->type_id }}/{{ $proj->id }}">
											<img src="https://skyriseprojects.com/testapi/public/uploads/images/{{ $proj->images[0] }}" alt=""> 
										</a>
										<div class="box-desc">
											<h3>{{ $proj->name }}</h3>
											<h4>{{ explode(',', $proj->address)[0] }}, {{ explode(',', $proj->address)[1] }}, {{ explode(',', $proj->address)[2] }}</h4>
										</div>
										
										<!--<div class="box-fav"><i class="zmdi zmdi-favorite"></i></div>-->
									</div>


								</div>
							@endif
						@endforeach

						
					</div>
				</div>
			</div>
		</section>
	@endif

    @if($townCount > 0)
        <section class="featured-condo mob-view">
            <div class="featured-outer top-bd">
                <div class="container">
                    <h2>FEATURED TOWNHOUSE PROJECTS</h2>
                </div>
           
                <div id="slider1" class="slider">
                    <div class="stage">
                        <div class="inside">
                            <div class="stager">
                                @foreach($all_projects as $proj) 
                                    @if($proj->townhouse !== null)
                                        <div class="item">
                                            <div class="condo-outer">

                                                <div class="condo-bx clearfix">
                                                    <a href="/project-info/{{ $proj->type_id }}/{{ $proj->id }}">
                                                        <img src="https://skyriseprojects.com/testapi/public/uploads/images/{{ $proj->images[0] }}" alt="" />
													</a>
                                                    <div class="box-desc">
                                                        <h3>{{ $proj->name }}</h3>
                                                        <h4>
                                                            {{ explode(',', $proj->address)[0] }}, {{ explode(',', $proj->address)[1] }}, {{ explode(',', $proj->address)[2] }}
                                                        </h4>
                                                    </div>

                                                    <!--<div class="box-fav"><i class="zmdi zmdi-favorite"></i></div>-->
                                                </div>
                                            </div>
                                        </div>

                                    @endif 
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <button type="button" class="webBtn prev"><img src="https://annoying.skyriseprojects.com/assets/images/left-arrow.png" alt="" /></button>
                    <button type="button" class="webBtn next"><img src="https://annoying.skyriseprojects.com/assets/images/right-arrow.png" alt="" /></button>
                </div>
            </div>
        </section>

    @endif


	@if($rowCount > 0)
		<section class="featured-condo dsk-view">
			<div class="featured-outer">
				<div class="container">
					<h2>FEATURED ROW HOUSE PROJECTS</h2>
					<div class="row">
						@foreach($all_projects as $proj)
							@if($proj->rowhouse !== null)
								<div class="col-md-6">



									<div class="condo-bx clearfix mb-spc">
										<a href="/project-info/{{ $proj->type_id }}/{{ $proj->id }}">
											<img src="https://skyriseprojects.com/testapi/public/uploads/images/{{ $proj->images[0] }}" alt=""> 
										</a>
										<div class="box-desc">
											<h3>{{ $proj->name }}</h3>
											<h4>{{ explode(',', $proj->address)[0] }}, {{ explode(',', $proj->address)[1] }}, {{ explode(',', $proj->address)[2] }}</h4>
										</div>
										
										<!--<div class="box-fav"><i class="zmdi zmdi-favorite"></i></div>-->
									</div>


								</div>
							@endif
						@endforeach

						
					</div>
				</div>
			</div>
		</section>
	@endif

    @if($rowCount > 0)
        <section class="featured-condo mob-view">
            <div class="featured-outer">
                <div class="container">
                    <h2>FEATURED ROWHOUSE PROJECTS</h2>
                </div>
           
                <div id="slider1" class="slider">
                    <div class="stage">
                        <div class="inside">
                            <div class="stager">
                                @foreach($all_projects as $proj) 
                                    @if($proj->rowhouse !== null)
                                        <div class="item">
                                            <div class="condo-outer">

                                                <div class="condo-bx clearfix">
                                                    <a href="/project-info/{{ $proj->type_id }}/{{ $proj->id }}">
                                                        <img src="https://skyriseprojects.com/testapi/public/uploads/images/{{ $proj->images[0] }}" alt="" />
													</a>
                                                    <div class="box-desc">
                                                        <h3>{{ $proj->name }}</h3>
                                                        <h4>
                                                            {{ explode(',', $proj->address)[0] }}, {{ explode(',', $proj->address)[1] }}, {{ explode(',', $proj->address)[2] }}
                                                        </h4>
                                                    </div>

                                                    <!--<div class="box-fav"><i class="zmdi zmdi-favorite"></i></div>-->
                                                </div>
                                            </div>
                                        </div>

                                    @endif 
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <button type="button" class="webBtn prev"><img src="https://annoying.skyriseprojects.com/assets/images/left-arrow.png" alt="" /></button>
                    <button type="button" class="webBtn next"><img src="https://annoying.skyriseprojects.com/assets/images/right-arrow.png" alt="" /></button>
                </div>
            </div>
        </section>

    @endif
    
	@if($duplexCount > 0)
		<section class="featured-condo dsk-view">
			<div class="featured-outer">
				<div class="container">
					<h2>FEATURED DUPLEX PROJECTS</h2>
					<div class="row">
						@foreach($all_projects as $proj)
							@if($proj->type_id == 3)
								<div class="col-md-6">



									<div class="condo-bx clearfix mb-spc">
										<a href="/project-info/{{ $proj->type_id }}/{{ $proj->id }}">
											<img src="https://skyriseprojects.com/testapi/public/uploads/images/{{ $proj->images[0] }}" alt=""> 
										</a>
										<div class="box-desc">
											<h3>{{ $proj->name }}</h3>
											<h4>{{ explode(',', $proj->address)[0] }}, {{ explode(',', $proj->address)[1] }}, {{ explode(',', $proj->address)[2] }}</h4>
										</div>
										
										<!--<div class="box-fav"><i class="zmdi zmdi-favorite"></i></div>-->
									</div>


								</div>
							@endif
						@endforeach

						
					</div>
				</div>
			</div>
		</section>
	@endif
	

	@if($duplexCount > 0)
        <section class="featured-condo mob-view">
            <div class="featured-outer">
                <div class="container">
                    <h2>FEATURED DUPLEX PROJECTS</h2>
                </div>
           
                <div id="slider1" class="slider">
                    <div class="stage">
                        <div class="inside">
                            <div class="stager">
                                @foreach($all_projects as $proj) 
                                    @if($proj->type_id == 3)
                                        <div class="item">
                                            <div class="condo-outer">

                                                <div class="condo-bx clearfix">
                                                    <a href="/project-info/{{ $proj->type_id }}/{{ $proj->id }}">
                                                        <img src="https://skyriseprojects.com/testapi/public/uploads/images/{{ $proj->images[0] }}" alt="" />
													</a>
                                                    <div class="box-desc">
                                                        <h3>{{ $proj->name }}</h3>
                                                        <h4>
                                                            {{ explode(',', $proj->address)[0] }}, {{ explode(',', $proj->address)[1] }}, {{ explode(',', $proj->address)[2] }}
                                                        </h4>
                                                    </div>

                                                    <!--<div class="box-fav"><i class="zmdi zmdi-favorite"></i></div>-->
                                                </div>
                                            </div>
                                        </div>

                                    @endif 
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <button type="button" class="webBtn prev"><img src="https://annoying.skyriseprojects.com/assets/images/left-arrow.png" alt="" /></button>
                    <button type="button" class="webBtn next"><img src="https://annoying.skyriseprojects.com/assets/images/right-arrow.png" alt="" /></button>
                </div>
            </div>
        </section>

    @endif



	@if($detachedCount > 0)
		<section class="featured-condo dsk-view">
			<div class="featured-outer">
				<div class="container">
					<h2>FEATURED DETACHED PROJECTS</h2>
					<div class="row">
						@foreach($all_projects as $proj)
							@if($proj->type_id == 2)
								<div class="col-md-6">



									<div class="condo-bx clearfix mb-spc">
										<a href="/project-info/{{ $proj->type_id }}/{{ $proj->id }}">
											<img src="https://skyriseprojects.com/testapi/public/uploads/images/{{ $proj->images[0] }}" alt=""> 
										</a>
										<div class="box-desc">
											<h3>{{ $proj->name }}</h3>
											<h4>{{ explode(',', $proj->address)[0] }}, {{ explode(',', $proj->address)[1] }}, {{ explode(',', $proj->address)[2] }}</h4>
										</div>
										
										<!--<div class="box-fav"><i class="zmdi zmdi-favorite"></i></div>-->
									</div>


								</div>
							@endif
						@endforeach

						
					</div>
				</div>
			</div>
		</section>
	@endif
	

	@if($detachedCount > 0)
        <section class="featured-condo mob-view">
            <div class="featured-outer">
                <div class="container">
                    <h2>FEATURED DUPLEX PROJECTS</h2>
                </div>
           
                <div id="slider1" class="slider">
                    <div class="stage">
                        <div class="inside">
                            <div class="stager">
                                @foreach($all_projects as $proj) 
                                    @if($proj->type_id == 2)
                                        <div class="item">
                                            <div class="condo-outer">

                                                <div class="condo-bx clearfix">
                                                    <a href="/project-info/{{ $proj->type_id }}/{{ $proj->id }}">
                                                        <img src="https://skyriseprojects.com/testapi/public/uploads/images/{{ $proj->images[0] }}" alt="" />
													</a>
                                                    <div class="box-desc">
                                                        <h3>{{ $proj->name }}</h3>
                                                        <h4>
                                                            {{ explode(',', $proj->address)[0] }}, {{ explode(',', $proj->address)[1] }}, {{ explode(',', $proj->address)[2] }}
                                                        </h4>
                                                    </div>

                                                    <!--<div class="box-fav"><i class="zmdi zmdi-favorite"></i></div>-->
                                                </div>
                                            </div>
                                        </div>

                                    @endif 
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <button type="button" class="webBtn prev"><img src="https://annoying.skyriseprojects.com/assets/images/left-arrow.png" alt="" /></button>
                    <button type="button" class="webBtn next"><img src="https://annoying.skyriseprojects.com/assets/images/right-arrow.png" alt="" /></button>
                </div>
            </div>
        </section>
	@endif




    @include('footer')
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets/js/dropdown.js"></script>
    <script type="text/javascript" src="/assets/sidenav.min.js"></script>
    <script>
        $('[data-sidenav]').sidenav();
    </script>
    <script>
        var swiper = new Swiper('.swiper-two', {
            slidesPerView: 1.14,
            spaceBetween: 15,

            speed: 300,
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

                767: {
                    slidesPerView: 3,
                    slidesPerGroup: 3,
                    spaceBetween: 30,
                    speed: 1200

                }

            }
        });
    </script>
    <script>
        var swiper = new Swiper('.swiper-three', {
            slidesPerView: 1.14,
            spaceBetween: 15,
            loop: false,
            speed: 300,
            freeMode: false,
            slidesPerGroup: 1,

            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {

                767: {
                    slidesPerView: 3,
                    slidesPerGroup: 3,
                    spaceBetween: 30,
                    speed: 1200,
                    loop: false,

                }

            }
        });
    </script>
    <script>
        $(window).on('load', function() {

            $('body').removeClass('stop-scrolling');
        });
    </script>
    <script>
        $(window).on('load', function() {
            $('.overlay').fadeOut(500);
        })
    </script>
    <script>
        $('.panel-collapse').on('show.bs.collapse', function() {
            $(this).siblings('.panel-heading').addClass('active');
        });

        $('.panel-collapse').on('hide.bs.collapse', function() {
            $(this).siblings('.panel-heading').removeClass('active');
        });
    </script>
    <script type="text/javascript">
        var myFullpage = new fullpage('#fullpage', {
            autoScrolling: false,
            fitToSection: false,

        });
    </script>
    <script>
        $('.dropdown-el').click(function(e) {
            e.preventDefault();
            e.stopPropagation();
            $(this).toggleClass('expanded');
            $('#' + $(e.target).attr('for')).prop('checked', true);
        });
        $(document).click(function() {
            $('.dropdown-el').removeClass('expanded');
        });
    </script>
    <script>
        $(document).ready(function() {
            $(".forgot").click(function() {
                $(".login-form").hide(500);
                $(".forgot-form").show(500);
            });
        });
    </script>
    <script src="assets/js/pushy.min.js"></script>
    <script>
        $('#slct22').change(function() {
            alert('aYYZA');
            $('li.pushy-submenu').removeClass('pushy-submenu-closed');
            $('li.pushy-submenu').addClass('pushy-submenu-open');
        });
    </script>
    <script>
        $('.stat-number').each(function() {
            var size = $(this).text().split(".")[1] ? $(this).text().split(".")[1].length : 0;
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 2500,
                step: function(func) {
                    $(this).text(parseFloat(func).toFixed(size));
                }
            });
        });
    </script>
    <script type="text/javascript" src="assets/js/slideshow.min.js"></script>
    <script type="text/javascript">
        $(window).scroll(function() {
            if ($(this).scrollTop() > 50) {
                $('.dynamic').addClass('newClass');
            } else {
                $('.dynamic').removeClass('newClass');
            }
        });
    </script>
    <!-- Owl Carousel Js -->
    <script type="text/javascript" src="assets/owl-carousel/owl.carousel.min.js"></script>
    <script type="text/javascript">
        $(window).on('load', function() {
            var ww = $("body").prop("clientWidth");
            var cw = $(".container").width();
            var ml = (ww - cw) / 2;
            setTimeout(function() {
                $('#owl-projects').owlCarousel({
                    nav: true,
                    navText: ['<i class="zmdi zmdi-chevron-left"></i>', '<i class="zmdi zmdi-chevron-right"></i>'],
                    dots: false,
                    loop: false,
                    margin: 30,
                    smartSpeed: 800,
                    stagePadding: ml,
                    autoplayTimeout: 8000,
                    autoplayHoverPause: true,
                    responsive: {
                        0: {
                            slideBy: 1,
                        },
                        580: {
                            slideBy: 2,
                        },
                        991: {
                            items: 2,
                            slideBy: 2
                        }
                    }
                });
            }, 500);
        });
        $(window).on('resize', function() {
            var $owl = $('.owl-carousel');
            $owl.trigger('destroy.owl.carousel');
            $owl.trigger('refresh.owl.carousel');
            var ww = $("body").prop("clientWidth");
            var cw = $(".container").width();
            var ml = (ww - cw) / 2;
            $('#owl-projects').owlCarousel({
                nav: true,
                navText: ['<i class="zmdi zmdi-chevron-left"></i>', '<i class="zmdi zmdi-chevron-right"></i>'],
                dots: false,
                loop: false,
                margin: 30,
                smartSpeed: 800,
                stagePadding: ml,
                autoplayTimeout: 8000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        slideBy: 1,
                    },
                    580: {
                        slideBy: 2,
                    },
                    991: {
                        items: 2,
                        slideBy: 2
                    }
                }
            });
        });
    </script>
    <!-- <script type="text/javascript">
		$(window).on('load', function() {
			setTimeout(function() {
				$('#owl-projects').owlCarousel({
					nav: true,
					navText: ['<i class="zmdi zmdi-chevron-left"></i>', '<i class="zmdi zmdi-chevron-right"></i>'],
					dots: false,
					loop: false,
					margin: 30,
					smartSpeed: 800,
					autoWidth: true,
					autoplayTimeout: 8000,
					autoplayHoverPause: true,
					responsive: {
						0: {
							slideBy: 1,
						},
						580: {
							slideBy: 2,
						},
						991: {
							slideBy: 2,
						}
					}
				});
			}, 500);
			var ww = $("body").prop("clientWidth");
			var cw = $(".container").width();
			var ml = (ww - cw) / 2
			$(".owl-slider").css({
				"padding-left": ml
			})
		});
		$(window).on("resize", function() {
			var ww = $("body").prop("clientWidth");
			var cw = $(".container").width();
			var ml = (ww - cw) / 2
			$(".owl-slider").css({
				"padding-left": ml
			})
		});
	</script> -->
</body>

</html>