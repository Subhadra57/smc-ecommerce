<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" ></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="font-sans antialiased">
        <div class="flex">
            <div class="w-56 bg-gray-200 shadow-lg h-screen">
                <img src="https://img.freepik.com/free-photo/woman-black-trousers-purple-blouse-laughs-leaning-stand-with-elegant-clothes-pink-background_197531-17614.jpg" class="w-8/12 mx-auto mt-5" alt="">
                <div class="mt-5">
                    <a href="{{route('dashboard')}}" class="block px-2 py-3 text-lg border-l-4 border-blue-600 m-2 hover:bg-gray-300">Dashboard</a>
                    <a href="{{route('category.index')}}" class="block px-2 py-3 text-lg border-l-4 border-blue-600 m-2 hover:bg-gray-300">Category</a>
                    <a href="{{route('product.index')}}" class="block px-2 py-3 text-lg border-l-4 border-blue-600 m-2 hover:bg-gray-300">Products</a>
                    <a href="{{route('user.index')}}" class="block px-2 py-3 text-lg border-l-4 border-blue-600 m-2 hover:bg-gray-300">Users</a>
                    <a href="{{route('order.index')}}" class="block px-2 py-3 text-lg border-l-4 border-blue-600 m-2 hover:bg-gray-300">Orders</a>
                    <form action="{{route('logout')}}" method="POST" class="w-full overflow-hidden">
                        @csrf
                        <button type="submit" class="block w-full text-left p-2 py-3 text-lg border-l-4 border-blue-600 mx-2 hover:bg-gray-300">Logout</button>
                    </form>
                </div>
            </div>
            <div class="p-4 flex-1">
                @yield('content')
            </div>
        </div>
    </body>
</html>