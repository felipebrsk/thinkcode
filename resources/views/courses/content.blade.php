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
            <a href="#" class="inline-flex items-center justify-center py-3 text-purple-600 bg-white rounded-lg">
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

    <div class="h-auto flex items-center">
        <div class="max-w-7xl w-full mx-auto py-6 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row w-full lg:space-x-2 space-y-2 lg:space-y-0 mb-2 lg:mb-4">
                <div class="w-full lg:w-1/4">
                    <div
                        class="widget w-full p-4 rounded-lg bg-white border border-gray-100 dark:bg-gray-900 dark:border-gray-800">
                        <div class="flex flex-row items-center justify-between">
                            <div class="flex flex-col">
                                <div class="text-xs uppercase font-light text-gray-500">
                                    Matrículas em {{$course->name}}
                                </div>
                                <div class="text-xl font-bold">
                                    {{$users}}
                                </div>
                            </div>
                            <svg class="stroke-current text-gray-500" fill="none" height="24" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24"
                                width="24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2">
                                </path>
                                <circle cx="9" cy="7" r="4">
                                </circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87">
                                </path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/4">
                    <div
                        class="widget w-full p-4 rounded-lg bg-white border border-gray-100 dark:bg-gray-900 dark:border-gray-800">
                        <div class="flex flex-row items-center justify-between">
                            <div class="flex flex-col">
                                <div class="text-xs uppercase font-light text-gray-500">
                                    Views
                                </div>
                                <div class="text-xl font-bold">
                                    8
                                </div>
                            </div>
                            <svg class="stroke-current text-gray-500" fill="none" height="24" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24"
                                width="24" xmlns="http://www.w3.org/2000/svg">
                                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12">
                                </polyline>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/4">
                    <div
                        class="widget w-full p-4 rounded-lg bg-white border border-gray-100 dark:bg-gray-900 dark:border-gray-800">
                        <div class="flex flex-row items-center justify-between">
                            <div class="flex flex-col">
                                <div class="text-xs uppercase font-light text-gray-500">
                                    Links
                                </div>
                                <div class="text-xl font-bold">
                                    17
                                </div>
                            </div>
                            <svg class="stroke-current text-gray-500" fill="none" height="24" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24"
                                width="24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                </path>
                                <polyline points="15 3 21 3 21 9">
                                </polyline>
                                <line x1="10" x2="21" y1="14" y2="3">
                                </line>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/4">
                    <div
                        class="widget w-full p-4 rounded-lg bg-white border border-gray-100 dark:bg-gray-900 dark:border-gray-800">
                        <div class="flex flex-row items-center justify-between">
                            <div class="flex flex-col">
                                <div class="text-xs uppercase font-light text-gray-500">
                                    Videos Total Time
                                </div>
                                <div class="text-xl font-bold">
                                    1h 2m
                                </div>
                            </div>
                            <svg class="stroke-current text-gray-500" fill="none" height="24" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24"
                                width="24" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="10">
                                </circle>
                                <polyline points="12 6 12 12 16 14">
                                </polyline>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @php
        $array1 = array("flex flex-row-reverse md:contents", "flex md:contents");
        shuffle($array1);
    @endphp

    <!-- component -->
    <div class="center p-6">
        <div class="flex flex-col md:grid grid-cols-9 mx-auto p-2 text-blue-50">
            <!-- left -->
            <div class="flex flex-row-reverse md:contents">
                <div class="bg-blue-500 col-start-1 col-end-5 p-4 rounded-xl my-4 ml-auto shadow-md">
                    <h3 class="font-semibold text-lg mb-1">{{$course->name}}</h3>
                    <p class="leading-tight text-justify">
                        {{$course->about}}
                    </p>
                </div>
                <div class="col-start-5 col-end-6 md:mx-auto relative mr-10">
                    <div class="h-full w-6 flex items-center justify-center">
                        <div class="h-full w-1 bg-blue-800 pointer-events-none"></div>
                    </div>
                    <div class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-blue-500 shadow"></div>
                </div>
            </div>
            
            <!-- right -->
            <div class="flex md:contents">
                <div class="col-start-5 col-end-6 mr-10 md:mx-auto relative">
                    <div class="h-full w-6 flex items-center justify-center">
                        <div class="h-full w-1 bg-blue-800 pointer-events-none"></div>
                    </div>
                    <div class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-blue-500 shadow"></div>
                </div>
                <div class="bg-blue-500 col-start-6 col-end-10 p-4 rounded-xl my-4 mr-auto shadow-md">
                    <h3 class="font-semibold text-lg mb-1">{{$course->name}}</h3>
                    <p class="leading-tight text-justify">
                        {{$course->learn}}
                    </p>
                </div>
            </div>

            <!-- left -->
            <div class="flex flex-row-reverse md:contents">
                <div class="bg-blue-500 col-start-1 col-end-5 p-4 rounded-xl my-4 ml-auto shadow-md">
                    <h3 class="font-semibold text-lg mb-1">{{$course->name}}</h3>
                    <p class="leading-tight text-justify">
                        {{$course->features}}
                    </p>
                </div>
                <div class="col-start-5 col-end-6 md:mx-auto relative mr-10">
                    <div class="h-full w-6 flex items-center justify-center">
                        <div class="h-full w-1 bg-blue-800 pointer-events-none"></div>
                    </div>
                    <div class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-blue-500 shadow"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
