@extends('layouts.main')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/my-courses.css') }}">

    @if (session()->has('success_message'))
        <div class="bg-red-100 border border-green-400 text-green-700 px-4 py-3 rounded relative center w-96" role="alert">
            {{ session()->get('success_message') }}
        </div>
    @endif

    @if (count($errors) > 0)
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative center w-96" role="alert">
            @foreach ($errors->all() as $error)
                <span class="block sm:inline">{{ $error }}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3"></span>
            @endforeach
        </div>
    @endif

    <div class="flex flex-wrap sm:flex-wrap md:flex-wrap-reverse lg:flex-no-wrap xl:flex-wrap justify-center">
        @foreach (Auth::user()->course as $course)
            <div class="">
                <div class="course">
                    <div class="course-preview">
                        <h6>Curso</h6>
                        <h2>{{ $course->name }}</h2>
                        <a href="#">Ver todos os capítulos <i class="fas fa-chevron-right"></i></a>
                    </div>
                    <div class="course-info">
                        <div class="progress-container">
                            <progress value="{{ $course->pivot->challenge }}" max="{{ $course->challenges }}"
                                class="progress"></progress>
                            <span class="progress-text">
                                {{ $course->pivot->challenge }}/{{ $course->challenges }} desafios
                            </span>
                        </div>
                        <h6>Capítulo {{ $course->pivot->chapter }}</h6>
                        <h2>{{ $course->category->name }}</h2>
                        <button class="btn"><a href="{{ route('course.content', $course->id) }}">Continuar</a></button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
