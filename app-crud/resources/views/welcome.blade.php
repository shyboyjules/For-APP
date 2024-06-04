<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>To Do App</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100">
<div class="container mx-auto p-4">
    <header class="flex items-center justify-between py-6">
        <div class="text-2xl font-bold">To Do App</div>
        @if (Route::has('login'))
            <nav class="flex space-x-4">
                @auth
                    <a href="{{ url('/dashboard') }}" class="px-3 py-2 bg-red-500 text-white rounded-md hover:bg-red-600 transition">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="px-3 py-2 bg-gray-200 text-gray-900 rounded-md hover:bg-gray-300 transition">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="px-3 py-2 bg-gray-200 text-gray-900 rounded-md hover:bg-gray-300 transition">Register</a>
                    @endif
                @endauth
            </nav>
        @endif
    </header>
    <hr class="border-t-2 border-gray-300 my-4">
</div>


        <main class="mt-10 grid gap-6 lg:grid-cols-2">
    <a href="https://youtu.be/dQw4w9WgXcQ?si=fte9VO6Zd5dYawKI" class="block p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition">
        <div class="flex items-center space-x-4">
            <i class="fa-solid fa-list fa-2x text-gray-700"></i> 
            <div>
                <h2 class="text-xl font-semibold">Unlimited list</h2>
                <p class="mt-2 text-gray-600">Can give Unlimited list for all your tasks.</p>
            </div>
        </div>
    </a>

    <a href="" class="block p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition">
    <div class="flex items-center space-x-4">
        <i class="fa-solid fa-download text-4xl text-gray-700"></i> 
        <div>
            <h2 class="text-xl font-semibold">FREE DOWNLOAD!!!</h2>
            <p class="mt-2 text-gray-600">Unlike other To Do Apps This one is completely FREE!!.</p>
        </div>
    </div>
</a>


            <a href="" class="block p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition">
                <div class="flex items-center space-x-4">
                <i class="fa-solid fa-bars text-4xl text-gray-700"></i>
                    <div>
                        <h2 class="text-xl font-semibold">Easy UI</h2>
                        <p class="mt-2 text-gray-600">A UI that is easy to navigate.</p>
                    </div>
                </div>
            </a>

            <div class="block p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition">
                <div class="flex items-center space-x-4">
                <i class="fa-solid fa-users text-4xl text-gray-700"></i>
                    <div>
                        <h2 class="text-xl font-semibold">Community</h2>
                        <p class="mt-2 text-gray-600">Join the vibrant community and connect with other developers.</p>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>