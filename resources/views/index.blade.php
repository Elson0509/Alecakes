@extends('layouts.app')

@section('title', 'Ale Cakes')

@section('content')

    <div class="container-fluid">
    @component('components.body.slideshow', ['imgSlideshow'=>$imgSlideshow])
    @endcomponent
    </div>

        <!--Parallax session-->
        <div class="container-fluid">
            <div class="parallax">
                <div class="py-4">
                    <section class="container">
                        <div class="col-12">
                            <h1>{{$info_about_language->parallax_info->title}}</h1>
                            <span class="underline"></span>
                            <p class="font-weight-bold pt-2" id="par1">{{$info_about_language->parallax_info->text1}}</p>
                            <p class="font-weight-bold pt-2" id="par2">{{$info_about_language->parallax_info->text2}}</p>
                            <p><i class="fas fa-birthday-cake text-center"></i></p>
                            <span class="underline"></span>
                            <p class="font-weight-bold pt-2"  id="par3">{{$info_about_language->parallax_info->text3}}</p>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        
    @component('components.body.cards', ['card_infos'=>$info_about_language->card_infos])
    @endcomponent
    
    @section('personaljs')
        <script type="text/javascript" src="/js/main.js"></script>
    @endsection
@endsection