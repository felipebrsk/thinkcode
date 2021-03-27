@extends('layouts.main')

@section('content')

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
                <main class="flex-1 overflow-x-hidden overflow-y-auto">
                    <div class="px-10 py-2 mt-1">
                        <span class="text-gray-500 font-semibold">
                            Today
                        </span>
                    </div>
                    <div class="container mx-auto w-full px-6 -mb-2 ">
                        <div class="mt-4 flex px-4 py-4 justify-between bg-white
                      dark:bg-gray-600 shadow-sm rounded-lg cursor-pointer">
                            <div class="flex justify-center">
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
                    <div class="container mx-auto w-full px-6 -mb-2 ">
                        <div class="mt-4 flex px-4 py-4 justify-between bg-white
                      dark:bg-gray-600 shadow-sm rounded-lg cursor-pointer">
                            <div class="flex justify-center">
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

                    <div class="px-10 py-2 mt-6">
                        <span class="text-gray-500 font-semibold">
                            Yesterday
                        </span>
                    </div>
                    <div class="container mx-auto w-full px-6 -mb-2 ">
                        <div class="mt-1 flex px-4 py-4 justify-between bg-white
                      dark:bg-gray-600 shadow-sm rounded-lg cursor-pointer">
                            <div class="flex justify-center">
                                <img class="h-12 w-12 rounded-full object-cover" src="https://i.pravatar.cc/30?2" alt="">

                                <div class="px-4 flex flex-col capitalize text-gray-600">
                                    <span class="font-bold text-md">Nickolas</span>
                                    <span class="mt-1 text-gray-400 text-sm font-semibold">
                                        3 THREADS
                                    </span>
                                </div>

                            </div>

                            <div class="flex pr-8">
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

                    <div class="container mx-auto w-full px-6 -mb-2 ">
                        <div class="mt-4 flex px-4 py-4 justify-between bg-white
                      dark:bg-gray-600 shadow-sm rounded-lg cursor-pointer">
                            <div class="flex justify-center">
                                <img class="h-12 w-12 rounded-full object-cover" src="https://i.pravatar.cc/30?3" alt="">

                                <div class="px-4 flex flex-col capitalize text-gray-600">
                                    <span class="font-bold text-md">Nickolas</span>
                                    <span class="mt-1 text-gray-400 text-sm font-semibold">
                                        3 THREADS
                                    </span>
                                </div>

                            </div>

                            <div class="flex pr-8">
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

                    <div class="px-10 py-2 mt-6">
                        <span class="text-gray-500 font-semibold">
                            27 MAR
                        </span>
                    </div>

                    <div class="container mx-auto w-full px-6 -mb-2 ">
                        <div class="mt-4 flex px-4 py-4 justify-between bg-white
                      dark:bg-gray-600 shadow-sm rounded-lg cursor-pointer">
                            <div class="flex justify-center">
                                <img class="h-12 w-12 rounded-full object-cover" src="https://i.pravatar.cc/30?4" alt="">

                                <div class="px-4 flex flex-col capitalize text-gray-600">
                                    <span class="font-bold text-md">Kenny</span>
                                    <span class="mt-1 text-gray-400 text-sm font-semibold">
                                        2 THREADS
                                    </span>
                                </div>

                            </div>

                            <div class="flex pr-8">
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
                </main>
            </div>
        </div>
    </div>
    </div>

@endsection
