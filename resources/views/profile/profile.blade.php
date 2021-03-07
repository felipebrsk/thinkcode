<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu perfil</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body class="bg-gray-300 font-sans antialiased">
    <div class="container mx-auto my-60">
        <div>

            <div class="bg-white relative shadow-xl w-5/6 md:w-4/6  lg:w-3/6 xl:w-2/6 mx-auto">
                <div class="flex justify-center">
                    @if(isset(Auth::user()->profile_picture))
                        <img src="{{ asset('/profiles/' . Auth::user()->profile_picture) }}" class="rounded-full mx-auto absolute -top-20 w-32 h-32 shadow-2xl border-4 border-white" alt="Profile picture">
                    @else
                        <img src="http://assets.stickpng.com/images/585e4bf3cb11b227491c339a.png" alt="user profile photo" class="rounded-full mx-auto absolute -top-20 w-32 h-32 shadow-2xl border-4 border-white">
                    @endif
                </div>
                
                <div class="mt-16">
                    <h1 class="font-bold text-center text-3xl text-gray-900">{{Auth::user()->username}}</h1>
                    <p class="text-center text-sm text-gray-400 font-medium">{{Auth::user()->job}}</p>
                    <p>
                        <span>
                            
                        </span>
                    </p>
                    <div class="my-5">
                        <a href="#" class="text-indigo-200 block text-center font-medium leading-6 px-6 py-3 bg-indigo-600">Conectado como <span class="font-bold">@FelipeOliveira</span></a>
                    </div>
                    <div class="flex justify-evenly my-5">
                        <a href="" class="bg font-bold text-sm text-blue-800 w-full text-center py-3 hover:bg-blue-800 hover:text-white hover:shadow-lg">Facebook</a>
                        <a href="" class="bg font-bold text-sm text-blue-400 w-full text-center py-3 hover:bg-blue-400 hover:text-white hover:shadow-lg">Twitter</a>
                        <a href="" class="bg font-bold text-sm text-yellow-600 w-full text-center py-3 hover:bg-yellow-600 hover:text-white hover:shadow-lg">Instagram</a>
                        <a href="" class="bg font-bold text-sm text-gray-600 w-full text-center py-3 hover:bg-gray-600 hover:text-white hover:shadow-lg">Email</a>
                    </div>

                    <div class="w-full">
                        <h3 class="font-bold text-gray-600 text-left px-4">Atividades recentes</h3>
                        <div class="mt-5 w-full">
                            <a href="#" class="w-full border-t-2 border-gray-100 font-medium text-gray-600 py-4 px-4 block hover:bg-gray-100 transition duration-150">
                                <img src="http://assets.stickpng.com/images/585e4bf3cb11b227491c339a.png" alt="" class="rounded-full h-6 shadow-md inline-block mr-2">
                                    Assinou a imersão em JavaScript
                                    <span class="text-gray-400 text-sm">24 min atrás</span>
                            </a>

                            <a href="#" class="w-full border-t-2 border-gray-100 font-medium text-gray-600 py-4 px-4 block hover:bg-gray-100 transition duration-150">
                                <img src="http://assets.stickpng.com/images/585e4bf3cb11b227491c339a.png" alt="" class="rounded-full h-6 shadow-md inline-block mr-2">
                                    Adicionou uma nova foto de perfil
                                    <span class="text-gray-400 text-sm">42 min atrás</span>
                            </a>

                            <a href="#" class="w-full border-t-2 border-gray-100 font-medium text-gray-600 py-4 px-4 block hover:bg-gray-100 transition duration-150">
                                <img src="http://assets.stickpng.com/images/585e4bf3cb11b227491c339a.png" alt="" class="rounded-full h-6 shadow-md inline-block mr-2">
                                Publicou um novo artigo em <span class="font-bold">JavaScript</span>
                                <span class="text-gray-400 text-sm">49 min atrás</span>
                            </a>

                            <a href="#" class="w-full border-t-2 border-gray-100 font-medium text-gray-600 py-4 px-4 block hover:bg-gray-100 transition duration-150">
                                <img src="http://assets.stickpng.com/images/585e4bf3cb11b227491c339a.png" alt="" class="rounded-full h-6 shadow-md inline-block mr-2">
                                Editou as configurações de perfil
                                <span class="text-gray-400 text-sm">1 dia atrás</span>
                            </a>

                            <a href="#" class="w-full border-t-2 border-gray-100 font-medium text-gray-600 py-4 px-4 block hover:bg-gray-100 transition duration-150">
                                <img src="http://assets.stickpng.com/images/585e4bf3cb11b227491c339a.png" alt="" class="rounded-full h-6 shadow-md inline-block mr-2">
                                Adicionou uma nova nota em PHP
                                <span class="text-gray-400 text-sm">5 dias atrás</span>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
</html>