@extends('layouts.main')

<aside class="hidden sm:flex sm:flex-col">
    <a href="{{ route('all-courses') }}"
        class="inline-flex items-center justify-center h-20 w-20 bg-purple-600 hover:bg-purple-500 focus:bg-purple-500">
        <svg fill="none" viewBox="0 0 64 64" class="h-12 w-12">
            <title>All courses</title>
            <path
                d="M32 14.2c-8 0-12.9 4-14.9 11.9 3-4 6.4-5.6 10.4-4.5 2.3.6 4 2.3 5.7 4 2.9 3 6.3 6.4 13.7 6.4 7.9 0 12.9-4 14.8-11.9-3 4-6.4 5.5-10.3 4.4-2.3-.5-4-2.2-5.7-4-3-3-6.3-6.3-13.7-6.3zM17.1 32C9.2 32 4.2 36 2.3 43.9c3-4 6.4-5.5 10.3-4.4 2.3.5 4 2.2 5.7 4 3 3 6.3 6.3 13.7 6.3 8 0 12.9-4 14.9-11.9-3 4-6.4 5.6-10.4 4.5-2.3-.6-4-2.3-5.7-4-2.9-3-6.3-6.4-13.7-6.4z"
                fill="#fff" />
        </svg>
    </a>
    <div class="flex-grow flex flex-col justify-between text-gray-500 bg-gray-800">
        <nav class="flex flex-col mx-4 my-6 space-y-4">
            <a href="{{ route('my-courses') }}"
                class="inline-flex items-center justify-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">
                <span class="sr-only">My Courses</span>
                <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                </svg>
            </a>
            <a href="{{ route('home') }}"
                class="inline-flex items-center justify-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">
                <span class="sr-only">Dashboard</span>
                <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                </svg>
            </a>
            <a href="{{ route('mail.trap') }}"
                class="inline-flex items-center justify-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">
                <span class="sr-only">Messages</span>
                <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
            </a>
            <a href="#"
                class="inline-flex items-center justify-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">
                <span class="sr-only">Documents</span>
                <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                </svg>
            </a>
        </nav>
        <div class="inline-flex items-center justify-center h-20 w-20 border-t border-gray-700">
            <button class="p-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">
                <span class="sr-only">Settings</span>
                <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
            </button>
        </div>
    </div>
</aside>

@section('content')

<link rel="stylesheet" href="{{ asset('css/FAQ.css') }}">

    <h2>Perguntas frequentes</h2>

    <div style="visibility: hidden; position: absolute; width: 0px; height: 0px;">
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol viewBox="0 0 24 24" id="expand-more">
                <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z" />
                <path d="M0 0h24v24H0z" fill="none" />
            </symbol>
            <symbol viewBox="0 0 24 24" id="close">
                <path
                    d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z" />
                <path d="M0 0h24v24H0z" fill="none" />
            </symbol>
        </svg>
    </div>

    <details open>
        <summary>
            O acesso ao conteúdo do curso é vitalício?
            <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" />
            </svg>
            <svg class="control-icon control-icon-close" width="24" height="24" role="presentation">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" />
            </svg>
        </summary>
        <p class="mt-2">Depende. Temos 3 planos de assinaturas que dão acesso total aos conteúdos do site, mas por tempo limitado. Caso opte por comprar um curso em si, esse sim, será vitalício.</p>
    </details>

    <details>

        <summary>
            Como funciona o plano de assinatura?
            <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" />
            </svg>
            <svg class="control-icon control-icon-close" width="24" height="24" role="presentation">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" />
            </svg>
        </summary>
        <p class="mt-2">
            O plano de assinatura funciona por determinado período, a depender da contratação. Durante o tempo de assinatura, o cliente possuirá total acesso ao conteúdo do site e terá acesso também 
            a cursos que serão lançados, <span class="font-bold">durante esse período</span>.
        </p>
    </details>

    <details>
        <summary>
            Há alguma restrição para quem compra o curso?
            <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" />
            </svg>
            <svg class="control-icon control-icon-close" width="24" height="24" role="presentation">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" />
            </svg>
        </summary>
        <p class="mt-2">
            Não. Quem compra o curso em si terá acesso a tudo que ele contém, como desafios e atividades, além do curso. Mas a assinatura dará acesso a desafios exclusivos de assinantes.
        </p>
    </details>

    <details>
        <summary>
            Qual o diferencial da compra do curso e da assinatura?
            <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" />
            </svg>
            <svg class="control-icon control-icon-close" width="24" height="24" role="presentation">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" />
            </svg>
        </summary>
        <p class="mt-2">
            A assinatura lhe dará acesso ao dashboard do estudante, onde mostrará o seu desempenho no curso, o desempenho dos seus colegas, mentoria online, desafios exclusivos, assistência 
            sempre presente, entre outros benefícios.
        </p>
    </details>

@endsection