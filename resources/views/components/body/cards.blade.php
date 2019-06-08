<!--card session-->
    <div class="container-fluid">
        <div class="row">
            <div class="card-group">
                @foreach($card_infos as $ci)
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="card m-2 border-warning">
                        <a href="{{$ci->card->link}}">
                            <img class="card-img-top" src="img/cakes/{{$ci->card->img_src}}" alt="{{$ci->imgalt}}">
                        </a>
                        <div class="card-body">
                            <h3 class="card-title">{{$ci->title}}</h3>
                            <p class="card-text card-description">{{$ci->text}}</p>
                            <p class="card-text"><small class="text-muted">{{$ci->card->date}}</small></p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>