<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('FOOD MENU') }}
            </h2>
            
        </div>
    </x-slot>

    <div style="position: relative;">
    <h2 class="text-2xl font-bold text-center mb-6">ADD MORE ITEMS</h2>

    <form action="{{url('/uploadfood')}}" method="post" enctypt="multipart/form-data">
        @csrf

        <div >
            <label>Title</label>
            <input type="text" id="title" name="title" placeholder="Write a Title" required>
        </div>

        <div>
            <label>Price</label>
            <input type="num" id="price" name="price" placeholder="Price" required>
        </div>

        <div>
            <label>Image</label>
            <input type="file" id="image" name="image" required>
        </div>

        <div>
            <label>Description</label>
            <input type="text" id="description" name="description" placeholder="Write a Description" required>
        </div>

        <input style="color: black" type="submit" value="Save a new product" />

    </form>

    </div>
    
</x-app-layout>