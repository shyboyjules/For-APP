<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="/css/admindashboard.css">
</head>
<body>
    <div class="food-listing">
    <h2 class="text-2xl font-bold text-center mb-6">ADD MORE ITEMS</h2>
        <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
      

        @csrf


        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Food Name" required>
        </div>

        <div>
            <label for="image">Image</label>
            <input type="file" id="image" name="image" required>
        </div>

        <div>
            <label for="qty">Qty</label>
            <input type="number" id="qty" name="qty" placeholder="Quantity" required>
        </div>

        <div>
            <label for="price">Price</label>
            <input type="number" id="price" name="price" placeholder="Price" required>
        </div>

        <div>
            <label for="description">Description</label>
            <textarea id="description" name="description" placeholder="Description" required></textarea>
        </div>

        <div>
            <button type="submit">Save a new product</button>
        </div>
    </form>
</div>
          
        </form>
    </div>

    <table>
        <tr>
            <th style="padding: 30">Name</th>
            <th style="padding: 30">Quantity</th>
            <th style="padding: 30">Price</th>
            <th style="padding: 30">Description</th>
            <th style="padding: 30">Image</th>
        </tr>
        @foreach($data as $item)
        <tr alaign="center">
        <td>{{ $item->name }}</td>
        <td>{{ $item->qty }}</td>
        <td>{{ $item->price }}</td>
        <td>{{ $item->description }}</td>
        <td><img src="/images/{{$item->image}}"></td>
        

        </tr>


        @endforeach
    </table>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
            <h2 class="text-2xl font-bold text-center mb-6">MENU</h2>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-6">
    @foreach($data as $item)
        
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div style="background-image: url('/images/{{$item->image}}'); height: 200px; background-size: cover; background-position: center;" class='card'>
            </div>
            <div class="p-6 text-gray-900">
                <h3 class="font-semibold text-lg">{{ $item->name }}</h3>
                <p class="text-sm text-gray-500">{{ $item->qty }}</p>
                <p class="mt-2">{{ $item->price }}</p>
                <p class="mt-2">{{ $item->description }}</p>
            </div>
        </div>
    @endforeach
</div>


</body>
</html>


</x-app-layout>


