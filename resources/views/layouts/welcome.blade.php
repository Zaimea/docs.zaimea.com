<x-app-layout layout="base"
    class="bg-gray-200 dark:bg-gray-200 font-sans leading-normal text-gray-900 dark:text-gray-900">

    <x-slot name="head">
        {{ $head ?? '' }}
    </x-slot>

    {{ $slot }}

    <x-slot name="footer">
        {{ $footer ?? '' }}
    </x-slot>

</x-app-layout>
