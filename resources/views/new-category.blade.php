<x-layout>
<form action="/new-category" method="post">
    @csrf
    <label for="name">Nombre de Categoría</label>
    <input type="text" name="name" id="name" required>

    <label for="color">Color de la Categoría</label>
    <input type="color" name="color" id="color">

    <input type="submit" value="Crear">
</form>
</x-layout>
