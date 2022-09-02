<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name') . " - Posts"}}</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    @if(count($posts) == 0)
        <p>No hay ningun post</p>
    @else
        <p>Si hay posts, y son estos: </p>
    @endif

    @foreach ($posts as $post)
        <article>
            <h2><a href="/post/{{$post->slug}}">{{$post->title}}</a></h2>
            <div>
                {{$post->content}}
            </div>
        </article>
    @endforeach
</body>
</html>
