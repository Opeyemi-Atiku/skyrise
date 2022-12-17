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
		<link rel="stylesheet" href="/assets/sidenav.min.css">

        <style type="text/css">

            #map{
                height: 700px;
            }
            nav.navbar.navbar-expand-lg.navbar-light.bg-dark {
                height: 60px;
                background: #000000 !important;
            }
            div#navs {

        		position: relative;
    
        		float: left;
    
        		margin-top: -5px;
    
    		}
        </style>

	</head>

	<body projects="{{ $projects }}">

		<div class="overlay">

			<div class="overlay__inner">

				<div class="overlay__content"><span class="spinner"></span></div>

			</div>

		</div>

	

		<div id="header" class="project-search">
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
        		<div class="heading-menuz clearfix fixme">
			<div class="container-fluid">

                    <ul class="menu-area">
						<li>
							   <!-- <div class="input-space-white-scl whte">	
			                <div class="custom-select-nw-wrapper-two">	
                                    <select name="sources" id="Property-menu" class="custom-select-nw sources" placeholder="Property Type" onChange = "window.alert('hello')">
                                        <option value="none">Property Type</option>
                                        <option value="1">Condos</option>
                                        <option value="1">Town house</option>
                                        <option value="1">Row house</option>
                                        <option value="3">1/2 Duplex</option>
                                        <option value="2">Detached house</option>
                                    </select>
                                    

                                    
				 
		                        </div>  
		              
						</div>-->
								<div class="custom-selects">
                                    <select id="properties"  placeholder="Property Type" onChange = "filterP()">
                                        <option value="none">All property types</option>
                                        <option value="1">Condos</option>
                                        <option value="1">Townhouse</option>
                                        <option value="1">Row house</option>
                                        <option value="3">1/2 duplex</option>
                                        <option value="2">Detached house</option>
                                    </select>
  
		                        </div> 
					</li>
                        <li>
							<!--<div class="input-space-white-scl whte mb-mob">	
                                <div class="custom-select-nw-wrapper">
                                    <select name="sources" id="Cities-menu" class="custom-select-nw sources testing" onChange="window.alert('hello')" placeholder="Cities">
                                        <option value="none">Cities</option>
                                        @foreach($cities as $city)
                                            <option value="{{ $city->city }}">{{ $city->city }}</option>
                                        @endforeach
                                    </select>
                                    
                                    
                                  
                                </div>
		                    </div>  -->
							<div class="custom-selects mb-sp">
							     <select onChange="filterP()" placeholder="Cities" id="cities" >
                                    <option selected value="none">All cities</option>
                                    @foreach($cities as $city)
                                        <option value="{{ $city->city }}">{{ $city->city }}</option>
                                    @endforeach
                                </select>
							</div>
							
						</li>
					
					<!--

						<div id="nav">

						<a class="dropdown-toggle-new main_title" href="javascript:void(0)"><b class="append_text">PROJECTS</b> <i class="zmdi zmdi-caret-down"></i></a>

						<ul class="dropdown-new">

						  <li class="menu title_menu"><a href="javascript:void(0)" class="upper map_div" >Map view</a></li>

						   <li class="title_li"><a href="javascript:void(0)" class="lower title_div">Tile view</a></li> 

						

						</ul>

						</div>-->

				</ul>

			</div>
			</div>

        </div>


        <nav class="sidenav bg-black new-spc" data-sidenav data-sidenav-toggle="#sidenav-toggle">
        
        
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

		

		<div class="h-p"></div>

		<div class="inner-area">

		
			

			<div class="map_row" style="display: none">

			    <!--<iframe width="100%" height="1000" id="gmap_canvas" src="https://maps.google.com/maps?q=Vancover&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>-->

			    <div id="map"></div>

			    

		    </div>

		    

			<div class="container-fluid tile_view">

				<div class="content_area">



					<div class="row" id="projectZone">

						@foreach($projects as $project)
                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <div class="project-box" >

									@if($project->images)
									    <div class="img-wrapp"><img style="cursor: pointer;" onClick="window.location.href='/project-info/{{ $project->type_id }}/{{ $project->id }}'" src="https://skyriseprojects.com/testapi/public/uploads/images/{{ $project->images[0] }}" class="img-responsive"></div>
									@endif

									<div class="p-desc">

										<h3>{{ $project->name }}</h3>

										<!--<div class="star-icon"  style="cursor: pointer;"><i class="zmdi zmdi-favorite"></i></div> -->

									</div>

								    <span>	{{ explode(',', $project->address)[0] }}, {{ explode(',', $project->address)[1] }}, {{ explode(',', $project->address)[2] }}</span>

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

		
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            window.onunload = function() {
                localStorage.setItem('city', $("#cities").val());
                localStorage.setItem('type', $("#properties").val());
                localStorage.setItem('typeIndex', $("#properties").prop('selectedIndex'));
            }
            
            $(document).ready(function () {
                $("#cities").val('none'),
                $("#properties").val('none');
                // return false;
                var city = localStorage.getItem('city');
                var type = localStorage.getItem('type');
                
                if(city == null) {
                    $("#properties, #cities").prop('selectedIndex', 0);
                    filterProjects('none', 'none');
                }
                else {
                    
                    if(city == 'none' && type == 'none') {
                        $("#properties, #cities").prop('selectedIndex', 0);
                        filterProjects('none', 'none');
                    }
                    else {
                        $('#cities').val(city);
                        $("#properties").prop('selectedIndex', localStorage.getItem('typeIndex'));
                        filterProjects(city, type);
                    }
                    
                    
                }
                
                
                
                
            });
            
            $('.custom-options').click(function (event) {
               console.log(event.target); 
            });
            $(document).on("change", "#Cities-menu", function() {
              console.log($(this).val());
              getProjects();
            });
            
            function filterP() {
                var city = $("#cities").val();
                var type = $("#properties").val();
                filterProjects(city, type);    
            }
            
            function filterProjects(city, type) {
                
                var projects = JSON.parse($("body").attr("projects"));
                
                var content = ``;
                
                projects.forEach(function (project, index) {
                    // console.log(project);
                    // return false;
                    
                    //WHEN ALL FILTERS ARE EXCLUDED
                    if(city == 'none' && type == 'none') {
                        content += `
                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <div class="project-box">

									
									<div class="img-wrapp"><img onClick="window.location.href='/project-info/`+project.type_id+`/`+project.id+`'" src="https://skyriseprojects.com/testapi/public/uploads/images/`+project.images[0]+`" style="cursor: pointer;" class="img-responsive"></div>
									<div class="p-desc">

										<h3>`+project.name+`</h3>

										<div class="star-icon"><i class="zmdi zmdi-favorite"></i></div> 

									</div>

								    <span>`+project.address.split(",")[0]+', '+project.address.split(",")[1]+', '+project.address.split(",")[2]+`</span>

								</div>
                            </div>
                         
                         `;
                    }
                    
                    //WHEN ONLY A CITY IS SELECTED
                    if(city != 'none' && type == 'none') {
                     if(project.city == city) {
                         content += `
                            <div class="col-xl-4 col-lg-4 col-md-4" style="cursor: pointer;">
                                <div class="project-box" onClick="window.location.href='/project-info/`+project.type_id+`/`+project.id+`'">

									
									<div class="img-wrapp"><img src="https://skyriseprojects.com/testapi/public/uploads/images/`+project.images[0]+`" class="img-responsive"></div>
									<div class="p-desc">

										<h3>`+project.name+`</h3>

										<div class="star-icon"><i class="zmdi zmdi-favorite"></i></div> 

									</div>

								    <span>`+project.address.split(",")[0]+', '+project.address.split(",")[1]+', '+project.address.split(",")[2]+`</span>

								</div>
                            </div>
                         
                         `;
                     }
                  }
                  
                  //WHEN ONLY A TYPE IS SELECTED
                  if(city == 'none' && type != 'none') {
                      if(project.type_id == type) {
                          if(type == 1) {
                              var selected = $("#properties option:selected").text();
                              if(selected == 'Condos') {
                                  if(project.condos != null) {
                                      content += `
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="project-box" onClick="window.location.href='/project-info/`+project.type_id+`/`+project.id+`'">
            
            									
            									<div class="img-wrapp"><img src="https://skyriseprojects.com/testapi/public/uploads/images/`+project.images[0]+`" class="img-responsive"></div>
            									<div class="p-desc">
            
            										<h3>`+project.name+`</h3>
            
            										<div class="star-icon"><i class="zmdi zmdi-favorite"></i></div> 
            
            									</div>
            
            								    <span>`+project.address.split(",")[0]+', '+project.address.split(",")[1]+', '+project.address.split(",")[2]+`</span>
            
            								</div>
                                        </div>
                                     
                                     `;
                                  }
                              }
                              if(selected == 'Townhouse') {
                                  if(project.townhouse != null) {
                                      content += `
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="project-box" onClick="window.location.href='/project-info/`+project.type_id+`/`+project.id+`'">
            
            									
            									<div class="img-wrapp"><img src="https://skyriseprojects.com/testapi/public/uploads/images/`+project.images[0]+`" class="img-responsive"></div>
            									<div class="p-desc">
            
            										<h3>`+project.name+`</h3>
            
            										<div class="star-icon"><i class="zmdi zmdi-favorite"></i></div> 
            
            									</div>
            
            								    <span>`+project.address.split(",")[0]+', '+project.address.split(",")[1]+', '+project.address.split(",")[2]+`</span>
            
            								</div>
                                        </div>
                                     
                                     `;
                                  }
                              }
                              if(selected == 'Row house') {
                                  if(project.rowhouse != null) {
                                      content += `
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="project-box" onClick="window.location.href='/project-info/`+project.type_id+`/`+project.id+`'">
            
            									
            									<div class="img-wrapp"><img src="https://skyriseprojects.com/testapi/public/uploads/images/`+project.images[0]+`" class="img-responsive"></div>
            									<div class="p-desc">
            
            										<h3>`+project.name+`</h3>
            
            										<div class="star-icon"><i class="zmdi zmdi-favorite"></i></div> 
            
            									</div>
            
            								    <span>`+project.address.split(",")[0]+', '+project.address.split(",")[1]+', '+project.address.split(",")[2]+`</span>
            
            								</div>
                                        </div>
                                     
                                     `;
                                  }
                              }
                          }
                          else {
                              content += `
                                <div class="col-xl-4 col-lg-4 col-md-4">
                                    <div class="project-box" onClick="window.location.href='/project-info/`+project.type_id+`/`+project.id+`'">
    
    									
    									<div class="img-wrapp"><img src="https://skyriseprojects.com/testapi/public/uploads/images/`+project.images[0]+`" class="img-responsive"></div>
    									<div class="p-desc">
    
    										<h3>`+project.name+`</h3>
    
    										<div class="star-icon"><i class="zmdi zmdi-favorite"></i></div> 
    
    									</div>
    
    								    <span>`+project.address.split(",")[0]+', '+project.address.split(",")[1]+', '+project.address.split(",")[2]+`</span>
    
    								</div>
                                </div>
                             
                             `;
                          }
                      }
                  }
                  
                  
                  //WHEN BOTH TYPE AND CITY ARE SELECTED
                  if(city != 'none' && type != 'none') {
                      if(project.type_id == type && project.city == city) {
                          if(type == 1) {
                              var selected = $("#properties option:selected").text();
                              if(selected == 'Condos') {
                                  if(project.condos != null) {
                                      content += `
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="project-box" onClick="window.location.href='/project-info/`+project.type_id+`/`+project.id+`'">
            
            									
            									<div class="img-wrapp"><img src="https://skyriseprojects.com/testapi/public/uploads/images/`+project.images[0]+`" class="img-responsive"></div>
            									<div class="p-desc">
            
            										<h3>`+project.name+`</h3>
            
            										<div class="star-icon"><i class="zmdi zmdi-favorite"></i></div> 
            
            									</div>
            
            								    <span>`+project.address.split(",")[0]+', '+project.address.split(",")[1]+', '+project.address.split(",")[2]+`</span>
            
            								</div>
                                        </div>
                                     
                                     `;
                                  }
                              }
                              if(selected == 'Townhouse') {
                                  if(project.townhouse != null) {
                                      content += `
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="project-box" onClick="window.location.href='/project-info/`+project.type_id+`/`+project.id+`'">
            
            									
            									<div class="img-wrapp"><img src="https://skyriseprojects.com/testapi/public/uploads/images/`+project.images[0]+`" class="img-responsive"></div>
            									<div class="p-desc">
            
            										<h3>`+project.name+`</h3>
            
            										<div class="star-icon"><i class="zmdi zmdi-favorite"></i></div> 
            
            									</div>
            
            								    <span>`+project.address.split(",")[0]+', '+project.address.split(",")[1]+', '+project.address.split(",")[2]+`</span>
            
            								</div>
                                        </div>
                                     
                                     `;
                                  }
                              }
                              if(selected == 'Row house') {
                                  if(project.rowhouse != null) {
                                      content += `
                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                            <div class="project-box" onClick="window.location.href='/project-info/`+project.type_id+`/`+project.id+`'">
            
            									
            									<div class="img-wrapp"><img src="https://skyriseprojects.com/testapi/public/uploads/images/`+project.images[0]+`" class="img-responsive"></div>
            									<div class="p-desc">
            
            										<h3>`+project.name+`</h3>
            
            										<div class="star-icon"><i class="zmdi zmdi-favorite"></i></div> 
            
            									</div>
            
            								    <span>`+project.address.split(",")[0]+', '+project.address.split(",")[1]+', '+project.address.split(",")[2]+`</span>
            
            								</div>
                                        </div>
                                     
                                     `;
                                  }
                              }
                          }
                          else {
                              content += `
                                <div class="col-xl-4 col-lg-4 col-md-4">
                                    <div class="project-box" onClick="window.location.href='/project-info/`+project.type_id+`/`+project.id+`'">
    
    									
    									<div class="img-wrapp"><img src="https://skyriseprojects.com/testapi/public/uploads/images/`+project.images[0]+`" class="img-responsive"></div>
    									<div class="p-desc">
    
    										<h3>`+project.name+`</h3>
    
    										<div class="star-icon"><i class="zmdi zmdi-favorite"></i></div> 
    
    									</div>
    
    								    <span>`+project.address.split(",")[0]+', '+project.address.split(",")[1]+', '+project.address.split(",")[2]+`</span>
    
    								</div>
                                </div>
                             
                             `;
                          }
                      }
                  }
                  
                });

                $("#projectZone").html(content);
                
            }
        </script>
		<!--<script-->

  <!--        src="https://maps.googleapis.com/maps/testapi/js?key=AIzaSyAOjwrWcelQApQWmxtL-A5zSONErEdk0i0&callback=initMap&libraries=&v=weekly"-->

  <!--        async-->

  <!--      ></script>-->

        

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

            

            // function initMap() {

            //   var map = new google.maps.Map(document.getElementById("map"), {

            //     zoom: 8,

            //     center: { lat: -34.397, lng: 150.644 },

            //   });

            //   const geocoder = new google.maps.Geocoder();

            //   geocodeAddress(geocoder, map);

              

            //  }

            

            // function geocodeAddress(geocoder, resultsMap) {

            //     var properties = JSON.parse($('body').attr('properties'));

                

            //     var address = "";

            //     var name = "";

                

                

            //     // var marker = null;

            //     var image = null;

            //     var price = null;

            //     // var infoWindow = null;

                

            //     properties.forEach(function (property, index) {

                    

            //         // var property = property;

            //         address = property.address;

            //         name = property.name;

            //         price = property.price;

            //         image = property.images[0]

            //         // console.log(address, name, price);

            //         // console.log(property.images[0]);

                    

                 

            //         geocoder

            //         .geocode({ address: address })

            //         .then(({ results }) => {

            //           resultsMap.setCenter(results[0].geometry.location);

                      

            //         var contentString = `

            //             <img style="cursor: pointer;" src="https://skyriseprojects.com/testapi/public/uploads/images/`+property.images[0]+`" class="img-responsive"  onClick="window.location.href='/project-info/`+property.type_id+`/`+property.id+`'">

            //             <br>

            //             <p style="padding: 10px 20px 0px 15px;font-size: 15px;font-weight: 700;">`+property.name+`</he>

            //             <p style="font-size: 12px;padding: 5px 15px 0px;">`+property.price+`</p>

            //             <p style="font-size: 12px;padding: 5px 15px 9px;">`+property.address+`</p>

            //         `;

                    

            //         // console.log(contentString);

                  

            //         //   var infowindow = new google.maps.InfoWindow({

            //         //       content: contentString,

            //         //   });

            //         //   console.log(property);

            //           var marker = new google.maps.Marker({

            //             map: resultsMap,

            //             position: results[0].geometry.location,

            //             title: property.name, 
            //             icon: 'https://skyriseprojects.com/assets/icons/pin-hd-new.svg'

            //           });

                      

            //           marker.addListener("mouseover", () => {

            //             var infowindow = new google.maps.InfoWindow({

            //               content: contentString,

            //             });

                      

            //             infowindow.open({

            //               anchor: marker,

            //               map,

            //               shouldFocus: false,

            //             });

            //           });

                      

                      

                      

                      

            //         })

            //         .catch((e) =>

            //           alert("Geocode was not successful for the following reason: " + e)

            //         );

                    

            

            //     })

                

                

            // }

        </script>

        

		

		<script src="assets/js/bootstrap.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

		<script src="assets/js/pushy.min.js"></script> 
		<script type="text/javascript" src="assets/js/dropdown.js"></script>
        <script type="text/javascript" src="/assets/sidenav.min.js"></script>
		<script>$('[data-sidenav]').sidenav();</script>
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

			$('.dropdown-toggle-new').click(function() { 
				$(this).next('.dropdown-new').toggle();


			});
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

				$('.tile_view').css('display', 'none');

				

			})

			

			$('.lower').click(function(){

				$('.map_row').css('display','none');

				$('.tile_view').css('display','block');

				

			})

			$('.lgt').click(function(){

			if($('.dropdown-new.lft').css('display') == 'none')

				{

					$('.lgt').addClass('active');

				}else{	

					$('.lgt').removeClass('active');

				}

			})
$(document).click(function(){
	if($('.dropdown-menu.bk').hasClass('show')){
       $('.dropdown-menu.bk').removeClass('show');

	}
});
$(document).click(function(){

			if($('.dropdown-new.lft').css('display') == 'none')

				{

					$('.lgt').addClass('active');

				}else{	

					$('.lgt').removeClass('active');

				}

			})


			
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
		<script>
		var fixmeTop = $('.fixme').offset().top;
$(window).scroll(function() {
    var currentScroll = $(window).scrollTop();
    if (currentScroll >= fixmeTop) {
        $('.fixme').css({
            position: 'fixed',
            top: '60',
            left: '0',
			right: '0',
			
        });
    } else {
        $('.fixme').css({
            position: 'static',
			 top: '60',
        });
    }
});
		</script>

		 <!-- Async script executes immediately and must be after any DOM elements used in callback. -->

        

	</body>

</html>