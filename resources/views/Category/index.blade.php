@extends('layouts.app')
@section('content')
@if(session('success'))
<div id="message" class="fixed top-2 right-0">
    <div class="bg-green-600 text-white text-x1 px-10 py-4">
        <p>{{session('success')}}</p>
    </div>
</div>
<script>
    $('#message').delay(1000).slideUp(300);
</script>
@endif

<h2 class="font-bold text-3xl text-blue-800">Categories</h2>
<hr class="h-1 bg-red-600">

<div class="text-right my-5">
    <a href="{{route('category.create')}}" class="bg-blue-600 text-white px-4 py-2 rounded transition duration-300 ease-in-out hover:bg-purple-700">Add Category</a>

</div>
<table class="mt-5 w-full text-center">
    <tr>
        <th class="border border-gray-100 p-2 bg-gray-300">Order</th>
        <th class="border border-gray-100 p-2 bg-gray-300">category Name</th>
        <th class="border border-gray-100 p-2 bg-gray-300">Action</th>
    </tr>
    @foreach($categories as $category)
    <tr>
        <td class="border p-2 border-gray-300">{{$category->priority}}</td>
        <td class="border p-2 border-gray-300">{{$category->categoryname}}</td>
        <td class="border p-2 border-gray-300">
        <a href="{{route('category.edit',$category->id)}}" class="bg-blue-600 text-white px-2 py-1 rounded mx-1 transition duration-300 ease-in-out hover:bg-green-700">Edit</a>
        <a href="{{route('category.delete',$category->id)}}" onclick="return confirm('Are you sure to delete?');" class="bg-red-600 text-white px-2 py-1 rounded mx-1 transition duration-300 ease-in-out hover:bg-purple-700">Delete</a>
       
        </td>
    </tr>
    @endforeach
</table>
@endsection