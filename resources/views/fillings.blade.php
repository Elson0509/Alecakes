@extends('layouts.app')

@section('title', 'Ale Cakes - Fillings')

@section('content')

<div class="conteiner-fluid recheios bg-secondary">
    <div class="row">
        <div class="col text-center pt-4 px-2">
            <h1>{{$info_about_language->filling_data->title}}</h1>
            <span class="underline"></span>
            <p>{{$info_about_language->filling_data->text}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <i class="fas fa-birthday-cake"></i>
            <span class="underline pb-3"></span>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-4 text-center">
            <table class="table table-hover table-dark table-striped">
                <tbody>
                    @foreach($info_about_language->fillings as $f)
                        <tr><td>{{$f->name}}</td></tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@section('personaljs')
    <script type="text/javascript" src="/js/filling.js"></script>
@endsection