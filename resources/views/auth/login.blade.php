@extends('layouts.master')
@section('content')
    <div class="flex justify-center items-center mt-10">

        <form action="{{route('login')}}" method="post" class="w-1/3 border p-10 rounded shadow">
            <h1 class="text-4xl font-bold text-center my-5">Login</h1>

            @csrf
            <div class="mb-5">
                <input type="email" name="email" placeholder="Enter Email" class="w-full p-2 border rounded">
            </div>
            <div class="mb-5">
                <input type="password" name="password" placeholder="Enter Password" class="w-full p-2 border rounded">
            </div>
            <div class="my-3 text-right text-blue-600">
                <a href="{{route('password.request')}}">Forgot Password?</a>
            </div>
            <div class="mb-5">
                <button type="submit" class="w-full bg-orange-500 text-white p-2 rounded">Login</button>
            </div>
        </form>
    </div>
@endsection