<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('DESSERTS') }}
            </h2>
            <a href="{{ route('prod.index') }}" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Orders</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Hello! Welcome to your sweet tooth!") }}
                </div>
            </div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
            <h2 class="text-2xl font-bold text-center mb-6">MENU</h2>
        </div>
    </div>

    
   
</div>
            
    </div>
</x-app-layout>
