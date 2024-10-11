<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot>

    <ul>
        @foreach ($jobs as $job)
            <li class="hover:underline">
                <a href="/jobs/{{$job['id']}}"><strong>{{ $job['title'] }}:</strong> pays {{ $job['salary']}}</a>
            </li>
        @endforeach
    </ul>
</x-layout>
