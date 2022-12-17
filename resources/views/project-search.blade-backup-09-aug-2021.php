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
		<title>Client-Project-Search</title>
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/easy-responsive-tabs.css">
		<link href="assets/images/fav-icon.png" rel="icon">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
		<link href="assets/style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="assets/css/pushy.css">
        <style type="text/css">
            #map{
                height: 700px;
            }
        </style>
	</head>
	<style>
		div#navs {
    		position: relative;
    		float: left;
    		margin-top: -5px;
		}
	</style>
	<body properties="{{ $projects }}">
		<div class="overlay">
			<div class="overlay__inner">
				<div class="overlay__content"><span class="spinner"></span></div>
			</div>
		</div>
	
		@include('navbar')
		
		<div class="h-p"></div>
		<div class="inner-area">
			<div class="container-fluid">
				<div class="heading-menu clearfix">
					<div class="heading-menu clearfix m-60">
						<div id="navs" class="navs">
							<a class="dropdown-toggle-new lgt" href="#"><b class="append_text">PROJECTS </b><i class="zmdi zmdi-caret-down"></i></a>
							<ul class="dropdown-new nwa lft">
								<li>
									<a href="#">
										<div class="control-group">
											<label class="control control-radio drp-c map_div upper ">
												Map view
												<input type="radio" name="radio"/>
												<div class="control_indicator"></div>
											</label>
										</div>
									</a>
								</li>
								<li>
									<a href="#">
										<div class="control-group">
											<label class="control control-radio drp-c title_div lower">
												Tile view
												<input type="radio" name="radio" />
												<div class="control_indicator"></div>
											</label>
										</div>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<!--
						<div id="nav">
						<a class="dropdown-toggle-new main_title" href="javascript:void(0)"><b class="append_text">PROJECTS</b> <i class="zmdi zmdi-caret-down"></i></a>
						<ul class="dropdown-new">
						  <li class="menu title_menu"><a href="javascript:void(0)" class="upper map_div" >Map view</a></li>
						   <li class="title_li"><a href="javascript:void(0)" class="lower title_div">Tile view</a></li> 
						
						</ul>
						</div>-->
				</div>
			</div>
			
			<div class="map_row" style="display: none">
			    <!--<iframe width="100%" height="1000" id="gmap_canvas" src="https://maps.google.com/maps?q=Vancover&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>-->
			    <div id="map"></div>
			    
		    </div>
		    
			<div class="container-fluid">
				<div class="content_area">

					<div class="row">
						@foreach($projects as $project)
							<div class="col-md-4" style="cursor: pointer;">
								
									<div class="project-box" onClick="window.location.href='/project-info/{{ $project->type_id }}/{{ $project->id }}'">
										@if($project->images)<img src="https://skyriseprojects.com/api/public/uploads/images/{{ $project->images[0] }}" class="img-responsive" height="270">@endif
										<div class="p-desc">
											<h3>{{ $project->name }}</h3>
											{{-- <div class="star-icon"><i class="zmdi zmdi-favorite"></i></div> --}}
										</div>
										<ul class="project-desc clearfix">
											<li>Address:</li>
											<li>{{ $project->address }}</li>
											<li>City:</li>
											<li>{{ $project->city == '' ? '----------' : $project->city }}</li>
											<li>Base price:</li>
											<li>{{ $project->price }}</li>
										</ul>
									</div>
								
									
							</div>
						@endforeach
					</div>

				</div>
			</div>
		</div>
		<br>
		<br>
		<br>
		<br>
		
		<script
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOjwrWcelQApQWmxtL-A5zSONErEdk0i0&callback=initMap&libraries=&v=weekly"
          async
        ></script>
        
        <script>
            // When the user clicks the marker, an info window opens.
            // function initMap() {
            //   const uluru = { lat: -25.363, lng: 131.044 };
            //   const map = new google.maps.Map(document.getElementById("map"), {
            //     zoom: 4,
            //     center: uluru,
            //   });
            //   const contentString =
            //     '<div id="content">' +
            //     '<div id="siteNotice">' +
            //     "</div>" +
            //     '<h1 id="firstHeading" class="firstHeading">Uluru</h1>' +
            //     '<div id="bodyContent">' +
            //     "<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large " +
            //     "sandstone rock formation in the southern part of the " +
            //     "Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) " +
            //     "south west of the nearest large town, Alice Springs; 450&#160;km " +
            //     "(280&#160;mi) by road. Kata Tjuta and Uluru are the two major " +
            //     "features of the Uluru - Kata Tjuta National Park. Uluru is " +
            //     "sacred to the Pitjantjatjara and Yankunytjatjara, the " +
            //     "Aboriginal people of the area. It has many springs, waterholes, " +
            //     "rock caves and ancient paintings. Uluru is listed as a World " +
            //     "Heritage Site.</p>" +
            //     '<p>Attribution: Uluru, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">' +
            //     "https://en.wikipedia.org/w/index.php?title=Uluru</a> " +
            //     "(last visited June 22, 2009).</p>" +
            //     "</div>" +
            //     "</div>";
            //   const infowindow = new google.maps.InfoWindow({
            //     content: contentString,
            //   });
            //   const marker = new google.maps.Marker({
            //     position: uluru,
            //     map,
            //     title: "Uluru (Ayers Rock)",
            //   });
            //   marker.addListener("mouseover", () => {
            //     infowindow.open({
            //       anchor: marker,
            //       map,
            //       shouldFocus: false,
            //     });
            //   });
            // }
            
            function initMap() {
              var map = new google.maps.Map(document.getElementById("map"), {
                zoom: 8,
                center: { lat: -34.397, lng: 150.644 },
              });
              const geocoder = new google.maps.Geocoder();
              geocodeAddress(geocoder, map);
              
             }
            
            function geocodeAddress(geocoder, resultsMap) {
                var properties = JSON.parse($('body').attr('properties'));
                
                var address = "";
                var name = "";
                
                
                // var marker = null;
                var image = null;
                var price = null;
                // var infoWindow = null;
                
                properties.forEach(function (property, index) {
                    
                    // var property = property;
                    address = property.address;
                    name = property.name;
                    price = property.price;
                    image = property.images[0]
                    // console.log(address, name, price);
                    // console.log(property.images[0]);
                    
                 
                    geocoder
                    .geocode({ address: address })
                    .then(({ results }) => {
                      resultsMap.setCenter(results[0].geometry.location);
                      
                    var contentString = `
                        <img style="cursor: pointer;" src="https://skyriseprojects.com/api/public/uploads/images/`+image+`" class="img-responsive" height="200" onClick="window.location.href='/project-info/`+property.type_id+`/`+property.id+`'">
                        <br>
                        <p style="font-size: 20px; padding: 10px;">`+property.name+`</he>
                        <p style="font-size: 15px; padding: 10px;">`+property.price+`</p>
                        <p style="font-size: 15px; padding: 10px;">`+property.address+`</p>
                    `;
                    
                    console.log(contentString);
                  
                    //   var infowindow = new google.maps.InfoWindow({
                    //       content: contentString,
                    //   });
                    //   console.log(property);
                      var marker = new google.maps.Marker({
                        map: resultsMap,
                        position: results[0].geometry.location,
                        title: property.name
                      });
                      
                      marker.addListener("mouseover", () => {
                        var infowindow = new google.maps.InfoWindow({
                          content: contentString,
                        });
                      
                        infowindow.open({
                          anchor: marker,
                          map,
                          shouldFocus: false,
                        });
                      });
                      
                      
                      
                      
                    })
                    .catch((e) =>
                      alert("Geocode was not successful for the following reason: " + e)
                    );
                    
            
                })
                
                
            }
        </script>
        
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="assets/js/pushy.min.js"></script> 
		<script>
			$('.panel-collapse').on('show.bs.collapse', function () {
			   $(this).siblings('.panel-heading').addClass('active');
			 });
			
			 $('.panel-collapse').on('hide.bs.collapse', function () {
			   $(this).siblings('.panel-heading').removeClass('active');
			 });
		</script>
		<script>
			$(function() { 
			$('.dropdown-toggle-new').click(function() { $(this).next('.dropdown-new').toggle();
			});
			
// 			$(document).click(function(e) 
// 			{ 
// 			var target = e.target; 
// 			if (!$(target).is('.dropdown-toggle-new') && !$(target).parents().is('.dropdown-toggle-new')) 
// 			//{ $('.dropdown').hide(); }
// 			  { $('.dropdown-new').toggle(); }
// 			});
// 			});

            
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
			$(document).ready(function(){
			  $(".forgot").click(function(){
			    $(".login-form").hide(500);
			    $(".forgot-form").show(500);
			  });
			});
		</script>
		<script>
			$('.upper').click(function(){
			
				$('.map_row').css('display','block');
				$('.content_area').css('display','none');
				
			})
			
			$('.lower').click(function(){
				$('.map_row').css('display','none');
				$('.content_area').css('display','inline-block');
				
			})
			$('.lgt').click(function(){
			if($('.dropdown-new.lft').css('display') == 'none')
				{
					$('.lgt').addClass('active');
				}else{	
					$('.lgt').removeClass('active');
				}
			})
			$('body').click(function(evt){ 
					
			  			console.log(evt.target.id);
			      if(evt.target.id == "navss")
			      	
			         return;
			      
			      if($(evt.target).closest('#navs').length){
			      	
			      }else{
			      	
			       	$('.dropdown-new.lft').css('display','none');
			       	$('.dropdown-toggle-new.lgt').removeClass('active');
			      evt.stopPropagation();
			        //evt.preventDefault();
			      }
			      return;             
			});
			
			$('#navbarDropdown').click(function(){
			  if ($('.nav-item.dropdown.proj').hasClass("show")) {
			  	    $('.dropdown-menu.bk').removeClass('show');
					$('.nav-item.dropdown.proj').removeClass('show');
				}else{
					$('.dropdown-menu.bk').addClass('show');
					$('.nav-item.dropdown.proj').addClass('show');
				}
			})

		</script>
		 <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
        
	</body>
</html>