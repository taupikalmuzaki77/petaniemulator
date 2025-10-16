<x-layout>
    <div class="flex justify-center gap-2">
        @foreach ($categories as $category)
            <a
                class="hover:bg-teal-500 bg-gray-400 dark:bg-[#333333] my-2 p-1 text-center rounded-lg w-[250px] capitalize"
                href="/kategori/{{ $category->slug }}"
            >
                {{ $category->name }}
            </a>
        @endforeach
    </div>
</x-layout>
