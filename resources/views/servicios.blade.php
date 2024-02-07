@extends('layouts.app')

@section('titulo')
    Servicios
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
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://flowbite.com/docs/images/carousel/carousel-3.svg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://flowbite.com/docs/images/carousel/carousel-2.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
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
    <div class="p-7 w-3/4 m-auto b-32 grid grid-cols-auto gap-5 lg:grid-cols-3 sm:grid-cols-3 md:grid-cols-3 xl:grid-cols-3 2xl:grid-cols-3 text-black">
        <div class = "bg-slate-500">
            <div class = "bg-slate-200 text-center p-10 m-auto">
                <p>Imagen</p>
            </div>
            <div class="text-center p-1">
                <a class="text-xl text-center">Control de acceso</a>
                <p class=" bg-gray-200 text-black text-justify">Realizamos desde instalación completas desde cero hasta mantenimiento y/o reparación, venta de accesorios que componen dicho equipo (electrónicos, licencia de software, entre otros).</p>
            </div>
        </div>
        <div class = "bg-slate-700">
            <div class = "bg-slate-200 text-center p-10 m-auto">
                <p>Imagen</p>
            </div>
            <div class = "text-center p-1">
                <a class="text-xl">Cableado de red</a>
                <p class="bg-gray-200 text-black text-justify">Realizamos servicios de cableado estructurado interior/exterior de tipo par trenzado, fibra óptica y coaxial para cualquier tamaño de negocio / empresa.</p>
            </div>
        </div>
        <div class = "bg-slate-700">
            <div class = "bg-slate-200 text-center p-10 m-auto">
                <p>Imagen</p>
            </div>
            <div class = "text-center p-1">
                <a class = "text-xl">Software</a>
                <p class = "bg-gray-200 text-black text-justify">Desarrollamos sistemas empresarials a la medida en base a las necesidades de nuestros clientes, además del dominio y hosting administrado por nosotros.</p>
            </div>
        </div>
        <div class="bg-slate-700">
            <div class = "bg-slate-200 text-center p-10 m-auto">
                <p>Imagen</p>
            </div>
            <div class = "text-center p-1">
                <a class = "text-xl">Maquila</a>
                <p class = "bg-gray-200 text-black text-justify">Venta de diversos consumibles e impresión de etiquetas y tarjetas PVC con grabación en RFID.</p>
            </div>
        </div>
        <div class="bg-slate-700">
            <div class = "bg-slate-200 text-center p-10 m-auto">
                <p>Imagen</p>
            </div>
            <div class = "text-center p-1">
                <a class = "text-xl">Soporte Tecnico</a>
                <p class = "bg-gray-200 text-black text-justify">Brindamos asistencia vía remóto o presencial para rosolver problemas con equipos como terminales portátiles, impresoras de etiquetas, handheld, entre otros.</p>
            </div>
        </div>
        <div class="bg-slate-700">
            <div class = "bg-slate-200 text-center p-10 m-auto">
                <p>Imagen</p>
            </div>
            <div class = "text-center p-1">
                <a class = "text-center">Computacion</a>
                <p class = "bg-gray-200 text-black text-justify">Hacemos mantenimiento, reparación y detección de problemas en cualquier equipo como Computadoras de escritorio, laptops, impresoras de oficina, etc.</p>
            </div>
        </div>
    </div>
    <div class="w-3/4 m-auto b-32 p-10 items-center">
        <h2 class="text-center p-5">Cotiza sin costo</h2>
        <p class="text-center p-2">¿Tienes alguna duda o comentario? Contáctate con nosotros sin compromiso y uno de nuestros ejecutivos lo atenderá a la brevedad, podemos encontrar cualquier producto que requiera y cotizamos al instante.</p>
        <div class="text-center">
            <a class="bg-sky-100">Cotiza ahora</a>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
@endsection