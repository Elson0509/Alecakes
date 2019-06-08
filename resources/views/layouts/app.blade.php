<!DOCTYPE html>
<html lang="pt-br">
<head>
    @component('components.head.meta')
    @endcomponent
    <title>@yield('title')</title>
    @component('components.head.linkscss')
    @endcomponent
</head>
<body>
    <!--Top-->
    <div class="container-fluid bg-top">
		<header class="container">
			<!--menu-->
			<nav class="navbar navbar-expand-lg navbar-dark">
				<a href="/" class="navbar-brand">
					<img src="/img/logo.jpg" height="70" class="d-inline-block align-top">
					<p class="logotext">Ale Cakes</p>
				</a>
				<!--adding menu-->
				<!--buttons for smaller viewport-->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu"	aria-controls="menu" aria-expanded="false" aria-label="Menu Colapso">
					<!--ícone do botão-->
					<!--<span class="navbar-toggler-icon"></span>-->
					<i class="fas fa-bars"></i>
				</button>
				<!--menu area-->
				<div id="menu" class="collapse navbar-collapse">
					<!--adding menu items-->
					<ul class="navbar-nav mr-auto">
                        @foreach($info_about_language->menu_links as $ml)
                            <li class="nav-item">
							    <a href="{{$ml->link}}" class="nav-link font-weight-bold">{{$ml->name}}</a>
						    </li>
                        @endforeach
					</ul>
					<!--language dropdown-->
                    <div class="dropdown">
                        <a class="nav-item nav-link dropdown-toggle mytoggle" data-toggle="dropdown" id="lang" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-globe-americas iconglobe"><text class="font-weight-bold langtext">&ensp;Language</text></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="lang">
                            @foreach($languages as $lg)
                                <a class="dropdown-item {{$lg->active ? 'active' : ''}}" id="{{$lg->language}}sl" onclick="changeLanguage('{{strtolower($lg->language)}}'{{isset($cake)?','.$cake->card_id:''}})">{{strtoupper($lg->language)}}</a>
                            @endforeach
                        </div>
                    </div>
				</div>
			</nav>
		</header>
	</div>
    <div class="container-fluid gradientbar">
	
	</div>
    <!--EndTop-->
    
    @yield('content')
    
    <!--Footer-->
    <footer class="container-fluid bg-dark">
		<div class="footer">
			<div class="row justify-content-center">
				<div class="col-md-5 col-sm-9 my-2">
					<div class="about p-1">
						<img class="rounded-circle m-2" src="/img/perfil.jpg">
						<h1 class="text-light mb-3">Alessandra Rodrigues</h1>
						<span class="underline"></span>
						<p class="font-weight-bold mt-2 text-footer">{{$info_about_language->footer_info->text}}</p>
						<span class="underline"></span>
						<div id="iconnav" class="btn-group" role="group" aria-label="social medias">
							<a href="https://web.facebook.com/Bolosdakasa-188837901725708/" target="_blank"><i class="fab fa-facebook"></i></a>
							<a href="#"><i class="fab fa-linkedin"></i></a>
							<a href="#"><i class="fab fa-instagram"></i></a>
							<a href="#"><i class="fab fa-whatsapp-square"></i></a>
						</div>
						<p><a href="mailto:alecakes@gmail.com">alecakes@gmail.com</a></p>
						<i class="iconphone fas fa-mobile-alt text-light mb-2">&ensp;(55 21) 98077-0879</i>
						
						<span class="underline"></span>
						<i class="iconmarker fas fa-map-marker-alt text-light mt-2"></i>
						<p>Pavuna - Rio de Janeiro/RJ</p>
					</div>
				</div>
			</div>    
		</div>
    </footer>
    <!--EndFooter-->
    @component('components.body.js')
    @endcomponent
    
    {{--This part is for a specific javascript for the page--}}
    @hassection('personaljs')
        @yield('personaljs')
    @endif
</body>
</html>