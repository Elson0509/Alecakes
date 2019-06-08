@extends('layouts.app')

@section('title', 'Ale Cakes - Price')

@section('content')

<div class="conteiner-fluid recheios bg-secondary">
    <div class="row justify-content-center">
        <div class="col-12">
                <p id="text_price">{{$info_about_language->price_info->text}}</p>
        </div>
        <div class="price_container">
            <figure id="price_figure">
                <img src="\img\price.jpg" class="img-fluid" alt="cake pricing"/>
                @foreach($info_about_language->prices as $price)
                <figcaption id="size{{$loop->iteration}}" class="size">{{$price->size}} cm</figcaption>
                <figcaption id="price{{$loop->iteration}}" class="price">{{$price->people}} {{$info_about_language->price_info->people_text}} - {{$info_about_language->currency}}{{$price->price}}</figcaption>
                @endforeach
            </figure>
        </div>
    </div>
</div>

@endsection

@section('personaljs')
    <script type="text/javascript" src="/js/price.js"></script>
@endsection