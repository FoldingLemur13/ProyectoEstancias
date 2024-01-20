@extends('layouts.app')

@section('titulo')
    Agrega un nuevo producto
@endsection

@section('contenido')
<div class="md:flex md:items-center">
    <div class="md:w-1/2 px-10">
        <form action="/IMAGENES" id="dropzone" class="dropzone border-dashed border-2 w-full h-96 rounded flex flex-col jutify-center items-center">

        </form>
    </div>
    <div class="bg-zinc-200 w-2/4 b-32 border m-auto shadow-2xl rounded-lg p-10">
        <form method="POST">
            @csrf
            <!-- Start Input Name -->
            <div class="mb-5 justify-center w-9/12 m-auto">
                <label class="mb-2 block text-2xl font-serif font-bold">Nombre del Producto</label>
                <input
                    id = "nameProduct"
                    name = "nameProduct"
                    type = "text"
                    placeholder = "Nombre del Producto"
                    class = "border p-3 w-full rounded-lg @error('nameProduct') border-red-500 @enderror"
                    value = "{{old('nameProduct')}}"
                >
                @error('nameProduct')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"></p>
                @enderror
            </div>
            <!-- End Input Name -->
            <!-- Start Input Marca -->
            <div class="mb-5 justify-center w-9/12 m-auto">
                <label class="mb-2 block text-2xl font-serif font-bold">Marca del Producto</label>
                <input
                    id = "brandProduct"
                    name = "brandProduct"
                    type = "text"
                    placeholder = "Marca del Producto"
                    class = "border p-3 w-full rounded-lg @error('brandProduct') border-red-500 @enderror"
                    value = "{{old('brandProduct')}}"
                >
                @error('brandProduct')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"></p>
                @enderror
            </div>
            <!-- End Input Marca -->
            <!-- Start Input Modelo -->
            <div class="mb-5 justify-center w-9/12 m-auto">
                <label class="mb-2 block text-2xl font-serif font-bold">Modelo del Producto</label>
                <input
                    id = "modelProduct"
                    name = "modelProduct"
                    type = "text"
                    placeholder = "Model del Producto"
                    class = "border p-3 w-full rounded-lg @error('modelProduct') border-red-500 @enderror"
                    value = "{{old('modelProduct')}}"
                >
                @error('modelProduct')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"></p>
                @enderror
            </div>
            <!-- End Input Modelo -->
            <!-- Start Input Descripcion -->
            <div class="mb-5 justify-center w-9/12 m-auto">
                <label class="mb-2 block text-2xl font-serif font-bold">Descripcion del Producto</label>
                <input
                    id = "descProduct"
                    name = "descProduct"
                    type = "text"
                    placeholder = "Descripcion del Producto"
                    class = "border p-3 w-full rounded-lg @error('descProduct') border-red-500 @enderror"
                    value = "{{old('nameProduct')}}"
                >
                @error('descProduct')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"></p>
                @enderror
            </div>
            <!-- End Input Descripcion -->
            <!-- Start Input Tipo -->
            <div class="mb-5 justify-center w-9/12 m-auto">
                <label class="mb-2 block text-2xl font-serif font-bold">Tipo del Producto</label>
                <select class="border p-3 w-full rounded-lg">
                    <option selected>Elija una opcion</option>
                    <option value="Impresora">Impresora</option>
                    <option value="Escaner">Escaner</option>
                    <option value="Consumibles">Consumible</option>
                    <option value="Seguridad">Seguridad</option>
                    <option value="Computo">Computo</option>
                    <option value="Redes">Redes</option>
                    <option value="Proteccion_y_energia">Proteccion y energia</option>
                </select>
                @error('typeProduct')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"></p>
                @enderror
            </div>
            <!-- End Input Tipo -->
            <div class="mb-5 justify-center w-9/12 m-auto">
                <input type="submit" value="Agregar Producto" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer font-bold w-full p-3 text-white rounded-lg">
            </div>
        </form>
    </div>
</div>
@endsection