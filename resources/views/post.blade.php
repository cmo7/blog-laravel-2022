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
    <p>{{ $post->content }}</p>
</x-layout>
