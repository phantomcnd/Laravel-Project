<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gamer Fest</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <!-- Fondo responsivo -->
        <div class="relative min-h-screen bg-custom">

            <!-- Overlay -->
            <div class="absolute inset-0 bg-black opacity-50"></div>

            <div class="relative z-10 flex flex-col min-h-screen justify-between text-white">
                
                <!-- Header -->
                <header class="flex justify-between items-center p-4 sm:p-6">
                    <!-- Logo y frase -->
                    <div class="flex items-center space-x-4">
                        <!-- Logo -->
                        <a href="{{ url('/') }}">
                        <img 
                                src="{{ Vite::asset('public/images/transparente.png') }}" 
                                alt="Gamer Fest" 
                                class="h-12 sm:h-14 md:h-16 w-auto"
                            >
                        </a>
                        <!-- Frase al lado del logo -->
                        <span class="text-white text-xl sm:text-2xl md:text-3xl font-semibold">
                            Gamer Fest
                        </span>
                    </div>

                    <!-- Navegación -->
                    <nav class="space-x-4 text-sm sm:text-base">
                        @if (Route::has('login'))
                            @auth
                                <a 
                                    href="{{ url('/dashboard') }}" 
                                    class="px-4 py-2 border border-white rounded-md hover:bg-white hover:text-black transition"
                                >
                                    Dashboard
                                </a>
                            @else
                                <a 
                                    href="{{ route('login') }}" 
                                    class="px-4 py-2 border border-white rounded-md hover:bg-white hover:text-black transition"
                                >
                                    Iniciar Sesión
                                </a>
                            @endauth
                        @endif
                    </nav>
                </header>

                <!-- Contenido Central -->
                <main class="flex-grow flex flex-col items-center justify-center text-center px-4">
                    <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold mb-4">
                        Gamer Fest
                    </h1>
                    <p class="text-lg sm:text-xl mb-8">
                        Únete al mejor torneo de gamers
                    </p>
                    <div>
                        @if (Route::has('register'))
                            <a 
                                href="{{ route('register') }}" 
                                class="bg-[#FF2D20] text-white px-5 py-2 sm:px-6 sm:py-3 rounded-md shadow-lg hover:bg-[#e0291c] transition"
                            >
                                Regístrate Ahora!!!
                            </a>
                        @endif
                    </div>
                </main>

                <!-- Footer -->
                <footer class="p-4 sm:p-6 text-center text-xs sm:text-sm bg-black bg-opacity-50">
                    <p>&copy; {{ date('Y') }} Gamer Fest. Todos los derechos reservados.</p>
                </footer>
            </div>
        </div>
    </body>
</html>
