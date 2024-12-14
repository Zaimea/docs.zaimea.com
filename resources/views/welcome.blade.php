<x-app-layout layout="welcome">
    <div>
        <section class="relative overflow-hidden pt-16 pb-20 lg:pt-24 xl:pt-32 xl:pb-28">
            <div class="relative max-w-screen-xl px-5 mx-auto">
                <div class="relative">
                    <div class="flex items-center justify-center rounded-[0.55rem] select-none mt-16 md:mt-0 p-1">
                        <figure class="shadow-white flex items-center justify-center size-36 p-3 bg-gray-300 dark:bg-black rounded-lg shadow-2xl">
                            <img src="{{ asset('assets/img/logo.svg') }}" alt="zaimea logo" class="ml-1">
                        </figure>
                    </div>
                    <h1 class="max-w-3xl mx-auto text-4xl font-bold text-center md:text-5xl lg:text-6xl">
                        {{ config('site.title') }}
                    </h1>
                    <p class="mt-6 max-w-xl mx-auto text-center text-gray-700 text-md leading-relaxed md:mt-8 md:text-lg lg:mt-10">
                        {{ config('site.description') }}
                    </p>
                    <div
                        class="sm:flex-row sm:space-x-6 flex flex-col items-center mt-6 justify-center">
                        <a class="sm:w-auto w-full px-12 py-4 text-lg font-bold text-white hover:text-white bg-sky-500 hover:bg-sky-600 border rounded-lg hover:no-underline focus:outline-none"
                            href="{{ route('docs', 'usage') }}">
                            <span
                                class="w-full md:w-auto transition duration-200 tracking-wider py-3 px-6">
                                Get Started
                            </span>
                        </a>
                        <a class="group relative inline-flex border rounded-lg border-sky-600 hover:no-underline focus:outline-none w-full sm:w-auto"
                            href="https://github.com/zaimea/zaimea" target="_blank">
                            <span
                                class="sm:w-auto w-full px-12 py-4 text-lg font-bold hover:bg-gray-400 text-gray-600 bg-gray-300 hover:bg-gry-400 border rounded-lg hover:no-underline focus:outline-none">
                                Source code
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="w-full flex-auto leading-normal font-sans">

        <section class="text-center container mx-auto py-6 px-6 xl:py-12">
            <hr class="block my-8 border lg:hidden">
            <h4 class="md:text-3xl text-2xl font-bold text-center">Why would you choose Zaimea…</h4>

            <div
                class="flex flex-col -mx-2 items-center justify-center md:items-start lg:flex-row lg:-mx-4 lg:justify-between">
                <div class="flex flex-col w-full mb-8 mx-3 px-2 lg:w-1/3">
                    <div class="border-gray-700/50 md:w-40 md:h-40 flex items-center justify-center w-32 h-32 p-6 mx-auto border rounded-full">
                        <div class="from-gray-500 to-black bg-gradient-to-br md:w-32 md:h-32 container flex items-center justify-center w-24 h-24 max-w-3xl rounded-full select-none" style="padding:1px">
                            <figure class="md:w-32 md:h-32 flex items-center justify-center w-24 h-24 bg-black rounded-full">
                                <img src="{{ asset('assets/img/icon-code.svg') }}" class="h-12 w-12" alt="code icon">
                            </figure>
                        </div>
                    </div>
                    <h3 id="intro-code"
                        class="uppercase text-lg text-blue-900 dark:text-blue-300 font-bold mt-6 mb-3">
                        No write code and enjoy
                    </h3>

                    <p class="text-gray-600 dark:text-gray-300">
                        It does not require writing code, all that needs to be done is the configuration that is documented.
                    </p>
                </div>

                <div class="flex flex-col w-full mb-8 mx-3 px-2 lg:w-1/3">
                    <div class="border-gray-700/50 md:w-40 md:h-40 flex items-center justify-center w-32 h-32 p-6 mx-auto border rounded-full">
                        <div class="from-gray-500 to-black bg-gradient-to-br md:w-32 md:h-32 container flex items-center justify-center w-24 h-24 max-w-3xl rounded-full select-none" style="padding:1px">
                            <figure class="md:w-32 md:h-32 flex items-center justify-center w-24 h-24 bg-black rounded-full">
                                <img src="{{ asset('assets/img/icon-price.svg') }}" class="h-12 w-12" alt="price icon">
                            </figure>
                        </div>
                    </div>

                    <h3 id="intro-code"
                        class="uppercase text-lg text-blue-900 dark:text-blue-300 font-bold mt-6 mb-3">
                        Alone or within a company
                    </h3>

                    <p class="text-gray-600 dark:text-gray-300">
                        Our application can be used both by one person and within one or more companies, there is no limit.
                        <br>
                        You will find the price list <a href="https://zaimea.com/prices" target="_blank">here</a>
                    </p>
                </div>

                <div class="flex flex-col w-full mx-3 px-2 lg:w-1/3">
                    <div class="border-gray-700/50 md:w-40 md:h-40 flex items-center justify-center w-32 h-32 p-6 mx-auto border rounded-full">
                        <div class="from-gray-500 to-black bg-gradient-to-br md:w-32 md:h-32 container flex items-center justify-center w-24 h-24 max-w-3xl rounded-full select-none" style="padding:1px">
                            <figure class="md:w-32 md:h-32 flex items-center justify-center w-24 h-24 bg-black rounded-full">
                                <img src="{{ asset('assets/img/icon-idea.svg') }}" class="h-12 w-12" alt="idea icon">
                            </figure>
                        </div>
                    </div>

                    <h3 id="intro-idea" class="uppercase text-lg text-blue-900 dark:text-blue-300 font-bold mt-6 mb-3">
                        Ideas for improvement
                    </h3>

                    <p class="text-gray-600 dark:text-gray-300">
                        If your needs are not met, we try to satisfy your wishes within the limits of possibilities,
                        so if you have an idea you can communicate it to us via the email address <a href="mailto:support@zaimea.com">support@zaimea.com</a>
                    </p>
                </div>
            </div>
        </section>
    </div>
    <footer class="md:px-0 p-12">
        <small class="text-black/75 dark:text-black/75 md:text-xs block text-sm text-center">© <span x-data="" x-text="(new Date()).getFullYear()">2024</span> Zaimea.com</small>
    </footer>
</x-app-layout>
