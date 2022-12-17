<div id="header">

   <nav class="navbar navbar-expand-lg navbar-light bg-darkz dynamic">

			<a class="navbar-brand" href="/"><img src="/assets/images/logo.png" alt="Skyrise-logo" /></a>

			<button class="menu-btn d-none toggle" id="sidenav-toggle"><img src="/assets/images/h-menu.svg" alt="Skyrise-menu" class="m-img" /></button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">

				<ul class="navbar-nav mr-auto ml-auto">

					
						<li class="nav-item">

						<a class="nav-link" href="/search-projects">PROJECTS <span class="sr-only">(current)</span></a>

					</li>
	<!--<li class="nav-item">

						<a class="nav-link" href="/contact">VIDEOS <span class="sr-only">(current)</span></a>

					</li>-->
					<li class="nav-item">

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

				<!--	<li>

						<button class="menu-btn toggle" id="sidenav-toggle"><i class="zmdi zmdi-menu"></i></button>

					</li>-->

				</ul>

			</div>

		</nav>

</div>


<nav class="sidenav" data-sidenav data-sidenav-toggle="#sidenav-toggle">


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
			<!--<li>-->
			<!--	<a href="javascript:;" data-sidenav-dropdown-toggle class="active">-->

			<!--		<span class="sidenav-link-title">PROJECTS</span>-->
			<!--		<span class="sidenav-dropdown-icon show" data-sidenav-dropdown-icon>-->
			<!--			<i class="zmdi zmdi-plus"></i>-->

			<!--		</span>-->
			<!--		<span class="sidenav-dropdown-icon" data-sidenav-dropdown-icon>-->
			<!--			<i class="zmdi zmdi-minus"></i>-->
			<!--		</span>-->
			<!--	</a>-->

			<!--	<ul class="sidenav-dropdown" data-sidenav-dropdown>-->
			<!--		<li>-->
			<!--			<a href="">Profile</a>-->
			<!--		</li>-->
			<!--		<li>-->
			<!--			<a href="">Security</a>-->
			<!--		</li>-->

			<!--	</ul>-->
			<!--</li>-->
			<!--<li>-->
			<!--	<a href="javascript:;">LOGOUT</a>-->
			<!--</li>-->


		</ul>


</nav>


<nav class="pushy pushy-right d-none" data-focus="#first-link">

			<div class="pushy-content">

				<ul>

					<li class="pushy-link"><a href="/">HOME</a></li>

				

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
		
