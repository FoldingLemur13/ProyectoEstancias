@extends('layouts.app')

@section('titulo')
    Nosotros
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
        <div class="overflow-hidden relative md:h-full xl:h-full 2xl:h-ful text-black">
             <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{asset('img/nosotros1.jpg')}}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2">
                <div class="absolute inset-x-[15%] bottom-96  py-5 text-center text-black md:block">
                    <h1 class="text-4xl font-bold">Nosotros</h1>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{asset('img/nosotros2.avif')}}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2">
                <div class="absolute inset-x-[15%] bottom-96  py-5 text-center text-black md:block">
                    <h1 class="text-4xl font-bold">Nosotros</h1>
                </div>
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
                <svg class="w-4 h-4 text-black dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-black dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
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
        <h1 class="text-center text-4xl font-bold">Nosotros</h1>
        <hr>
        <p class="text-center p-2">Somos una empresa dedicada a ofrecer servicios y soluciones tecnológicas de calidad para la optimización de procesos en Automatización en la cadena de suministros, trazabilidad en producción de inventarios, desarrollo de software y gestión de información en cualquier parte del mundo.</p>
        <p class="text-center p-2">Somos un equipo de trabajo con actividad empresarial. Contamos con cobertura en Nuevo León y Tamaulipas. Tenemos mas de 10 años de experiencia en el mercado industrial.</p>
    </div>
    <div class="w-full m-auto b-32 flex sm:h-2/5 xl:h-1/5" style="background-image: url({{asset('img/fondohome2.jpg')}})"></div>
    <div class="w-full m-auto b-32 p-10 items-center">
        <h2 class="text-center text-4xl p-5 font-serif font-bold">Exito</h2>
        <div class="p-7 w-3/4 m-auto b-32 grid grid-cols-auto gap-10 lg:grid-cols-4 sm:grid-cols-2 md:grid-cols-2 xl:grid-cols-4 2xl:grid-cols-4 text-center text-xl">
            <div>
                <h2 class="font-bold text-4xl text-sky-700">500</h2>
                <p>Clientes satisfechos</p>
            </div>
            <div >
                <h2 class="font-bold text-4xl text-sky-700">250</h2>
                <p>Proyectos exitosos</p>
            </div>
            <div>
                <h2 class="font-bold text-4xl text-sky-700">1500</h2>
                <p>Instalaciones</p>
            </div>
            <div>
                <h2 class="font-bold text-4xl text-sky-700">10</h2>
                <p>Años de experiencia</p>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

@endsection