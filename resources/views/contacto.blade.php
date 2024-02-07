@extends('layouts.app')

@section('titulo')
    Contacto
@endsection

@section('css')
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
@endsection

@section('carrusel')
<div>
    <!-- Start Carousel-->
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
             <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{asset('img/HP.svg.png')}}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://flowbite.com/docs/images/carousel/carousel-1.svg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
    <!-- End Carousel-->
</div>
@endsection
@section('contenido')
<div>
    <div class="w-3/4 m-auto b-32 p-10 items-center">
        <p class="text-center p-2">A continuación se encuentran nuestras redes sociales y otras opciones de contacto.
        </p>
    </div>
    <div class="w-3/4 m-auto b-32 p-10">
        <div class=" b-32 grid grid-cols-auto gap-10 lg:grid-cols-3 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-3 2xl:grid-cols-3 text-center">
            <div class="">
                <a class="text-2xl font-bold p-2">Direccion</a>
                <p class="p-5">El Carmen, Nuevo León C.P 66583, Buena Vista</p>
            </div>
            <div>
                <a class="text-2xl font-bold">TEL. O WHATSAPP</a>
                <p class="p-5">(81)-174-13-496</p>
            </div>
            <div class="flex flex-col">
                <a class="text-2xl font-bold">EMAIL</a>
                <a class="p-5">contacto@vitotechnologies.com</a>
            </div>
            <div class="flex flex-col">
                <a class="text-2xl font-bold">FACEBOOK</a>
                <a class="p-5">Vito Technologies</a>
            </div>
            <div class="flex flex-col">
                <a class="text-2xl font-bold">INSTAGRAM</a>
                <a class="p-5">Vito_Technologies</a>
            </div>
            <div class="flex flex-col">
                <a class="text-2xl font-bold">YOUTUBE</a>
                <a class="p-5">Vito Technologies</a>
            </div>
        </div>
    </div>
    <div class="bg-zinc-200 w-2/4 b-32 border m-auto shadow-2xl rounded-lg">
        <form>
            @csrf
            <div class="flex flex-cols p-10">
                <div class="mb-5 justify-center w-2/5 m-auto">
                    <input
                        id = "name"
                        name = "name"
                        type = "text"
                        placeholder = "Nombre" 
                        class = "border p-3 w-full"
                    >
                </div>
                <div class="mb-5 justify-center w-2/5 m-auto">
                    <input
                        id = "email"
                        name = "email"
                        type = "email"
                        placeholder = "Email"
                        class = "border p-3 w-full"
                    >
                </div>
            </div>
            <div class="mb-5 w-10/12 m-auto md:h-72">
                <textarea
                    id = "mensaje"
                    name = "mensaje"
                    type = "text"
                    placeholder = "Mensaje"
                    class = "border p-3 w-full h-full resize-y"
                ></textarea>
            </div>
            <div class="mb-5 w-9/12 m-auto">
                <input
                    type="submit"
                    value="Enviar mensaje"
                    class="bg-green-600 hover:bg-green-900 transition-colors cursor-pointer font-bold w-full p-3 text-white rounded-lg">
            </div>
        </form>
    </div>
    <div class="w-3/4 m-auto b-32 p-10 items-center">
        <h2 class="text-center text-2xl p-5 font-serif">Cotiza sin costo</h2>
        <p class="text-center p-10">¿Tienes alguna duda o comentario? Contáctate con nosotros sin compromiso y uno de nuestros ejecutivos lo atenderá a la brevedad, podemos encontrar cualquier producto que requiera y cotizamos al instante.</p>
    </div>
    <div class="w-3/4 m-auto text-center">
        <a class="rounded-full bg-slate-600 p-2 text-white">COTIZAR AHORA</a>
    </div>
</div>
@endsection

@section('js')
    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
@endsection