@extends('layouts.main')

@section('titulo','Portada')

@section('contenido')
     @forelse ($posts as $key => $post)
       <div class="card">
         <div class="card-header">
           <div class="row justify-content-between">
                 <div class="col-9">
                   <h4>
                     <a href="{{url('post',[$post->id])}}">
                     {{$post->titulo}}
                    </a>
                   </h4>
                 </div>

                 <div class="col-3 text-right">
                   <a href="{{url('editar',[$post->id])}}" class="btn btn-link btn-sm"><i class="fa fa-pencil"></i></a>
                   <a href="{{url('borrar',[$post->id])}}" class="btn btn-link btn-sm"><i class="fa fa-times"></i></a>
                 </div>


           </div>
          </div>  {{--clase card-header--> --}}
        <div class="card-block">
          {!! nl2br ($post->contenido) !!}
        </div>
       </div>
       <p>&nbsp;</p>
     @empty
       <h1 class="display-4">No hay entradas para mostrar</h1>
     @endforelse




@endsection
