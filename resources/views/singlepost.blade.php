<x-layout>
    {{-- Artikel + Sidebar --}}
    <div class="flex items-start justify-center gap-10">
        <div class="bg-white dark:bg-slate-800 shadow-md p-5 rounded-lg w-fit">
            <div>
                <h1
                    class="flex justify-center text-[20px] md:text-4xl font-bold mb-2 text-center capitalize"
                >
                    {{ $post->title }}
                </h1>
                <div
                    class="flex flex-col md:flex-row md:justify-center gap-1 mb-2"
                >
                    <div class="flex gap-1 justify-center">
                        <p>Ditulis Oleh:</p>
                        <a class="hover:text-teal-500" href="/about">Taupik</a>
                        <span class="hidden md:flex">|</span>
                    </div>
                    <div class="flex justify-center">
                        {{ $post->created_at->translatedformat("l, j F o") }}
                    </div>
                </div>
                <div class="flex justify-center gap-1 mb-2">
                    <p>Kategori:</p>
                    <a
                        href="/kategori/{{ $post->category->slug }}"
                        class="hover:text-teal-500 capitalize"
                    >
                        {{ $post->category->name }}
                    </a>
                </div>
                <div class="flex justify-center gap-1">
                    <p>Genre:</p>
                    @foreach ($post->genre as $genre)
                        <a
                            href="/genre/{{ $genre->slug }}"
                            class="hover:text-teal-500 capitalize"
                        >
                            {{ $genre->name }}
                        </a>
                    @endforeach
                </div>
            </div>
            <hr class="max-w-screen-md my-4 mx-auto dark:border-gray-200" />
            <div>
                <article class="m-2 max-w-screen-md">
                    {{-- {{ $post->description }} --}}
                    <p>{{ $post->desc }}</p>
                </article>
                <a
                    href="{{ $post->link }}"
                    target="_blank"
                    class="bg-blue-500 hover:bg-blue-600 px-2 py-1 rounded-lg flex flex-row gap-1 mx-auto justify-center w-fit"
                >
                    <i class="ri-download-2-line"></i>
                    <p>Download</p>
                </a>
            </div>
        </div>
        <div
            class="bg-white dark:bg-slate-800 shadow-md rounded-lg w-[350px] hidden lg:block"
        >
            <h1
                class="p-4 border-b dark:border-slate-700 text-2xl font-bold flex justify-center"
            >
                Artikel Populer 🔥
            </h1>
            <div class="flex flex-col">
                @foreach ($posts->take(5) as $post)
                    <a
                        href="{{ $post->slug }}"
                        class="hover:bg-slate-200 dark:hover:bg-slate-700 py-2"
                    >
                        <div class="flex">
                            <img
                                class="w-25 h-25 object-contain"
                                src="{{ asset("cover/" . $post->img) }}"
                                alt=""
                            />
                            <div class="flex flex-col justify-center w-[230px]">
                                <h1 class="font-bold line-clamp-1 capitalize">
                                    {{ $post->title }}
                                </h1>
                                <p class="capitalize">
                                    {{ $post->category->name }}
                                </p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    {{-- Artikel Popular Md Screen --}}
    <div
        class="bg-white dark:bg-slate-800 shadow-md rounded-lg mt-10 lg:hidden"
    >
        <h1
            class="p-4 border-b dark:border-slate-700 text-2xl font-bold flex justify-center"
        >
            Artikel Populer 🔥
        </h1>
        <div class="flex flex-col">
            @foreach ($posts->take(5) as $post)
                <a
                    href="/{{ $post->slug }}"
                    class="hover:bg-slate-200 dark:hover:bg-slate-700 py-2"
                >
                    <div class="flex">
                        <img
                            class="w-25 h-25 object-contain"
                            src="{{ asset("cover/" . $post->img) }}"
                            alt=""
                        />
                        <div class="flex flex-col justify-center">
                            <h1 class="font-bold line-clamp-1 capitalize">
                                {{ $post->title }}
                            </h1>
                            <p class="capitalize">
                                {{ $post->category->name }}
                            </p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</x-layout>
