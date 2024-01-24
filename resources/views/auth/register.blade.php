@extends('layouts.app')

@section('titulo')
    Registro
@endsection

@section('contenido')
<div class="bg-zinc-200 w-2/4 b-32 border m-auto shadow-2xl rounded-lg md:w-2/4 xl:w-2/4 2xl:w-2/4">
    <div class="text-black center">
        <br>
        <h1 class="center text-4xl font-serif font-bold text-center">Registro de cuenta</h1>
        <br>
        <form action="{{route('register')}}" method="POST">
            @csrf
            <!-- Start Input Name -->
            <div class="mb-5 justify-center w-9/12 m-auto">
                <label class="mb-2 block text-2xl font-serif font-bold">Nombre</label>
                <input
                    id = "name"
                    name = "name"
                    type = "text"
                    placeholder = "Tu nombre"
                    class = "border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                    value = "{{old('name')}}"
                >
                @error('name')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"></p>
                @enderror
            </div>
            <!-- End Input Name -->

            <!-- Start Input Email-->
            <div class="mb-5 justify-center w-9/12 m-auto">
                <label class="mb-2 block text-2xl font-serif font-bold">Correo</label>
                <input
                    id = "email"
                    name = "email"
                    type = "email"
                    placeholder = "Tu correo electronico"
                    class= "border p-3 w-full rounded-lg @error('emailUser') border-red-500 @enderror"
                    value="{{old('email')}}"
                >
                @error('email')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">El correo es obligatorio</p>
                @enderror
            </div>
            <!-- End Input Email-->

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

            <!-- Start Input passowrd confirmation -->
            <div class="mb-5 justify-center w-9/12 m-auto">
                <label class="mb-2 block text-2xl font-serif">Repite la contraseña</label>
                <input
                    id = "password_confirmation"
                    name = "password_confirmation"
                    type = "password"
                    placeholder = "Repite tu contraseña"
                    class = "border p-3 w-full rounded-lg"
                >
            </div>
            <!-- End Input password confirmation -->

            <input 
                type="submit"
                value = "Crear cuenta"
                class = "bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer font-bold w-full p-3 text-white rounded-lg"
            >
        </form>
    </div>
</div>
@endsection
