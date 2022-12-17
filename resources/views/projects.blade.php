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
		<title>Projects</title>
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/easy-responsive-tabs.css">
		<link href="assets/images/fav-icon.png" rel="icon">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
		<link href="assets/style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="assets/css/pushy.css">
		<link rel="stylesheet" href="/assets/sidenav.min.css">
	</head>
	<style>
		div#navs {
		position: relative;
		float: left;
		margin-top: -5px;
		}
	</style>
	<body>
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
												<input type="radio" name="radio"  />
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
			<div class="map_row" style="display: none"><iframe width="100%" height="1000" id="gmap_canvas" src="https://maps.google.com/maps?q=Vancover&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
			<div class="container-fluid">
				<div class="content_area">
					<div class="row">
						<div class="col-md-4">
							<div class="project-box">
								<img src="assets/images/p1.jpg" class="img-responsive"> 
								<div class="p-desc">
									<h3>KING'S LANDING</h3>
									<div class="star-icon"><i class="zmdi zmdi-favorite"></i></div>
								</div>
								<ul class="project-desc clearfix">
									<li>Address:</li>
									<li>1284 Kingsway</li>
									<li>City:</li>
									<li>Vancouver, BC</li>
									<li>Base price:</li>
									<li>$569,800</li>
								</ul>
							</div>
						</div>
						<div class="col-md-4">
							<div class="project-box">
								<img src="assets/images/p2.jpg" class="img-responsive"> 
								<div class="p-desc">
									<h3>THE CITY OF LOUGHEED</h3>
									<div class="star-icon"><i class="zmdi zmdi-favorite"></i></div>
								</div>
								<ul class="project-desc clearfix">
									<li>Address:</li>
									<li>239 North Rd.</li>
									<li>City:</li>
									<li>Burnaby, BC</li>
									<li>Base price:</li>
									<li>$489,500</li>
								</ul>
							</div>
						</div>
						<div class="col-md-4">
							<div class="project-box">
								<img src="assets/images/p3.jpg" class="img-responsive"> 
								<div class="p-desc">
									<h3>FORTE</h3>
									<div class="star-icon"><i class="zmdi zmdi-favorite"></i></div>
								</div>
								<ul class="project-desc clearfix">
									<li>Address:</li>
									<li>787 E. Hastings</li>
									<li>City:</li>
									<li>Burnaby, BC</li>
									<li>Base price:</li>
									<li>$449,000</li>
								</ul>
							</div>
						</div>
						<div class="col-md-4">
							<div class="project-box">
								<img src="assets/images/p4.jpg" class="img-responsive"> 
								<div class="p-desc">
									<h3>CONCORD BRENTWOOD - PH. 2</h3>
									<div class="star-icon"><i class="zmdi zmdi-favorite"></i></div>
								</div>
								<ul class="project-desc clearfix">
									<li>Address:</li>
									<li>685 Patterson Ave.</li>
									<li>City:</li>
									<li>Burnaby, BC</li>
									<li>Base price:</li>
									<li>$619,800</li>
								</ul>
							</div>
						</div>
						<div class="col-md-4">
							<div class="project-box">
								<img src="assets/images/p5.jpg" class="img-responsive"> 
								<div class="p-desc">
									<h3>567 CLARKE + COMO</h3>
									<div class="star-icon"><i class="zmdi zmdi-favorite"></i></div>
								</div>
								<ul class="project-desc clearfix">
									<li>Address:</li>
									<li>384 Taylor Ave.</li>
									<li>City:</li>
									<li>Burnaby, BC</li>
									<li>Base price:</li>
									<li>$539,800</li>
								</ul>
							</div>
						</div>
						<div class="col-md-4">
							<div class="project-box">
								<img src="assets/images/p6.jpg" class="img-responsive"> 
								<div class="p-desc">
									<h3>6040 GLENEAGLES DR.</h3>
									<div class="star-icon"><i class="zmdi zmdi-favorite"></i></div>
								</div>
								<ul class="project-desc clearfix">
									<li>Address:</li>
									<li>787 E. Hastings</li>
									<li>City:</li>
									<li>West Vancouver, BC</li>
									<li>Base price:</li>
									<li>$449,000</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br>
		<br>
		<br>
		<br>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
			$('.dropdown-toggle-new').click(function() { $(this).next('.dropdown-new').toggle();
			});
			
			$(document).click(function(e) 
			{ 
			var target = e.target; 
			if (!$(target).is('.dropdown-toggle-new') && !$(target).parents().is('.dropdown-toggle-new')) 
			//{ $('.dropdown').hide(); }
			  { $('.dropdown-new').toggle(); }
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
			      if(evt.target.id == "navs")
			      	
			         return;
			      //For descendants of menu_content being clicked, remove this check if you do not want to put constraint on descendants.
			      if($(evt.target).closest('#navs').length){
			      	
			      }else{
			       	$('.dropdown-new.lft').css('display','none');
			       	$('.dropdown-toggle-new.lgt').removeClass('active');
			       	evt.stopPropagation();
			        evt.preventDefault();
			      }
			      return;             
			});
		</script>
	</body>
</html>