<x-layout>
    <h1>Accede a tu cuenta</h1>

    <x-validation-errors />

    <form action="/login" method="post">
        @csrf
        <label for="email">Correo electrónico</label>
        <input type="email" name="email" id="email" value="{{old('email')}}">
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password">

        <input type="submit" value="Acceder">
    </form>
</x-layout>
