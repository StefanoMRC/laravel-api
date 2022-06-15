@extends('layouts.app')
@section('content')
<div class="container d-flex justify-content-center py-5">
    <div class="card" style="width: 18rem;">
        <img src="{{asset("storage/$post->image")}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="card-title">{{$post->title}}</h3>
          @if ($post->category)
             <p class="card-text">
                <span class="font-weight-bold">Categoria:</span> 
               <span class="badge badge-pill badge-{{$post->Category->color}} ">{{$post->Category->name}}</span>
              </p> 
          @endif
              
          <p class="card-text"><span class="font-weight-bold">Descrizione:</span>  {{$post->content}}</p>
          <p class="card-text">
            <span class="font-weight-bold">Tag:</span>
              @forelse ($post->tags as $tag)
              <span class="badge text-light" style="background-color: {{$tag->color}}">{{$tag->name}}</span>
              @empty
                  Non ci sono tag
              @endforelse
            </p>
          <form action="{{route('admin.posts.destroy', $post->id)}}" method="post">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger">Elimina</button> 
          </form>
        </div>
      </div>
</div>


@endsection