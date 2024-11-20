<x-layout>
    <x-slot:heading>Jobs</x-slot:heading>

    <div class="grid grid-cols-1 md:grid-cols-3 ">
        @foreach ($jobs as $job)
            <x-card :href="'/jobs/' . $job['id']">
                <h1 class="font-bold text-lg text-gray-800">{{ $job['title'] }}</h1>
                <p class="text-sm text-gray-600 italic">Salary: {{ $job['salary'] }}</p>
            </x-card>
        @endforeach
    </div>
</x-layout>
