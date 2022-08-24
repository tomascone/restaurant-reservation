@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block px-4 py-2 mt-2 text-gray-500 bg-gray-100 text-sm font-semibold bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-100 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white hover:text-white focus:text-white hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline'
            : 'block px-4 py-2 mt-2 text-sm font-semibold text-white bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-white hover:text-white focus:text-white hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
