<x-layout>
<form action="/new-post" method="post">
    @csrf
    <label for="title">Título</label>
    <input type="text" name="title" id="title" required>

    <label for="excerpt">Extracto</label>
    <input type="text" name="excerpt" id="excerpt" required>

    <label for="category_id">Categoría</label>
    {{-- <input type="number" name="category_id" id="category_id"> --}}

    <select name="category_id" id="category_id">
        <option>-- Selecciona una categoría --</option>
        @foreach ( $categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach

    </select>

    <label for="style">Estilo</label>
    <select name="style" id="style">
        @foreach ([1,2,3,4,5,6] as $style)
            <option value="{{$style}}">Estilo {{$style}}</option>
        @endforeach
    </select>

    <label for="content">Contenido</label>
    <textarea name="content" id="content" required></textarea>

    <input type="submit" value="Publicar">
</form>
</x-layout>
