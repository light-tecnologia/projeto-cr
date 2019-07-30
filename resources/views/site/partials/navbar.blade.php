<header class="header_area">
	<div class="main_menu">
		<nav class="navbar navbar-expand-lg navbar-light fixed-top">
			<div class="container box_1620">
				<a class="navbar-brand logo_h" href="{{ route('site.index') }}">
					<img src="{{ asset('img/logo-menu.png') }}" width="160" alt="">
				</a>
				<button class="border-0 navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<img src="{{asset('img/icones/menu.png')}}">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
					<ul class="nav navbar-nav menu_nav justify-content-end">
						<li class="nav-item"><a class="nav-link" href="{{ route('site.index') }}">Inicio</a></li> 
						<li class="nav-item"><a class="nav-link" href="{{ route('site.institucional') }}">Institucional</a></li> 
						<li class="nav-item submenu dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Serviços</a>
							<ul class="dropdown-menu">
								<li class="nav-item">
									<a class="nav-link" href="#">Certidões Online</a>                 
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Protocolo Eletrônico</a>                 
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Pesquisa de Imóveis</a>                 
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Pesquisa de Protesto</a>                 
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Intimação Eletrônica de Protesto</a>                 
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Indisponibilidade de bens</a>                 
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Autenticidade de Documentos</a>                 
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Chamados</a>                 
								</li>
							</ul>
						</li>

						<li class="nav-item submenu dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
							aria-expanded="false">Ajuda</a>
							<ul class="dropdown-menu">
								<li class="nav-item"><a class="nav-link" href="{{ route('site.cartorios') }}">Cartórios</a></li>
								<li class="nav-item"><a class="nav-link" href="{{ route('site.emolumentos') }}">Emolumentos</a></li>
							</ul>
						</li>
						<li class="nav-item"><a class="nav-link" href="{{ route('site.suporte') }}">Suporte</a></li>
					</ul>

					<div class="nav-right text-center text-lg-right py-4 py-lg-0">
						<a class="btn btn-outline-info" href="#" data-toggle="modal" data-target="#login">Login</a>
						<a class="btn btn-outline-info" href="/site/cadastro">Cadastrar</a>
					</div>
				</div> 
			</div>
		</nav>
	</div>
</div>
</header>
@include ('site.auth.modalLogin')