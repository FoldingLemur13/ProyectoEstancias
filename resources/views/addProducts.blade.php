@extends('layouts.app')

@section('titulo')
    Agrega un nuevo producto
@endsection

@section('css')
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endsection


@section('contenido')

<div class="md:flex md:items-center">
    <div class="md:w-1/2 px-10">
        <form action="{{route('imagenes.store')}}" id="dropzone" class="dropzone border-dashed border-4 w-full h-96 rounded flex flex-col jutify-center items-center" method="POST" enctype="multipart/form-data">
            @csrf
        </form>
    </div>
    <div class="bg-zinc-200 w-2/4 b-32 border m-auto shadow-2xl rounded-lg p-10">
        <form method="POST" action="{{route('products.store')}}">
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
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
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
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
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
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
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
                    value = "{{old('descProduct')}}"
                >
                @error('descProduct')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
            </div>
            <!-- End Input Descripcion -->
            <!-- Start Input Tipo -->
            <div class="mb-5 justify-center w-9/12 m-auto">
                <label class="mb-2 block text-2xl font-serif font-bold">Producto</label>
                <select onchange="actualizarSelect()" class="border p-3 w-full rounded-lg" name="productT" id="productT" value="{{old('productT')}}">
                    <option value="{{old('productT')}}" selected>{{old('productT')}}</option>
                    <option value="Impresora" name="productT">Impresora</option>
                    <option value="Escaner" name="productT">Escaner</option>
                    <option value="Consumibles" name="productT">Consumible</option>
                    <option value="Seguridad" name="productT">Seguridad</option>
                    <option value="Computo" name="productT">Computo</option>
                    <option value="Redes" name="productT">Redes</option>
                    <option value="Proteccion_y_energia" name="productT">Proteccion y energia</option>
                    <option value="Terminal" name="productT">Terminal</option>
                </select>
                @error('productT')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
            </div>
            <!-- End Input Tipo -->
            <!-- Start Input tipo-->
            <div class="mb-5 justify-center w-9/12 m-auto">
                <label class="mb-2 block text-2xl font-serif font-bold">Tipo del Producto</label>
                <select class="border p-3 w-full rounded-lg" name="productType" id="productType">
                </select>
            </div>
            <!-- End Input tipo-->
            <div>
                <input
                    name="imagen"
                    type="hidden"
                    value="{{old('imagen')}}"
                >
                @error('imagen')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-5 justify-center w-9/12 m-auto">
                <input type="submit" value="Agregar Producto" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer font-bold w-full p-3 text-white rounded-lg">
            </div>
        </form>
    </div>
</div>
@endsection
 
@section('js')
<script>
    function actualizarSelect() {
        //Select de tipos de producto
        var condicion = document.getElementById("productT").value;

        // Select a cambiar
        var selectProductoTipos = document.getElementById("productType");

         // Limpiar opciones actuales
        selectProductoTipos.innerHTML = '';

        function crearTipos(tiposDelProducto){
            for(let key in tiposDelProducto){
                let option = document.createElement("option");
                option.setAttribute('value',tiposDelProducto[key]);
                let optionText = document.createTextNode(tiposDelProducto[key]);
                option.appendChild(optionText);
                selectProductoTipos.appendChild(option);
            }
        }
        switch (condicion){
            case 'Impresora' : 
                const tiposImpresoras = ["Portatiles","Escritorio","Industriales","Punto De Venta","De Oficina"];
                crearTipos(tiposImpresoras);
                break;
            case 'Escaner' :
                const tiposEscaners = ["Uso general","Industrial","Montaje Fijo"];
                crearTipos(tiposEscaners);
                break;
            case 'Terminal' :
                const tiposTerminales = ["Uso General","Industriales","Tabletas","RFID","Almacen"];
                crearTipos(tiposTerminales);
                break;
            case 'Consumibles' :
                const tiposConsumibles = ["Etiquetas","Ribbon","Toner y Tinta","Tarjetas PVC"];
                crearTipos(tiposConsumibles);
                break;
            case 'Seguridad' :
                const tiposSeguridad = ["Control de Acceso","CCTV","VideoPorteros","Alarmas","Proteccion Perimetral","RadioComunicacion"];
                crearTipos(tiposSeguridad);
                break;
            case 'Computo' :
                const tiposComputo = ["Laptops","Computadora","Accesorios","Insumos","Gaming"];
                crearTipos(tiposComputo);
                break;
            case 'Redes' :
                const tiposRedes = ["Cableado Estructurado","Servidores","Accesorios","Equipo WLAN/Inalambrico","Networking"];
                crearTipos(tiposRedes);
                break;
            case 'Proteccion_y_energia' :
                const tiposProteccion = ["Baterias","PDU/UPS/Respaldos","Lamparas de Emergencia","Fuentes de Poder"];
                crearTipos(tiposProteccion);
                break;
        
        }
    }
</script>
@endsection