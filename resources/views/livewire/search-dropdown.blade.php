<div class="relative w-full max-w-md sm:-ml-2" x-data="{ isOpen: false }" @click.away="isOpen = false">
    <input
        wire:model.debounce.500ms="search"
        type="text"
        class="py-2 pl-10 pr-4 border-4 border-transparent placeholder-gray-400 text-sm rounded-full w-64 px-4 focus:outline-none focus:shadow-outline" placeholder="Pesquisar..."
        x-ref="search"
        @keydown.window="
            if (event.keyCode === 191) {
                event.preventDefault();
                $refs.search.focus();
            }
        "
        @focus="isOpen = true"
        @keydown="isOpen = true"
        @keydown.escape.window="isOpen = false"
        @keydown.shift.tab="isOpen = false"
    >
    <div class="absolute top-0">
        <svg aria-hidden="true" viewBox="0 0 20 20" fill="currentColor" class="absolute h-6 w-6 mt-2.5 ml-2 text-gray-400">
            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
        </svg>
    </div>

    <div wire:loading class="spinner mb-1"></div>

    @if (strlen($search) >= 2)
        <div
            class="z-50 absolute bg-gray-700 text-sm rounded w-full mt-4" style="color:white; border-radius: 5px;"
            x-show.transition.opacity="isOpen"
        >
            @if ($searchResults->count() > 0)
                <ul>
                    @foreach ($searchResults as $result)
                        <li class="border-b border-gray-700">
                            <a
                                href="{{ route('show', $result['id']) }}" class="block hover:bg-gray-800 px-3 py-3 flex items-center transition ease-in-out duration-150" style="border-radius: 5px;"
                                @if ($loop->last) @keydown.tab="isOpen = false" @endif
                            >
                            @if ($result['picture'])
                                <img src="{{ asset('/images/' . $result['picture']) }}" alt="poster" class="w-8">
                            @else
                                <img src="https://via.placeholder.com/50x75" alt="poster" class="w-8">
                            @endif
                            <span class="ml-4">{{ $result['name'] }}</span>
                        </a>
                        </li>
                    @endforeach

                </ul>
            @else
                <div class="px-3 py-3">Sem resultados para "{{ $search }}"</div>
            @endif
        </div>
    @endif
</div>