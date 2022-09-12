<x-layout>

    <h1>Registro</h1>

    <x-validation-errors />
    <form action="/signup" method="post">
        @csrf
        <label for="name">Nombre de usuario</label>
        <input type="text" name="name" id="name" value="{{old('name')}}">
        <label for="email">Correo electrónico</label>
        <input type="email" name="email" id="email"  value="{{old('email')}}">
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password">

        <input type="submit" value="Crear Cuenta">
    </form>
</x-layout>
