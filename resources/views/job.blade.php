<x-layout>
    <x-slot:heading>Jobs</x-slot:heading>
    <h2 class="font-bold text-4xl">{{ $job['title'] }}</h2>
    <p>This job pays up to <span class="font-bold italic">{{ $job['salary'] }}</span> per year.</p>
</x-layout>
