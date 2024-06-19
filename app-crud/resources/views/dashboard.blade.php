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
                    {{ __("Hello! Welcome to your cheat day!") }}
                    
                </div>
            </div>

            <!-- Container for Products -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-6">
                <!-- Product 1 -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <img src="{{ asset('images/product1.png') }}" alt="Product 1" class="w-full h-48 object-cover">
                    <div class="p-6 text-gray-900">
                        <h3 class="font-semibold text-lg">Product 1</h3>
                        <p class="text-sm text-gray-500">$10.00</p>
                        <p class="mt-2">Description of Product 1</p>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <img src="{{ asset('images/product2.png') }}" alt="Product 2" class="w-full h-48 object-cover">
                    <div class="p-6 text-gray-900">
                        <h3 class="font-semibold text-lg">Product 2</h3>
                        <p class="text-sm text-gray-500">$15.00</p>
                        <p class="mt-2">Description of Product 2</p>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <img src="{{ asset('images/product3.png') }}" alt="Product 3" class="w-full h-48 object-cover">
                    <div class="p-6 text-gray-900">
                        <h3 class="font-semibold text-lg">Product 3</h3>
                        <p class="text-sm text-gray-500">$20.00</p>
                        <p class="mt-2">Description of Product 3</p>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <img src="{{ asset('images/product4.png') }}" alt="Product 4" class="w-full h-48 object-cover">
                    <div class="p-6 text-gray-900">
                        <h3 class="font-semibold text-lg">Product 4</h3>
                        <p class="text-sm text-gray-500">$25.00</p>
                        <p class="mt-2">Description of Product 4</p>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <img src="{{ asset('images/product4.png') }}" alt="Product 4" class="w-full h-48 object-cover">
                    <div class="p-6 text-gray-900">
                        <h3 class="font-semibold text-lg">Product 4</h3>
                        <p class="text-sm text-gray-500">$25.00</p>
                        <p class="mt-2">Description of Product 4</p>
                    </div>
                </div>
                
                <!-- Product 4 -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <img src="{{ asset('images/product4.png') }}" alt="Product 4" class="w-full h-48 object-cover">
                    <div class="p-6 text-gray-900">
                        <h3 class="font-semibold text-lg">Product 4</h3>
                        <p class="text-sm text-gray-500">$25.00</p>
                        <p class="mt-2">Description of Product 4</p>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <img src="{{ asset('images/product4.png') }}" alt="Product 4" class="w-full h-48 object-cover">
                    <div class="p-6 text-gray-900">
                        <h3 class="font-semibold text-lg">Product 4</h3>
                        <p class="text-sm text-gray-500">$25.00</p>
                        <p class="mt-2">Description of Product 4</p>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <img src="{{ asset('images/product4.png') }}" alt="Product 4" class="w-full h-48 object-cover">
                    <div class="p-6 text-gray-900">
                        <h3 class="font-semibold text-lg">Product 4</h3>
                        <p class="text-sm text-gray-500">$25.00</p>
                        <p class="mt-2">Description of Product 4</p>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <img src="{{ asset('images/product4.png') }}" alt="Product 4" class="w-full h-48 object-cover">
                    <div class="p-6 text-gray-900">
                        <h3 class="font-semibold text-lg">Product 4</h3>
                        <p class="text-sm text-gray-500">$25.00</p>
                        <p class="mt-2">Description of Product 4</p>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <img src="{{ asset('images/product4.png') }}" alt="Product 4" class="w-full h-48 object-cover">
                    <div class="p-6 text-gray-900">
                        <h3 class="font-semibold text-lg">Product 4</h3>
                        <p class="text-sm text-gray-500">$25.00</p>
                        <p class="mt-2">Description of Product 4</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>