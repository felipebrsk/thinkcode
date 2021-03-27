<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/content.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>Estudos - {{ $course->name }}</title>
</head>

<body>

    <div id="app" class="container mx-auto lg:mx-0">
        <div id="sideNavBg" class="fixed inset-0 w-full h-full"></div>
        <!-- Side Nav -->
        <nav id="sideNav"
            class="w-64 -ml-64 lg:ml-0 bg-white lg:bg-gray-100 h-full min-h-screen fixed overflow-y-scroll block left-0 z-50">
            <a href="{{ route('my-courses') }}">
                <div
                    class="bg-gray-300 p-3 mr-3 rounded-r-full text-sm uppercase mt-1 font-medium text-gray-600 pl-8 hover:bg-gray-800 hover:text-white cursor-pointer transition hover-invert-img">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-left float-left mt-0.5" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                    </svg>
                    <span class="ml-1">Voltar</span>
                </div>
            </a>
            @foreach ($content as $contents)
                <div x-data="{ chapterOpen: false }"
                    class="bg-gray-300 p-3 mr-3 mt-4 rounded-r-full text-sm uppercase font-medium text-gray-600 pl-8 hover:bg-gray-800 hover:text-white cursor-pointer transition hover-invert-img">
                    <button type="button" class="focus:outline-none" @click="chapterOpen = !chapterOpen">
                        <img src="https://saasadventure.io/img/svgs/arrow-down.svg" alt="down arrow"
                            class="float-left mt-2 mr-2 invert-me"> Capítulo {{$contents->chapter_id}}
                    </button>

                    <div x-show="chapterOpen" @click="chapterOpen = false" @keydown.escape.window="chapterOpen = false"
                        class="fixed inset-0 h-full w-full z-10">
                    </div>

                    <ul x-show="chapterOpen">
                        <li>
                            <a href="#_"
                                class="text-xs p-3 pr-0 pl-8 mt-2 mr-10 block bg-purple-500 text-white rounded-r-full">
                                <img src="https://saasadventure.io/img/svgs/dot.svg" alt="dot"
                                    class="float-left mt-1 mr-2">
                                <span class="font-bold mr-1">Aula {{ $contents->aula_id }}</span>
                                {{ $contents->name }}
                            </a>
                        </li>
                    </ul>
                </div>
            @endforeach
            <div
                class="bg-gray-300 p-3 mr-3 mt-2 rounded-r-full text-sm uppercase font-medium text-gray-600 pl-8 hover:bg-gray-800 hover:text-white cursor-pointer transition hover-invert-img">
                <img src="https://saasadventure.io/img/svgs/arrow-right.svg" alt="right arrow"
                    class="float-left mr-2 mt-small invert-me"> Capítulo 2
            </div>

            <div
                class="bg-gray-300 p-3 mr-3 mt-2 rounded-r-full text-sm uppercase font-medium text-gray-600 pl-8 hover:bg-gray-800 hover:text-white cursor-pointer transition hover-invert-img">
                <img src="https://saasadventure.io/img/svgs/arrow-right.svg" alt="right arrow"
                    class="float-left mr-2 mt-small invert-me"> Capítulo 3
            </div>

            <div
                class="bg-pink-400 hover:bg-pink-500 p-3 mr-3 mt-2 rounded-r-full text-sm uppercase font-medium text-white pl-8 clearfix relative overflow-hidden transition cursor-pointer img-hover-animate">
                <img src="https://saasadventure.io/img/svgs/arrow-right.svg" alt="right arrow"
                    class="float-left mr-2 mt-small">
                <span class="float-left ml-2">Goodies<span><img src="https://saasadventure.io/img/svgs/goodies.svg"
                            alt="donut icon" class="w-16 absolute -mr-1 right-0 top-0 float-right clearfix">
            </div>
            <a href="{{ route('course.info', $course->id) }}">
                <div
                    class="bg-purple-400 hover:bg-purple-500 p-3 mr-3 mt-2 rounded-r-full text-sm uppercase font-medium text-white pl-8 clearfix relative overflow-hidden transition cursor-pointer img-hover-animate">
                    <img src="https://saasadventure.io/img/svgs/arrow-right.svg" alt="right arrow"
                        class="float-left mr-2 mt-small">
                    <span class="float-left ml-2">Informações<span>
                </div>
            </a>


        </nav><!-- Side Nav -->
        <!-- Main Content -->
        <div class="lg:ml-64 lg:pl-10 mb-12">
            <div class="flex flex-col justify-center h-24 py-2">
                <div class="flex space-around">
                    <h1 class="flex-1 text-xl font-bold justify-center">
                        <span id="menuBtn"
                            class="lg:hidden mr-2 h-10 w-8 float-left rounded-full flex justify-center cursor-pointer">
                            <img src="https://saasadventure.io/img/svgs/menu.svg" alt="menu icon">
                        </span>
                        <span class="uppercase">Aula 1</span> - Name of class
                    </h1>
                </div>
            </div>
            <!-- Video Container -->
            <div class="relative rounded-lg cursor-pointer">
                <img src="https://saasadventure.io/img/svgs/play-btn.svg" alt="play button"
                    class="absolute play-btn-pos transform hover:scale-125">
                <img src="https://saasadventure.io/img/video-1-screenshot.png" alt="video">
            </div>

            <div class="flex">
                <div class="flex-1">
                    <div class="bg-gray-100 p-8 relative mt-8 pt-20 rounded-lg">
                        <div
                            class="absolute top-0 left-0 bg-purple-500 rounded-full px-4 py-2 text-white mt-5 -ml-3 font-bold text-sm">
                            Video Sections</div>
                        <div
                            class="flex space-around w-full mt-2 cursor-pointer p-1 rounded-full border border-gray-100 hover:bg-white hover:border-2 hover:border-gray-200 -ml-1 transition">
                            <div class="flex-1">
                                <div
                                    class="w-6 h-6 rounded-full bg-green-400 flex justify-center items-center float-left mr-2">
                                    <img src="https://saasadventure.io/img/svgs/checkmark.svg" alt="checkmark">
                                </div><span class="text-green-400 float-left font-bold text-sm">Brainstorming</span>
                            </div>
                            <div class="flex-1 text-right hidden xl:block">
                                <span class="text-xs font-light text-gray-600 mr-2 mt-1 block">2 min. 30 sec.</span>
                            </div>
                        </div>
                        <div
                            class="flex space-around w-full mt-3  bg-white p-1 rounded-full border border-gray-200 -ml-1 transition cursor-pointer">
                            <div class="flex-1">
                                <div
                                    class="w-6 h-6 rounded-full bg-gray-800 flex justify-center items-center float-left mr-2">
                                    <img src="https://saasadventure.io/img/svgs/pause.svg" alt="pause">
                                </div><span class="text-gray-800 float-left font-bold text-sm">Finding a Domain
                                    Name</span>
                            </div>
                            <div class="flex-1 text-right hidden xl:block">
                                <span class="text-xs font-light text-gray-600 mr-2 mt-1 block">5 min. 21 sec.</span>
                            </div>
                        </div>
                        <div
                            class="flex space-around w-full mt-2 cursor-pointer p-1 rounded-full border border-gray-100 hover:bg-white hover:border-2 hover:border-gray-200 -ml-1 transition">
                            <div class="flex-1">
                                <div
                                    class="w-6 h-6 rounded-full bg-gray-300 flex justify-center items-center float-left mr-2 ">
                                    <img src="https://saasadventure.io/img/svgs/play.svg" alt="play">
                                </div><span class="text-gray-500 float-left font-medium text-sm">Creating the
                                    Logo</span>
                            </div>
                            <div class="flex-1 text-right hidden xl:block">
                                <span class="text-xs font-light text-gray-600 mr-2 mt-1 block">12 min. 51 sec.</span>
                            </div>
                        </div>
                        <div class="relative mt-8">
                            <p class="text-gray-600 font-medium text-xs">10% Completed</p>
                            <div class="relative rounded-full h-3 bg-gray-300 w-full mt-2">
                                <div class="absolute w-1/12 bg-green-400 rounded-full h-full"></div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-100 p-8 relative mt-8 pt-20 rounded-lg">
                        <div
                            class="absolute top-0 left-0 bg-purple-500 rounded-full px-4 py-2 text-white mt-5 -ml-3 font-bold text-sm">
                            Comentários</div>
                        @foreach ($content as $contents)
                            <p class="text-gray-600 text-sm xl:text-normal">{{ $contents->section_1 }}</p>
                        @endforeach
                    </div>
                    <div class="bg-gray-100 p-8 relative mt-8 pt-20 rounded-lg">
                        <div
                            class="absolute top-0 left-0 bg-purple-500 rounded-full px-4 py-2 text-white mt-5 -ml-3 font-bold text-sm">
                            Homework</div>
                        <p class="text-gray-600 text-sm xl:text-normal">Here are your homework tasks for the Aula:</p>
                        <ol class="list-disc text-gray-700 mt-6 text-normal xl:text-lg ml-5 xl:ml-8">
                            <li>Brainstorm an idea for your SAAS</li>
                            <li class="mt-1">Find a domain for your SAAS</li>
                            <li class="mt-1">Create a logo for your SAAS</li>
                        </ol>
                    </div>
                    <div class="bg-gray-100 p-8 relative mt-8 pt-20 rounded-lg">
                        <div
                            class="absolute top-0 left-0 bg-purple-500 rounded-full px-4 py-2 text-white mt-5 -ml-3 font-bold text-sm">
                            Link Resources</div>
                        <p class="text-gray-600 text-sm xl:text-normal">Here are the link resources mentioned in this
                            video:
                        </p>
                        <div class="mt-5">
                            <a href="#" class="underline text-pink-400 font-bold block">Dribbble</a>
                            <a href="#" class="underline text-pink-400 font-bold block">NameCheap</a>
                        </div>
                    </div>
                </div>
                <div class="flex-1 ml-8">

                    <div class="bg-gray-100 p-8 relative mt-8 pt-20 rounded-lg">
                        <div
                            class="absolute top-0 left-0 bg-pink-500 rounded-full px-4 py-2 text-white mt-5 -ml-3 font-bold text-sm">
                            Completion</div>
                        <img src="https://saasadventure.io/img/badges/Aula-1.png" alt="Badge Aula 1"
                            class="w-3/5 mx-auto badge-filter transition">
                        <p class="text-gray-600 text-sm xl:text-normal mt-6 text-center px-4">After finishing your <span
                                class="font-bold">homework</span>, mark this as
                            <span class="font-bold">completed</span> to earn your badge.
                        </p>
                        <div
                            class="h-16 bg-gray-400 flex flex-col justify-center text-center rounded mt-4 hover:bg-green-400 transition cursor-pointer">
                            <div class="w-full">
                                <span class="w-5 h-5 rounded bg-gray-200 mr-2 inline-block -mb-1"></span>
                                <span class="text-lg uppercase font-medium text-white inline-block">Mark as
                                    Completed</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-100 p-8 relative mt-4 pt-20 rounded-lg">
                        <div
                            class="absolute top-0 left-0 bg-pink-500 rounded-full px-4 py-2 text-white mt-5 -ml-3 font-bold text-sm">
                            File Downloads</div>
                        <div>
                            <a href="#" class="text-gray-600 font-bold block hover:underline">Source Code</a>
                            <a href="#" class="text-gray-600 font-bold block hover:underline">Video HD 1080</a>
                            <a href="#" class="text-gray-600 font-bold block hover:underline">Video HD 720</a>
                            <a href="#" class="text-gray-600 font-bold block hover:underline">Video SD 540</a>
                        </div>
                    </div>

                </div>
            </div>
        </div><!-- Main Content -->
    </div>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script>
        document.getElementById('menuBtn').addEventListener('click', function() {
            document.getElementById('app').classList.add('opened');
        });

        document.getElementById('sideNavBg').addEventListener('click', function() {
            document.getElementById('app').classList.remove('opened');
        });

    </script>
</body>

</html>
