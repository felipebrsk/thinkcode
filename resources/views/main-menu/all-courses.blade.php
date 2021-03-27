@extends('layouts.main')

@section('content')

    <section class="flex flex-wrap space-x-8 mt-8 space-y-8 space-y-reverse justify-center">
        @foreach ($courses as $course)
            <div class="w-96">
                <figure title="{{ $course->name }}"><a href="{{ route('show', $course->id) }}"><img
                            src="{{ asset('/images/' . $course->picture) }}"></a></figure>
            </div>
        @endforeach
    </section>

    <div class="row text-center">
        {{ $courses->links('pagination::bootstrap-4') }}
    </div>

@endsection
