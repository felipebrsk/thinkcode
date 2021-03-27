@extends('layouts.main')

@section('content')

    <div class="ml-24 mt-12 container">
        @if (isset($editCourse))
            <form action="{{ route('course.update', $editCourse->id) }}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT" />
            @else
                <form method="POST" action="{{ route('course.store') }}" enctype="multipart/form-data">
        @endif
        @csrf
        <label class="mt-4">
            <span class="text-gray-700">Nome</span>
            <input name="name" id="name" type="text"
                value="{{ isset($editCourse->name) ? $editCourse->name : old('name') }}"
                class="py-2 pl-10 pr-4 w-full border-4 border-transparent placeholder-gray-400 focus:bg-gray-50 rounded-lg"
                placeholder="Fundamentos do JavaScript">
        </label>

        <label class="mt-4">
            <span class="text-gray-700">Categoria</span>
            <select name="category_id" id="category_id"
                class="py-2 pl-10 pr-4 w-full border-4 border-transparent placeholder-gray-400 focus:bg-gray-50 rounded-lg">
                @foreach ($category as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select>
        </label>
        <label class="mt-4">
            <span class="text-gray-700">Quantidade de capítulos</span>
            <input name="chapters" id="chapters" type="number"
                value="{{ isset($editCourse->chapters) ? $editCourse->chapters : old('chapters') }}"
                class="py-2 pl-10 pr-4 w-full border-4 border-transparent placeholder-gray-400 focus:bg-gray-50 rounded-lg"
                placeholder="12">
        </label>
        <label class="mt-4">
            <span class="text-gray-700">Quantidade de desafios</span>
            <input name="challenges" id="challenges" type="number"
                value="{{ isset($editCourse->challenges) ? $editCourse->challenges : old('challenges') }}"
                class="py-2 pl-10 pr-4 w-full border-4 border-transparent placeholder-gray-400 focus:bg-gray-50 rounded-lg"
                placeholder="12">
        </label>
        <label class="mt-4">
            <span class="text-gray-700">Média do curso</span>
            <input name="total_average" step="0.01" id="total_average"
                value="{{ isset($editCourse->total_average) ? $editCourse->total_average : old('total_average') }}"
                type="number"
                class="py-2 pl-10 pr-4 w-full border-4 border-transparent placeholder-gray-400 focus:bg-gray-50 rounded-lg"
                placeholder="4,7">
        </label>
        <div class="flex w-full items-center mt-12 bg-grey-lighter">
            <label
                class="w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue-400 hover:text-white">
                <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path
                        d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                </svg>
                <span class="mt-2 text-base leading-normal">Selecione uma foto</span>
                <input type="file" accept="image/*" class="hidden" name="picture" id="picture" />
            </label>
        </div>
        <button type="submit"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mt-24">Enviar</button>
        </form>
        </form>
    </div>

    <script>
        $("#total_average").blur(function() {
            this.value = parseFloat(this.value).toFixed(2);
        });

    </script>

@endsection
