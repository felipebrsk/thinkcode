<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
    <livewire:styles />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css">
    <title>ThinkCode</title>
</head>

<body class="flex bg-gray-100 min-h-screen">

    {{-- Here is the navBar --}}

    {{-- Here end the navBar --}}

    <div class="flex-grow text-gray-800">
        <header class="flex items-center h-20 px-6 sm:px-10 bg-white">
            <button
                class="block sm:hidden relative flex-shrink-0 p-2 mr-2 text-gray-600 hover:bg-gray-100 hover:text-gray-800 focus:bg-gray-100 focus:text-gray-800 rounded-full">
                <span class="sr-only">Menu</span>
                <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                </svg>
            </button>
            <livewire:search-dropdown>
                <div class="flex flex-shrink-0 items-center ml-auto">

                    {{-- User dropdown --}}
                    <div x-data="{ dropdownOpen: false }" class="relative my-32">
                        <button @click="dropdownOpen = !dropdownOpen"
                            class="inline-flex items-center p-2 hover:bg-gray-100 focus:bg-gray-100 rounded-lg">
                            <span class="sr-only">User Menu</span>
                            <div class="hidden md:flex md:flex-col md:items-end md:leading-tight">
                                <span class="font-semibold">{{ Auth::user()->username }}
                                    @if(Auth::user()->is_subscribed == 1)
                                        <i class="fas fa-star"></i>
                                    @endif</span>
                                <span class="text-sm text-gray-600">{{ Auth::user()->job }}</span>
                            </div>
                            <span class="h-12 w-12 ml-2 sm:ml-3 mr-2 bg-gray-100 rounded-full overflow-hidden">
                                @if (isset(Auth::user()->profile_picture))
                                    <img src="{{ asset('/profiles/' . Auth::user()->profile_picture) }}"
                                        alt="Profile picture" class="h-full w-full object-cover">
                                @else
                                    <img src="http://assets.stickpng.com/images/585e4bf3cb11b227491c339a.png"
                                        alt="user profile photo" class="h-full w-full object-cover">
                                @endif
                            </span>
                            <svg class="h-5 w-5 text-gray-800" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>

                        <div x-show="dropdownOpen" @click="dropdownOpen = false"
                            class="fixed inset-0 h-full w-full z-10"></div>

                        <div x-show="dropdownOpen"
                            class="absolute right-0 mt-2 py-2 w-48 bg-white rounded-md shadow-xl z-20">
                            <div x-data="{ isOpen: false }">
                                <a href="#" @click="isOpen = true"
                                    class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                                    Perfil
                                </a>

                                <template x-if="isOpen">
                                    <div style="background-color: rgba(0, 0, 0, .5);"
                                        class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto">
                                        <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
                                            <div class="bg-gray-900 rounded">
                                                <div class="flex justify-end pr-4 pt-2">
                                                    <button @click="isOpen = false" @click.away="isOpen = false"
                                                        @keydown.escape.window="isOpen = false"
                                                        class="text-3xl leading-none hover:text-gray-300">&times;
                                                    </button>
                                                </div>
                                                <div class="modal-body px-2 py-2">
                                                    <div class="responsive-container overflow-hidden relative"
                                                        style="padding-top: 56.25%;">
                                                        <iframe
                                                            class="responsive-iframe absolute top-0 left-0 w-full h-full"
                                                            src="{{ route('my-profile') }}"
                                                            style="border:0;"></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </template>
                            </div>
                            <a href="{{ route('my-courses') }}"
                                class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                                Meus cursos
                            </a>
                            <a href="{{ route('faq') }}"
                                class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                                Ajuda
                            </a>
                            <div x-data="{ isOpen: false }">
                                <a href="#" @click="isOpen = true"
                                    class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                                    Editar perfil
                                </a>

                                <template x-if="isOpen">
                                    <div style="background-color: rgba(0, 0, 0, .5);"
                                        class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto">
                                        <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
                                            <div class="bg-gray-900 rounded">
                                                <div class="flex justify-end pr-4 pt-2">
                                                    <button @click="isOpen = false" @click.away="isOpen = false"
                                                        @keydown.escape.window="isOpen = false"
                                                        class="text-3xl leading-none hover:text-gray-300">&times;
                                                    </button>
                                                </div>
                                                <div class="modal-body px-2 py-2">
                                                    <div class="responsive-container overflow-hidden relative"
                                                        style="padding-top: 56.25%;">
                                                        <iframe
                                                            class="responsive-iframe absolute top-0 left-0 w-full h-full"
                                                            src="{{ route('edit-profile', Auth::user()->id) }}"
                                                            style="border:0;"></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </div>
                    {{-- End of user dropdown --}}

                    {{-- Notifications dropdown --}}
                    <div class="border-l pl-3 ml-3 space-x-1">
                        <div x-data="{ dropdownOpen: false }" class="relative my-32">
                            <button @click="dropdownOpen = !dropdownOpen"
                                class="relative p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-600 focus:outline-none focus:bg-gray-100 focus:text-gray-600 rounded-full">
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor" stroke-linecap="round">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
                                </svg>
                                <span class="absolute top-0 right-0 h-2 w-2 mt-1 mr-2 bg-red-500 rounded-full"></span>
                                <span
                                    class="absolute top-0 right-0 h-2 w-2 mt-1 mr-2 bg-red-500 rounded-full animate-ping"></span>
                            </button>

                            <div x-show="dropdownOpen" @click="dropdownOpen = false"
                                @keydown.escape.window="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10">
                            </div>

                            <div x-show="dropdownOpen"
                                class="absolute right-0 mt-2 bg-white rounded-md shadow-lg overflow-hidden z-20"
                                style="width:20rem;">
                                <div class="py-2">
                                    <a href="#" class="flex items-center px-4 py-3 border-b hover:bg-gray-100 -mx-2">
                                        <img class="h-8 w-8 rounded-full object-cover mx-1"
                                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80"
                                            alt="avatar">
                                        <p class="text-gray-600 text-sm mx-2">
                                            <span class="font-bold" href="#">Sara Ramos</span> respondeu a sua pergunta no artigo <span
                                                class="font-bold text-blue-500" href="#">Timer em JavaScript</span>. 
                                            2m
                                        </p>
                                    </a>
                                    <a href="#" class="flex items-center px-4 py-3 border-b hover:bg-gray-100 -mx-2">
                                        <img class="h-8 w-8 rounded-full object-cover mx-1"
                                            src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80"
                                            alt="avatar">
                                        <p class="text-gray-600 text-sm mx-2">
                                            <span class="font-bold" href="#">Maurício Campos</span> começou o curso em PHP. 45m
                                        </p>
                                    </a>
                                    <a href="#" class="flex items-center px-4 py-3 border-b hover:bg-gray-100 -mx-2">
                                        <img class="h-8 w-8 rounded-full object-cover mx-1"
                                            src="https://images.unsplash.com/photo-1450297350677-623de575f31c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80"
                                            alt="avatar">
                                        <p class="text-gray-600 text-sm mx-2">
                                            <span class="font-bold" href="#">Sam Smith</span> curtiu a sua resposta no artigo <span
                                                class="font-bold text-blue-500" href="#">Test with TDD</span> .
                                            1h
                                        </p>
                                    </a>
                                    <a href="#" class="flex items-center px-4 py-3 hover:bg-gray-100 -mx-2">
                                        <img class="h-8 w-8 rounded-full object-cover mx-1"
                                            src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=398&q=80"
                                            alt="avatar">
                                        <p class="text-gray-600 text-sm mx-2">
                                            <span class="font-bold" href="#">Maria Tereza </span> começou a te seguir
                                            . 3h
                                        </p>
                                    </a>
                                </div>
                                <a href="#" class="block bg-gray-800 text-white text-center font-bold py-2">Ver todas as notificações</a>
                            </div>
                            {{-- End of notifications --}}

                            <button
                                class="relative p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-600 focus:bg-gray-100 focus:text-gray-600 rounded-full">
                                <span class="sr-only">Log out</span>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        class="h-6 w-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                    </svg>
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
        </header>
        @yield('content')

        @include('partials.get-in-touch')

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <livewire:scripts />
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <script src="https://js.stripe.com/v3/"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.4.2/zxcvbn.js"></script>

        <script>
            AOS.init();

        </script>
</body>

</html>
