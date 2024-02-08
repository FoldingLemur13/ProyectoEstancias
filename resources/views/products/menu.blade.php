@extends('layouts.app')

@section('titulo')
    Productos
@endsection

@section('css')
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
@endsection

@section('carrusel')
<div>
    <!-- Start Carousel-->
    <div id="default-carousel" class="relative w-full bg-black" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="overflow-hidden relative md:h-full xl:h-full 2xl:h-ful text-black">
             <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{asset('img/zebraescaners.jpg')}}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2">
                <div class="absolute inset-x-[15%] bottom-96  py-5 text-center text-black md:block">
                    <h1 class="text-4xl font-bold">Productos</h1>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{asset('img/zebracinta.jpg')}}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2">
                <div class="absolute inset-x-[15%] bottom-96  py-5 text-center text-black md:block">
                    <h1 class="text-4xl font-bold">Productos</h1>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{asset('img/zebraimpresoras.jpg')}}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2">
                <div class="absolute inset-x-[15%] bottom-96  py-5 text-center text-black md:block">
                    <h1 class="text-4xl font-bold">Productos</h1>
                </div>
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{asset('img/zebraterminal.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                <div class="absolute inset-x-[15%] bottom-96  py-5 text-center text-black md:block">
                    <h1 class="text-4xl font-bold">Productos</h1>
                </div>
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-black dark:text-gray-900 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-black dark:text-gray-900 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
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
    <div>
        <h1 class="text-center text-4xl font-bold p-10">Productos</h1>
        <!-- Start of columns for products and services-->
        <div class="w-3/4 p-5 m-auto b-32 grid grid-cols-auto gap-5 lg:grid-cols-3 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-3 2xl:grid-cols-3">

            <!-- Start Equipos de Impresion -->
            <div class="columns-2 gap-2 items-center flex">
                <div class="w-1/6 m-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-17 h-17">
                            <path fill-rule="evenodd" d="M7.875 1.5C6.839 1.5 6 2.34 6 3.375v2.99c-.426.053-.851.11-1.274.174-1.454.218-2.476 1.483-2.476 2.917v6.294a3 3 0 0 0 3 3h.27l-.155 1.705A1.875 1.875 0 0 0 7.232 22.5h9.536a1.875 1.875 0 0 0 1.867-2.045l-.155-1.705h.27a3 3 0 0 0 3-3V9.456c0-1.434-1.022-2.7-2.476-2.917A48.716 48.716 0 0 0 18 6.366V3.375c0-1.036-.84-1.875-1.875-1.875h-8.25ZM16.5 6.205v-2.83A.375.375 0 0 0 16.125 3h-8.25a.375.375 0 0 0-.375.375v2.83a49.353 49.353 0 0 1 9 0Zm-.217 8.265c.178.018.317.16.333.337l.526 5.784a.375.375 0 0 1-.374.409H7.232a.375.375 0 0 1-.374-.409l.526-5.784a.373.373 0 0 1 .333-.337 41.741 41.741 0 0 1 8.566 0Zm.967-3.97a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H18a.75.75 0 0 1-.75-.75V10.5ZM15 9.75a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75V10.5a.75.75 0 0 0-.75-.75H15Z" clip-rule="evenodd" />
                    </svg> 
                </div>
                <div class="w-5/6">
                    <a class="items-center flex" href="{{route('printer','todos')}}">                         
                        Equipos de impresión
                    </a>
                    <br>
                    <p class="text-justify">Ofrecemos diversos productos de diferentes marcas y categorias de impresion en base a las necesidades de nuestros clientes.</p>
                </div>
            </div>
            <!-- End Equipos de Impresion -->
            <!-- Start Soporte -->
            <div class="columns-2 gap-2 items-center flex">
                <div class="w-1/6 m-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-17 h-17">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                      </svg>
                      
                </div>
                <div class="w-5/6">    
                    <a class="items-center flex" href="{{route('computo','todos')}}">
                        Computo
                    </a>
                    <br>
                    <p class="text-justify">Ofrecemos todo tipo de equipos empresariales desde un accesorio hasta un servidor de mision critica.</p>
                </div>
            </div>
            <!-- End Soporte -->
            <!-- Start CCTV -->
            <div class="columns-2 gap-2 items-center flex">
                <div class="w-1/6 m-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-17 h-17">
                        <path d="M4.5 4.5a3 3 0 0 0-3 3v9a3 3 0 0 0 3 3h8.25a3 3 0 0 0 3-3v-9a3 3 0 0 0-3-3H4.5ZM19.94 18.75l-2.69-2.69V7.94l2.69-2.69c.944-.945 2.56-.276 2.56 1.06v11.38c0 1.336-1.616 2.005-2.56 1.06Z" />
                      </svg>                          
                </div>
                <div class="w-5/6">
                    <a class="items-center flex" href="{{route('terminales','todos')}}">Terminales</a>
                    <br>
                    <p class="text-justify">Ofrecemos desde un accesorio, software de punto de venta, hasta todo kit completo para arrancar su negocio desde cero.</p>
                </div>
            </div>
            <!-- End CCTV -->
            <!-- Start Punto de venta -->
            <div class="columns-2 gap-2 items-center flex">
                <div class="w-1/6 m-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-17 h-17">
                        <path d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
                      </svg>                          
                </div>
                <div class="w-5/6">
                    <a class="items-center flex" href="{{route('escaners','todos')}}">Escaners</a>
                    <br>
                    <p class="text-justify">Ofrecemos diversos productos de diferentes marcas y categorias de escaners en base a las necesidades de nuestros clientes.</p>
                </div>
            </div>
            <!-- End Punto de venta -->
            <!-- Start Software -->
            <div class="columns-2 gap-2 items-center flex"> 
                <div class="w-1/6 m-auto">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-17 h-17">
                        <path fill-rule="evenodd" d="M2.25 6a3 3 0 0 1 3-3h13.5a3 3 0 0 1 3 3v12a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V6Zm3.97.97a.75.75 0 0 1 1.06 0l2.25 2.25a.75.75 0 0 1 0 1.06l-2.25 2.25a.75.75 0 0 1-1.06-1.06l1.72-1.72-1.72-1.72a.75.75 0 0 1 0-1.06Zm4.28 4.28a.75.75 0 0 0 0 1.5h3a.75.75 0 0 0 0-1.5h-3Z" clip-rule="evenodd" />
                      </svg>                         
                </div>
                <div class="w-5/6">
                    <a class="items-center flex" href="{{route('proteccion','todos')}}">Proteccion</a>
                    <br>
                    <p class="text-justify">Sistemas completos de accesos por biometrico,tarjeta,huella o codigo,controles de presencia y horarios,videoportetos,etc.</p>
                </div>
            </div>
            <!-- End Software -->
            <!-- Start Redes -->
            <div class="columns-2 gap-2 items-center flex">
                <div class="w-1/6 m-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-17 h-17">
                        <path fill-rule="evenodd" d="M1.371 8.143c5.858-5.857 15.356-5.857 21.213 0a.75.75 0 0 1 0 1.061l-.53.53a.75.75 0 0 1-1.06 0c-4.98-4.979-13.053-4.979-18.032 0a.75.75 0 0 1-1.06 0l-.53-.53a.75.75 0 0 1 0-1.06Zm3.182 3.182c4.1-4.1 10.749-4.1 14.85 0a.75.75 0 0 1 0 1.061l-.53.53a.75.75 0 0 1-1.062 0 8.25 8.25 0 0 0-11.667 0 .75.75 0 0 1-1.06 0l-.53-.53a.75.75 0 0 1 0-1.06Zm3.204 3.182a6 6 0 0 1 8.486 0 .75.75 0 0 1 0 1.061l-.53.53a.75.75 0 0 1-1.061 0 3.75 3.75 0 0 0-5.304 0 .75.75 0 0 1-1.06 0l-.53-.53a.75.75 0 0 1 0-1.06Zm3.182 3.182a1.5 1.5 0 0 1 2.122 0 .75.75 0 0 1 0 1.061l-.53.53a.75.75 0 0 1-1.061 0l-.53-.53a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                      </svg>                          
                </div>
                <div class="w-5/6">
                    <a class="items-center flex" href="{{route('redes','todos')}}">Redes</a>
                    <br>
                    <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti voluptas nemo sunt officia ullam alias nihil, modi illum ipsum enim ratione quo eius veritatis reprehenderit, eveniet, dolor aut assumenda quas.</p>
                </div>
            </div>
            <!-- End Redes -->

            <!-- Start Consumibles -->
            <div class="columns-2 gap-2 items-center flex">
                <div class="w-1/6 m-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-17 h-17">
                        <path d="M3.375 3C2.339 3 1.5 3.84 1.5 4.875v.75c0 1.036.84 1.875 1.875 1.875h17.25c1.035 0 1.875-.84 1.875-1.875v-.75C22.5 3.839 21.66 3 20.625 3H3.375Z" />
                        <path fill-rule="evenodd" d="m3.087 9 .54 9.176A3 3 0 0 0 6.62 21h10.757a3 3 0 0 0 2.995-2.824L20.913 9H3.087ZM12 10.5a.75.75 0 0 1 .75.75v4.94l1.72-1.72a.75.75 0 1 1 1.06 1.06l-3 3a.75.75 0 0 1-1.06 0l-3-3a.75.75 0 1 1 1.06-1.06l1.72 1.72v-4.94a.75.75 0 0 1 .75-.75Z" clip-rule="evenodd" />
                    </svg>                          
                </div>
                <div class="w-5/6">
                    <a class="items-center flex" href="{{route('consumible','todos')}}">Consumibles</a>
                    <br>
                    <p class="text-justify">Ofrecemos todo tipo de consumibles para tu negocio(etiquetas,ribbon,tarjetas PVC,toner,entre otros).</p>
                </div>
            </div>
            <!-- End Consumibles -->

            <!-- Start Infraestructura IT -->
            <div class="columns-2 gap-2 items-center flex">
                <div class="w-1/6 m-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-17 h-17">
                        <path fill-rule="evenodd" d="M2.25 5.25a3 3 0 0 1 3-3h13.5a3 3 0 0 1 3 3V15a3 3 0 0 1-3 3h-3v.257c0 .597.237 1.17.659 1.591l.621.622a.75.75 0 0 1-.53 1.28h-9a.75.75 0 0 1-.53-1.28l.621-.622a2.25 2.25 0 0 0 .659-1.59V18h-3a3 3 0 0 1-3-3V5.25Zm1.5 0v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5Z" clip-rule="evenodd" />
                    </svg>                         
                </div>
                <div class="w-5/6">
                    <a class="items-center flex" href="{{route('seguridad','todos')}}">Seguridad</a>
                    <br>
                    <p class="text-justify">Sistemas completos de accessos por biometrico,tarjeta,huella o codigo,controles de presencia y horarios,videoporteros,etc.</p>
                </div>
            </div>
            <!-- End Infraestructura IT -->

        </div>
        <!-- End of columns for products and services-->
    </div>
</div>
@endsection
@section('js')
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>
<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
@endsection