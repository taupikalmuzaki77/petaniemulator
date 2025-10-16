<x-layout>
    <div
        class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-[repeat(4,300px)] justify-center"
    >
        @foreach ($genres as $genre)
            <a
                class="hover:bg-teal-500 bg-gray-400 dark:bg-[#333333] mx-5 my-2 p-1 text-center rounded-lg capitalize"
                href="/genre/{{ $genre->slug }}"
            >
                {{ $genre->name }}
            </a>
        @endforeach
    </div>
</x-layout>
