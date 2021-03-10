@extends('layouts.main')

<aside class="hidden sm:flex sm:flex-col">
    <a href="{{ route('all-courses') }}"
        class="inline-flex items-center justify-center h-20 w-20 bg-purple-600 hover:bg-purple-500 focus:bg-purple-500">
        <svg fill="none" viewBox="0 0 64 64" class="h-12 w-12">
            <title>ThinkCode logo</title>
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
            @if(auth()->user()->role_id === 1)
                <a href="{{ route('create.plan') }}"
                    class="inline-flex items-center justify-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">
                    <span class="sr-only">Plans Control</span>
                    <svg aria-hidden="true" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                    </svg>
                </a>
            @endif
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

    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
    <link rel="stylesheet" href="{{ asset('css/countdown.css') }}">

    <header class="showcase">
        <div class="content">
            <div class="title">
                {{ $findCourse->name }}
            </div>
            <div class="text">
                Bem vindo à imersão de conhecimento em {{ $findCourse->name }}.
            </div>
        </div>
    </header>

    <!-- Services -->
    <section class="services" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in-out"
        data-aos-mirror="true" data-aos-once="false">
        <div class="container grid-3 center">
            <div>
                <i class="fas fa-graduation-cap fa-3x"></i>
                <h3 class="font-bold">O que vou aprender?</h3>
                <p class="mt-2">{{ $findCourse->learn }}</p>
            </div>
            <div>
                <i class="fas fa-chalkboard-teacher fa-3x"></i>
                <h3 class="font-bold">Sobre</h3>
                <p class="mt-2">{{ $findCourse->about }}</p>
            </div>
            <div>
                <i class="fas fa-briefcase fa-3x"></i>
                <h3 class="font-bold">Features</h3>
                <p class="mt-2">{{ $findCourse->features }}</p>
            </div>
        </div>
    </section>

    @if(Auth::user()->is_subscribed != 1)
    <div class="mt-6 mb-24 flex justify-center items-center">
        <div class="">
            <div class="text-center font-semibold">
                <h1 class="text-5xl">
                    <span class="text-blue-700 tracking-wide">Planos </span>
                    <span>Flexíveis</span>
                </h1>
                <p class="pt-6 text-xl text-gray-400 font-normal w-full px-8 md:w-full">
                    Tenha acesso a todos os cursos <br /> da plataforma!
                </p>
            </div>
            <div class="pt-24 flex flex-row" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out"
                data-aos-mirror="true" data-aos-once="false">
                <!-- Basic Card -->
                <div class="w-96 p-8 bg-white text-center rounded-3xl pr-16 shadow-xl">
                    <h1 class="text-black font-semibold text-2xl">Plano trimestral</h1>
                    <p class="pt-2 tracking-wide">
                        <span class="text-gray-400 align-top">3x </span>
                        <span class="text-gray-400 align-top">R$ </span>
                        <span class="text-3xl font-semibold">49,90</span>
                        <span class="text-gray-400 font-medium">/ usuário</span>
                    <p class="text-gray-400 mt-1">Total R$149,70</p>
                    </p>
                    <hr class="mt-4 border-1">
                    <div class="pt-8">
                        <p class="font-semibold text-gray-400 text-left">
                            <span class="material-icons align-middle">
                                done
                            </span>
                            <span class="pl-2">
                                <span class="text-black">3 meses</span> de acesso livre
                            </span>
                        </p>
                        <p class="font-semibold text-gray-400 text-left pt-5">
                            <span class="material-icons align-middle">
                                done
                            </span>
                            <span class="pl-2">
                                Conteúdos exclusivos para <span class="text-black">assinantes</span>
                            </span>
                        </p>
                        <p class="font-semibold text-gray-400 text-left pt-5">
                            <span class="material-icons align-middle">
                                done
                            </span>
                            <span class="pl-2">
                                Gráfico de <span class="text-black">competências</span>
                            </span>
                        </p>

                        <a href="{{ route('plans.show', 1) }}" class="">
                            <p class="w-full py-4 bg-blue-600 mt-8 rounded-xl text-white">
                                <span class="font-medium">
                                    Assinar plano
                                </span>
                                <span class="pl-2 material-icons align-middle text-sm">
                                    east
                                </span>
                            </p>
                        </a>
                    </div>
                </div>
                <!-- StartUp Card -->
                <div
                    class="w-80 p-8 bg-gray-900 text-center rounded-3xl text-white border-4 shadow-xl border-white transform scale-125">
                    <h1 class="text-white font-semibold text-2xl">Plano anual</h1>
                    <p class="pt-2 tracking-wide">
                        <span class="text-gray-400 align-top">12x </span>
                        <span class="text-gray-400 align-top">R$ </span>
                        <span class="text-3xl font-semibold">24,90</span>
                        <span class="text-gray-400 font-medium">/ usuário</span>
                    <p class="text-gray-400 mt-1">Total R$322,80</p>
                    </p>
                    <hr class="mt-4 border-1 border-gray-600">
                    <div class="pt-8">
                        <p class="font-semibold text-gray-400 text-left">
                            <span class="material-icons align-middle">
                                done
                            </span>
                            <span class="pl-2">
                                <span class="text-white">1 ano</span> de acesso livre
                            </span>
                        </p>
                        <p class="font-semibold text-gray-400 text-left pt-5">
                            <span class="material-icons align-middle">
                                done
                            </span>
                            <span class="pl-2">
                                Gráfico de <span class="text-white">competências</span>
                            </span>
                        </p>
                        <p class="font-semibold text-gray-400 text-left pt-5">
                            <span class="material-icons align-middle">
                                done
                            </span>
                            <span class="pl-2">
                                <span class="text-white">Desafios</span> exclusivos
                            </span>
                        </p>
                        <p class="font-semibold text-gray-400 text-left pt-5">
                            <span class="material-icons align-middle">
                                done
                            </span>
                            <span class="pl-2">
                                <span class="text-white">Mentoria</span> exclusiva
                            </span>
                        </p>
                        <p class="font-semibold text-gray-400 text-left pt-5">
                            <span class="material-icons align-middle">
                                done
                            </span>
                            <span class="pl-2">
                                Assistência em <span class="text-white">códigos</span>
                            </span>
                        </p>
                        <p class="font-semibold text-gray-400 text-left pt-5">
                            <span class="material-icons align-middle">
                                done
                            </span>
                            <span class="pl-2">
                                Conteúdo exclusivo para <span class="text-white">Desenvolvimento WEB</span>
                            </span>
                        </p>

                        <a href="{{ route('plans.show', 3) }}" class="">
                            <p class="w-full py-4 bg-blue-600 mt-8 rounded-xl text-white">
                                <span class="font-medium">
                                    Assinar plano
                                </span>
                                <span class="pl-2 material-icons align-middle text-sm">
                                    east
                                </span>
                            </p>
                        </a>
                    </div>
                    <div class="absolute top-4 right-4">
                        <p class="bg-blue-700 font-semibold px-4 py-1 rounded-full uppercase text-xs">Popular</p>
                    </div>
                </div>
                <!-- Enterprise Card -->
                <div class="w-96 p-8 bg-white text-center rounded-3xl pl-16 shadow-xl">
                    <h1 class="text-black font-semibold text-2xl">Plano semestral</h1>
                    <p class="pt-2 tracking-wide">
                        <span class="text-gray-400 align-top">6x </span>
                        <span class="text-gray-400 align-top">R$ </span>
                        <span class="text-3xl font-semibold">39,90</span>
                        <span class="text-gray-400 font-medium">/ usuário</span>
                    <p class="text-gray-400 mt-1">Total R$239,40</p>
                    </p>
                    <hr class="mt-4 border-1">
                    <div class="pt-8">
                        <p class="font-semibold text-gray-400 text-left">
                            <span class="material-icons align-middle">
                                done
                            </span>
                            <span class="pl-2">
                                <span class="text-black">6 meses</span> de acesso livre
                            </span>
                        </p>
                        <p class="font-semibold text-gray-400 text-left pt-5">
                            <span class="material-icons align-middle">
                                done
                            </span>
                            <span class="pl-2">
                                Gráfico de <span class="text-black">competências</span>
                            </span>
                        </p>
                        <p class="font-semibold text-gray-400 text-left pt-5">
                            <span class="material-icons align-middle">
                                done
                            </span>
                            <span class="pl-2">
                                Conteúdo exclusivo para <span class="text-black">assinantes</span>
                            </span>
                        </p>
                        <p class="font-semibold text-gray-400 text-left pt-5">
                            <span class="material-icons align-middle">
                                done
                            </span>
                            <span class="pl-2">
                                <span class="text-black">Desafios</span> exclusivos
                            </span>
                        </p>

                        <a href="{{ route('plans.show', 2) }}" class="">
                            <p class="w-full py-4 bg-blue-600 mt-8 rounded-xl text-white">
                                <span class="font-medium">
                                    Assinar plano
                                </span>
                                <span class="pl-2 material-icons align-middle text-sm">
                                    east
                                </span>
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Countdown -->
    <div class="center mt-4" data-aos="fade-right" data-aos-duration="800" data-aos-easing="ease-in-out"
        data-aos-mirror="true" data-aos-once="false">
        <h1 id="headline" class="title-h1">Assine o Plano Anual com 13% de desconto até:</h1>
        <div id="countdown">
            <ul>
                <li class="counter"><span id="days"></span>Dias</li>
                <li class="counter"><span id="hours"></span>Horas</li>
                <li class="counter"><span id="minutes"></span>Minutos</li>
                <li class="counter"><span id="seconds"></span>Segundos</li>
            </ul>
        </div>
        <div class="message">
            <div id="content">
                <span class="emoji">🥳</span>
                <span class="emoji">🎉</span>
                <span class="emoji">🎂</span>
            </div>
        </div>
    </div>

    <div class="justify-center flex mt-4 text-gray-500">ou</div>

    {{-- Buy course --}}
    <div class="justify-center flex mt-12">
        <a href="{{ route('course.buy', $findCourse->id) }}"
            class="focus:outline-none text-white text-sm py-2.5 px-5 border-b-4 border-green-600 rounded-md bg-green-500 hover:bg-green-400">Comprar</a>
    </div>
    @else
        {{-- Require course (subs option) --}}
        <div class="justify-center flex mt-12">
            <form action="{{ route('course.require', $findCourse->id) }}" method="post">
                @csrf
                <input type="hidden" name="course_id" id="course_id" value="{{ $findCourse->id }}">
                <button type="submit"
                    class="focus:outline-none text-white text-sm py-2.5 px-5 border-b-4 border-green-600 rounded-md bg-green-500 hover:bg-green-400">Adicionar</button>
            </form>
        </div>
    @endif

    {{-- Error --}}
    @if (count($errors) > 0)
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative center w-96" role="alert">
            @foreach ($errors->all() as $error)
                <span class="block sm:inline">{{ $error }}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3"></span>
            @endforeach
        </div>
    @endif

    <!-- About -->
    <section class="about bg-light mt-4">
        <div class="container">
            <div class="grid-2">
                <div class="center">
                    <i class="fas fa-laptop-code fa-10x"></i>
                </div>
                <div>
                    <h3>Sobre mim</h3>
                    <p>
                        Sou desenvolvedor web FullStack, busco aprender mais a cada dia sobre o gigante mundo da tecnologia.
                        Atualmente, meu foco maior se encontra no back-end, mas
                        busco sempre estar atualizado e imerso em todas as tecnologias atuais da programação. O foco do site
                        é passar esse conhecimento de forma gratuita para conseguir
                        ajudar efetivamente os meus colegas, pois conheço todas as dificuldades que tive no início e sei que
                        muitos podem ter.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <footer class="center bg-dark">
        <p>Felipe Oliveira &copy; 2021</p>
    </footer>

    <script>
        (function() {
            const second = 1000,
                minute = second * 60,
                hour = minute * 60,
                day = hour * 24;

            let birthday = "Mar 30, 2021 00:00:00",
                countDown = new Date(birthday).getTime(),
                x = setInterval(function() {

                    let now = new Date().getTime(),
                        distance = countDown - now;

                    document.getElementById("days").innerText = Math.floor(distance / (day)),
                        document.getElementById("hours").innerText = Math.floor((distance % (day)) / (
                            hour)),
                        document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (
                            minute)),
                        document.getElementById("seconds").innerText = Math.floor((distance % (minute)) /
                            second);

                    //do something later when date is reached
                    if (distance < 0) {
                        let headline = document.getElementById("headline"),
                            countdown = document.getElementById("countdown"),
                            content = document.getElementById("content");

                        headline.innerText = "Tempo esgotado! :(";
                        countdown.style.display = "none";
                        content.style.display = "block";

                        clearInterval(x);
                    }
                    //seconds
                }, 0)
        }());

    </script>

@endsection
