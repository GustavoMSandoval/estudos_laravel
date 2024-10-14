@extends('site.layout')
@section('title', 'Home')
@section('conteudo')

   <div class="row container">

    @foreach ($produtos as $item)
    <div class="col s12 m4">
        <div class="card">
            <div class="card-image">
              <img src="{{$item->image}}">
              <span class="card-title">{{$item->name}}</span>
              <a href="{{ route('site.details',$item->slug ) }}" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">visibility</i></a>
            </div>
            <div class="card-content">
              <p>{{ Str::limit($item->description, 20) }}</p>
            </div>
        </div>
    </div>
    @endforeach
   
   </div>
       <div class="row container center">{{$produtos->links()}} </div>
    
@endsection



