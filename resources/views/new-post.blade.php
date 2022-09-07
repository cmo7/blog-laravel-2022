<x-layout>
<form action="/new-post" method="post">
    @csrf
    <label for="title">Título</label>
    <input type="text" name="title" id="title">

    <label for="excerpt">Extracto</label>
    <input type="text" name="excerpt" id="excerpt">

    <label for="category_id">Categoría</label>
    {{-- <input type="number" name="category_id" id="category_id"> --}}

    <select name="category_id" id="category_id">
        <option>-- Selecciona una categoría --</option>
        @foreach ( $categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach

    </select>

    <label for="content">Contenido</label>
    <textarea name="content" id="content"></textarea>

    <input type="submit" value="Publicar">
</form>
</x-layout>
