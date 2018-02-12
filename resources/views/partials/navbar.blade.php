<Aheader id="fh5co-header" role="banner">
	<div class="container">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
		@guest
		<div id="fh5co-logo"><a href="/"><img src="{{ asset('img/logo.jpg') }}" width="150px" height="150px"></a></div>
		<nav id="fh5co-main-nav" role="navigation">
			<ul>
				<li><a href="/">Home</a></li>
				<li class="has-sub">
					<div class="drop-down-menu">
						<a href="#">Servicios</a>
						<div class="dropdown-menu-wrap">
							<ul>
								<li><a href="iSession">Debates</a></li>
								<li><a href="iSession">Denuncias</a></li>
								<li><a href="iSession">Intercambios</a></li>
							</ul>
						</div>
					</div>
				</li>
				<li class="has-sub">
					<div class="drop-down-menu">
						<a href="#">Perfil</a>
						<div class="dropdown-menu-wrap">
							<ul>
								<li><a href="login">Iniciar Sesion</a></li>
								<li><a href="register">Registrarse</a></li>
								
							</ul>
						</div>
					</div>
			</ul>
		</nav>
	</div>
	@else
	<div id="fh5co-logo"><a href="/"><img src="{{ asset('img/logo.jpg') }}" width="150px" height="150px"></a></div>
		<nav id="fh5co-main-nav" role="navigation">
			<ul>
				<li><a href="/">Home</a></li>
				<li class="has-sub">
					<div class="drop-down-menu">
						<a href="#">Servicios</a>
						<div class="dropdown-menu-wrap">
							<ul>
								<li><a href="debate">Debates</a></li>
								<li><a href="denuncia">Denuncias</a></li>
								<li><a href="intercambio">Intercambios</a></li>
							</ul>
						</div>
					</div>
				</li>
				<li class="has-sub">
					<div class="drop-down-menu">
						<a href="#">{{ Auth::user()->name }}</a>
						<div class="dropdown-menu-wrap">
							<ul>
								<li><a href="#">Perfil</a></li>
								 <li>
									<a href="{{ route('logout') }}"
										onclick="event.preventDefault();
												 document.getElementById('logout-form').submit();">
										Logout
									</a>

									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										{{ csrf_field() }}
									</form>
								</li>
								
							</ul>
						</div>
					</div>
			</ul>
		</nav>
	</div>
@endguest
</header>
