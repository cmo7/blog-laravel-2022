<x-layout>

<h1>{{$category->name}}</h1>

@foreach ($category->posts as $post)

<div> 
{{$post->title}}
</div>

@endforeach

</x-layout>