<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot>

    <div class="space-y-2">
        @foreach ($jobs as $job)
            <div class="block border p-4 rounded-lg">
                <div>{{$job->employer->name}}</div>
                <a href="/jobs/{{$job['id']}}"><strong>{{ $job['title'] }}:</strong> pays {{ $job['salary']}}</a>
            </div>
        @endforeach
    </div>

    <div class="my-4">
        {{$jobs->links()}}
    </div>
</x-layout>
