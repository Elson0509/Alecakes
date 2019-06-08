@extends('layouts.app')

@section('title')
    Ale Cakes - {{$cake->title}}
@endsection

@section('content')

<div class="conteiner-fluid bg-secondary">
        <div class="row justify-content-center">
            <div class="col-8">
                <h1 class="text-light cake-title">{{$cake->title}}</h1>
                <p class="text-light cake-text">{{$cake->text}}</p>
                <span class="underline pt-2"></span>
            </div>
        </div> 
        @foreach($cake->card->card_imgs as $img)
            <div class="row justify-content-center">
                <div class="col-8">
                    <a href="/img/cakes/{{$img->img_path}}"><img src="/img/cakes/{{$img->img_path}}" class="img-fluid p-4"></a>
                </div>
            </div>   
            @if(!$loop->last)
                <div class="row justify-content-center">
                    <div class="col-8">
                        <span class="underline"></span>
                    </div>
                </div>  
            @endif
        @endforeach
</div>

@endsection

@section('personaljs')
    <script type="text/javascript" src="/js/cake.js"></script>
@endsection