<div
    id="search"
    class="fixed z-50 w-full transform -translate-x-full transition-transform duration-300"
>
    <form
        action="/search"
        method="GET"
        class="flex items-center w-[300px] md:w-lg lg:w-2xl mx-auto flex-row justify-between gap-2 pt-5 z-50"
    >
        <div class="flex relative w-full">
            <div class="flex absolute items-center inset-y-0 px-2">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                    stroke-width="1"
                    stroke="none"
                    class="size-6"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M11 2C15.968 2 20 6.032 20 11C20 15.968 15.968 20 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2ZM11 18C14.8675 18 18 14.8675 18 11C18 7.1325 14.8675 4 11 4C7.1325 4 4 7.1325 4 11C4 14.8675 7.1325 18 11 18ZM19.4853 18.0711L22.3137 20.8995L20.8995 22.3137L18.0711 19.4853L19.4853 18.0711Z"
                    />
                </svg>
            </div>
            <input
                type="text"
                id="searchInput"
                name="query"
                class="w-full px-10 py-3 bg-gray-200 dark:bg-gray-700 border-2 border-gray-300 dark:border-gray-600 rounded-lg focus:outline-blue-500 focus:outline-2 focus:border-0"
                placeholder="Cari judul film..."
                autocomplete="off"
                required
            />
        </div>
        <button
            type="submit"
            class="flex cursor-pointer text-white bg-blue-700 dark:bg-blue-600 hover:bg-blue-800 dark:hover:bg-blue-700 py-3 px-3 rounded-lg"
        >
            Cari
        </button>
    </form>
</div>

<div
    id="searchoverlay"
    class="fixed inset-0 bg-black/40 backdrop-blur-sm z-30 hidden transition-opacity duration-300"
></div>
