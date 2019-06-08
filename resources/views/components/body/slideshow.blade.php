{{--Entrada: $imgSlideshow: lista strig com nome de arquivos de imagens--}}

<!--carousel-->
        <div id="slideshow" class="carousel slide" data-ride="carousel" data-interval="2500">
            <ol class="carousel-indicators">
                @foreach( $imgSlideshow as $img )
                    <li data-target="#slideshow" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                @endforeach
            </ol>
            <!--carousel items-->
            <div class="carousel-inner">
                @foreach( $imgSlideshow as $img )
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <a href="#">
                            <img src="img/slideshow/{{$img->img_path}}" class="d-block w-100" alt="{{$img->img_alt}}">
                        </a>
                    </div>
                @endforeach
            </div>
            <!--carrousel navigation-->
			<a href="#slideshow" class="carousel-control-prev" role="button" data-slide="prev">
				<i class="fas fa-caret-square-left text-info" id="slideControl" aria-hidden="true"></i> 
				<!--<span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
				<span class="sr-only">Anterior</span>
			</a>
			<a href="#slideshow" class="carousel-control-next" role="button" data-slide="next">
				<i class="fas fa-caret-square-right text-info" id="slideControl" aria-hidden="true"></i>
				<span class="sr-only">Anterior</span>
			</a>
		</div>
<!--endcarousel-->
