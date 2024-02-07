@extends('layouts.app')

@section('titulo')
    Protecciones y energia
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
        <div class="overflow-hidden relative md:h-full xl:h-full 2xl:h-full">
             <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://flowbite.com/docs/images/carousel/carousel-1.svg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
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
    <hr class="border-8 border-black">
</div>
@endsection
@section('contenido')
    <div>
        <div class="m-auto w-3/4">
            <br>
            <p class="text-center">Protecciones y energia</p>
            <br>
            <hr class="border-2">
            <br>
            <div class="w-3/4 m-auto b-32 grid grid-cols-auto gap-2 lg:grid-cols-5">
                <a class="text-center bg-gray-200 hover:bg-gray-400 transition-colors cursor-pointer p-4 font-bold" href="{{route('proteccion','todos')}}">Todos</a>
                <a class="text-center bg-gray-200 hover:bg-gray-400 transition-colors cursor-pointer p-4 font-bold" href="{{route('proteccion','baterias')}}">Baterias</a>
                <a class="text-center bg-gray-200 hover:bg-gray-400 transition-colors cursor-pointer p-4 font-bold" href="{{route('proteccion','pdu_ups_respaldos')}}">PDU / UPS / Respaldos</a>
                <a class="text-center bg-gray-200 hover:bg-gray-400 transition-colors cursor-pointer p-4 font-bold " href="{{route('proteccion','lamparas_de_emergencia')}}">Lamparas de Emergencia</a>
                <a class="text-center bg-gray-200 hover:bg-gray-400 transition-colors cursor-pointer p-4 font-bold" href="{{route('proteccion','fuentes_de_poder')}}">Fuentes de Poder</a>
            </div>
            <br>
        </div>
        <div class="container mx-auto mt-10">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 gap-6">
                @foreach($protecciones as $proteccion)
                    @foreach($productos as $producto)
                        @if($producto->id == $proteccion->products_id)
                            @php {{$product = $producto;}} @endphp
                        @endif
                    @endforeach
                    @php
                        $id = 'modal-'.str_replace(' ','',$proteccion->nameProduct);
                    @endphp
                    <button 
                    class=" hover:bg-slate-200 text-black font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    data-modal-target="#{{ $id }}"
                    >
                        <img class="m-auto" id="{{$proteccion->id}}" alt="{{$proteccion->nameProduct}}" src="{{asset('uploads'.'/'.$proteccion->imagen)}}">
                        {{ $proteccion->nameProduct}}

                    </button>
                
                    <div id="{{ $id }}"  class="modal hidden fixed inset-0 bg-opacity-75 top-0 right-0 left-0 z-50 items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class=" relative p-10 w-full max-w-2xl max-h-full m-auto">
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <div class="modal-content bg-white p-4">
                                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            {{$proteccion->nameProduct}}
                                        </h3>
                                        <button class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white modal-close">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                            </svg>
                                        </button>
                                    </div>
                                    
                                    <div class="columns-2 gap-20 items-center flex">
                                        <div class="p-4">
                                            <img src="{{asset('uploads'.'/'.$proteccion->imagen)}}">
                                        </div>
                                        <div>
                                            <!-- Marca del producto -->
                                            <p><a class="text-base font-bold">Marca: </a>{{$proteccion->brandProduct}}</p>
                                            <!-- Modelo del producto-->
                                            <p><a class="text-base font-bold">Modelo: </a>{{$proteccion->modelProduct}}</p>
                                            <!-- Descripcion del producto-->
                                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                {{$proteccion->descProduct}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                        <!-- Boton cotizar agregar link whatsapp-->
                                        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 modal-close">Cotizar</button>
                                    </div>
                                    @auth
                                        @if(auth()->user()->id == 1)
                                            <form method="POST" action="{{route("posts.destroy",$product)}}">
                                                @method('DELETE')
                                                @csrf
                                                <input
                                                    type="submit"
                                                    value="Eliminar"
                                                    class="bg-red-500 hover:bg-red-600 p-2 text-white mt-4 font-bold cursor-pointer"
                                                />
                                            </form>
                                        @endif
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
<script>
    // Agrega funcionalidad para mostrar/ocultar modales
    const modalButtons = document.querySelectorAll('[data-modal-target]');
    const modals = document.querySelectorAll('.modal');
    const modalCloses = document.querySelectorAll('.modal-close');
    modalButtons.forEach(button => {
        button.addEventListener('click', () => {
            const target = document.querySelector(button.dataset.modalTarget);
            target.classList.toggle('hidden');
        });
    });
    modalCloses.forEach(button => {
        button.addEventListener('click', () => {
            const modal = button.closest('.modal');
            modal.classList.add('hidden');
        });
    });
</script>
@endsection