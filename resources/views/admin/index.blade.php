@extends('layouts.app')
@section('content')
<div class="container">
    <a class="btn btn-success my-4" href="{{route('admin.posts.create')}}">Crea il tuo Post</a>
    <table class="table table-dark table-hover ">
        <thead>
            <tr>
                <th scope="col">Titolo</th>
                <th scope="col">Categoria</th>
                <th scope="col">Tags</th>
                <th scope="col">Contenuto</th>
                <th scope="col">Immagine</th>
                <th scope="col">Slug</th>
                <th scope="col">Eventi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td class="align-middle">{{$post->title}}</td>
                <td class="align-middle">@if ($post->category)<span
                        class="badge badge-pill badge-{{$post->Category->color}} ">{{$post->Category->name}}@else -
                        @endif</span></td>
                <td class="align-middle">@forelse ($post->tags as $tag)
                    <span class="badge text-light" style="background-color: {{$tag->color}}">{{$tag->name}}</span>
                    @empty
                    -
                    @endforelse</td>
                <td class="align-middle">{{$post->content}}</td>
                <td class="align-middle"><img  style="width: 150px" src="{{$post->image}}" alt=""></td>
                <td class="align-middle">{{$post->slug}}</td>
                <td class="text-center align-middle d-flex flex-column">
                    <a class="btn btn-primary" href="{{route('admin.posts.show', $post->id)}}">View</a>
                    <a class="btn btn-success my-2" href="{{route('admin.posts.edit', $post->id)}}">Modifica</a>
                    <form action="{{route('admin.posts.destroy', $post->id)}}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Elimina</button>
                    </form>
                </td>


            </tr>
            @endforeach
        </tbody>
    </table>
    @if ($posts->hasPages())
    {{$posts->links()}}
    @endif
</div>

@endsection
