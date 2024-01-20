@extends('layouts.app')

@section('titulo')
    Login
@endsection

@section('contenido')
<div class="bg-zinc-200 w-2/4 b-32 border m-auto shadow-2xl rounded-lg">
    <div class="text-black center">
        <br>
        <h1 class="center text-4xl font-serif font-bold text-center">Inicia sesion</h1>
        <br>
        <form action="{{route('login')}}" method="POST" novalidate>
            @csrf
            @if(session('mensaje'))
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{session('mensaje')}}</p>
            @endif
            <!-- Start Input Email-->
            <div class="mb-5 justify-center w-9/12 m-auto">
                <label class="mb-2 block text-2xl font-serif font-bold">Correo</label>
                <input
                    id = "email"
                    name = "email"
                    type = "email"
                    placeholder = "Tu correo electronico"
                    class= "border p-3 w-full rounded-lg @error('email') border-red-500 @enderror"
                    value="{{old('email')}}"
                >
                @error('email')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">El correo es obligatorio</p>
                @enderror
            </div>
            <!-- End Input Email-->
            <br>
                <!-- Start Input password-->
            <div class="mb-5 justify-center w-9/12 m-auto">
                <label class="mb-2 block text-2xl font-serif">Contraseña</label>
                <input
                    id = "password"
                    name = "password"
                    type = "password"
                    placeholder = "Contraseña de Registro"
                    class = "border p-3 w-full rounded-lg @error('password') border-red-500 @enderror"
                    value = "{{ old('password') }}"
                >
                @error('password')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
            </div>
            <!-- End Input password-->
            <br>
            <div class="mb-5 justify-center w-9/12 m-auto">
                <a class="bg-green-500 hover:bg-green-500 transition-colors cursor-pointer font-bold w-full p-3 text-white rounded-lg" href="{{route('register')}}">Crear Cuenta</a>
            </div>
            <br>
            <div class="mb-5 justify-center w-9/12 m-auto">
                <input type="submit" value="Inicia sesion" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer font-bold w-full p-3 text-white rounded-lg">
            </div>
        </form>
    </div>
</div>
@endsection
