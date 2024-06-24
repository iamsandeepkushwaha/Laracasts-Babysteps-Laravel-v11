<x-layout>
    <x-slot:heading>
        Home Page
    </x-slot:heading>
    {{-- <h1>{{$greeting}} from the Home Page. My name is {{$name}}.</h1> --}}

    @foreach ($jobs as $job)
        <li>{{ $job['title'] }}: Pays {{$job['salary'] }} per year.</li>
    @endforeach
</x-layout>