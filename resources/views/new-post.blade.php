<x-layout>
    <x-validation-errors />
    <form action="/new-post" method="post" enctype="multipart/form-data">
        @csrf
        <label for="title">Título</label>
        <input type="text" name="title" id="title" value="{{ old('title') }}" required>

        <label for="excerpt">Extracto</label>
        <input type="text" name="excerpt" id="excerpt" value={{ old('excerpt') }}required>

        <label for="cover">Imagen de portada</label>
        <input type="file" name="cover" id="cover">

        <label for="category_id">Categoría</label>
        {{-- <input type="number" name="category_id" id="category_id"> --}}

        <select name="category_id" id="category_id" autocomplete="off">
            <option>-- Selecciona una categoría --</option>
            @foreach ($categories as $category)
                @if (old('category_id') == $category->id)
                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                @else
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endif
            @endforeach
        </select>

        <label for="style">Estilo</label>
        <select name="style" id="style" autocomplete="off">
            <option>-- Selecciona un estilo de color --</option>
            @foreach ([1, 2, 3, 4, 5, 6] as $style)
                <option value="{{ $style }}" {{old('style') == $style ? "selected" : ""}} >Estilo {{ $style }}</option>
            @endforeach
        </select>

        <label for="content">Contenido</label>
        <textarea name="content" id="content" required>{{ old('content') }}</textarea>

        <input type="submit" value="Publicar">
    </form>
</x-layout>
