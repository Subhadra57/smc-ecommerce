@extends('layouts.master')
@section('content')
    <div class="flex justify-center items-center mt-10">

        <form action="{{route('register')}}" method="post" class="w-1/3 border p-10 rounded shadow">
            <h1 class="text-4xl font-bold text-center my-5">Register</h1>

            @csrf
            <div class="mb-5">
                <input type="text" name="name" placeholder="Enter Full Name" class="w-full p-2 border rounded">
                @error('name')
                <p class="text-red-500">{{$message}}</p>
                @enderror
            </div>


            <div class="mb-5">
                <input type="email" name="email" placeholder="Enter Email" class="w-full p-2 border rounded">
                @error('email')
                <p class="text-red-500">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-5">
                <input type="password" name="password" placeholder="Enter Password" class="w-full p-2 border rounded">
                @error('password')
                <p class="text-red-500">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-5">
                <input type="password" name="password_confirmation" placeholder="Conform Password" class="w-full p-2 border rounded">
                @error('password_confirmation')
                <p class="text-red-500">{{$message}}</p>
                @enderror
            </div>


            
            <div class="mb-5">
                <button type="submit" class="w-full bg-orange-500 text-white p-2 rounded">Register</button>
            </div>
            <div class="text-center">
                <p>Already have an account? <a href="{{route('register')}}" class="text-blue-600">Login</a></p>

            </div>
        </form>
    

    </div>
@endsection