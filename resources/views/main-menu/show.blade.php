@extends('layouts.main')

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
