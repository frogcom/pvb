<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-base-content leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-base-100 overflow-hidden shadow-sm sm:rounded-lg">
    <div class="overflow-x-auto">
        <table class="table">
            <!-- head -->
            <thead>
            <tr>
                <th>naam</th>
                <th>keuzemodule</th>
                <th>categorie</th>
            </tr>
            </thead>
            <tbody>
            @foreach($registrations as $registration)
            <tr>

                <th>{{$registration->student_name}}</th>
                <td>{{$registration->module->title}}</td>
                <td>{{$registration->module->category->name}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </div>
    </div>
    </div>
</x-app-layout>
