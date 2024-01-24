<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @yield('css')
</head>
<body>
    <!-- Header -->
    <header class="p-1 border-b bg-white shadow text-black">
        <nav class="mx-auto flex max-w-7xl items-stretch justify-end p-6 lg:px-10 space-x-4">
            @auth
                <p class="font-bold">Hola {{auth()->user()->name}}</p>
            @endauth
            <a class="text-left" href="{{route('home')}}">Home</a>
            <a href="{{route('services')}}">Servicios</a>
            <a href="{{route('nosotros')}}">Nosotros</a>
            <a href="{{route('products')}}">Productos</a>
            <a href="{{route('contacto')}}">Contacto</a>
            @auth
                <form method="POST" action={{route('logout')}}>
                    @csrf 
                    <button type="submit">
                        Cerrar sesion
                    </button>
                </form>
            @endauth
            @guest
            <a href="{{route('login')}}">Login</a>
            <a href="{{route('register')}}">Registro</a>
            @endguest
        </nav>
    </header>

    <!-- Carousel -->
    <main class="mx-auto mt-10 w-full">
        @yield('carrusel')
    </main>

    <!-- Content-->
    <main class="mx-auto p-10 mt-10">
        <h2 class="text-center text-2xl">    
            @yield('titulo')
        </h2>
        @yield('contenido')
    </main>
    
    <footer class="text-center p-1 border-b shadow text-gray-500 font-bold">
        <div class="w-3/4 m-auto b-32 grid grid-cols-4 gap-5">
            <div>
                <h1 class="text-2xl">Vito Technologies</h1>
                <br>
                <p class="text-justify">Síguenos a continuación en nuestras redes sociales o también puedes comunicarte con nosotros enviando un correo electrónico y contestaremos lo más rápido posible, muchas gracias por considerarnos.</p>
            </div>
            <div>2</div>
            <div>3</div>
            <div>4</div>
        </div>
    </footer>
    @yield('js')
</body>
</html>