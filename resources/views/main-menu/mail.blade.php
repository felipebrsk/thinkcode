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
                class="inline-flex items-center justify-center py-3 text-purple-600 bg-white rounded-lg">
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

    <style>
        .bg-orange {
            background: #fc5a03;
        }

        .text-orange {
            color: #fc5a03;
        }

        .border-orange {
            border-color: #fc5a03;
        }

        ::-webkit-scrollbar {
            width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            --tw-divide-opacity: 1;
            border-color: rgba(209, 213, 219, var(--tw-divide-opacity));
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            --tw-divide-opacity: 1;
            border-color: rgba(209, 213, 219, var(--tw-divide-opacity));
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            --tw-divide-opacity: 1;
            border-color: rgba(209, 213, 219, var(--tw-divide-opacity));
        }

    </style>

    <div x-data="{ sidebarOpen: false, darkMode: false }" :class="{ 'dark': darkMode }">
        <div class="flex h-screen bg-gray-100 dark:bg-gray-800 font-roboto">

            <div class="flex-1 flex flex-col overflow-hidden">
                <header class=" justify-between items-center mt-6 px-2">
                    <div class="items-center space-x-2 lg:space-x-0">
                        <button @click="sidebarOpen = true"
                            class="text-gray-500 dark:text-gray-300 focus:outline-none lg:hidden">
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>

                </header>
                <!-- main -->
                <main class="flex-1 overflow-x-hidden overflow-y-auto">
                    <div class="px-10 py-2 mt-1">
                        <span class="text-gray-500 font-semibold">
                            Today
                        </span>
                    </div>
                    <!-- today tab 1 -->
                    <div class="container mx-auto w-full px-6 -mb-2 ">
                        <div class="mt-4 flex px-4 py-4 justify-between bg-white
                  dark:bg-gray-600 shadow-sm rounded-lg cursor-pointer">
                            <!-- Card -->

                            <div class="flex justify-center">
                                <!-- Left side -->

                                <img class="h-12 w-12 rounded-full object-cover"
                                    src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80"
                                    alt="">

                                <div class="px-2 flex flex-col capitalize text-gray-600">
                                    <span class="font-bold text-md">brian</span>
                                    <span class="mt-1 text-gray-400 text-sm font-semibold">
                                        23 THREADS
                                    </span>
                                </div>

                            </div>

                            <div class="flex pr-8">
                                <!-- Rigt side -->

                                <div class="ml-16 pl-4 flex flex-col capitalize text-gray-600
                          dark:text-gray-400">

                                    <span
                                        class="mt-2 bg-red-100 text-semibold text-red-400 px-4 py-1 rounded dark:text-gray-200">
                                        New
                                    </span>
                                </div>

                                <div class="ml-4 pt-2 flex flex-col capitalize text-gray-600
                          ">
                                    <div>
                                        <span class="mt-2 flex">
                                            <img class="inline-block h-8 w-10 rounded-full ring-2 ring-white"
                                                src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                alt="">
                                            <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white"
                                                src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                alt="">
                                        </span>
                                    </div>
                                </div>

                                <div class="ml-16 pt-3 flex flex-col capitalize text-gray-600
                          dark:text-gray-400">
                                    <p><span class="font-bold">New Chili piper license - </span>Hey Schott, have you lorem
                                        ipsum dolor sit amet</p>
                                </div>



                            </div>

                        </div>

                    </div>
                    <!-- taday tab 2 -->
                    <div class="container mx-auto w-full px-6 -mb-2 ">
                        <div class="mt-4 flex px-4 py-4 justify-between bg-white
                  dark:bg-gray-600 shadow-sm rounded-lg cursor-pointer">
                            <!-- Card -->

                            <div class="flex justify-center">
                                <!-- Left side -->

                                <img class="h-12 w-12 rounded-full object-cover"
                                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="">

                                <div class="px-4 flex flex-col capitalize text-gray-600">
                                    <span class="font-bold text-md">Tom cook</span>
                                    <span class="mt-1 text-gray-400 text-sm font-semibold">
                                        1 THREAD
                                    </span>
                                </div>

                            </div>

                            <div class="flex pr-8">
                                <!-- Rigt side -->

                                <div class="ml-16 pl-4 flex flex-col capitalize text-gray-600
                          dark:text-gray-400">

                                    <span
                                        class="mt-2 bg-red-100 text-semibold text-red-400 px-4 py-1 rounded dark:text-gray-200">
                                        New
                                    </span>
                                </div>

                                <div class="ml-4 pt-2 flex flex-col capitalize text-gray-600
                          ">
                                    <div>
                                        <span class="mt-2 flex">
                                            <img class="inline-block h-8 w-10 rounded-full ring-2 ring-white"
                                                src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                alt="">
                                            <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white"
                                                src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                alt="">
                                        </span>
                                    </div>
                                </div>

                                <div class="ml-16 pt-3 flex flex-col capitalize text-gray-600
                          dark:text-gray-400">
                                    <p><span class="font-bold">New Chili piper license - </span>Hey Schott, have you lorem
                                        ipsum dolor sit amet</p>
                                </div>



                            </div>

                        </div>

                    </div>
                    <!-- end of today tab 2 -->

                    <!-- today tab 3 -->
                    <!-- end of today tab 3 -->
                    <!-- yestarday tab 1 -->
                    <div class="px-10 py-2 mt-6">
                        <span class="text-gray-500 font-semibold">
                            Yesterday
                        </span>
                    </div>
                    <!-- today tab 1 -->
                    <div class="container mx-auto w-full px-6 -mb-2 ">
                        <div class="mt-1 flex px-4 py-4 justify-between bg-white
                  dark:bg-gray-600 shadow-sm rounded-lg cursor-pointer">
                            <!-- Card -->

                            <div class="flex justify-center">
                                <!-- Left side -->

                                <img class="h-12 w-12 rounded-full object-cover" src="https://i.pravatar.cc/30?2" alt="">

                                <div class="px-4 flex flex-col capitalize text-gray-600">
                                    <span class="font-bold text-md">Nickolas</span>
                                    <span class="mt-1 text-gray-400 text-sm font-semibold">
                                        3 THREADS
                                    </span>
                                </div>

                            </div>

                            <div class="flex pr-8">
                                <!-- Rigt side -->

                                <div class="ml-16 pl-4 flex flex-col capitalize text-gray-600
                          dark:text-gray-400">

                                    <span
                                        class="mt-2 bg-red-100 text-semibold text-red-400 px-4 py-1 rounded dark:text-gray-200">
                                        New
                                    </span>
                                </div>

                                <div class="ml-4 pt-2 flex flex-col capitalize text-gray-600
                          ">
                                    <div>
                                        <span class="mt-2 flex">
                                            <img class="inline-block h-8 w-10 rounded-full ring-2 ring-white"
                                                src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                alt="">
                                            <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white"
                                                src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                alt="">
                                        </span>
                                    </div>
                                </div>

                                <div class="ml-16 pt-3 flex flex-col capitalize text-gray-600
                          dark:text-gray-400">
                                    <p><span class="font-bold">New Chili piper license - </span>Hey Schott, have you lorem
                                        ipsum dolor sit amet</p>
                                </div>



                            </div>

                        </div>

                    </div>
                    <!-- end of yesterday tab 1 -->
                    <!-- start of yesterday tab 2-->

                    <div class="container mx-auto w-full px-6 -mb-2 ">
                        <div class="mt-4 flex px-4 py-4 justify-between bg-white
                  dark:bg-gray-600 shadow-sm rounded-lg cursor-pointer">
                            <!-- Card -->

                            <div class="flex justify-center">
                                <!-- Left side -->

                                <img class="h-12 w-12 rounded-full object-cover" src="https://i.pravatar.cc/30?3" alt="">

                                <div class="px-4 flex flex-col capitalize text-gray-600">
                                    <span class="font-bold text-md">Nickolas</span>
                                    <span class="mt-1 text-gray-400 text-sm font-semibold">
                                        3 THREADS
                                    </span>
                                </div>

                            </div>

                            <div class="flex pr-8">
                                <!-- Rigt side -->

                                <div class="ml-16 pl-4 flex flex-col capitalize text-gray-600
                          dark:text-gray-400">

                                    <span
                                        class="mt-2 bg-red-100 text-semibold text-red-400 px-4 py-1 rounded dark:text-gray-200">
                                        New
                                    </span>
                                </div>

                                <div class="ml-4 pt-2 flex flex-col capitalize text-gray-600
                          ">
                                    <div>

                                        <span class="mt-2 flex">
                                            <img class="inline-block h-8 w-10 rounded-full ring-2 ring-white"
                                                src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                alt="">
                                            <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white"
                                                src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                alt="">
                                        </span>
                                    </div>
                                </div>

                                <div class="ml-16 pt-3 flex flex-col capitalize text-gray-600
                          dark:text-gray-400">
                                    <p><span class="font-bold">New Chili piper license - </span>Hey Schott, have you lorem
                                        ipsum dolor sit amet</p>
                                </div>



                            </div>

                        </div>

                    </div>
                    <!-- end of yesterday tab 2-->

                    <div class="px-10 py-2 mt-6">
                        <span class="text-gray-500 font-semibold">
                            27 MAR
                        </span>
                    </div>
                    <!-- 27 mar tab 1 -->



                    <!-- end 27 mar tab 1 -->
                    <!-- start of 27 mar tab 2 -->

                    <div class="container mx-auto w-full px-6 -mb-2 ">
                        <div class="mt-4 flex px-4 py-4 justify-between bg-white
                  dark:bg-gray-600 shadow-sm rounded-lg cursor-pointer">
                            <!-- Card -->

                            <div class="flex justify-center">
                                <!-- Left side -->

                                <img class="h-12 w-12 rounded-full object-cover" src="https://i.pravatar.cc/30?4" alt="">

                                <div class="px-4 flex flex-col capitalize text-gray-600">
                                    <span class="font-bold text-md">Kenny</span>
                                    <span class="mt-1 text-gray-400 text-sm font-semibold">
                                        2 THREADS
                                    </span>
                                </div>

                            </div>

                            <div class="flex pr-8">
                                <!-- Rigt side -->

                                <div class="ml-16 pl-4 flex flex-col capitalize text-gray-600
                          dark:text-gray-400">

                                    <span
                                        class="mt-2 bg-red-100 text-semibold text-red-400 px-4 py-1 rounded dark:text-gray-200">
                                        New
                                    </span>
                                </div>

                                <div class="ml-4 pt-2 flex flex-col capitalize text-gray-600
                          ">
                                    <div>

                                        <span class="mt-2 flex">
                                            <img class="inline-block h-8 w-10 rounded-full ring-2 ring-white"
                                                src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                alt="">
                                            <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white"
                                                src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                alt="">
                                        </span>
                                    </div>
                                </div>

                                <div class="ml-16 pt-3 flex flex-col capitalize text-gray-600
                          dark:text-gray-400">
                                    <p><span class="font-bold">New Chili piper license - </span>Hey Schott, have you lorem
                                        ipsum dolor sit amet</p>
                                </div>



                            </div>

                        </div>

                    </div>
                    <!-- end of 27 mar tab 2 -->
                </main>
                <!-- end of main -->
            </div>
        </div>
    </div>
    </div>

@endsection
