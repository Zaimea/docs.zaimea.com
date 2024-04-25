<div class="flex flex-col px-3 mt-4 space-y-6 lg:mt-0 lg:px-3 lg:items-center lg:space-y-0 lg:space-x-6 lg:flex-row">
    <a class="font-medium text-gray-600 dark:text-gray-200 hover:underline w-full"
       href="{{ route('docs', '') }}">
        Docs
    </a>
    <div class="flex flex-row space-x-4 mt-20 lg:mt-0 items-center">
        <a title="@{{ config('site.twitter') }}" href="https://twitter.com/{{ config('site.twitter') }}"
           target="_blank" rel="noopener">
            <x-i.twitter class="h-6 w-6"></x-i.twitter>
        </a>
        <a href="{{ config('site.github') }}" target="_blank" rel="noopener"
           class="text-gray-800 dark:text-gray-200 hover:text-black dark:hover:text-gray-400">
            <x-i.github class="h-6 w-6"></x-i.github>
        </a>
    </div>
</div>
