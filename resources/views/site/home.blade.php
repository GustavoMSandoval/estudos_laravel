@extends('site.layout')
@section('title', 'Home')
@section('conteudo')

   <div class="row container">

    @foreach ($produtos as $produto)
    <div class="col s12 m4">
        <div class="card">
            <div class="card-image">
              <img src="{{$produto->image}}">
              <span class="card-title">{{$produto->name}}</span>
              
              @can('verProduto', $produto)
              <a href="{{ route('site.details',$produto->slug ) }}" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">visibility</i></a>
              @endcan
            </div>
            <div class="card-content">
              <p>{{ Str::limit($produto->description, 20) }}</p>
            </div>
        </div>
    </div>
    @endforeach
   
   </div>
       
   <div class="row container center">{{$produtos->links()}} </div>
    
@endsection



