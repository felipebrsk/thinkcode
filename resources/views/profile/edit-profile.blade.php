<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu perfil</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body class="bg-gray-300 font-sans antialiased">

@if($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Ops!</strong>
        <span class="block sm:inline">{{ $errors->first() }}</span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Fechar</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
        </span>
    </div>
@endif

@if (session()->has('success_message'))
    <div class="bg-green-600 text-center py-4 lg:px-4">
        <div class="p-2 bg-green-400 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex">
            <span class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">Success</span>
            <span class="font-semibold mr-2 text-left flex-auto">{{ session()->get('success_message') }}</span>
        </div>
    </div>
@endif

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

                    <div class="w-full">
                        <h3 class="font-bold text-gray-600 text-left px-4">Meus dados</h3>
                        <div class="mt-5 w-full">
                            <form action="{{ route('edit-profile.update', $user->id) }}" method="post" enctype="multipart/form-data">
                                @method('patch')
                                    @csrf
                                    <div class="flex w-full mt-2 items-center justify-center bg-grey-lighter">
                                        <label class="w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue">
                                            <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                            </svg>
                                            <span class="mt-2 text-base leading-normal">Alterar foto</span>
                                            <input type='file' name="profile_picture" accept="image/*" class="hidden" />
                                        </label>
                                    </div>
                                <input type="text" placeholder="Nome de usuário" name="username" value="{{isset($user->username) ? ($user->username) : old('username')}}" class="mt-2 w-full border-t-2 border-gray-100 font-medium text-gray-600 py-4 px-4 w-full block hover:bg-gray-100 transition duration-150" required>
                                <input type="email" placeholder="E-mail" name="email" value="{{isset($user->email) ? ($user->email) : old('email')}}" class="w-full border-t-2 border-gray-100 font-medium text-gray-600 py-4 px-4 w-full block hover:bg-gray-100 transition duration-150" required>
                                <input type="password" placeholder="Nova senha" name="password" class="w-full border-t-2 border-gray-100 font-medium text-gray-600 py-4 px-4 w-full block hover:bg-gray-100 transition duration-150">
                                <input type="password" placeholder="Confirmação de senha" name="password_confirmation" class="w-full border-t-2 border-gray-100 font-medium text-gray-600 py-4 px-4 w-full block hover:bg-gray-100 transition duration-150">
                                <button type="submit" class="flex w-full mt-4 items-center justify-center bg-grey-lighter bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                    Salvar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
</html>