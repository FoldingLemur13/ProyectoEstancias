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
                @if(auth()->user()->id == 1)
                    <a href="{{route('posts.create')}}">Agregar Producto</a>
                @endif
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
    <main class="w-full">
        @yield('contenido')
    </main>
    
    <footer class="text-center p-1 border-b shadow bg-neutral-800 font-bold text-white">
        <div class="w-3/4 m-auto b-32 grid  gap-10 md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-4 xl:grid-cols-4">
            <div>
                <h1 class="text-2xl">Vito Technologies</h1>
                <br>
                <p class="text-justify">Síguenos a continuación en nuestras redes sociales o también puedes comunicarte con nosotros enviando un correo electrónico y contestaremos lo más rápido posible, muchas gracias por considerarnos.</p>
            </div>
            <div>
                <h2>LINKS</h2>
                <hr>
                <ul>
                    <li>
                        <a href="{{route("home")}}">Home</a>
                    </li>
                    <hr>
                    <li>
                        <a href="{{route("nosotros")}}">Nosotros</a>
                    </li>
                    <hr>
                    <li>
                        <a href="{{route("services")}}">Servicios</a>
                    </li>
                    <hr>
                    <li>
                        <a href="{{route("contacto")}}">Contacto</a>
                    </li>
                    <hr>
                    <li>
                        <a href="{{route("products")}}">Productos</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2>CONTACTANOS</h2>
                <hr>
                <p>El Carmen, Nuevo León</p>
                <p>C.P 66583</p>
                <p>Buena Vista</p>
                <p>Tel. o WhatsApp: (81)-174-13-496</p>
                <p>Email: contacto@vitotechnologies.com</p>
                <div class="grid-cols-4 grid p-1 gap-2">
                    <div>
                        <img class="full-rounded w-10 h-10" src="{{asset('img/facebook6.png')}}">
                    </div>
                    <div>
                        <img class="full-rounded w-10 h-10" src="{{asset('img/instagram.png')}}">
                    </div>
                    <div>
                        <img class="full-rounded w-10 h-10" src="{{asset('img/whatsapp.png')}}">
                    </div>
                    <div>
                        <img class="full-rounded w-10 h-10" src="{{asset('img/youtube.png')}}">
                    </div>
                </div>
            </div>
            <div>
                <h2>MANTENTE AL PENDIENTE DE NUESTRA OFERTAS</h2>
                <p>Suscríbete y sé de nuestros primero clientes en saber todas nuestras ofertas diarías, únicamente registra tu correo electrónico aquí.</p>
                <form class="grid-cols-2 grid lg:gap-52 sm:gap-10">
                    <div>
                        <input>
                    </div>
                    <div>
                        <button>Registrame</button>
                    </div>
                </form>
            </div>
        </div>
    </footer>
    @yield('js')
</body>
</html>