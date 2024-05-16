<x-app-layout layout="welcome" class="flex flex-col justify-between min-h-screen">
    <div>
        <section class="relative overflow-hidden pt-16 pb-20 lg:pt-24 xl:pt-32 xl:pb-28">
            <div class="relative max-w-screen-xl px-5 mx-auto">
                <div class="relative">
                    <h1 class="max-w-3xl mx-auto text-4xl font-bold text-center md:text-5xl lg:text-6xl">
                        {{ config('site.name') }}
                    </h1>
                    <p class="mt-6 max-w-xl mx-auto text-center text-gray-700 text-md leading-relaxed md:mt-8 md:text-lg lg:mt-10">
                        {{ config('site.description') }}
                    </p>
                    <div
                        class="mt-6 max-w-sm mx-auto flex flex-col justify-center items-center gap-4 sm:flex-row md:mt-8 lg:mt-10">
                        <a class="group relative inline-flex border border-sky-600 hover:no-underline focus:outline-none w-full sm:w-auto"
                            href="{{ route('docs', 'introduction') }}">
                            <span
                                class="w-full md:w-auto transition duration-200 bg-sky-500 hover:bg-sky-600 font-semibold tracking-wider text-white dark:text-white hover:text-white py-3 px-6">
                                Get Started
                            </span>
                        </a>
                        <a class="group relative inline-flex border border-sky-600 hover:no-underline focus:outline-none w-full sm:w-auto"
                            href="https://github.com/zaimea/zaimea" target="_blank">
                            <span
                                class="w-full md:w-auto transition duration-200 bg-gray-300 hover:bg-gray-400 text-gray-600 dark:text-gray-600 hover:text-white dark:hover:text-white font-semibold tracking-wider py-3 px-6 mt-4 md:mt-0">
                                View on Github
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="w-full flex-auto leading-normal font-sans">
        <section class="container mx-auto py-6 px-6 xl:py-12">
            <hr class="block my-8 border lg:hidden">

            <div
                class="flex flex-col -mx-2 items-center justify-center md:items-start lg:flex-row lg:-mx-4 lg:justify-between">
                <div class="flex flex-col w-full mb-8 mx-3 px-2 lg:w-1/3">
                    <img src="{{ asset('assets/img/icon-code.svg') }}" class="h-12 w-12" alt="code icon">

                    <h3 id="intro-laravel"
                        class="uppercase text-lg text-blue-900 dark:text-blue-300 font-bold mt-6 mb-3">
                        No write code and enjoy
                    </h3>

                    <p class="text-gray-600 dark:text-gray-300">
                        It does not require writing code, all that needs to be done is the configuration that is documented.
                    </p>
                </div>

                <div class="flex flex-col w-full mb-8 mx-3 px-2 lg:w-1/3">
                    <img src="{{ asset('assets/img/icon-price.svg') }}" class="h-12 w-12" alt="price icon">

                    <h3 id="intro-markdown"
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
                    <img src="{{ asset('assets/img/icon-idea.svg') }}" class="h-12 w-12" alt="idea icon">

                    <h3 id="intro-mix" class="uppercase text-lg text-blue-900 dark:text-blue-300 font-bold mt-6 mb-3">
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
</x-app-layout>
