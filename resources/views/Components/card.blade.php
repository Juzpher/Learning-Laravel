@props(['href'])

<a href="{{ $href }}"
    class="block border rounded-md shadow p-4 hover:shadow-lg transition duration-200 ease-in-out m-1.5 bg-white">
    {{ $slot }}
</a>
