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
    <link rel="stylesheet" href="/assets/css/sidenav.min.css" type="text/css">
    <link rel="stylesheet" href="/assets/css/lightboxed.css">
    <!-- Owl Carousel Css -->
    <link rel="stylesheet" href="/assets/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/owl-carousel/owl.theme.default.min.css">
    <style>
        .photo-list>.item {
            padding-right: 6px;
            margin-right: 0 !important;
        }
        
        .photo-list>.item:nth-last-child(1) {
            padding-right: 18px;
        }
    </style>
    <!--<style>
		a.carousel-control-prev,
		a.carousel-control-next {
			width: 50px;
			height: 50px;
			top: 45%;
			background: #007efa;
		}
	</style>-->
    <!-- <style type="text/css">
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

		@media (max-width: 767px) {
			.owl-slider {
				padding-left: 15px;
			}

			.owl-slider .owl-stage {
				padding-left: 0 !important;
			}
		}
	</style> -->
</head>

<body>
    <div class="overlay">
        <div class="overlay__inner">
            <div class="overlay__content"><span class="spinner"></span></div>
        </div>
    </div>

    @include('navbar') @if($project->promotions)
    <div class="sale-alrt">
        <div class="container">
            <h2>
                PROMOTION
            </h2>
            <h4>{{ $project->promotions[0]['title'] }}</h4>
            <p>
                {{ $project->promotions[0]['desc'] }}
            </p>
        </div>
    </div>
    @endif
    <section class="banner-vw">
        <img src="https://skyriseprojects.com/testapi/public/uploads/banner/{{ $project->banner[0] }}" class="w-100 dsk-view">
        <img src="https://skyriseprojects.com/testapi/public/uploads/banner/{{ $project->banner[1] }}" class="w-100 mob-view">
    </section>

    <div id="sticky-anchor"></div>
    <div id="sticky" class="grey-bg clearfix">

        <div class="container">
            <h1>{{ $project->name }}</h1>
        </div>
    </div>

    <div class="inner-content pb-0">
        <div class="container">

            <h4 class="main-page-h">DETAILS</h4>
            <p class="b-44 descrip">
                {!! nl2br(e($project->description)) !!}
            </p>

            <div class="info-area">
                <div class="row">
                    <div class="col-6">
                        <ul class="data-desc">
                            <li>
                                <span>Address</span> {{ explode(',', $project->address)[0] }}<br> {{ explode(',', $project->address)[1] }}, {{ explode(',', $project->address)[2] }}<br> {{ explode(',', $project->address)[3] }}

                            </li>
                        </ul>
                        <ul class="data-desc">
                            <li>
                                <span>Property type</span> {{ $project->condos != null? $project->condos. ' Condos ' : '' }} <i></i> {{ $project->townhouse != null? $project->townhouse. ' Townhouse ' : '' }} <i></i> {{ $project->rowhouse != null ? $project->rowhouse.
                                ' Rowhouse' : '' }}
                            </li>
                        </ul>
                        <ul class="data-desc">
                            <li>
                                <span>Base price (CAD)</span> From {{ $project->price }}
                            </li>
                        </ul>
                        @if($project->levels != '')
                        <ul class="data-desc">
                            <li>
                                <span>Levels</span> {{ $project->levels }}
                            </li>
                        </ul>
                        @endif
                        <ul class="data-desc">
                            <li>
                                <span>Developer</span> {{ $project->developer->name }}
                            </li>
                        </ul>
                        @if($project->architect != '')
                        <ul class="data-desc">
                            <li>
                                <span>Architect</span> {{ $project->architect }}
                            </li>
                        </ul>
                        @endif
                        <div class="clearfix"></div>
                        @if($project->designer != '')
                        <ul class="data-desc">
                            <li class="mb-0">
                                <span>Interior designer</span> {{ $project->designer }}
                            </li>
                        </ul>
                        @endif
                    </div>
                    <div class="col-6">
                        <ul class="data-desc mt-30">
                            <li class="pl-md-1">
                                <span>Sales centre</span> {{ explode(',', $project->sales_address)[0] }}<br> {{ explode(',', $project->sales_address)[1] }}, {{ explode(',', $project->sales_address)[2] }}<br> {{ explode(',', $project->sales_address)[3]
                                }}

                            </li>
                            @if($project->sales_company != '')
                            <li class="pl-md-1">
                                <span>Sales company / Agent</span> {{ $project->sales_company }}
                            </li>
                            @endif @if($project->completion_mnth != '' && $project->completion_year != '')
                            <li class="pl-md-1">
                                <span>Completion date (est.)</span> {{ $project->completion_mnth }} {{ $project->completion_year }}
                            </li>
                            @endif @if($project->status != '')
                            <li class="pl-md-1">
                                <span>Status</span> {{ $project->status }}
                            </li>
                            @endif
                            <br><br> @if($project->strata != '')
                            <li class="pl-md-1 mb-0">

                                <span>Strata fee (monthly)</span> {{ $project->strata }}
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="deposit-bg">

            <div class="container">
                <h2>
                    FINANCIAL TERMS
                </h2>
                <p class="descripw">
                    {!! nl2br(e($project->deposit_terms)) !!}
                </p>
            </div>
        </div>

        <div class="photo-slider">
            <div class="container">
                <h2 class="new-values">PHOTOS</h2>
            </div>
            <div id="slider1" class="slider">
                <div class="stage">
                    <div class="inside">
                        <div class="stager photo-list">
                            @foreach($project->images as $image)
                            <div class="item">
                                <img class="lightboxed w-100" rel="group1" src="https://skyriseprojects.com/testapi/public/uploads/images/{{ $image }}" data-link="https://skyriseprojects.com/testapi/public/uploads/images/{{ $image }}" alt="Image Alt" />
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <button type="button" class="webBtn prev"><img src="https://annoying.skyriseprojects.com/assets/images/left-arrow.png" alt="" /></button>
                <button type="button" class="webBtn next"><img src="https://annoying.skyriseprojects.com/assets/images/right-arrow.png" alt="" /></button>
            </div>

        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
                    </div>
                    <div class="modal-body">
                        <iframe width="560" height="315" src="" id="videoFrame" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>

                </div>
            </div>
        </div>


        <div class="video-slider">
            <div class="container">
                <h2 class="new-values">VIDEOS</h2>
            </div>
            <div id="slider2" class="slider">
                <div class="stage">
                    <div class="inside">
                        <div class="stager video-list">
                            @foreach($project->videos as $video)
                            <div class="item">
                                <img class="w-100 lightboxed" data-width="800" data-height="550" rel="group2" src="https://img.youtube.com/vi/{{ $video['id'] }}/mqdefault.jpg" data-link="https://www.youtube.com/embed/{{ $video['id'] }}" />
                                <span>{{ $video['title'] }}</span>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <button type="button" class="webBtn prev"><img src="https://annoying.skyriseprojects.com/assets/images/left-arrow.png" alt="" /></button>
                <button type="button" class="webBtn next"><img src="https://annoying.skyriseprojects.com/assets/images/right-arrow.png" alt="" /></button>
            </div>

        </div>


        <!--<div class="video-slider">-->
        <!--	<div class="container">-->
        <!--		<h2 class="new-values">VIDEOS</h2>-->
        <!--	</div>-->
        <!--	<div id="slider2" class="slider">-->
        <!--		<div class="stage">-->
        <!--			<div class="inside">-->
        <!--				<div class="stager video-list">-->

        <!--					<div class="item">-->
        <!--                              <img class="lightboxed" rel="group2" src="https://annoying.skyriseprojects.com/assets/images/video-1.jpg" data-link="https://www.youtube.com/embed/Rix_3b9ThLI?list=PL8zglt-LDl-iwBHEl3Pw1IhWGp9cfgMrc" data-width="560" data-height="315" />-->
        <!--                           <span>Video Title</span>-->
        <!--					</div>-->

        <!--			    </div>-->
        <!--			</div>-->
        <!--		</div>-->
        <!--		<button type="button" class="webBtn prev"><i class="zmdi zmdi-chevron-left"></i></button>-->
        <!--		<button type="button" class="webBtn next"><i class="zmdi zmdi-chevron-right"></i></button>-->
        <!--	</div>-->

        <!--</div>-->
        <div class="am-top-bd">
            <div class="container mb-min-ar">



                <h2 class="page-heading">
                    AMENITIES
                </h2>
                <div class="row">
                    @foreach($project->amenities as $ammenity)
                    <div class="col-md-12">
                        <div class="am-cvr">
                            <span>{{ $ammenity['title'] }}</span> {!! nl2br(e($ammenity['desc'])) !!}

                        </div>


                    </div>
                    @endforeach
                </div>
            </div>
        </div>
	
  <h2 class="heading-area-floor page-heading">FLOOR PLAN</h2>
        @for($i = 0; $i < count($project->floors); $i++)
            <div class="video-slider flooring {{ $i % 2 > 0? '' : '' }}">

                <div class="container dsk-view">
                    <h2 class="new-values new-size mb-30">{{ $project->floors[$i]['name'] }}</h2>
                    <div class="row">
                        @foreach($project->floors[$i]['section'] as $key => $section)
                            <div class="col-lg-3 col-md-6">
                            
                                <div class="item">

                                    <a href="#" data-toggle="modal" data-target="#exampleModalCenter2">
                                        <div class="border-img">
    
                                            <img src="https://skyriseprojects.com/testapi/public/uploads/floor_media/{{ $section['images']['url'] }}" class="popData" alt="" bed="{{ $section['bedrooms'] }}" bath="{{ $section['bathrooms'] }}" den="{{ $section['den'] }}" name="{{ $section['plan'] }}" int="{{ $section['sf_int'] }}" ext="{{ $section['sf_ext'] }}" area="{{ $section['sf_int'] + $section['sf_ext'] }}" basePrice="{{ array_key_exists('unit_price1', $section) ? '$'.$section['unit_price1'] : '----' }}" 
                                            @if(array_key_exists('price_per_sf', $section)) pricePer="{{ $section['price_per_sf'] == ""? '----' : $section['price_per_sf'] }}" @else pricePer="----"  @endif 
                                            @if(array_key_exists('level', $section)) level="{{ $section['level'] == ""? '----' : $section['level'] }}" @else level="----"  @endif 
                                            unitsRem="{{ $section['units'] == "" ? '----' : $section['units'] }}"
                                            image="{{ $section['images']['url'] }}" sheet="{{ array_key_exists('url', $section['sheet']) ? $section['sheet']['url'] : '' }}" doc="{{ $project->documents != null ? $project->documents[0]['url'] : '' }}" />
    
                                        </div>
                                    </a>
                                    <div class="g-bg clearfix">
                                        <div class="row">
                                            <div class="col-12">
                                                <b>Plan {{ $section['plan'] }}</b>
                                            </div>
                                            <div class="col-3 d-none">
                                                <!--<div class="hrt-cvr"><a href="javascript:void();" class="star-yellow c-y"><i class="zmdi zmdi-star"></i></a></div>-->
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="specs clearfix">
    									<li>Bedrooms:{{ $section['bedrooms'] }}</li>
    									<li>Bath:{{ $section['bathrooms'] }}</li>
    									<li>Den:{{ $section['den'] }}</li>
    								</ul>
    								<ul class="specs clearfix">
    									<li>Interior: {{ $section['sf_int'] }} SF</li>
    									<li>Exterior: {{ $section['sf_ext'] }} SF</li>
    									<li>Total: {{ $section['sf_int'] + $section['sf_ext'] }} SF</li>
    								</ul>
    								<ul class="specs clearfix">
    								    <li>{{ array_key_exists('level', $section) ? "Level: ".$section['level'] : '----'}}</li>
    									<li>{{ array_key_exists('unit_price1', $section) ? '$'.$section['unit_price1'] : ''}}</li>
    									
    								</ul>
    
                                </div>
                            
                            </div>
                        @endforeach
                        <!--<div class="col-lg-3 col-md-6">-->
                        <!--    <div class="item">-->

                        <!--        <a href="#" data-toggle="modal" data-target="#exampleModalCenter2">-->
                        <!--            <div class="border-img">-->

                        <!--                <img src="https://skyriseprojects.com/testapi/public/uploads/floor_media/floor_media1643701623798.jpg" />-->

                        <!--            </div>-->
                        <!--        </a>-->
                        <!--        <div class="g-bg clearfix">-->
                        <!--            <div class="row">-->
                        <!--                <div class="col-12">-->
                        <!--                    <b>Plan 1</b>-->
                        <!--                </div>-->
                        <!--                <div class="col-3 d-none">-->
                        <!--                    <div class="hrt-cvr"><a href="javascript:void();" class="star-yellow c-y"><i class="zmdi zmdi-star"></i></a></div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--        <ul class="specs clearfix">-->
                        <!--            <li>Beds: 1</li>-->
                        <!--            <li>Baths: 2</li>-->
                        <!--            <li>Den: 3</li>-->
                        <!--        </ul>-->
                        <!--        <ul class="specs clearfix">-->
                        <!--            <li>Interior: 102 SF</li>-->
                        <!--            <li>Exterior: 100} SF</li>-->
                        <!--            <li>Total: 202 SF</li>-->
                        <!--        </ul>-->
                        <!--        <ul class="specs clearfix">-->
                        <!--            <li>Level: 30 - 33</li>-->
                        <!--            <li>----</li>-->

                        <!--        </ul>-->

                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="col-lg-3 col-md-6">-->
                        <!--    <div class="item">-->

                        <!--        <a href="#" data-toggle="modal" data-target="#exampleModalCenter2">-->
                        <!--            <div class="border-img">-->

                        <!--                <img src="https://skyriseprojects.com/testapi/public/uploads/floor_media/floor_media1643701623798.jpg" />-->

                        <!--            </div>-->
                        <!--        </a>-->
                        <!--        <div class="g-bg clearfix">-->
                        <!--            <div class="row">-->
                        <!--                <div class="col-12">-->
                        <!--                    <b>Plan 1</b>-->
                        <!--                </div>-->
                        <!--                <div class="col-3 d-none">-->
                                            <!--<div class="hrt-cvr"><a href="javascript:void();" class="star-yellow c-y"><i class="zmdi zmdi-star"></i></a></div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--        <ul class="specs clearfix">-->
                        <!--            <li>Beds: 1</li>-->
                        <!--            <li>Baths: 2</li>-->
                        <!--            <li>Den: 3</li>-->
                        <!--        </ul>-->
                        <!--        <ul class="specs clearfix">-->
                        <!--            <li>Interior: 102 SF</li>-->
                        <!--            <li>Exterior: 100} SF</li>-->
                        <!--            <li>Total: 202 SF</li>-->
                        <!--        </ul>-->
                        <!--        <ul class="specs clearfix">-->
                        <!--            <li>Level: 30 - 33</li>-->
                        <!--            <li>----</li>-->

                        <!--        </ul>-->

                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="col-lg-3 col-md-6">-->
                        <!--    <div class="item">-->

                        <!--        <a href="#" data-toggle="modal" data-target="#exampleModalCenter2">-->
                        <!--            <div class="border-img">-->

                        <!--                <img src="https://skyriseprojects.com/testapi/public/uploads/floor_media/floor_media1643701623798.jpg" />-->

                        <!--            </div>-->
                        <!--        </a>-->
                        <!--        <div class="g-bg clearfix">-->
                        <!--            <div class="row">-->
                        <!--                <div class="col-12">-->
                        <!--                    <b>Plan 1</b>-->
                        <!--                </div>-->
                        <!--                <div class="col-3 d-none">-->
                                            <!--<div class="hrt-cvr"><a href="javascript:void();" class="star-yellow c-y"><i class="zmdi zmdi-star"></i></a></div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--        <ul class="specs clearfix">-->
                        <!--            <li>Beds: 1</li>-->
                        <!--            <li>Baths: 2</li>-->
                        <!--            <li>Den: 3</li>-->
                        <!--        </ul>-->
                        <!--        <ul class="specs clearfix">-->
                        <!--            <li>Interior: 102 SF</li>-->
                        <!--            <li>Exterior: 100} SF</li>-->
                        <!--            <li>Total: 202 SF</li>-->
                        <!--        </ul>-->
                        <!--        <ul class="specs clearfix">-->
                        <!--            <li>Level: 30 - 33</li>-->
                        <!--            <li>----</li>-->

                        <!--        </ul>-->

                        <!--    </div>-->
                        <!--</div>-->

                    </div>
                </div>


                <div class="container mob-view">

                    <h2 class="new-values new-size mb-30">{{ $project->floors[$i]['name'] }}</h2>
                </div>

                <div id="slider3" class="slider mob-view">
                    <div class="stage">
                        <div class="inside">
                            <div class="stager photo-list">
                                @foreach($project->floors[$i]['section'] as $key => $section)
                                <div class="item">

                                    <a href="#" data-toggle="modal" data-target="#exampleModalCenter2">
                                        <div class="border-img">

                                            <img src="https://skyriseprojects.com/testapi/public/uploads/floor_media/{{ $section['images']['url'] }}" class="popData" alt="" bed="{{ $section['bedrooms'] }}" bath="{{ $section['bathrooms'] }}" den="{{ $section['den'] }}" name="{{ $section['plan'] }}"
                                                int="{{ $section['sf_int'] }}" ext="{{ $section['sf_ext'] }}" area="{{ $section['sf_int'] + $section['sf_ext'] }}" basePrice="{{ array_key_exists('unit_price1', $section) ? '$'.$section['unit_price1'] : '----' }}"
                                                @if(array_key_exists('price_per_sf', $section)) pricePer="{{ $section['price_per_sf'] == ""? '----' : $section['price_per_sf'] }}" @endif
                                                @if(array_key_exists('level', $section)) level="{{ $section['level'] == ""? '----' : $section['level'] }}" @else level="----"  @endif
                                                unitsRem="{{ $section['units'] == "" ? '----' : $section['units'] }}"
                                                image="{{ $section['images']['url'] }}" sheet="{{ array_key_exists('url', $section['sheet']) ? $section['sheet']['url'] : '' }}" doc="{{ $project->documents != null ? $project->documents[0]['url'] : '' }}" />

                                        </div>
                                    </a>
                                    <div class="g-bg clearfix">
                                        <div class="row">
                                            <div class="col-12">
                                                <b>Plan {{ $section['plan'] }}</b>
                                            </div>
                                            <div class="col-3 d-none">
                                                <!--<div class="hrt-cvr"><a href="javascript:void();" class="star-yellow c-y"><i class="zmdi zmdi-star"></i></a></div>-->
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="specs clearfix">
                                        <li>Beds: {{ $section['bedrooms'] }}</li>
                                        <li>Baths: {{ $section['bathrooms'] }}</li>
                                        <li>Den: {{ $section['den'] }}</li>
                                    </ul>
                                    <ul class="specs clearfix">
                                        <li>Interior: {{ $section['sf_int'] }} SF</li>
                                        <li>Exterior: {{ $section['sf_ext'] }} SF</li>
                                        <li>Total: {{ $section['sf_int'] + $section['sf_ext'] }} SF</li>
                                    </ul>
                                    <ul class="specs clearfix">
                                        <li>{{ array_key_exists('level', $section) ? "Level: ".$section['level'] : '----'}}</li>
                                        <li>{{ array_key_exists('price_per_sf', $section) ? $section['price_per_sf'] : ''}}</li>

                                    </ul>

                                </div>
                                @endforeach



                            </div>
                        </div>
                    </div>
                    <button type="button" class="webBtn prev"><img src="https://annoying.skyriseprojects.com/assets/images/left-arrow.png" alt="" /></button>
                    <button type="button" class="webBtn next"><img src="https://annoying.skyriseprojects.com/assets/images/right-arrow.png" alt="" /></button>
                </div>

            </div>
            @endfor


   
    </div>
    </div>
    @include('footer')
    <!--Video Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered bg-blk" role="document">
            <div class="modal-content bg-blk">

                <div class="modal-body bg-blk">
                    <button type="button" class="close bg-black" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
                    <iframe width="100%" height="300px" src="" id="videoIframe" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen  modal-dialog-centered" role="document">
            <div class="modal-content">


                <button type="button" class="close ex-t-new" data-dismiss="modal" aria-label="Close">
					<img src="https://skyriseprojects.com/assets/images/cross-arrow.png" alt="" class="cross-btbz" />
				</button>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <img src="https://annoying.skyriseprojects.com/assets/images/plan-big.jpg" alt="" class="w-100" id="popImage" />
                        </div>
                        <div class="col-md-12 col-lg-12 grey-bg">
                            <div class="g-bgg">
                                <div class="conte-sec">
                                    <div class="star-cvr">
                                        <h3 id="popName"></h3>
                                        <span class="star-fill"><i class="zmdi zmdi-star"></i></span>
                                    </div>
                                    <!--<span id="popType">1 BEDROOM + 1 BATHROOM</span>-->
                                    <ul class="total-cst clearfix">
                                        <li>Bedrooms</li>
                                        <li id="popBed"></li>
                                        <li>Bathrooms</li>
                                        <li id="popBath"></li>
                                        <li>Den</li>
                                        <li class="spc-ar" id="popDen"></li>

                                        <li>Interior</li>
                                        <li id="popInt"></li>
                                        <li>Exterior</li>
                                        <li class="btm-bd" id="popExt"></li>
                                        <li>Total</li>
                                        <li class="spc-ar" id="popArea"></li>

                                        <li class="bp">Base price (CAD)</li>
                                        <li id="popBaseP" class="bp"></li>
										     <li>Level</li>
                                        <li id="popLevel"></li>
                                        <li class="pp d-none">Price / SF</li>
                                        <li class="spc-ar pp d-none" id="popPricePer"></li>

                                   
                                        
                                        <li class="pb-0 ur d-none" id="ur">Units remaining</li>
                                        <li class="pb-0 ur d-none" id="popUnitsRem"></li>
                                    </ul>


                                    <a download id="popFloor" href="#" class="pt-btn">Download floor plan</a>



                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!--<div class="modal-footer">
					<div class="row">
					<div class="col-6">
				<a href="" class="prev-bt"><i class="zmdi zmdi-chevron-left"></i> Previous plan</a
					</div>
						<div class="col-6">
						<div class="text-right">
					<a href="" class="next-bt">Next plan <i class="zmdi zmdi-chevron-right"></i></a
						</div>
						</div>
					</div>
				</div>-->
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/assets/js/slideshow.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>


    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
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
    <script type="text/javascript" src="/assets/js/dropdown.js"></script>
    <script type="text/javascript" src="/assets/sidenav.min.js"></script>
    <script type="text/javascript" src="/assets/js/lightboxed.js"></script>
    <script>
        $('[data-sidenav]').sidenav();
    </script>
    <script>
        $('.popData').click(function() {

            var image = $(this).attr('image');
            var sheet = $(this).attr('sheet');
            var doc = $(this).attr('doc');
            var name = 'Plan ' + $(this).attr('name');
            var bed = $(this).attr('bed');
            var bath = $(this).attr('bath');
            var den = $(this).attr('den');
            var int = $(this).attr('int') + ' SF';
            var ext = $(this).attr('ext') + ' SF';
            var basePrice = $(this).attr('basePrice');
            var pricePer = $(this).attr('pricePer');
            var level = $(this).attr('level');
            var unitsRem = $(this).attr('unitsRem');
            var area = $(this).attr('area') + ' SF';

            if (basePrice == '----') {
                $(".bp").css('display', 'none');;
            }

            if (pricePer == '----') {
                $(".pp").css('display', 'none');;
            }

            if (unitsRem == '----') {
                $(".ur").css('display', 'none');
            }
            $('#popImage').attr('src', 'https://skyriseprojects.com/testapi/public/uploads/floor_media/' + image);
            $('#popFloor').attr('href', 'https://skyriseprojects.com/testapi/public/uploads/floor_sheet/' + sheet);
            // 			$('#popType').text(bed + ' Bedrooms + ' + bath + ' Bathrooms');
            $('#popName').text(name);
            $('#popBed').text(bed);
            $('#popBath').text(bath);
            $('#popDen').text(den);
            $('#popBaseP').text(basePrice);
            $('#popPricePer').text(pricePer);
            $('#popLevel').text(level);
            $('#popUnitsRem').text(unitsRem);
            $('#popInt').text(int);
            $('#popExt').text(ext);
            $('#popArea').text(area);

        });
    </script>
    <script>
        $('.panel-collapse').on('show.bs.collapse', function() {
            $(this).siblings('.panel-heading').addClass('active');
        });

        $('.panel-collapse').on('hide.bs.collapse', function() {
            $(this).siblings('.panel-heading').removeClass('active');
        });
    </script>
    <script src="/assets/js/pushy.min.js"></script>
    <script>
        $('#slct22').change(function() {
            alert('aYYZA');
            $('li.pushy-submenu').removeClass('pushy-submenu-closed');
            $('li.pushy-submenu').addClass('pushy-submenu-open');
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
        $(document).ready(function() {
            $(".forgot").click(function() {
                $(".login-form").hide(500);
                $(".forgot-form").show(500);
            });
        });
    </script>
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
    <!--<script type="text/javascript" src="/assets/owl-carousel/owl.carousel.min.js"></script>
	<script type="text/javascript">
		$(window).on('load', function() {
			// var ww = $("body").prop("clientWidth");
			var ww = $(window).width();
			var cw = $(".container").width();
			var ml = (ww - cw) / 2;
			// var ml = ml + 17;
			// var screenWidth = screen.width;
			// var windowWidth = window.outerWidth;
			// if (windowWidth == screenWidth) {
			// 	var ml = (ww - cw) / 2;
			// 	$(".owl-slider .owl-stage-outer").css({
			// 		"padding-left": "17px",
			// 		"padding-right": "32px"
			// 	});
			// }

			if (ww < 767) {
				var ml = 50;
			}
			setTimeout(function() {
				$('.owl-projects').owlCarousel({
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
							items: 1,
							slideBy: 1
						},
						580: {
							slideBy: 2
						},
						991: {
							items: 3,
							slideBy: 3
						}
					}
				});
				$('.owl-projects2').owlCarousel({
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
							items: 1,
							slideBy: 1
						},
						580: {
							slideBy: 2
						},
						991: {
							items: 2,
							slideBy: 2
						}
					}
				});
			}, 500);
			// console.log(screenWidth)
		});
		$(window).on('resize', function() {
			// var ww = $("body").prop("clientWidth");
			var ww = $(window).outerWidth();
			// console.log(ww)
			var cw = $(".container").outerWidth();
			var ml = (ww - cw + 17) / 2;

			var $owl = $('.owl-carousel');
			$owl.trigger('destroy.owl.carousel');
			$owl.trigger('refresh.owl.carousel');
			$('.owl-projects').owlCarousel({
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
						items: 1,
						slideBy: 1
					},
					580: {
						slideBy: 2
					},
					991: {
						items: 3,
						slideBy: 3
					}
				}
			});
			$('.owl-projects2').owlCarousel({
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
						items: 1,
						slideBy: 1
					},
					580: {
						slideBy: 2
					},
					991: {
						items: 2,
						slideBy: 2
					}
				}
			});
		});
	</script>-->
</body>

</html>