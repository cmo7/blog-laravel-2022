<x-layout>
    <h1>{{ $post->title }}</h1>
    <span class="image main"><img src="/img/{{$post->cover}}" alt="" /></span>
    <a
        href="/category/{{ $post->category->slug }}"
        class="button primary"
        style="background-color: {{$post->category->color}}"
        >
        {{ $post->category->name }}
    </a>
    <p>por {{$post->user->name}}</p>
    <p>{{ $post->content }}</p>
    @if (auth()->user() == $post->user())
        <form action="/delete" method="post">
            @csrf
            <input type="hidden" name="post_id" value="{{$post->id}}">
            <input class="button main" type="submit" value="Borrar">
        </form>

        <form action="/edit" method="post">
            @csrf
            <input type="hidden" name="post_id" value="{{$post->id}}">
            <input class="button main" type="submit" value="Editar">
        </form>
    @endif

</x-layout>
