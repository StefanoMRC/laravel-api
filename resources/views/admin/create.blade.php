@extends('layouts.app')
@section('content')
<h1 class="text-center text-capitalize pb-4">crea qui il tuo nuovo post</h1>
<form class="container" action="{{route('admin.posts.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Titolo</span>
        <input id="title" name="title" type="text" class="form-control" aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-default">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Categoria</span>
        <select name="category_id" id="category">
            <option value="">Nessuna categoria</option>
            @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach

        </select>

    </div>
    <div class='d-flex justify-content-center mb-2'>
        @foreach ($tags as $tag)
        <div class="form-check  mx-3">

            <input class="form-check-input" type="checkbox" 
            value="{{$tag->id}}" 
            id="tag-{{$tag->id}}" 
            name="tags[]"
            @if ( in_array($tag->id, old('tags', [])))
                checked
            @endif
            >
            <label class="form-check-label" for="tag-{{$tag->id}}">
                {{$tag->name}}
            </label>


        </div>
        @endforeach
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text">Content</span>
        <textarea id="content" name="content" class="form-control" aria-label="With textarea"
            style="height: 200px"></textarea>
    </div>
    {{-- <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Immagine</span>
        <input id="image" name="image" type="url" class="form-control" aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-default">
    </div> --}}
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Immagine</span>
        <input id="image" name="image" type="file" class="form-control-file" aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-default">
    </div>
    <button type="submit" class="btn btn-success"> Crea</button>
</form>
@endsection
