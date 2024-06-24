<x-layout>
    <x-slot:heading>
        Home Page
    </x-slot:heading>

        <li>
            <a href="/jobs" class="text-blue-500 hover:underline">
                <strong>{{ $job['title'] }}: Pays {{$job['salary'] }} per year.</strong>
            </a>
        </li>
</x-layout>