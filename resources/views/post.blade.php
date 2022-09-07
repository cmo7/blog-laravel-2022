<x-layout>
    <h1>{{ $post->title }}</h1>
    <span class="image main"><img src="/images/pic13.jpg" alt="" /></span>
    <a href="/category/{{ $post->category->slug }}" class="button primary">{{ $post->category->name }}</a>
    <p>{{ $post->content }}</p>
</x-layout>
