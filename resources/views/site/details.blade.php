@extends('site.layout')
@section('title', 'Details')
@section('conteudo')

<div class="row container"> <br>
    <div class="col s12 m5">
        <img src="{{$produto->image}}" class="responsive-img" alt="">
    </div>
    <div class="col s12 m5">
        <h4>{{$produto->title}}</h4>
        <h4>R${{ number_format($produto->price,2, ',', '.') }}</h4>
        <p>{{$produto->description}}</p>
        <p>Postado por: {{$produto->user->firstName}}</p>
        <p>Categoria: {{$produto->category->name}}</p>
        <button class="btn orange btn-large">Buy it now</button>
    </div>
</div>

@endsection