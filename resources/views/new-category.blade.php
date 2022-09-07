<x-layout>
<form action="/new-category" method="post">
    @csrf
    <label for="name">Nombre de Categoría</label>
    <input type="text" name="name" id="name">

    <input type="submit" value="Crear">
</form>
</x-layout>
