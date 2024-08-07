<html>
    <head>
        <title>SMC Ecommerce</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" ></script>

        <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
    rel="stylesheet"
/>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        @if(session('success'))
        <div id="message" class="fixed top-2 right-0 z-10">
            <div class="bg-blue-600 text-white text-xl px-10 py-4">
                <p>{{session('success')}}</p>
            </div>
        </div>
        <script>
            $('#message').delay(1500).slideUp(500);
        </script>
        @endif
        <nav class="flex sticky top-0 justify-between shadow px-20 py-4 items-center bg-orange-500">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLIRFzDEmTqyj-31niTj1o48d7O2Zt22oKIg&usqp=CAU" class="w-24" alt="">


            <form action="{{route('search')}}" method="GET" class="flex-1 w-full px-10 mt-5 flex items-center gap-4">  
                <input type="text" class="w-full block rounded-lg" placeholder="Search any Product" name="search" value="{{request('search')}}" minlength="2"required>
                <button class="bg-blue-600 text-white px-3 py-2 rounded-lg">Search</button>
            </form>
            
            <div class="text-white font-bold">
                <a class="mx-2" href="/">Home</a>
                @php
                $categories = \App\Models\Category::orderBy('priority')->get();
                @endphp
                @foreach($categories as $category)
                <a class="mx-2" href="{{route('categoryproduct',$category->id)}}"> {{$category->categoryname}}</a>
                @endforeach

                @auth
                <a class="mx-2" href="">Welcome, {{auth()->user()->name}}</a>
                <a href="{{route('cart')}}" class="mx-2"><i class="ri-shopping-cart-fill"></i></a>
                <form action="/logout" method="POST" class="inline">
                    @csrf
                <button type="submit">&rArr;</button>
                <button type="submit"><i class="ri-logout-circle-r-line"></i></button>
                </form>
                @else
                <a class="mx-2" href="/login">Login</a>
                @endauth

            </div>
        </nav>
        @yield('content')
        <footer>
            <div class="bg-blue-800 text-white text-center py-2 ">
                <p>Copyright &copy; 2023. All rights reserved. SMC Ecommerce</p>
            </div>
        </footer>
    </body>
</html>