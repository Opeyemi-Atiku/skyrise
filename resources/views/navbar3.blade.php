				 <script> 
			 $(".custom-select-nw").each(function() {
  var classes = $(this).attr("class"),
      id      = $(this).attr("id"),
      name    = $(this).attr("name");
  var template =  '<div class="' + classes + '">';
      template += '<span class="custom-select-nw-trigger">' + $(this).attr("placeholder") + '</span>';
      template += '<div class="custom-options">';
      $(this).find("option").each(function() {
        template += '<span class="custom-option ' + $(this).attr("class") + '" data-value="' + $(this).attr("value") + '">' + $(this).html() + '</span>';
      });
  template += '</div></div>';
  
  $(this).wrap('<div class="custom-select-nw-wrapper"></div>');
  $(this).hide();
  $(this).after(template);
});
$(".custom-option:first-of-type").hover(function() {
  $(this).parents(".custom-options").addClass("option-hover");
}, function() {
  $(this).parents(".custom-options").removeClass("option-hover");
});
$(".custom-select-nw-trigger").on("click", function() {
  $('html').one('click',function() {
    $(".custom-select-nw").removeClass("opened");

  });
  $(this).parents(".custom-select-nw").toggleClass("opened");
  event.stopPropagation();
});
$(".custom-option").on("click", function() {
  $(this).parents(".custom-select-nw-wrapper").find("select").val($(this).data("value"));
  $(this).parents(".custom-options").find(".custom-option").removeClass("selection");
  $(this).addClass("selection");
  $(this).parents(".custom-select-nw").removeClass("opened");
  $(this).parents(".custom-select-nw").find(".custom-select-nw-trigger").text($(this).text());
});

$(".custom-option span").on("click", function() {
	if($('.custom-select-nw.sources').hasClass('opened')){
        console.log('aaa');
		 $('.fp-viewing-0').removeClass('pushy-open-right');
		$('body.fp-viewing-0').addClass('pushy-open-right1');
		$('.custom-select-nw.sources.testing').addClass('opened');


		
	}
});

</script>

<div id="header">

			<nav class="navbar navbar-expand-lg navbar-light bg-dark">

				<a class="navbar-brand" href="/"><img src="/assets/images/logo.png" alt="Skyrise-logo" /></a>

				<button class="menu-btn d-none"><img src="/assets/images/h-menu.svg" alt="Skyrise-menu" class="m-img" /></button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">

					<ul class="navbar-nav mr-auto ml-auto">

						<li class="nav-item dropdown">

							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

							PROJECTS</a>

							<div class="dropdown-menu bk" aria-labelledby="navbarDropdown">

								<form method="post" action="/search-project">

									{{ csrf_field() }}

									

									<div class="input-space-white-scl">	

										<span class="dropdown-el">

										    <input type="radio" name="sortType" value="all" checked="checked" id="Property"><label for="Property" class="d-n">Cities</label>

										    @foreach($cities as $city)

										        @if($city->city != '')

										            <input type="radio" name="sortType" value="{{ $city->city }}" id="{{ $city->city }}"><label for="{{ $city->city }}">{{ $city->city }}</label>

										        @endif

										    @endforeach

								

										</span>

									</div>

									<div class="input-space-white-scl">	

										<span class="dropdown-el">

    										<input type="radio" name="property" value="0" checked="checked" id="City"><label for="City" class="d-n">Property Type</label>

    										<input type="radio" name="property" value="1" id="City-one"><label for="City-one">Attached</label>

    										<input type="radio" name="property" value="2" id="City-two"><label for="City-two">Detached</label>

    										<input type="radio" name="property" value="3" id="City-three"><label for="City-three">Duplex</label>

										</span>

									</div>

									

									<div class="input-space-white mb-0">

										<input type="submit" value="GO" />

									</div>

								</form>

							</div>

						</li>

						<li class="nav-item active">

							<a class="nav-link" href="/contact">Contact <span class="sr-only">(current)</span></a>

						</li>

					</ul>

					<ul class="navbar-right ex-spcz">

						<!-- <li>

							<a href="#">SIGN UP</a>

						</li>

						<li class=" dropdown">

							<a class="hdl dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

							LOG IN

							</a>

							<div class="dropdown-menu dropdown-menu-right log" aria-labelledby="navbarDropdown">

								<form class="login-form">

									<div class="input-space-white">

										<input type="email" placeholder="Email"/>

									</div>

									<div class="input-space-white">

										<input type="password" placeholder="Password" />

									</div>

									<div class="input-space-white">

										<input type="submit" value="LOGIN" />

									</div>

									<a href="javascript:void(0)" class="white-link forgot">Forgot your password?</a>

								</form>

								<form class="forgot-form">

									<div class="input-space-white">

										<input type="email" placeholder="Enter recovery email"/>

									</div>

									<div class="input-space-white">

										<input type="submit" value="RECOVER PASSWORD" />

									</div>

								</form>

							</div>

						</li> -->

						<li>

							<button class="menu-btn"><i class="zmdi zmdi-menu"></i></button>

						</li>

					</ul>

				</div>

			</nav>

		</div>

		<nav class="pushy pushy-right" data-focus="#first-link">

			<div class="pushy-content">

				<ul>

					<li class="pushy-link"><a href="/">HOME</a></li>

					<li class="pushy-submenu">

						<button>PROJECTS</button>

						<ul>

							<li class="pushy-link">

								<form method="post" action="/search-project">

									{{ csrf_field() }}

									<div class="exp-p">

									    <div class="input-space-white-scl">	

											<span class="dropdown-el">

											    <input type="radio" name="sortType" value="all" checked="checked" id="Propertyy"><label for="Propertyy" class="d-n">Cities</label>

											    @foreach($cities as $city)

    										        @if($city->city != '')

    										            <input type="radio" name="sortType" value="{{ $city->city }}" id="{{ $city->city }}s"><label for="{{ $city->city }}s">{{ $city->city }}</label>

    										        @endif

    										    @endforeach

											</span>

										</div>

										

										<div class="input-space-white-scl">	

    										<span class="dropdown-el">

        										<input type="radio" name="property" value="0" checked="checked" id="City1"><label for="City1" class="d-n">Property Type</label>

        										<input type="radio" name="property" value="1" id="City-one1"><label for="City-one1">Attached</label>

        										<input type="radio" name="property" value="2" id="City-two1"><label for="City-two1">Detached</label>

        										<input type="radio" name="property" value="3" id="City-three1"><label for="City-three1">Duplex</label>

    										</span>

    									</div>

    									

										

										

										<div class="input-space-white mb-0">

											<input type="submit" value="GO">

										</div>

									</div>

								</form>

							</li>

						</ul>

					</li>

					<li class="pushy-link"><a href="/contact">CONTACT</a></li>

					<!-- <li class="pushy-submenu">

						<button>ACCOUNT</button>

						<ul class="sub-ul">

							<li class="pushy-link"><a href="#">Profile</a></li>

							<li class="pushy-link"><a href="#">Security</a></li>

						</ul>

					</li> -->

					<!-- <li class="pushy-link"><a href="#">LOGOUT</a></li> -->

				</ul>

			</div>

		</nav>