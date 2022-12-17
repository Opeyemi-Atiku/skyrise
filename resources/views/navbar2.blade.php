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
    									<div class="custom-select-nw-wrapper">
    										<select name="sortType" id="Cities" class="custom-select-nw sources" placeholder="Cities">
    
    											
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
									
    								<div class="input-space-white-scl">
    									<div class="custom-select-nw-wrapper">
    										<select name="sortType" id="Cities" class="custom-select-nw sources" placeholder="Cities">
    
    											
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