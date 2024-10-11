<x-layout>
    <x-slot:heading>
        {{ $job['title'] }}
    </x-slot:heading>

    <p>{{ $job['title'] }} pays {{ $job['salary'] }}</p>
</x-layout>
