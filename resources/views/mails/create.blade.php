<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <H1>SIUUUUUUUM DEL {{$post->content}}</H1>
    <ul>
        @forelse ($post->tags as $tag)
            <li>
                {{$tag->name}}
            </li>
        @empty
            
        @endforelse
    </ul>
    
</body>
</html>