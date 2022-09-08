<x-layout>
<h1>Categorias</h1>
@foreach ($categories as $category)
    <div>
        <h3>
            <a href="/category/{{$category->slug}}">
                {{$category->name}} - {{$category->posts->count()}}
            </a>
        </h3>
    </div>
@endforeach
</x-layout>
