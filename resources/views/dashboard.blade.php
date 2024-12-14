<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <h2 class="text-lg font-medium text-gray-900">{{ __('Welcome,') }} {{ auth()->user()->name }}</h2>
                    <img src="{{ asset('storage/' . auth()->user()->profile_image) }}" class="mt-4 w-16 h-16 rounded-full" alt="Profile Image">
                    <p class="mt-2 text-gray-600">{{ auth()->user()->email }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
