<header class="flex items-center shadow-white/25 dark:shadow-white/10 h-16 py-4 relative z-[100] backdrop-blur-md" role="banner">
    <div class="max-w-5xl px-6 lg:px-1 xl:px-2 container flex items-center mx-auto space-x-3" >
        <div class="flex items-center lg:hidden">
            <button aria-label="Toggle Documentation Navigation" @click.prevent="toggle()"
                class="text-gray-500 dark:text-gray-200 focus:text-gray-600 dark:focus:text-gray-400 focus:outline-none">
                <x-i.menu class="md:size-8 size-6 text-gray-500 dark:text-white opacity-50"></x-i.menu>
            </button>
        </div>

        <div class="flex items-center flex-none">
            <a href="/" class="flex items-center justify-center">
                <img class="h-8 dark:hidden flex" loading="lazy" src="{{ asset('assets/img/logo-dark.svg') }}" alt="{{ config('app.name') }} logo" />
                <img class="h-8 hidden dark:flex" loading="lazy" src="{{ asset('assets/img/logo.svg') }}" alt="{{ config('app.name') }} logo" />
            </a>
        </div>

        <div class="flex items-center justify-end w-full pr-5">
            <div id="docsearch"></div>
        </div>

        <div class="flex items-center justify-end space-x-1 text-right">
            <button x-data="ToggleDark()" x-cloak x-init="created()" title="Dark Mode" @click.prevent="toggle()"
                    class="ml-6 dark:text-white text-gray-700 focus:outline-none" :class="{'text-white': mode == 'dark'}">
                <svg fill="none" stroke="currentColor" class="fill-current h-8 lg:h-6"
                    stroke-linecap="round" stroke-linejoin="round" :class="{'hidden': mode == 'dark'}" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                </svg>
                <svg fill="none" stroke="currentColor" class="fill-current h-8 lg:h-6"
                    stroke-linecap="round" stroke-linejoin="round" :class="{'hidden': mode == 'light'}" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path
                        d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z">
                    </path>
                </svg>
            </button>

            <div class="hidden lg:flex">
                @include('_partials.nav-items')
            </div>
        </div>
    </div>
</header>
