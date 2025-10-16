<footer class="bg-slate-800 text-white shadow-sm">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div
            class="flex flex-col md:flex-row gap-5 items-center justify-between"
        >
            {{-- Kiri --}}
            <a href="/" class="flex items-center hover:text-teal-500">
                <p class="text-2xl font-semibold">Petani Emulator</p>
            </a>
            {{-- Tengah --}}
            <ul
                class="flex flex-col md:flex-row items-center font-medium text-white gap-2"
            >
                <li>
                    <a href="/about" class="hover:text-teal-500">About</a>
                </li>
                <li>
                    <a href="/contact" class="hover:text-teal-500">Contact</a>
                </li>
                <li>
                    <a href="/privacy-policy" class="hover:text-teal-500">
                        Privacy Policy
                    </a>
                </li>
            </ul>
            {{-- Kanan --}}
            <div class="flex gap-2">
                <a
                    href="https://www.facebook.com/Taupikzaki"
                    target="_blank"
                    class="social hover:bg-[#1877F2]"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        class="size-5"
                    >
                        <path
                            d="M14 13.5H16.5L17.5 9.5H14V7.5C14 6.47062 14 5.5 16 5.5H17.5V2.1401C17.1743 2.09685 15.943 2 14.6429 2C11.9284 2 10 3.65686 10 6.69971V9.5H7V13.5H10V22H14V13.5Z"
                        ></path>
                    </svg>
                </a>

                <a
                    href="https://www.youtube.com/@TaupikZaki"
                    target="_blank"
                    class="social hover:hover:bg-red-600"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        class="size-5"
                    >
                        <path
                            d="M12.2439 4C12.778 4.00294 14.1143 4.01586 15.5341 4.07273L16.0375 4.09468C17.467 4.16236 18.8953 4.27798 19.6037 4.4755C20.5486 4.74095 21.2913 5.5155 21.5423 6.49732C21.942 8.05641 21.992 11.0994 21.9982 11.8358L21.9991 11.9884L21.9991 11.9991C21.9991 11.9991 21.9991 12.0028 21.9991 12.0099L21.9982 12.1625C21.992 12.8989 21.942 15.9419 21.5423 17.501C21.2878 18.4864 20.5451 19.261 19.6037 19.5228C18.8953 19.7203 17.467 19.8359 16.0375 19.9036L15.5341 19.9255C14.1143 19.9824 12.778 19.9953 12.2439 19.9983L12.0095 19.9991L11.9991 19.9991C11.9991 19.9991 11.9956 19.9991 11.9887 19.9991L11.7545 19.9983C10.6241 19.9921 5.89772 19.941 4.39451 19.5228C3.4496 19.2573 2.70692 18.4828 2.45587 17.501C2.0562 15.9419 2.00624 12.8989 2 12.1625V11.8358C2.00624 11.0994 2.0562 8.05641 2.45587 6.49732C2.7104 5.51186 3.45308 4.73732 4.39451 4.4755C5.89772 4.05723 10.6241 4.00622 11.7545 4H12.2439ZM9.99911 8.49914V15.4991L15.9991 11.9991L9.99911 8.49914Z"
                        ></path>
                    </svg>
                </a>

                <a
                    href="https://github.com/"
                    target="_blank"
                    class="social hover:hover:bg-[#6e5494]"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        class="size-5"
                    >
                        <path
                            d="M12.001 2C6.47598 2 2.00098 6.475 2.00098 12C2.00098 16.425 4.86348 20.1625 8.83848 21.4875C9.33848 21.575 9.52598 21.275 9.52598 21.0125C9.52598 20.775 9.51348 19.9875 9.51348 19.15C7.00098 19.6125 6.35098 18.5375 6.15098 17.975C6.03848 17.6875 5.55098 16.8 5.12598 16.5625C4.77598 16.375 4.27598 15.9125 5.11348 15.9C5.90098 15.8875 6.46348 16.625 6.65098 16.925C7.55098 18.4375 8.98848 18.0125 9.56348 17.75C9.65098 17.1 9.91348 16.6625 10.201 16.4125C7.97598 16.1625 5.65098 15.3 5.65098 11.475C5.65098 10.3875 6.03848 9.4875 6.67598 8.7875C6.57598 8.5375 6.22598 7.5125 6.77598 6.1375C6.77598 6.1375 7.61348 5.875 9.52598 7.1625C10.326 6.9375 11.176 6.825 12.026 6.825C12.876 6.825 13.726 6.9375 14.526 7.1625C16.4385 5.8625 17.276 6.1375 17.276 6.1375C17.826 7.5125 17.476 8.5375 17.376 8.7875C18.0135 9.4875 18.401 10.375 18.401 11.475C18.401 15.3125 16.0635 16.1625 13.8385 16.4125C14.201 16.725 14.5135 17.325 14.5135 18.2625C14.5135 19.6 14.501 20.675 14.501 21.0125C14.501 21.275 14.6885 21.5875 15.1885 21.4875C19.259 20.1133 21.9999 16.2963 22.001 12C22.001 6.475 17.526 2 12.001 2Z"
                        ></path>
                    </svg>
                </a>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8" />
        <div class="text-center">
            <span class="block text-sm text-white sm:text-center">
                ©
                <span id="year"></span>
                <a href="/" class="hover:text-teal-500">Petani Emulator</a>
                - Made with ❤️ using
                <a
                    href="https://laravel.com/"
                    class="hover:text-teal-500"
                    target="_blank"
                >
                    Laravel
                </a>
            </span>
        </div>
    </div>
    <script>
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>
</footer>
